<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataJabatanController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('JabatanModel');
		$this->load->library('form_validation');
		$this->load->library('session');
	}
	public function dataJabatan()
	{
        $data['jabatan']=$this->JabatanModel->getAllJabatan()->result_array();
		$this->load->view('data_master/jabatan/list',$data);
	}

	// public function tambahJabatan()
	// {

	// 	$data['jabatan']=$this->JabatanModel->getAllJabatan()->result_array();
		
	// 	$this->form_validation->set_rules('jabatan', 'Jabatan', 'required|trim',
  //               array(
  //                   'required' => '<div class="alert alert-danger"><strong>Error!</strong> Jabatan Tidak Boleh Kosong.</div>'
  //                   ));

	// 	if ($this->form_validation->run() == false) {
	// 			$this->load->view('data_master/jabatan/tambah',$data);
  //       }  else {
  //           $this->JabatanModel->tambahdata($data);
  //           $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
  //           Data Jabatan <strong> </strong> berhasil ditambahkan :)
  //           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  //           <span aria-hidden="true">&times;</span>
  //         </button>
  //         </div>');
  //           redirect('data-jabatan');
  //       }
		
	// }

  public function tambahJabatan()
	{
    $jabatan = $this->input->post('jabatan');
    $cekJabatan =  $this->JabatanModel->cekJabatan($jabatan);
    if(empty($cekJabatan)){
      $res = $this->JabatanModel->tambahdata($jabatan);
      echo $res;
    }else{
      // status 3 jika data sudah ada di db
      echo 3;
      
    }	
	}

    // public function ubahJabatan($id)
    // {
    //     $data['jabatan']=$this->JabatanModel->getJabatanById($id);

    //     $this->form_validation->set_rules('jabatan', 'Jabatan', 'required|trim',
    //             array(
    //                 'required' => '<div class="alert alert-danger"><strong>Error!</strong> Jabatan Tidak Boleh Kosong.</div>'
    //                 ));
        
    //     if ($this->form_validation->run() == false) {
		// 		$this->load->view('data_master/jabatan/ubah',$data);
    //     }  else {
    //     $this->JabatanModel->ubahdata($data);
    //     $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
    //     Data Jabatan berhasil diubah
    //     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    //     <span aria-hidden="true">&times;</span>
    //   </button>
    //   </div>');
    // redirect('data-jabatan');
    //     }
    // }

    public function ubahJabatan()
    {
      $idJabatan = $this->input->post('idJabatan');
      $jabatan = $this->input->post('jabatan');

      $cekJabatan =  $this->JabatanModel->cekJabatan($jabatan);

      if(empty($cekJabatan)){
        $res = $this->JabatanModel->ubahdata($idJabatan,$jabatan);
        echo $res;
      }else{
        // status 3 jika data sudah ada di db
        echo 3;
        
      }
    }

  //   public function hapus()
	// {
	// 	$id_pangkat = $this->input->get('id_pangkat');
  //       $this->db->delete('tbl_pangkat', array('id_pangkat' => $id_pangkat));
  //       $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
  //           Data Pangkat berhasil dihapus
  //           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  //           <span aria-hidden="true">&times;</span>
  //         </button>
  //         </div>');
  //       redirect('data-pangkat');
		
	// }

  public function hapus()
	{
    $idJabatan = $this->input->post('idJabatan');

    $res = $this->db->delete('tbl_jabatan', array('id_jabatan' => $idJabatan));
    echo $res;
		
	}
}
