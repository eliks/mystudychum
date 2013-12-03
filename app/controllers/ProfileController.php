<?php 

class ProfileController extends BaseController {
	public $restful = true;
	
	public function get_index(){
		// $temp_view =  View::make('Profile.index');
		// $temp_view->user = DB::table('users')->where('email', Session::get('email'))->first();
		// Session::put('email', $user->email);
		$user = User::where("email",Session::get("email"))->get()->first();
		$data = array("user"=>$user);

		return View::make('Profile.index',$data);
		// return $temp_view;
	} 
	
	public function edit(){
		// $temp_view =  View::make('Profile.edit');
		// $temp_view->user = DB::table('users')->where('email', Session::get('email'))->first();
		// return $temp_view;
		// Session::put('email', $user->email);
		$user = User::where("email",Session::get("email"))->get()->first();
		
		$countries = DB::table('countries')->get(array('id','name'));

		foreach ($countries as $country_id => $country_name)
		{
		    // Create the options array
		    $countries_array[$country_name -> id] = $country_name->name ;
		}
		
		$data = array("user"=>$user,"countries"=>$countries_array);
		// return $countries_array;
		return View::make('Profile.edit',$data);
	} 
	
	public function submit(){
		
		$user = User::where("email",Session::get("email"))->get()->first();
		
		$rules = array(
		   'profile_image'=>'image',
		   'first_name'=>'required|alpha|min:2',
		   'last_name'=>'required|alpha|min:2',
		   'email'=>'required|email|unique:users,email,'.$user['id'],
		   'DOB'=>'required|date',
		   'country_id' => 'required|integer',
		   'education' => 'required|in:Other,High School,High School Graduate,College,College Graduate,',
		   'gender' => 'required|in:Male,Female',
		   'tags' => 'required'
		   );
		   
		// $user->first_name = Input::get('first_name');
		// $user->last_name = Input::get('last_name');
		// $user->email = Input::get('email');
		// $user->DOB = Input::get('DOB');
		// $user->country_id = Input::get('country_id');
		// $user->education = Input::get('education');
		// $user->gender = Input::get('gender');

		$validator = Validator::make(Input::all(), $rules);
		
		if ($validator->passes()) {
			// validation has passed, save user in DB
		    // $user->save();date("Y-m-d H:i:s")
		    
			//generate random string as profile image name
			$length = 20; //random string length
			$charset='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
		    $fileName = '';
		    $count = strlen($charset);
			while ($fileName == '' || DB::table('users')->where('image_url', $fileName)->first()) {
			    while ($length--) {
			        $fileName .= $charset[mt_rand(0, $count-1)];
			    }
				$length = 20;
			}
		    
			// $profile_pic =  $str . '.' . Input::file('profile_image')->getClientOriginalName();
			// $input = Input::get('profile_image');
       	    // // $extension = File::extension($input['name']);
       	    // $extension = Input::file('profile_image')->getClientOriginalExtension();
			$destinationPath = 'user_images/profile_pics';
	        // $filename = $str . "." . $extension;
	 		// $profile_pic = $str. "." . $extension;
// 			
	        // // $upload_success = Input::upload('profile_image', $directory, $filename);
			// Input::file('profile_image')->move(public_path().'/user_images/profile_pics', $str);
			
			// return $fileName;
		    // Input::upload('profile_image', 'user_images/profile_pics', $profile_pic);Input::file('profile_image')->getSize()
			if (Input::hasFile('profile_image')){
				
				$file = Input::file('profile_image');
				// return $filename = $file->getClientOriginalExtension();
				Input::file('profile_image')->move($destinationPath, $fileName.".".$file->getClientOriginalExtension());
				
				// Input::file('profile_image')->move($destinationPath, $filename);
				
				$user_data = array(
					    'first_name'  => Input::get('first_name'),
					    'last_name' => Input::get('last_name'),
					    'email' => Input::get('email'),
					    'DOB' => Input::get('DOB'),
					    'country_id' => Input::get('country'),
					    'education' => Input::get('education'),
					    'image_url' => $fileName.".".$file->getClientOriginalExtension(),
					    'gender' => Input::get('gender'),
					    'interests' => Input::get('tags')
						);
			} else {
			
					$user_data = array(
							    'first_name'  => Input::get('first_name'),
							    'last_name' => Input::get('last_name'),
							    'email' => Input::get('email'),
							    'DOB' => Input::get('DOB'),
							    'country_id' => Input::get('country'),
							    'education' => Input::get('education'),
							    'image_url' => "",
							    'gender' => Input::get('gender'),
							    'interests' => Input::get('tags')
								);
						
						}
			
			DB::table('users')
            ->where('email', Session::get('email'))
            ->update($user_data);
			
			$user = User::where("email",Session::get("email"))->get()->first();
			$data = array("user"=>$user);
			
			return View::make('Profile.index', $data);
		} else {
		      // validation has failed, display error messages 
		      return Redirect::to('profile/edit')
	      		->with('message', 'The following errors occurred')
	      		->withErrors($validator)->withInput();  
		   }
	} 
}
