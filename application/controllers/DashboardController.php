<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardController extends CI_Controller {

	function __construct() {
        parent::__construct();
		$this->simple_login->cek_login();
    }

	public function index()
	{
		$this->load->view('dashboard/dashboard');
	}
}
