<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Liste extends CI_Controller {

	public function index()
	{

		echo("Serveur ok");
        //Appel à la fonction readAll du modele article_model
        // $data = array('lesArbres' =>$this->liste_model->readAll());

		// $this->layout->view('liste_view', $data);
	}

	public function detail($id)
	{
        if(!isset($id)){
            index();
		}
		
		$data = [
			'unArbre' => $this->liste_model->readArbre($id),
			'lesInterventions' => $this->liste_model->readLesInterventions($id)
		];
		
		$this->layout->view('detail_view', $data);
	}
}
