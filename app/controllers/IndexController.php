<?php 

class IndexController extends BaseController {
	public $restful = true;
	
	public function get_index(){
		if(Auth::check()){
			$tem_view = View::make('Chums.index');
			$temp_view->user_email = Session::get('email');
			$tem_view->message = 'You are signed in';
            return $tem_view;
		} else {
			$tem_view = View::make('Index.index');
			$tem_view->message = '';
			return $tem_view;
		}
	} 
	
	public function get_logout() {
	   Auth::logout();
	   $tem_view = Redirect::to('signin');
	   $tem_view->message = 'Your are successfully logged out!';
	   return $tem_view;
	}
}
