<?php 

class SignupController extends BaseController {
	public $restful = true;
	
	// public function __construct() {
	   // $this->beforeFilter('csrf', array('on'=>'post'));
	// }
	
	public function get_index(){
		return View::make('Signup.index');
	} 
	
	public function submit(){
		$user = new User();
		
		$user->first_name = Input::get('first_name');
		$user->last_name = Input::get('last_name');
		$user->email = Input::get('email');
		$user->password = Input::get('password');
		$confirm = Input::get('password_confirmation');

		$validator = Validator::make(Input::all(), User::$rules);
 
	   if ($validator->passes()) {
		      // validation has passed, save user in DB
		      $user->save();
			  
			  $user_data = array('email'=>Input::get('email'), 'password'=>Input::get('password'));
		
				if (Auth::attempt($user_data)) {
				   return Redirect::to('/')->with('message', 'You are now logged in!');
				} else {
				   return Redirect::to('signup')
				      ->with('message', 'Your username/password combination was incorrect')
				      ->withInput();
				}
		   } else {
		      // validation has failed, display error messages 
		      return Redirect::to('signup')
	      		->with('message', 'The following errors occurred')
	      		->withErrors($validator)->withInput();  
		   }
	 	
		
		
		// echo $user->email, '<br/>', $user->password_hash;
	} 
}
