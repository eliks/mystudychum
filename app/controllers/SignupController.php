<?php 

class SignupController extends BaseController {
	public $restful = true;
	
	public function get_index(){
		return View::make('Signup.index');
	} 
	
	public function submit(){
		$user = new User();
		
		$user->first_name = Input::get('fname');
		$user->last_name = Input::get('lname');
		$email = Input::get('email');
		$pass = Input::get('pass');
		$confirm = Input::get('confirm');
		// echo Hash::make($fname);
		
		$user->save();
	} 
}
