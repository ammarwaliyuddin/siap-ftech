<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataPendidikanController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('PendidikanModel');
		$this->load->library('form_validation');
		$this->load->library('session');
	}
	public function dataPendidikan()
	{
        $data['pendidikan']=$this->PendidikanModel->getAllPendidikan()->result_array();
		$this->load->view('data_master/pendidikan/list',$data);
	}

	// public function tambahPendidikan()
	// {

	// 	$data['pendidikan']=$this->PendidikanModel->getAllPendidikan()->result_array();
		
	// 	$this->form_validation->set_rules('pendidikan', 'Pendidikan', 'required|trim',
  //               array(
  //                   'required' => '<div class="alert alert-danger"><strong>Error!</strong> Pendidikan Tidak Boleh Kosong.</div>'
  //                   ));

	// 	if ($this->form_validation->run() == false) {
	// 			$this->load->view('data_master/pendidikan/tambah',$data);
  //       }  else {
  //           $this->PendidikanModel->tambahdata($data);
  //           $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
  //           Data Pendidikan <strong> </strong> berhasil ditambahkan :)
  //           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  //           <span aria-hidden="true">&times;</span>
  //         </button>
  //         </div>');
  //           redirect('data-pendidikan');
  //       }
		
	// }

  public function tambahPendidikan()
	{
    $strata = $this->input->post('strata');
    $jurusan = $this->input->post('jurusan');
    $cekPendidikan =  $this->PendidikanModel->cekPendidikan($strata,$jurusan);
    if(empty($cekPendidikan)){
      $res = $this->PendidikanModel->tambahdata($strata,$jurusan);
      echo $res;
    }else{
      // status 3 jika data sudah ada di db
      echo 3;
      
    }	
	}

    // public function ubahPendidikan($id)
    // {
    //     $data['pendidikan']=$this->PendidikanModel->getPendidikanById($id);

    //     $this->form_validation->set_rules('pendidikan', 'Pendidikan', 'required|trim',
    //             array(
    //                 'required' => '<div class="alert alert-danger"><strong>Error!</strong> Pendidikan Tidak Boleh Kosong.</div>'
    //                 ));
        
    //     if ($this->form_validation->run() == false) {
		// 		$this->load->view('data_master/pendidikan/ubah',$data);
    //     }  else {
    //     $this->PendidikanModel->ubahdata($data);
    //     $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
    //     Data Pendidikan berhasil diubah
    //     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    //     <span aria-hidden="true">&times;</span>
    //   </button>
    //   </div>');
    // redirect('data-pendidikan');
    //     }
    // }

    public function ubahPendidikan()
    {
      $idPendidikan = $this->input->post('idPendidikan');
      $strata = $this->input->post('strata');
      $jurusan = $this->input->post('jurusan');

      $cekPendidikan =  $this->PendidikanModel->cekPendidikan($strata,$jurusan);


      if(empty($cekPendidikan)){
        $res = $this->PendidikanModel->ubahdata($idPendidikan,$strata,$jurusan);
        echo $res;
      }else{
        // status 3 jika data sudah ada di db
        echo 3;
        
      }
    }

  //   public function hapus()
	// {
	// 	$id_pendidikan = $this->input->get('id_pendidikan');
  //       $this->db->delete('tbl_pendidikan', array('id_pendidikan' => $id_pendidikan));
  //       $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
  //           Data Pendidikan berhasil dihapus
  //           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  //           <span aria-hidden="true">&times;</span>
  //         </button>
  //         </div>');
  //       redirect('data-pendidikan');
		
	// }

  public function hapus()
	{
    $idPendidikan = $this->input->post('idPendidikan');

    $res = $this->db->delete('tbl_pendidikan', array('id_pendidikan' => $idPendidikan));
    echo $res;
		
	}

}
