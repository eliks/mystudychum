<?php 

class ActivityController extends BaseController {
	public $restful = true;
	
	public function get_index(){
		$temp_view =  View::make('Activity.index');
		$temp_view->user = DB::table('users')->where('email', Session::get('email'))->first();
		return $temp_view;
	} 
}
