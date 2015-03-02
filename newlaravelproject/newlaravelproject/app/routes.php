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

/*Route::get("/", function()
{
	$firstname = 'Jesse';
	return View::make('hello')->with('firstname', $firstname);
	//return 'hello from BCIT!!';
});*/

Route::get('/', "JesseController@greet");

Route::get('/contact', "JesseController@contactus");

Route::get('books', function(){
	$books = DB::table('books')->get();
	return $books;
});