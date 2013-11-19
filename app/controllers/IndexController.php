<?php 

class IndexController extends BaseController {
	public $restful = true;
	
	public function get_index(){
		return View::make('Index.index');
	} 
}
