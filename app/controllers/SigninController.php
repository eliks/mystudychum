<?php 

class SigninController extends BaseController {
	public $restful = true;
	
	public static $rules = array(
	   'email'=>'required|email',
	   'password'=>'required|alpha_num|between:6,20',
	   );
	
	public function get_index(){
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
				   return Redirect::to('/')->with('message', 'You are now logged in!');
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
