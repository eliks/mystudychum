<?php 

class ForumController extends BaseController {
	public $restful = true;
	
	public function get_index(){
		$temp_view =  View::make('Forum.index');
		$temp_view->user_email = Session::get('email');
		return $temp_view;
	} 
}
