<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Liste extends CI_Controller {

	public function index()
	{

        //Appel à la fonction readAll du modele article_model
        $data = array('lesArbres' =>$this->liste_model->readAll());

		$this->layout->view('liste_view',$data);
	}

	public function detail($id)
	{
        if(!isset($id)){
            index();
        }
        //Appel à la fonction readAll du modele article_model
		$data = array('unArbre' => $this->liste_model->read($id));
		print_r($data);
		if(empty($data)){
			$this->layout->view('detail_view', $id);
		}
		$this->layout->view('detail_view', $data);
	}
}
