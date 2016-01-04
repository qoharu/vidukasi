<?php
class Dashboard extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Dashboard_model');
	}

	public function index(){
		$this->load->view('dashboard/template');
	}


}