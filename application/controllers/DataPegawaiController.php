<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataPegawaiController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('PegawaiModel');
		$this->load->library('form_validation');
		$this->load->library('session');
	}
	public function dataPegawai()
	{
        $data['pegawai']=$this->PegawaiModel->getAllPegawai()->result_array();
		$this->load->view('data_pegawai/list',$data);
	}

	public function tambahPegawai()
	{
		// $this->load->view('data_pegawai/tambah');

		$data['pegawai']=$this->PegawaiModel->getAllPegawai()->result_array();
		
		$this->form_validation->set_rules('nama_pegawai', 'Nama Pegawai', 'required|trim',
                array(
                    'required' => '<div class="alert alert-danger"><strong>Error!</strong> Nama Pegawai Tidak Boleh Kosong.</div>'
                    ));

		if ($this->form_validation->run() == false) {
				$this->load->view('data_pegawai/tambah',$data);
        }  else {

            //GAMBAR
            $config['upload_path'] = './assets/img/pegawai/';
            $config['allowed_types'] = 'jpg|png|jpeg';
            $config['max_size']  = '8048';
            $config['remove_space'] = TRUE;

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('foto')) {
                $foto  = $this->upload->data('file_name');
            } else {
                $foto  = '';
            }

            $this->PegawaiModel->tambahdata($data,$foto);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Pegawai <strong> </strong> berhasil ditambahkan :)
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          </div>');
            redirect('data-pegawai');
        }
	}

    public function ubahPegawai($id)
    {
        $data['pegawai']=$this->PegawaiModel->getPegawaiById($id);

        $this->form_validation->set_rules('nama_pegawai', 'Nama Pegawai', 'required|trim',
                array(
                    'required' => '<div class="alert alert-danger"><strong>Error!</strong> Nama Pegawai Tidak Boleh Kosong.</div>'
                    ));
        
        if ($this->form_validation->run() == false) {
				$this->load->view('data_pegawai/ubah',$data);
        }  else {

        //GAMBAR
        $config['upload_path'] = './assets/img/pegawai/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size']  = '8048';
        $config['remove_space'] = TRUE;

        $this->load->library('upload', $config);

        $this->db->where('id_pegawai', $id);
        $g =  $this->db->get('tbl_pegawai')->row_array();

        if ($this->upload->do_upload('foto')) {
            $foto  = $this->upload->data('file_name');
            unlink("./assets/img/pegawai/" . $g['foto']);
        } else {
            $foto  = $g['foto'];
        }

        $this->PegawaiModel->ubahdata($data,$foto);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Pegawai berhasil diubah
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      </div>');
    redirect('data-pegawai');
        }    
    }

    public function hapus()
	{
		$id_pegawai = $this->input->get('id_pegawai');
        $this->db->delete('tbl_pegawai', array('id_pegawai' => $id_pegawai));
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Pegawai berhasil dihapus
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          </div>');
        redirect('data-pegawai');
		
	}
}
