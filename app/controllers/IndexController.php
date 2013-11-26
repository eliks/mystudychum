<?php 

class IndexController extends BaseController {
	public $restful = true;
	
	public function get_index(){
		if(Auth::check()){
			return $user = User::where("email",Session::get("email"))->first()->get();
			$data = array("user"=>$user);
			
			return View::make('Chums.index',$data);
			//$tem_view->
			// $temp_view->user_email = Session::get('email');
			// $tem_view->message = 'You are signed in';
            //return $tem_view;
		} else {
			Auth::logout();
			$tem_view = View::make('Index.index');
			$tem_view->user = DB::table('users')->where('email', Session::get('email'))->first();
			return $tem_view;
		}
	} 
	
	public function get_logout() {
	   Auth::logout();
	   $tem_view = Redirect::to('/');
	   $tem_view->message = 'Your are successfully logged out!';
	   return $tem_view;
	}
}
