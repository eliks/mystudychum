<?php 

class ActivityController extends BaseController {
	public $restful = true;
	
	public function get_index(){
		return View::make('Activity.index');
	} 
}
