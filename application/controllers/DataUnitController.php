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

		$data['unit']=$this->UnitModel->getAllUnit()->result_array();
		
		$this->form_validation->set_rules('unit_kerja', 'Unit Kerja', 'required|trim',
                array(
                    'required' => '<div class="alert alert-danger"><strong>Error!</strong> Unit Kerja Tidak Boleh Kosong.</div>'
                    ));

		if ($this->form_validation->run() == false) {
				$this->load->view('data_master/unit_kerja/tambah',$data);
        }  else {
            $this->UnitModel->tambahdata($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Unit Kerja<strong> </strong> berhasil ditambahkan :)
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          </div>');
            redirect('data-unit');
        }
		
	}

    public function ubahUnit($id)
    {
        $data['unit']=$this->UnitModel->getUnitById($id);

        $this->form_validation->set_rules('unit_kerja', 'Unit Kerja', 'required|trim',
                array(
                    'required' => '<div class="alert alert-danger"><strong>Error!</strong> Unit Kerja Tidak Boleh Kosong.</div>'
                    ));
        
        if ($this->form_validation->run() == false) {
				$this->load->view('data_master/unit_kerja/ubah',$data);
        }  else {
        $this->UnitModel->ubahdata($data);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Unit Kerja berhasil diubah
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      </div>');
    redirect('data-unit');
        }
    }

    public function hapus()
	{
		$id_unit = $this->input->get('id_unit');
        $this->db->delete('tbl_unit', array('id_unit' => $id_unit));
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Unit Kerja berhasil dihapus
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          </div>');
        redirect('data-unit');
		
	}
}
