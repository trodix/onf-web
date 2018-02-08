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

	public function getArbres()
	{
        		
        $lesArbres = $this->liste_model->readAll();
		
		header('Content-Type: application/json');
		echo json_encode($lesArbres);
	}

	public function getEspeces()
	{
        		
        $lesEspeces = $this->liste_model->readLesEspeces();
		
		header('Content-Type: application/json');
		echo json_encode($lesEspeces);
	}

	public function getCommunes()
	{
        		
        $lesCommunes = $this->liste_model->readLesCommunes();
		
		header('Content-Type: application/json');
		echo json_encode($lesCommunes);
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
				]
			);
	}

	public function getIntervention($idArbre)
	{
		$lesInterventionsArbre = $this->liste_model->readLesInterventionsArbre($idArbre);
		//print_r($lesInterventionsArbre);
		header('Content-Type: application/json');
		echo json_encode($lesInterventionsArbre);
	}

	public function getLesInterventionsAll()
	{
		$lesInterventionsArbre = $this->liste_model->readLesInterventionsAll();
		//print_r($lesInterventionsArbre);
		header('Content-Type: application/json');
		echo json_encode(array('lesInterventions' => $lesInterventionsArbre));
	}

	public function getLesTypesIntervention()
	{
		$lesTypesIntervention = $this->liste_model->readLesTypesIntervention();
		//print_r($lesInterventionsArbre);
		header('Content-Type: application/json');
		echo json_encode(array('lesTypesIntervention' => $lesTypesIntervention));
	}
}
