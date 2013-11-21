<?php 

class IndexController extends BaseController {
	public $restful = true;
	
	public function get_index(){
		if(Auth::check())
            return View::make('Chums.index');
		else return View::make('Index.index');
	} 
	
	public function get_logout() {
	   Auth::logout();
	   return Redirect::to('signin')->with('message', 'Your are now logged out!');
	}
}
