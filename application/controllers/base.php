<?php

class Base_Controller extends Controller {

	public $layout = 'layouts.main';

	public static $language = 'fr';

	public function __construct() {

		parent::__construct();

		//Language
		self::$language = Config::get('application.language');
		$this->layout->with(array(
			'language' => self::$language
		));

		//Assets
		$headContainer = Asset::container('head');
		$headContainer->add('styles','css/main.css');
		$headContainer->add('modernizr','js/components/modernizr/modernizr.js');

		$footerContainer = Asset::container('footer');
		if(!Request::env()) {
			$footerContainer->add('main','js/main-build.js');
		} else {
			$footerContainer->add('main','js/components/requirejs/require.js',array(),array('data-main'=>'/js/main'));
		}

	}

	/**
	 * Catch-all method for requests that can't be matched.
	 *
	 * @param  string    $method
	 * @param  array     $parameters
	 * @return Response
	 */
	public function __call($method, $parameters)
	{
		return Response::error('404');
	}

}