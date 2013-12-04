<?php 

class SettingsController extends BaseController {
	public $restful = true;
	
	public function get_index(){
		// $temp_view =  View::make('Settings.index');
		// $temp_view->user = DB::table('users')->where('email', Session::get('email'))->first();
		// return $temp_view;
		$user = User::where("email",Session::get("email"))->get()->first();
		Session::put('email', $user->email);
		
		$data = array("user"=>$user);

		return View::make('Settings.index',$data);
	} 
}
