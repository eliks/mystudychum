<?php 

class MyChumsController extends BaseController {
	public $restful = true;
	
	public function get_index(){
		return View::make('MyChums.index');
	} 
}