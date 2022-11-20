<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardController extends CI_Controller {

	function __construct() {
        parent::__construct();
		$this->simple_login->cek_login();

		$this->load->model('UnitModel');
		$this->load->model('PangkatModel');
		$this->load->model('PendidikanModel');
		$this->load->model('TipeModel');
		$this->load->library('form_validation');
		$this->load->library('session');
    }

	public function index()
	{
		$data['unit']=$this->UnitModel->getAllUnit()->result_array();
		$data['pangkat']=$this->PangkatModel->getAllPangkat()->result_array();
		$data['pendidikan']=$this->PendidikanModel->getAllPendidikan()->result_array();
		$data['tipe']=$this->TipeModel->getAllTipe()->result_array();
		$this->load->view('dashboard/dashboard',$data);
	}
}
