<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataMasterController extends CI_Controller {

	public function tipePegawai()
	{
		$this->load->view('data_master/tipe_pegawai');
	}
}
