<?php 

class ProfileController extends BaseController {
	public $restful = true;
	
	public function get_index(){
		return View::make('Profile.index');
	} 
}