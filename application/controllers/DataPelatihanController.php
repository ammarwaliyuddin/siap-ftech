<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

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

            //File
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

        //File
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
        
        unlink("./assets/file/pelatihan/" . $g['file']);
        $this->db->delete('tbl_pelatihan/', array('id_pelatihan' => $id_pelatihan));
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Pelatihan berhasil dihapus
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          </div>');
        redirect('data-pelatihan');
		
	}

    public function exportPelatihan() {
		$fileName = 'pelatihan.xlsx';  
		$employeeData = $this->PelatihanModel->getAllPelatihan()->result_array();
		$spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        $sheet->setCellValue('A1', "DATA PELATIHAN");
        $sheet->mergeCells('A1:F1');
        $sheet->getStyle('A1')->getFont()->setBold(TRUE);
        $sheet->getStyle('A1')->getFont()->setSize(14);
        $sheet->getStyle('A1')->getAlignment()->setHorizontal('center');


        $sheet->setCellValue('A2', "DINAS PETERNAKAN PROVINSI NUSA TENGGARA TIMUR");
        $sheet->mergeCells('A2:F2');
        $sheet->getStyle('A2')->getFont()->setBold(TRUE);
        $sheet->getStyle('A2')->getFont()->setSize(14);
        $sheet->getStyle('A2')->getAlignment()->setHorizontal('center');

        $sheet->setCellValue('A3', "PER NOVEMBER 2022");
        $sheet->mergeCells('A3:F3');
        $sheet->getStyle('A3')->getFont()->setBold(TRUE);
        $sheet->getStyle('A3')->getFont()->setSize(14);
        $sheet->getStyle('A3')->getAlignment()->setHorizontal('center');

       	$sheet->setCellValue('A5', 'NO');
        $sheet->setCellValue('B5', 'NAMA PELATIHAN');
       	$sheet->setCellValue('C5', 'NAMA PEGAWAI');
        $sheet->setCellValue('D5', 'JAM PELATIHAN');
	    $sheet->setCellValue('E5', 'TANGGAL MULAI');
        $sheet->setCellValue('F5', 'TANGGAL SELESAI');    
        $sheet->getStyle('A5:F5')->getFont()->setBold(TRUE);
        $sheet->getStyle('A5:F5')->getFont()->setSize(12);
        $sheet->getStyle('A5:F5')->getAlignment()->setHorizontal('center');   
        $sheet->getColumnDimension('A')->setWidth(20);   
        $sheet->getColumnDimension('B')->setWidth(20);   
        $sheet->getColumnDimension('C')->setWidth(20);   
        $sheet->getColumnDimension('D')->setWidth(20);   
        $sheet->getColumnDimension('E')->setWidth(20);   
        $sheet->getColumnDimension('F')->setWidth(20);   
        $sheet->getColumnDimension('G')->setWidth(20);

        $rows = 6;
        
        $i = 1;
        foreach ($employeeData as $val){
            
            $sheet->setCellValue('A' . $rows, $i);
            $sheet->setCellValue('B' . $rows, $val['nama_pelatihan']);
            $sheet->setCellValue('C' . $rows, $val['nama_pegawai']);
            $sheet->setCellValue('D' . $rows, $val['jam_pelatihan']);
            $sheet->setCellValue('E' . $rows, $val['tanggal']);
	        $sheet->setCellValue('F' . $rows, $val['tanggal_selesai']);
            $rows++;
            $i++;
        } 
        $writer = new Xlsx($spreadsheet);
		$writer->save("assets/".$fileName);
		header("Content-Type: application/vnd.ms-excel");
        redirect(base_url()."/assets/".$fileName);              
    }
}
