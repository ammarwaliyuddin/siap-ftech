<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataPangkatController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('PangkatModel');
		$this->load->library('form_validation');
		$this->load->library('session');
	}
	public function dataPangkat()
	{
        $data['pangkat']=$this->PangkatModel->getAllPangkat()->result_array();
		$this->load->view('data_master/pangkat/list',$data);
	}

	// public function tambahPangkat()
	// {

	// 	$data['pangkat']=$this->PangkatModel->getAllPangkat()->result_array();
		
	// 	$this->form_validation->set_rules('pangkat', 'Pangkat', 'required|trim',
  //               array(
  //                   'required' => '<div class="alert alert-danger"><strong>Error!</strong> Pangkat Tidak Boleh Kosong.</div>'
  //                   ));

	// 	if ($this->form_validation->run() == false) {
	// 			$this->load->view('data_master/pangkat/tambah',$data);
  //       }  else {
  //           $this->PangkatModel->tambahdata($data);
  //           $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
  //           Data Pangkat Kerja<strong> </strong> berhasil ditambahkan :)
  //           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  //           <span aria-hidden="true">&times;</span>
  //         </button>
  //         </div>');
  //           redirect('data-pangkat');
  //       }
		
	// }

  public function tambahPangkat()
	{
    $pangkat = $this->input->post('pangkat');
    $cekPangkat =  $this->PangkatModel->cekPangkat($pangkat);
    if(empty($cekPangkat)){
      $res = $this->PangkatModel->tambahdata($pangkat);
      echo $res;
    }else{
      // status 3 jika data sudah ada di db
      echo 3;
      
    }	
	}

    // public function ubahPangkat($id)
    // {
    //     $data['pangkat']=$this->PangkatModel->getPangkatById($id);

    //     $this->form_validation->set_rules('pangkat', 'Pangkat', 'required|trim',
    //             array(
    //                 'required' => '<div class="alert alert-danger"><strong>Error!</strong> Pangkat Tidak Boleh Kosong.</div>'
    //                 ));
        
    //     if ($this->form_validation->run() == false) {
		// 		$this->load->view('data_master/pangkat/ubah',$data);
    //     }  else {
    //     $this->PangkatModel->ubahdata($data);
    //     $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
    //     Data Pangkat berhasil diubah
    //     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    //     <span aria-hidden="true">&times;</span>
    //   </button>
    //   </div>');
    // redirect('data-pangkat');
    //     }
    // }

    public function ubahPangkat()
    {
      $idPangkat = $this->input->post('idPangkat');
      $pangkat = $this->input->post('pangkat');

      $cekPangkat =  $this->PangkatModel->cekPangkat($pangkat);

      if(empty($cekPangkat)){
        $res = $this->PangkatModel->ubahdata($idPangkat,$pangkat);
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
    $idPangkat = $this->input->post('idPangkat');

    $res = $this->db->delete('tbl_pangkat', array('id_pangkat' => $idPangkat));
    echo $res;
		
	}
}
