<?php

/**
* 
*/
class Category extends Eloquent
{
	// a category has many topics
	public function topics()
	{
		return $this->hasMany('Topic');
	}
}

?>