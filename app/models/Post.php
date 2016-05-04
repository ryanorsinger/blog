<?php

class Post extends Eloquent
{
    protected $table = 'posts';

    public static $rules = array(
        'title'      => 'required|max:255',
        'body'       => 'required|max:10000',
    );

    // relationship of a post to user
    public function user()
    {
        return $this->belongsTo('User');
    }
}
