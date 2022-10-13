<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataUnitController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('UnitModel');
		$this->load->library('form_validation');
		$this->load->library('session');
	}
	public function dataUnit()
	{
        $data['unit']=$this->UnitModel->getAllUnit()->result_array();
		$this->load->view('data_master/unit_kerja/list',$data);
	}

	public function tambahUnit()
	{
    $unitKerja = $this->input->post('unitKerja');
    $cekUnit =  $this->UnitModel->cekUnit($unitKerja);
    if(empty($cekUnit)){
      $res = $this->UnitModel->tambahdata($unitKerja);
      echo $res;
    }else{
      // status 3 jika data sudah ada di db
      echo 3;
      
    }
    
		
	}

    public function ubahUnit()
    {
      $idUnit = $this->input->post('idUnit');
      $unitKerja = $this->input->post('unitKerja');

      $cekUnit =  $this->UnitModel->cekUnit($unitKerja);

      if(empty($cekUnit)){
        $res = $this->UnitModel->ubahdata($idUnit,$unitKerja);
        echo $res;
      }else{
        // status 3 jika data sudah ada di db
        echo 3;
        
      }
    }

    public function hapus()
	{
		$id_unit = $this->input->get('id_unit');
        $this->db->delete('tbl_unit', array('id_unit' => $id_unit));
        $this->session->set_flashdata('message', 'Data Unit Kerja Berhasil di Hapus');
        redirect('data-unit');
		
	}
}
