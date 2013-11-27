<?php 

class ForumController extends BaseController {
	public $restful = true;
	
	public function get_index(){
		// $temp_view =  View::make('Forum.index');
		// $temp_view->user = DB::table('users')->where('email', Session::get('email'))->first();
		$user = User::where("email",Session::get("email"))->get()->first();
		$data = array("user"=>$user);
		return View::make('Forum.index', $data);
	} 
}
