<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Browse extends CI_Controller {
	public function index(){
		$this->load->view('index');
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