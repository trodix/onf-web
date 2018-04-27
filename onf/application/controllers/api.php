<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class api extends CI_Controller {

	public function __construct($config = 'rest')
	{
		parent::__construct();
		header('Access-Control-Allow-Origin: *');
		header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
        header("Access-Control-Allow-Headers: Content-Type, Content-Length, Accept-Encoding");
	}

	public function index()
	{

		//redirect('/', 'location');
		echo("Serveur ok");
	}

	public function register()
	{
		$userData = null;
		$userData = json_decode($this->input->raw_input_stream, true);
		//var_dump($userData);
		$res = [
			'data' => $this->user_model->register($userData),
		];

		//echo(json_encode($res));
		$this->output->set_content_type('application/json', 'Access-Control-Allow-Origin: *')
					 ->set_output(json_encode($res));
		
	}

	public function login(){

		$userData = null;
		$userData = json_decode($this->input->raw_input_stream, true);
		//var_dump($userData);
		$res = [
			'data'   => $this->user_model->login($userData)
		];

		header('Content-Type: application/json');
		echo(json_encode($res));
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

	public function getArbresById($idArbre)
	{
        		
        $unArbre = $this->liste_model->readArbre($idArbre);
		
		header('Content-Type: application/json');
		echo json_encode($unArbre);
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
		//echo json_encode(array('lesInterventions' => $lesInterventionsArbre));
		echo json_encode(
			[
				$lesInterventionsArbre
			]
		);
	}

	public function getLesTypesIntervention()
	{
		$lesTypesIntervention = $this->liste_model->readLesTypesIntervention();
		//print_r($lesInterventionsArbre);
		header('Content-Type: application/json');
		//echo json_encode(array('lesTypesIntervention' => $lesTypesIntervention));
		echo json_encode(
			[
				$lesTypesIntervention
			]
		);
	}
}
