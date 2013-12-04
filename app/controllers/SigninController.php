<?php 

class SigninController extends BaseController {
	public $restful = true;
	
	public static $rules = array(
	   'email'=>'required|email',
	   'password'=>'required|alpha_num|between:6,20',
	   );
	
	public function get_index(){
		Auth::logout();
		return View::make('Signin.index');
	} 
	
	public function submit(){
		$user = new User();
		
		$user->email = Input::get('email');
		$user->password = Hash::make(Input::get('password'));

		$validator = Validator::make(Input::all(), $this::$rules);
 
	   if ($validator->passes()) {
			  
			  $user_data = array('email'=>Input::get('email'), 'password'=>Input::get('password'));
		
				if (Auth::attempt($user_data)) {
					// Session::put('email', $user->email);
					// $temp_view->user_email = Session::get('email');
					// $temp_view = Redirect::to('/')->with('message', 'You are now logged in!');
				    // return $temp_view;
				    
				    Session::put('email', $user->email);
					// $user = User::where("email",Session::get("email"))->get()->first();
					// $data = array("user"=>$user);
					$users = User::all();
					$user = User::where("email",Session::get("email"))->get()->first();
					$data = array("user"=>$user,"users"=>$users);
					return View::make('Chums.index',$data);
					// return View::make('Profile.edit',$data);
				   
				} else {
				   
				    $tem_view = Redirect::to('signin')->withInput();
					$tem_view->message = 'Your username/password combination was incorrect';
					return $tem_view;
				}
		   } else {
		      // validation has failed, display error messages 
		      return Redirect::to('signin')
	      		->withErrors($validator)->withInput();  
		   }
	 	
		
		
		// echo $user->email, '<br/>', $user->password_hash;
	} 
}
