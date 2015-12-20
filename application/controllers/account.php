<?php

class Account extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Account_model');
	}
	public function index(){
		echo "index account";
	}

	public function login(){
		$this->load->view('login');
	}

	public function login_post(){
		$ref = @$this->input->get('ref');
		$data['username'] = $this->input->post('username');
		$data['password'] = sha1($this->input->post('password'));
		$validasi = $this->Account_model->validate($data);
		if ($validasi) {
			$message['ref'] = $ref;
			if (empty($ref)) {
				$message['ref'] = site_url('home');
			}
			$message['status'] = 'true';
			$message['message'] = "Login berhasil";
		}else{
			$message['ref'] = site_url('login');
			$message['status'] = 'false';
			$message['message'] = "Login gagal, coba lagi";
		}
		echo json_encode($message);
	}

	public function register(){
		$this->load->view('register');
	}

	public function register_post(){
		$data['fullname'] = $this->input->post('fullname');
		$data['email'] = $this->input->post('email');
		$data['username'] = $this->input->post('username');
		$data['password'] = sha1($this->input->post('password'));
		
		$captcha = true;
		if ($captcha) {
			$message['captcha'] = true;

			$cekusername = $this->checkaccount('username',$data['username']);
			$cekemail = $this->checkaccount('email',$data['email']);

			if ($cekemail && $cekusername) {
				$registered = $this->Account_model->register($data);
				if ($registered) {
					$message['message'] = 'Register Success';
					$message['status'] = true;
				}else{
					$message['message'] = 'Register Failure';
					$message['status'] = false;
				}
			}else{
				$message['status'] = false;
				$message['message']='username or password not available';
			}
		}else{
			$message['captcha'] = false;
			$message['status'] = false;
			$message['message'] = 'wrong captcha';
		}
		echo json_encode($message);


	}

	public function checkaccount($type,$name,$ajax=false){
		$avail = $this->Account_model->checkaccount($type,$name);
		if ($avail) {
			$message['status'] = true;
		}else{
			$message['status'] = false;
			if ($type=='username') {
				$message['message'] = 'Username Not Available';
			}else{
				$message['message'] = 'Email already registered';
			}
		}

		if ($ajax) {
			echo json_encode($message);
		}else{
			return $message['status'];
		}
	}

	public function logout(){
		session_start();
		session_destroy();
	}

}