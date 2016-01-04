<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Video extends CI_Controller {
	public function index(){

	}
	
	public function view($category,$videoid){
		
		$message = $this->Video_model->view($videoid);
		echo json_encode($message);

	}
}