<?php defined('SYSPATH') or die('No direct script access.');
require_once 'base.php';

class Controller_Welcome extends Controller {

	public function action_index()
	{
	    $this->view = View::factory("index.php");
	    $this->response->body($this->view);
	}

} // End Welcome
