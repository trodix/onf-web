<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class api extends CI_Controller {

	public function index()
	{

        	redirect('/', 'location');
	}

	public function getGenres()
	{
        		
        $lesGenres = $this->liste_model->readLesGenres();
		
		header('Content-Type: application/json');
		echo json_encode($lesGenres);
	}

	public function getObservation($idArbre, $idIntervention)
	{
		

		// if(!isset($idArbre, $idIntervention)){
		// 	redirect('/', 'location');
		// }
        		
    	$uneObservation = $this->liste_model->readUneObservation($idArbre, $idIntervention);
		
			header('Content-Type: application/json');
      echo json_encode(
				[
					$uneObservation
				]);
	}
}
