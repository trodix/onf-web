<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class api extends CI_Controller {

	public function __construct($config = 'rest')
	{
		parent::__construct();
		header('Access-Control-Allow-Origin: *');
		header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
		header("Access-Control-Allow-Headers: Content-Type, Content-Length, Accept-Encoding");
		header('Content-Type: application/json');
	}

	public function index()
	{

		//redirect('/', 'location');
		header('Content-Type: text/html');
		echo("Serveur ok");
	}

	public function register()
	{
		$userData = json_decode($this->input->raw_input_stream, true);
		if ($userData !== null) {

			$res = $this->user_model->register($userData);
			if ($res !== false) {
				$data = [
					'data' => $res,
				];
			} else {
				$this->output
						 ->set_header('HTTP/1.1 401 Unauthorized')
						 ->set_output(json_encode(['data' => "Impossible de créer l'utilisateur."]));
			}
		
			$this->output
						 ->set_header('HTTP/1.1 200 OK')
						 ->set_output(json_encode($data));
		} else {
			$this->output
						 ->set_header('HTTP/1.1 401 Unauthorized')
						 ->set_output(json_encode(['data' => "Erreur, aucune données envoyées au serveur."]));
		}		
	}

	public function login(){

		//$userData = json_decode($this->input->raw_input_stream, true);
		
		$userData = json_decode($this->input->raw_input_stream, true);
		//var_dump($userData);
		//return "userData: [" . json_encode($userData) . "]";
		// if ($userData) {
			$res = $this->user_model->login($userData);
			//print_r($res);
			// return $this->output->set_content_type('application/json')
			// 			->set_header('HTTP/1.1 200 OK')
			// 			->set_output(json_encode($data));
			if ($res !== false){
				//echo "!== false";
				$data = [
					'success' => true,
					'data' => $res
				];
				$this->output->set_content_type('application/json')
						->set_header('HTTP/1.1 200 OK')
						->set_output(json_encode($data));
			}else {
				//echo "false";

				$this->output->set_content_type('application/json')
						 ->set_header('HTTP/1.1 200 Unauthorized')
						 ->set_output(json_encode(['success' => false, 'data' => "Identifiants incorrects."]));
			}
			
		// } else {
		// 	$this->output->set_content_type('application/json')
		// 				 ->set_header('HTTP/1.1 402 Unauthorized')
		// 				 ->set_output(json_encode(['data' => "Erreur, aucune données envoyées au serveur."]));
		// }
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
		$lesInterventionsArbre = $this->liste_model->readLesInterventions($idArbre);
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

	public function getLesTypesInterventionStat($idArbre)
	{
		$lesTypesIntervention = $this->liste_model->readLesInterventionsArbre($idArbre);
		//print_r($lesInterventionsArbre);
		header('Content-Type: application/json');
		//echo json_encode(array('lesTypesIntervention' => $lesTypesIntervention));
		echo json_encode(
			
				$lesTypesIntervention
			
		);
	}
}
