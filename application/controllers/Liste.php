<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Liste extends CI_Controller {

	public function index()
	{

        //Appel à la fonction readAll du modele article_model
        $data = array('lesArbres' =>$this->liste_model->readAll());

		$this->layout->view('liste_view',$data);
	}
}
