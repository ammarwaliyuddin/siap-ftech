<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataPelatihanController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('PelatihanModel');
		$this->load->model('PegawaiModel');
		$this->load->library('form_validation');
		$this->load->library('session');
	}
	public function dataPelatihan()
	{
        $data['pelatihan']=$this->PelatihanModel->getAllPelatihan()->result_array();

        $data['pegawai']=$this->PegawaiModel->getAllPegawai()->result();

		$this->load->view('data_pelatihan/list',$data);
	}

	public function tambahPelatihan()
	{

		$data['pelatihan']=$this->PelatihanModel->getAllPelatihan()->result_array();

        $data['pegawai']=$this->PegawaiModel->getAllPegawai()->result();
		
		$this->form_validation->set_rules('id_pegawai', 'Nama Pegawai', 'required|trim',
                array(
                    'required' => '<div class="alert alert-danger"><strong>Error!</strong> Nama Pegawai Tidak Boleh Kosong.</div>'
                    ));

		if ($this->form_validation->run() == false) {
				$this->load->view('data_pelatihan/tambah',$data);
        }  else {

            //GAMBAR
            $config['upload_path'] = './assets/file/pelatihan/';
            $config['allowed_types'] = 'pdf';
            $config['max_size']  = '8048';
            $config['remove_space'] = TRUE;

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('file')) {
                $file  = $this->upload->data('file_name');
            } else {
                $file  = '';
            }

            $this->PelatihanModel->tambahdata($data,$file);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Pelatihan <strong> </strong> berhasil ditambahkan :)
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          </div>');
            redirect('data-pelatihan');
        }
	}

    public function ubahPelatihan($id)
    {

        $data['pegawai']=$this->PegawaiModel->getAllPegawai()->result();
        
        $data['pelatihan']=$this->PelatihanModel->getPelatihanById($id)->row_array();

        $this->form_validation->set_rules('id_pegawai', 'Nama Pegawai', 'required|trim',
                array(
                    'required' => '<div class="alert alert-danger"><strong>Error!</strong> Nama Pegawai Tidak Boleh Kosong.</div>'
                    ));
        
        if ($this->form_validation->run() == false) {
				$this->load->view('data_pelatihan/ubah',$data);
        }  else {

        //GAMBAR
        $config['upload_path'] = './assets/file/pelatihan/';
        $config['allowed_types'] = 'pdf';
        $config['max_size']  = '8048';
        $config['remove_space'] = TRUE;

        $this->load->library('upload', $config);

        $this->db->where('id_pelatihan', $id);
        $g =  $this->db->get('tbl_pelatihan')->row_array();

        if ($this->upload->do_upload('file')) {
            $file  = $this->upload->data('file_name');
            unlink("./assets/file/pelatihan/" . $g['file']);
        } else {
            $file  = $g['file'];
        }

        $this->PelatihanModel->ubahdata($data,$file);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Pelatihan berhasil diubah
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      </div>');
    redirect('data-pelatihan');
        }    
    }

    public function hapus()
	{
		$id_pelatihan = $this->input->get('id_pelatihan');
        $this->db->where('id_pelatihan', $id_pelatihan);
        $g =  $this->db->get('tbl_pelatihan')->row_array();
        
        unlink("./assets/file/pelatihan" . $g['file']);
        $this->db->delete('tbl_pelatihan', array('id_pelatihan' => $id_pelatihan));
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Pelatihan berhasil dihapus
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          </div>');
        redirect('data-pelatihan');
		
	}
}
