<?php 

class Post extends BaseModel 
{
	
	protected $table = "posts";

	public static $rules = array(
    'title'      => 'required|max:100',
    'content'       => 'required|max:10000',
    'categories' => 'max:1000'
	);

	//Tells Posts model that each one will belong to a specific user. 
	public function user()
	{
	    return $this->belongsTo('User');
	}

}
