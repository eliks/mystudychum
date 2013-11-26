<?php 

class GroupsController extends BaseController {
	public $restful = true;
	
	public function get_index(){
		$temp_view =  View::make('Groups.index');
		$temp_view->user = DB::table('users')->where('email', Session::get('email'))->first();
		return $temp_view;
	} 
}
