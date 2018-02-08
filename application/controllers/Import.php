<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Import extends CI_Controller {

	public function index()
	{

		$data = array('lesArbres' =>$this->liste_model->readAllLimit10());
		//var_dump($data);
		echo json_encode($data);
        
	}
}
