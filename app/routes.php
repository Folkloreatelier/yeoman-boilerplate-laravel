<?php

/*
 *
 * Normal routes
 *
 */
Route::get('/', array(
	'as' => 'home',
	'before' => 'locale:fr',
	'uses' => 'HomeController@index'
));


/*
 *
 * 404 errors
 *
 */
App::missing(function($exception)
{
	$view = View::make('layouts.main')
    			->nest('content','errors.404');
	$response = Response::make($view,404);
	return $response;
});
