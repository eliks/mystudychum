<?php 

class ChumsController extends BaseController {
	public $restful = true;
	
	public function get_index(){
		return View::make('Chums.index');
	} 
}
