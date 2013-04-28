<?php

class Home_Controller extends Base_Controller {

	public function action_index() {
		

		return $this->layout->nest('content','home.index');


	}

}