<?php 

class ChumsController extends BaseController {
	//public $restful = true;
	
	// Show all recommended chums
	public function getIndex(){
		// Get all users
		$users = User::all();

		return View::make('Chums.index')->with('users', $users);
	} 
}
