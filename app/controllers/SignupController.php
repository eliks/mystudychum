<?php 

class SignupController extends BaseController {
	public $restful = true;
	
	public static $rules = array(
	   'first_name'=>'required|alpha|min:2',
	   'last_name'=>'required|alpha|min:2',
	   'email'=>'required|email|unique:users',
	   'password'=>'required|alpha_num|between:6,12|confirmed',
	   'confirm'=>'required|alpha_num|between:6,12'
	   );
	   
	public function __construct() {
	   $this->beforeFilter('csrf', array('on'=>'post'));
	}
	
	public function get_index(){
		return View::make('Signup.index');
	} 
	
	public function submit(){
		$user = new User();
		
		$user->first_name = Input::get('fname');
		$user->last_name = Input::get('lname');
		$user->email = Input::get('email');
		$user->password = Input::get('pass');
		$confirm = Input::get('confirm');

		$validator = Validator::make(Input::all(), User::$rules);
 
	   if ($validator->passes()) {
		      // validation has passed, save user in DB
		      $user->save();
			  
			  $user_data = array('email'=>Input::get('email'), 'password'=>Input::get('pass'));
		
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
