<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@showWelcome');

Route::get('/resume', 'HomeController@showResume');

Route::get('/my-portfolio', 'HomeController@showPortfolio');

Route::get('/sayhello/{name?}/{age?}', 'HomeController@sayHello');

Route::get('roll-dice/{guess}', 'HomeController@rollDice');

Route::get('/simon', 'HomeController@showSimon');

Route::get('/guess', 'HomeController@randomRoll');
