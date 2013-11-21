<?php 

class IndexController extends BaseController {
	public $restful = true;
	
	public function get_index(){
		if(Auth::check())
            echo 'you are signed in';
		else return View::make('Index.index');
	} 
}
