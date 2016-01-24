<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Browse extends CI_Controller {
	public function index($grade='sma'){
		$data = $this->load->Video_model->category($grade);

		$this->load->view('browse');
	}
	
	public function video($q,$page,$order,$limit=9){
		
		$message = $this->Video_model->browse($q,$page,$order,$limit);

		echo json_encode($message);


	}

	public function profil(){

	}

	public function pages(){

	}

}