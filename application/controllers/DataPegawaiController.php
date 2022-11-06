<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataPegawaiController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('PegawaiModel');
		$this->load->model('EselonModel');
		$this->load->model('JabatanModel');
		$this->load->model('PangkatModel');
		$this->load->model('PendidikanModel');
		$this->load->model('TipeModel');
		$this->load->model('UnitModel');
		$this->load->library('form_validation');
		$this->load->library('session');
	}
	public function dataPegawai()
	{
        if($this->session->userdata('role') == 'admin'){
            $data['pegawai']=$this->PegawaiModel->getAllPegawai()->result_array();
        }else{
            $data['pegawai']=$this->PegawaiModel->getPegawaiById($this->session->userdata('id'))->result_array();

        }

        $data['eselon']=$this->EselonModel->getAllEselon()->result();
        $data['jabatan']=$this->JabatanModel->getAllJabatan()->result();
        $data['pangkat']=$this->PangkatModel->getAllPangkat()->result();
        $data['pendidikan']=$this->PendidikanModel->getAllPendidikan()->result();
        $data['tipe']=$this->TipeModel->getAllTipe()->result();
        $data['unit']=$this->UnitModel->getAllUnit()->result();

		$this->load->view('data_pegawai/list',$data);
	}

	public function tambahPegawai()
	{
		// $this->load->view('data_pegawai/tambah');

		$data['pegawai']=$this->PegawaiModel->getAllPegawai()->result_array();

        $data['eselon']=$this->EselonModel->getAllEselon()->result();
        $data['jabatan']=$this->JabatanModel->getAllJabatan()->result();
        $data['pangkat']=$this->PangkatModel->getAllPangkat()->result();
        $data['pendidikan']=$this->PendidikanModel->getAllPendidikan()->result();
        $data['tipe']=$this->TipeModel->getAllTipe()->result();
        $data['unit']=$this->UnitModel->getAllUnit()->result();
		
		$this->form_validation->set_rules('nama_pegawai', 'Nama Pegawai', 'required|trim',
                array(
                    'required' => '<div class="alert alert-danger"><strong>Error!</strong> Nama Pegawai Tidak Boleh Kosong.</div>'
                    ));
		$this->form_validation->set_rules('nip', 'NIP', 'required|trim',
                array(
                    'required' => '<div class="alert alert-danger"><strong>Error!</strong> NIP Tidak Boleh Kosong.</div>'
                    ));
		$this->form_validation->set_rules('id_pangkat', 'Pangkat', 'required|trim',
                array(
                    'required' => '<div class="alert alert-danger"><strong>Error!</strong> Pangkat Tidak Boleh Kosong.</div>'
                    ));
		$this->form_validation->set_rules('tmt', 'TMT', 'required|trim',
                array(
                    'required' => '<div class="alert alert-danger"><strong>Error!</strong> TMT Tidak Boleh Kosong.</div>'
                    ));
		$this->form_validation->set_rules('gaji_pokok', 'Gaji Pokok', 'required|trim',
                array(
                    'required' => '<div class="alert alert-danger"><strong>Error!</strong> Gaji Pokok Tidak Boleh Kosong.</div>'
                    ));
		$this->form_validation->set_rules('nomor_skcpns', 'Nomor SK CPNS', 'required|trim',
                array(
                    'required' => '<div class="alert alert-danger"><strong>Error!</strong> Nomor SK CPNS Tidak Boleh Kosong.</div>'
                    ));
		$this->form_validation->set_rules('tanggal_skcpns', 'Tanggal SK CPNS', 'required|trim',
                array(
                    'required' => '<div class="alert alert-danger"><strong>Error!</strong> Tanggal SK CPNS Tidak Boleh Kosong.</div>'
                    ));
		$this->form_validation->set_rules('nomor_skpns', 'Nomor SK PNS', 'required|trim',
                array(
                    'required' => '<div class="alert alert-danger"><strong>Error!</strong> Nomor SK PNS Tidak Boleh Kosong.</div>'
                    ));
		$this->form_validation->set_rules('tanggal_skpns', 'Tanggal SK PNS', 'required|trim',
                array(
                    'required' => '<div class="alert alert-danger"><strong>Error!</strong> Tanggal SK PNS Tidak Boleh Kosong.</div>'
                    ));
		$this->form_validation->set_rules('nomor_skterakhir', 'Nomor SK Pangkat Terakhir', 'required|trim',
                array(
                    'required' => '<div class="alert alert-danger"><strong>Error!</strong> Nomor SK Pangkat Terakhir Tidak Boleh Kosong.</div>'
                    ));
		$this->form_validation->set_rules('tanggal_skterakhir', 'Tanggal SK Pangkat Terakhir', 'required|trim',
                array(
                    'required' => '<div class="alert alert-danger"><strong>Error!</strong> Tanggal SK Pangkat Terakhir Tidak Boleh Kosong.</div>'
                    ));
		$this->form_validation->set_rules('id_tipe', 'Tipe Pegawai', 'required|trim',
                array(
                    'required' => '<div class="alert alert-danger"><strong>Error!</strong> Tipe Pegawai Tidak Boleh Kosong.</div>'
                    ));
		$this->form_validation->set_rules('nomor_kartu', 'Nomor Kartu', 'required|trim',
                array(
                    'required' => '<div class="alert alert-danger"><strong>Error!</strong> Nomor Kartu Tidak Boleh Kosong.</div>'
                    ));
		$this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required|trim',
                array(
                    'required' => '<div class="alert alert-danger"><strong>Error!</strong> Tempat Lahir Tidak Boleh Kosong.</div>'
                    ));
		$this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required|trim',
                array(
                    'required' => '<div class="alert alert-danger"><strong>Error!</strong> TMT Tidak Boleh Kosong.</div>'
                    ));
		$this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required|trim',
                array(
                    'required' => '<div class="alert alert-danger"><strong>Error!</strong> Jenis Kelamin Tidak Boleh Kosong.</div>'
                    ));
		$this->form_validation->set_rules('agama', 'Agama', 'required|trim',
                array(
                    'required' => '<div class="alert alert-danger"><strong>Error!</strong> Agama Tidak Boleh Kosong.</div>'
                    ));
		$this->form_validation->set_rules('status_nikah', 'Status Nikah', 'required|trim',
                array(
                    'required' => '<div class="alert alert-danger"><strong>Error!</strong> Status Nikah Tidak Boleh Kosong.</div>'
                    ));
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim',
                    array(
                    'required' => '<div class="alert alert-danger"><strong>Error!</strong> Alamat Tidak Boleh Kosong.</div>'
                    ));            
        $this->form_validation->set_rules('no_hp', 'No HP', 'required|trim',
                    array(
                    'required' => '<div class="alert alert-danger"><strong>Error!</strong> No HP Tidak Boleh Kosong.</div>'
                    ));            
        $this->form_validation->set_rules('email', 'Email', 'required|trim',
                    array(
                    'required' => '<div class="alert alert-danger"><strong>Error!</strong> Email Tidak Boleh Kosong.</div>'
                    ));            
        $this->form_validation->set_rules('password', 'Password', 'required|trim',
                    array(
                    'required' => '<div class="alert alert-danger"><strong>Error!</strong> Password Tidak Boleh Kosong.</div>'
                    ));            
        $this->form_validation->set_rules('id_eselon', 'Eselon', 'required|trim',
                    array(
                    'required' => '<div class="alert alert-danger"><strong>Error!</strong> Eselon Tidak Boleh Kosong.</div>'
                    ));            
        $this->form_validation->set_rules('id_jabatan', 'Jabatan', 'required|trim',
                    array(
                    'required' => '<div class="alert alert-danger"><strong>Error!</strong> Jabatan Tidak Boleh Kosong.</div>'
                    ));            
        $this->form_validation->set_rules('id_pendidikan', 'Pendidikan', 'required|trim',
                    array(
                    'required' => '<div class="alert alert-danger"><strong>Error!</strong> Pendidikan Tidak Boleh Kosong.</div>'
                    ));            
        $this->form_validation->set_rules('id_unit', 'Unit Kerja', 'required|trim',
                    array(
                    'required' => '<div class="alert alert-danger"><strong>Error!</strong> Unit Kerja Tidak Boleh Kosong.</div>'
                    ));            

		if ($this->form_validation->run() == false) {
				$this->load->view('data_pegawai/tambah',$data);
        }  else {

            //GAMBAR
            $config['upload_path'] = './assets/file/pegawai/';
            $config['allowed_types'] = 'jpg|png|jpeg|pdf';
            $config['max_size']  = '8048';
            $config['remove_space'] = TRUE;

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('foto')) {
                $foto  = $this->upload->data('file_name');
            } else {
                $foto  = '';
            }
            if ($this->upload->do_upload('ijazah')) {
                $ijazah  = $this->upload->data('file_name');
            } else {
                $ijazah  = '';
            }
            if ($this->upload->do_upload('sk_cpns')) {
                $sk_cpns  = $this->upload->data('file_name');
            } else {
                $sk_cpns  = '';
            }
            if ($this->upload->do_upload('sk_pns')) {
                $sk_pns  = $this->upload->data('file_name');
            } else {
                $sk_pns  = '';
            }
            if ($this->upload->do_upload('sk_pangkat')) {
                $sk_pangkat  = $this->upload->data('file_name');
            } else {
                $sk_pangkat  = '';
            }

            // //Ijazah 
            //  $config2['upload_path'] = './assets/file/pegawai/';
            //  $config2['allowed_types'] = 'pdf';
            //  $config2['max_size']  = '8048';
            //  $config2['remove_space'] = TRUE;

            //  $this->load->library('upload', $config2);

            // if ($this->upload->do_upload('ijazah')) {
            //     $ijazah  = $this->upload->data('file_name');
            // } else {
            //     $ijazah  = '';
            // }

            // //SK cpns 
            // $config3['upload_path'] = './assets/file/pegawai/';
            // $config3['allowed_types'] = 'pdf';
            // $config3['max_size']  = '8048';
            // $config3['remove_space'] = TRUE;

            // $this->load->library('upload', $config3);

            // if ($this->upload->do_upload('sk_cpns')) {
            //     $sk_cpns  = $this->upload->data('file_name');
            // } else {
            //     $sk_cpns  = '';
            // }

            // //SK pns 
            // $config4['upload_path'] = './assets/file/pegawai/';
            // $config4['allowed_types'] = 'pdf';
            // $config4['max_size']  = '8048';
            // $config4['remove_space'] = TRUE;

            // $this->load->library('upload', $config4);

            // if ($this->upload->do_upload('sk_pns')) {
            //     $sk_pns  = $this->upload->data('file_name');
            // } else {
            //     $sk_pns  = '';
            // }

            // //SK pangkat 
            // $config5['upload_path'] = './assets/file/pegawai/';
            // $config5['allowed_types'] = 'pdf';
            // $config5['max_size']  = '8048';
            // $config5['remove_space'] = TRUE;

            // $this->load->library('upload', $config5);

            // if ($this->upload->do_upload('sk_pangkat')) {
            //     $sk_pangkat  = $this->upload->data('file_name');
            // } else {
            //     $sk_pangkat  = '';
            // }

            $this->PegawaiModel->tambahdata($data,$foto,$ijazah,$sk_cpns,$sk_pns,$sk_pangkat);
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

        $data['eselon']=$this->EselonModel->getAllEselon()->result();
        $data['jabatan']=$this->JabatanModel->getAllJabatan()->result();
        $data['pangkat']=$this->PangkatModel->getAllPangkat()->result();
        $data['pendidikan']=$this->PendidikanModel->getAllPendidikan()->result();
        $data['tipe']=$this->TipeModel->getAllTipe()->result();
        $data['unit']=$this->UnitModel->getAllUnit()->result();

        $data['pegawai']=$this->PegawaiModel->getPegawaiById($id)->row_array();

        $this->form_validation->set_rules('nama_pegawai', 'Nama Pegawai', 'required|trim',
                array(
                    'required' => '<div class="alert alert-danger"><strong>Error!</strong> Nama Pegawai Tidak Boleh Kosong.</div>'
                    ));
		$this->form_validation->set_rules('nip', 'NIP', 'required|trim',
                array(
                    'required' => '<div class="alert alert-danger"><strong>Error!</strong> NIP Tidak Boleh Kosong.</div>'
                    ));
		$this->form_validation->set_rules('id_pangkat', 'Pangkat', 'required|trim',
                array(
                    'required' => '<div class="alert alert-danger"><strong>Error!</strong> Pangkat Tidak Boleh Kosong.</div>'
                    ));
		$this->form_validation->set_rules('tmt', 'TMT', 'required|trim',
                array(
                    'required' => '<div class="alert alert-danger"><strong>Error!</strong> TMT Tidak Boleh Kosong.</div>'
                    ));
		$this->form_validation->set_rules('gaji_pokok', 'Gaji Pokok', 'required|trim',
                array(
                    'required' => '<div class="alert alert-danger"><strong>Error!</strong> Gaji Pokok Tidak Boleh Kosong.</div>'
                    ));
		$this->form_validation->set_rules('nomor_skcpns', 'Nomor SK CPNS', 'required|trim',
                array(
                    'required' => '<div class="alert alert-danger"><strong>Error!</strong> Nomor SK CPNS Tidak Boleh Kosong.</div>'
                    ));
		$this->form_validation->set_rules('tanggal_skcpns', 'Tanggal SK CPNS', 'required|trim',
                array(
                    'required' => '<div class="alert alert-danger"><strong>Error!</strong> Tanggal SK CPNS Tidak Boleh Kosong.</div>'
                    ));
		$this->form_validation->set_rules('nomor_skpns', 'Nomor SK PNS', 'required|trim',
                array(
                    'required' => '<div class="alert alert-danger"><strong>Error!</strong> Nomor SK PNS Tidak Boleh Kosong.</div>'
                    ));
		$this->form_validation->set_rules('tanggal_skpns', 'Tanggal SK PNS', 'required|trim',
                array(
                    'required' => '<div class="alert alert-danger"><strong>Error!</strong> Tanggal SK PNS Tidak Boleh Kosong.</div>'
                    ));
		$this->form_validation->set_rules('nomor_skterakhir', 'Nomor SK Pangkat Terakhir', 'required|trim',
                array(
                    'required' => '<div class="alert alert-danger"><strong>Error!</strong> Nomor SK Pangkat Terakhir Tidak Boleh Kosong.</div>'
                    ));
		$this->form_validation->set_rules('tanggal_skterakhir', 'Tanggal SK Pangkat Terakhir', 'required|trim',
                array(
                    'required' => '<div class="alert alert-danger"><strong>Error!</strong> Tanggal SK Pangkat Terakhir Tidak Boleh Kosong.</div>'
                    ));
		$this->form_validation->set_rules('id_tipe', 'Tipe Pegawai', 'required|trim',
                array(
                    'required' => '<div class="alert alert-danger"><strong>Error!</strong> Tipe Pegawai Tidak Boleh Kosong.</div>'
                    ));
		$this->form_validation->set_rules('nomor_kartu', 'Nomor Kartu', 'required|trim',
                array(
                    'required' => '<div class="alert alert-danger"><strong>Error!</strong> Nomor Kartu Tidak Boleh Kosong.</div>'
                    ));
		$this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required|trim',
                array(
                    'required' => '<div class="alert alert-danger"><strong>Error!</strong> Tempat Lahir Tidak Boleh Kosong.</div>'
                    ));
		$this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required|trim',
                array(
                    'required' => '<div class="alert alert-danger"><strong>Error!</strong> TMT Tidak Boleh Kosong.</div>'
                    ));
		$this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required|trim',
                array(
                    'required' => '<div class="alert alert-danger"><strong>Error!</strong> Jenis Kelamin Tidak Boleh Kosong.</div>'
                    ));
		$this->form_validation->set_rules('agama', 'Agama', 'required|trim',
                array(
                    'required' => '<div class="alert alert-danger"><strong>Error!</strong> Agama Tidak Boleh Kosong.</div>'
                    ));
		$this->form_validation->set_rules('status_nikah', 'Status Nikah', 'required|trim',
                array(
                    'required' => '<div class="alert alert-danger"><strong>Error!</strong> Status Nikah Tidak Boleh Kosong.</div>'
                    ));
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim',
                    array(
                    'required' => '<div class="alert alert-danger"><strong>Error!</strong> Alamat Tidak Boleh Kosong.</div>'
                    ));            
        $this->form_validation->set_rules('no_hp', 'No HP', 'required|trim',
                    array(
                    'required' => '<div class="alert alert-danger"><strong>Error!</strong> No HP Tidak Boleh Kosong.</div>'
                    ));            
        $this->form_validation->set_rules('email', 'Email', 'required|trim',
                    array(
                    'required' => '<div class="alert alert-danger"><strong>Error!</strong> Email Tidak Boleh Kosong.</div>'
                    ));            
        $this->form_validation->set_rules('password', 'Password', 'required|trim',
                    array(
                    'required' => '<div class="alert alert-danger"><strong>Error!</strong> Password Tidak Boleh Kosong.</div>'
                    ));            
        $this->form_validation->set_rules('id_eselon', 'Eselon', 'required|trim',
                    array(
                    'required' => '<div class="alert alert-danger"><strong>Error!</strong> Eselon Tidak Boleh Kosong.</div>'
                    ));            
        $this->form_validation->set_rules('id_jabatan', 'Jabatan', 'required|trim',
                    array(
                    'required' => '<div class="alert alert-danger"><strong>Error!</strong> Jabatan Tidak Boleh Kosong.</div>'
                    ));            
        $this->form_validation->set_rules('id_pendidikan', 'Pendidikan', 'required|trim',
                    array(
                    'required' => '<div class="alert alert-danger"><strong>Error!</strong> Pendidikan Tidak Boleh Kosong.</div>'
                    ));            
        $this->form_validation->set_rules('id_unit', 'Unit Kerja', 'required|trim',
                    array(
                    'required' => '<div class="alert alert-danger"><strong>Error!</strong> Unit Kerja Tidak Boleh Kosong.</div>'
                    ));
        
        if ($this->form_validation->run() == false) {
				$this->load->view('data_pegawai/ubah',$data);
        }  else {

        //GAMBAR
        $config['upload_path'] = './assets/file/pegawai/';
        $config['allowed_types'] = 'jpg|png|jpeg|pdf';
        $config['max_size']  = '8048';
        $config['remove_space'] = TRUE;

        $this->load->library('upload', $config);

        $this->db->where('id_pegawai', $id);
        $g =  $this->db->get('tbl_pegawai')->row_array();

        if ($this->upload->do_upload('foto')) {
            $foto  = $this->upload->data('file_name');
            unlink("./assets/file/pegawai/" . $g['foto']);
        } else {
            $foto  = $g['foto'];
        }
        if ($this->upload->do_upload('ijazah')) {
            $ijazah  = $this->upload->data('file_name');
            unlink("./assets/file/pegawai/" . $g['ijazah']);
        } else {
            $ijazah  = $g['ijazah'];
        }
        if ($this->upload->do_upload('sk_cpns')) {
            $sk_cpns  = $this->upload->data('file_name');
            unlink("./assets/file/pegawai/" . $g['sk_cpns']);
        } else {
            $sk_cpns  = $g['sk_cpns'];
        }
        if ($this->upload->do_upload('sk_pns')) {
            $sk_pns  = $this->upload->data('file_name');
            unlink("./assets/file/pegawai/" . $g['sk_pns']);
        } else {
            $sk_pns  = $g['sk_pns'];
        }
        if ($this->upload->do_upload('sk_pangkat')) {
            $sk_pangkat  = $this->upload->data('file_name');
            unlink("./assets/file/pegawai/" . $g['sk_pangkat']);
        } else {
            $sk_pangkat  = $g['sk_pangkat'];
        }

        $this->PegawaiModel->ubahdata($data,$foto,$ijazah,$sk_cpns,$sk_pns,$sk_pangkat);
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
        $this->db->where('id_pegawai', $id_pegawai);
        $g =  $this->db->get('tbl_pegawai')->row_array();
        
        unlink("./assets/file/pegawai" . $g['foto']);
        unlink("./assets/file/pegawai" . $g['ijazah']);
        unlink("./assets/file/pegawai" . $g['sk_cpns']);
        unlink("./assets/file/pegawai" . $g['sk_pns']);
        unlink("./assets/file/pegawai" . $g['sk_pangkat']);
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
