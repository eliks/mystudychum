<?php 

class GroupsController extends BaseController {
	public $restful = true;
	
	public function get_index(){
		return View::make('Groups.index');
	} 
}
