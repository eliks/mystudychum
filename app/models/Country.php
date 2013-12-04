<?php
/**
* 
*/
class Country extends Eloquent
{

	// a country belongs to user
	public function user()
	{
		return $this->belongsTo('User');
	}

}

?>