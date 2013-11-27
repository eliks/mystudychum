<?php 

class MyChumsController extends BaseController {
	public $restful = true;
	
	public function get_index(){
		// $temp_view =  View::make('MyChums.index');
		// $temp_view->user = DB::table('users')->where('email', Session::get('email'))->first();
		
		$user = User::where("email",Session::get("email"))->get()->first();
		$data = array("user"=>$user);
			
		return View::make('MyChums.index', $data);
	} 
}
