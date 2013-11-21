<?php 

class SignupController extends BaseController {
	public $restful = true;
	
	public static $rules = array(
	   'first_name'=>'required|alpha|min:2',
	   'last_name'=>'required|alpha|min:2',
	   'email'=>'required|email|unique:users',
	   'password'=>'required|alpha_num|between:6,20|confirmed',
	   'password_confirmation'=>'required|alpha_num|between:6,20'
	   );
	
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
		$user->password = Hash::make(Input::get('password'));
		$confirm = Input::get('password_confirmation');

		$validator = Validator::make(Input::all(), $this::$rules);
 
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
