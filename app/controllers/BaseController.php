<?php

class BaseController extends Controller {

	protected $layout = 'layouts.main';
	protected $locale;

	public function __construct()
	{
		$this->locale = Config::get('app.locale');
	}

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

}
