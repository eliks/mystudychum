<?php 

class SigninController extends BaseController {
	public $restful = true;
	
	public function get_index(){
		return View::make('Signin.index');
	} 
}
