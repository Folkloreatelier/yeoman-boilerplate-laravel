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
	return View::make('layouts.main')
    			->nest('content','errors.404');
});
