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
		$user->email = Input::get('email');
		$user->password_hash = Input::get('pass');
		$confirm = Input::get('confirm');
		// echo Hash::make($fname);
		
		// $user->save();
		
		if (Auth::attempt(array('email'=>$user->email, 'password_hash'=>$user->password_hash))) {
		   return Redirect::to('/')->with('message', 'You are now logged in!');
		} else {
		   return Redirect::to('signup')
		      ->with('message', 'Your username/password combination was incorrect')
		      ->withInput();
		}
		
		// echo $user->email, '<br/>', $user->password_hash;
	} 
}
