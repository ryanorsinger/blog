<?php

class UsersController extends \BaseController {

	public function showLogin()
	{
		return View::make('users.login');
	}

	public function doLogin()
	{
		if(Auth::attempt([
			'email'    => Input::get('email'),
			'password' => Input::get('password')])) {

			return Redirect::intended('/');

		} else {
			Session::flash('errorMessage', 'Username or password information is incorrect');
			return Redirect::back()->withInput();
		}
	}

	public function logout()
	{
		Auth::logout();
		return Redirect::action('PostsController@index');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
