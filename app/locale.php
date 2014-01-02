<?php

/*
|--------------------------------------------------------------------------
| Language
|--------------------------------------------------------------------------
|
| Detect or set the browser language.
|
*/
Route::filter('locale',  function($route, $request, $lang = 'auto')
{
    if($lang != 'auto' && in_array($lang , Config::get('app.available_locale')))
    {
        App::setLocale($lang);
    }
    else
    {
        $browser_lang = !empty($_SERVER['HTTP_ACCEPT_LANGUAGE']) ? strtok(strip_tags($_SERVER['HTTP_ACCEPT_LANGUAGE']), ',') : '';
        $browser_lang = substr($browser_lang, 0,2);
        $userLang = (in_array($browser_lang, Config::get('app.available_locale'))) ? $browser_lang : Config::get('app.locale');
        App::setLocale($userLang);
    }
});

/*
|--------------------------------------------------------------------------
| Locale change event
|--------------------------------------------------------------------------
|
| Share the language to the views
|
*/
Event::listen('locale.changed', function($locale)
{
    View::share('language', Config::get('app.locale'));
    View::share('otherLanguage', Config::get('app.locale') == 'fr' ? 'en':'fr');
});

/*
|--------------------------------------------------------------------------
| Set locale
|--------------------------------------------------------------------------
|
| Ensure locale changed event is fired one time
|
*/
App::setLocale(Config::get('app.locale'));