<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Liste extends CI_Controller {

	public function index()
	{
		$this->layout->view('liste_view');
	}
}
