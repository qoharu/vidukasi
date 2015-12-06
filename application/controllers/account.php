<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {
	public function index(){
		echo "index account";
	}

	public function masuk(){
		echo "masuk";
	}

	public function masuk_post($ajax=false,$redirect=''){
		echo "masuk post";
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		if ($ajax) {
			$message['status'] = 'true';
			if (! empty($redirect)) {
				$message['redirect'] = $redirect;
			}
			echo json_encode($message);
		}else{
			$password = md5($password);
			if (! empty($redirect)) {
				redirect("$redirect");
			}else{
				redirect("home");
			}
		}
	}

	public function daftar(){
		echo "daftar";
	}

	public function daftar_post(){
		echo "daftar post";
	}

	public function logout(){
		echo "logout";
	}

}