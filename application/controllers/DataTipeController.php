<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataTipeController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('TipeModel');
		$this->load->library('form_validation');
		$this->load->library('session');
	}
	public function dataTipe()
	{
        $data['tipe']=$this->TipeModel->getAllTipe()->result_array();
		$this->load->view('data_master/tipe/list',$data);
	}

	public function tambahTipe()
	{

		$data['tipe']=$this->TipeModel->getAllTipe()->result_array();
		
		$this->form_validation->set_rules('tipe', 'Tipe Pegawai', 'required|trim',
                array(
                    'required' => '<div class="alert alert-danger"><strong>Error!</strong> Tipe Pegawai Tidak Boleh Kosong.</div>'
                    ));

		if ($this->form_validation->run() == false) {
				$this->load->view('data_master/tipe/tambah',$data);
        }  else {
            $this->TipeModel->tambahdata($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Tipe Pegawai<strong> </strong> berhasil ditambahkan :)
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          </div>');
            redirect('data-tipe');
        }
		
	}

    public function ubahTipe($id)
    {
        $data['tipe']=$this->TipeModel->getTipeById($id);

        $this->form_validation->set_rules('tipe', 'Tipe Pegawai', 'required|trim',
                array(
                    'required' => '<div class="alert alert-danger"><strong>Error!</strong> Tipe Pegawai Tidak Boleh Kosong.</div>'
                    ));
        
        if ($this->form_validation->run() == false) {
				$this->load->view('data_master/tipe/ubah',$data);
        }  else {
        $this->TipeModel->ubahdata($data);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Tipe Pegawai berhasil diubah
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      </div>');
    redirect('data-tipe');
        }
    }

    public function hapus()
	{
		$id_tipe = $this->input->get('id_tipe');
        $this->db->delete('tbl_tipe', array('id_tipe' => $id_tipe));
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Tipe Pegawai berhasil dihapus
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          </div>');
        redirect('data-tipe');
		
	}
}
