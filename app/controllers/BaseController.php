<?php

class BaseController extends Controller {

	protected $layout = 'layouts.main';
	protected $language;

	public function __construct()
	{
		$this->language = Config::get('app.locale');
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