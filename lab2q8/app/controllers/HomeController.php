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
		return View::make('index');
	}

	public function showNumber($n)
	{
		$pirate = $n;
		$x = 0;
		for($e = 1; $e < $n; $e++)
		{
			$pow = pow(2,$e);
			if($pow > $n)
			{
				$x = ($pow - $n) + 2;
				return $x;
			}
		}
		return View::make('answer');
	}
}
