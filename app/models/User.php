<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	public static $createUserRules = [
		'first_name' => 'required',
		'last_name'  => 'required',
		'email'	     => 'required',
		'password'   => 'required'
	];


	public static $loginRules = [
		'email' => 'required',
		'password' => 'required'
	];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	// relationship from user to posts
	public function posts()
	{
		return $this->hasMany('Post');
	}

	public function setPasswordAttribute($value)
	{
	    $this->attributes['password'] = Hash::make($value);
	}


	public function mentors() {
	    return $this->belongsToMany('User', 'relationships', 'mentor_id', 'student_id');
	}

	public function students() {
	    return $this->belongsToMany('User', 'relationships', 'student_id', 'mentor_id');
	}
}
