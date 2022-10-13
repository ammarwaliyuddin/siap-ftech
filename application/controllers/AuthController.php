<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthController extends CI_Controller {

	function __construct() {
        parent::__construct();
    }
	
	public function index()
	{
		$this->simple_login->isLogin();
		
		if(!empty($this->input->post("email"))){
			$email = $this->input->post("email");
			$password = $this->input->post("password");
			$res = $this->simple_login->login($email,$password);
			echo $res;
		}else{

			$this->load->view('auth/login');
		}
	}
	public function logout()
	{
		$this->simple_login->logout();
	}
}
