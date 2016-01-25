<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Browse extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Video_model');
	}
	public function index($grade='sma'){
		$grade = strtoupper($grade);
		if ($grade != "SD" && $grade != "SMP" && $grade !="SMA") {
			redirect('browse/index/SD');
		}

		$data['category'] = $this->Video_model->category($grade);
		// echo json_encode($data);		

		$this->load->view('browse',$data);
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