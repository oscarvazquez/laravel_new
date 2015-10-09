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
		$name = "Oscar Vazquez";
		return View::make('hello')->with('name', $name);
	}

	public function showNew()
	{
		$gents = [
			'oscar vazquez', 'gustavo vazquez', 'marcos vazquez'
		];
		return View::make('new', compact('gents'));
	}

}
