<?php
/**
* 
*/
class Topic extends Eloquent
{
	// a topic belongs to category
	public function category()
	{
		return $this->belongsTo('Category');
	}

	// a topic belongs to user
	public function user()
	{
		return $this->belongsTo('User');
	}

	// a topic has many posts
	public function posts()
	{
		return $this->hasMany('Post');
	}
}

?>