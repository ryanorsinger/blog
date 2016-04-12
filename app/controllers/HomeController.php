<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function showResume()
	{
	    return View::make('resume');
	}

	public function showPortfolio()
	{
	    return View::make('portfolio');
	}

	public function sayHello($name = 'Codeup', $age=0)
	{
	    $data = [
	        'name' => $name,
	        'age'  => $age
	    ];

	    return View::make('my-first-view')->with($data);
	}

	public function randomRoll()
	{
		$guess = mt_rand(1, 6);

		return Redirect::action('HomeController@rollDice', $guess);
	}

	public function rollDice($guess)
	{
	    $random = mt_rand(1, 6);

	    $data = [
	        'guess' => $guess,
	        'random' => $random
	    ];

	    return View::make('roll-dice')->with($data);
	}

	public function showSimon()
	{
		return View::make('simon');
	}
}
