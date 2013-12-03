<?php
	/**
* 
*/
class Post extends Eloquent
{
	// a post belongs to topic
	public function topic()
	{
		return $this->belongsTo('Topic');
	}

	// a post belongs to user
	public function user()
	{
		return $this->belongsTo('User');
	}
}

?>