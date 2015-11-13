<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {

	public function action_index()
	{
		$this->response->body('Hello, world! I am a fucking awesome Kohana framework :)');
		$vehicles = ORM::factory("vehicle")->find_all();
	}

} // End Welcome
