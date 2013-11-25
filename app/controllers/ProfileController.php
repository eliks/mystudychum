<?php 

class ProfileController extends BaseController {
	public $restful = true;
	
	public function get_index(){
		$temp_view =  View::make('Profile.index');
		$temp_view->user_email = Session::get('email');
		return $temp_view;
	} 
	
	public function edit(){
		$temp_view =  View::make('Profile.edit');
		$temp_view->user_email = Session::get('email');
		return $temp_view;
	} 
	
	public function submit(){
		echo 'wow';
	} 
}
