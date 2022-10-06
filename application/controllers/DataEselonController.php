<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataEselonController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('EselonModel');
		$this->load->library('form_validation');
		$this->load->library('session');
	}
	public function dataEselon()
	{
        $data['eselon']=$this->EselonModel->getAllEselon()->result_array();
		$this->load->view('data_master/eselon/list',$data);
	}

	public function tambahEselon()
	{

		$data['eselon']=$this->EselonModel->getAllEselon()->result_array();
		
		$this->form_validation->set_rules('eselon', 'Eselon', 'required|trim',
                array(
                    'required' => '<div class="alert alert-danger"><strong>Error!</strong> Eselon Tidak Boleh Kosong.</div>'
                    ));

		if ($this->form_validation->run() == false) {
				$this->load->view('data_master/eselon/tambah',$data);
        }  else {
            $this->EselonModel->tambahdata($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Eselon <strong> </strong> berhasil ditambahkan :)
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          </div>');
            redirect('data-eselon');
        }
		
	}

    public function ubahEselon($id)
    {
        $data['eselon']=$this->EselonModel->getEselonById($id);

        $this->form_validation->set_rules('eselon', 'Eselon', 'required|trim',
                array(
                    'required' => '<div class="alert alert-danger"><strong>Error!</strong> Eselon Tidak Boleh Kosong.</div>'
                    ));
        
        if ($this->form_validation->run() == false) {
				$this->load->view('data_master/eselon/ubah',$data);
        }  else {
        $this->EselonModel->ubahdata($data);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Eselon berhasil diubah
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      </div>');
    redirect('data-eselon');
        }
    }

    public function hapus()
	{
		$id_eselon = $this->input->get('id_eselon');
        $this->db->delete('tbl_eselon', array('id_eselon' => $id_eselon));
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Eselon berhasil dihapus
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          </div>');
        redirect('data-eselon');
		
	}
}
