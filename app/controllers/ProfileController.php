<?php 

class ProfileController extends BaseController {
	public $restful = true;
	
	public function get_index(){
		$temp_view =  View::make('Profile.index');
		$temp_view->user_email = Session::get('email');
		return $temp_view;
	} 
	
	public function edit(){
		$temp_view =  View::make('Profile.edit');
		$temp_view->user_email = Session::get('email');
		return $temp_view;
	} 
	
	public function submit(){
		
		$user = DB::table('users')->where('email', Session::get('email'))->first();
		
		$rules = array(
		   'first_name'=>'required|alpha|min:2',
		   'last_name'=>'required|alpha|min:2',
		   'email'=>'required|email|unique:users,email,$user->id',
		   'DOB'=>'required|date',
		   'country_id' => 'required',
		   'education' => 'required|in:Other,High School,High School Graduate,College,College Graduate,',
		   'gender' => 'required|in:Male,Female',
		   'tags' => 'required'
		   );
		
		$user->first_name = Input::get('first_name');
		$user->last_name = Input::get('last_name');
		$user->email = Input::get('email');
		$user->DOB = Input::get('DOB');
		$user->country_id = Input::get('country_id');
		$user->education = Input::get('education');
		$user->gender = Input::get('gender');

		$validator = Validator::make(Input::all(), $rules);
		
		if ($validator->passes()) {
			// validation has passed, save user in DB
		    $user->save();
			
			return Redirect::to('profile');
		} else {
		      // validation has failed, display error messages 
		      return Redirect::to('profile/edit')
	      		->with('message', 'The following errors occurred')
	      		->withErrors($validator)->withInput();  
		   }
	} 
}
