<?php

/**
 * 
 */
class PegawaiModel extends CI_model
{

	public function __construct()
	{
		parent::__construct();
	}
	
    public function getAllPegawai()
    {
        $q = $this->db->query("SELECT * FROM tbl_pegawai ORDER BY nama_pegawai ASC ");
		return $q;
    }

    public function getPegawaiById($id)
	{
		return $this->db->get_where('tbl_pegawai' , ['id_pegawai' => $id])->row_array();
	}

    public function tambahdata ($data,$foto)
    {
        $data = [
			"nama_pegawai" => $this->input->post('nama_pegawai',true),
			"nip" => $this->input->post('nip',true),
			"pangkat" => $this->input->post('pangkat',true),
			"tmt" => $this->input->post('tmt',true),
			"gaji_pokok" => $this->input->post('gaji_pokok',true),
			"pejabat" => $this->input->post('pejabat',true),
			"nomor_sk" => $this->input->post('nomor_sk',true),
			"tanggal_sk" => $this->input->post('tanggal_sk',true),
			"tipe_pegawai" => $this->input->post('tipe_pegawai',true),
			"nomor_kartu" => $this->input->post('nomor_kartu',true),
			"tempat_lahir" => $this->input->post('tempat_lahir',true),
			"tanggal_lahir" => $this->input->post('tanggal_lahir',true),
			"jk" => $this->input->post('jk',true),
			"agama" => $this->input->post('agama',true),
			"status_nikah" => $this->input->post('status_nikah',true),
			"alamat" => $this->input->post('alamat',true),
			"no_hp" => $this->input->post('no_hp',true),
			"email" => $this->input->post('email',true),
			"password" => $this->input->post('password',true),
			"eselon" => $this->input->post('eselon',true),
			"jabatan" => $this->input->post('jabatan',true),
			"pendidikan" => $this->input->post('pendidikan',true),
			"unit_kerja" => $this->input->post('unit_kerja',true),
            "foto" => $foto
		];
		$this->db->insert('tbl_pegawai', $data);
    }

    public function ubahdata($data,$foto)
    {
        $data = [
			"nama_pegawai" => $this->input->post('nama_pegawai',true),
			"nip" => $this->input->post('nip',true),
			"pangkat" => $this->input->post('pangkat',true),
			"tmt" => $this->input->post('tmt',true),
			"gaji_pokok" => $this->input->post('gaji_pokok',true),
			"pejabat" => $this->input->post('pejabat',true),
			"nomor_sk" => $this->input->post('nomor_sk',true),
			"tanggal_sk" => $this->input->post('tanggal_sk',true),
			"tipe_pegawai" => $this->input->post('tipe_pegawai',true),
			"nomor_kartu" => $this->input->post('nomor_kartu',true),
			"tempat_lahir" => $this->input->post('tempat_lahir',true),
			"tanggal_lahir" => $this->input->post('tanggal_lahir',true),
			"jk" => $this->input->post('jk',true),
			"agama" => $this->input->post('agama',true),
			"status_nikah" => $this->input->post('status_nikah',true),
			"alamat" => $this->input->post('alamat',true),
			"no_hp" => $this->input->post('no_hp',true),
			"email" => $this->input->post('email',true),
			"password" => $this->input->post('password',true),
			"eselon" => $this->input->post('eselon',true),
			"jabatan" => $this->input->post('jabatan',true),
			"pendidikan" => $this->input->post('pendidikan',true),
			"unit_kerja" => $this->input->post('unit_kerja',true),
            "foto" => $foto
		];
        
        $this->db->where('id_pegawai', $this->input->post('id_pegawai'));
		$this->db->update('tbl_pegawai', $data);
    }

    public function hapusdata($id)
	{
		$this->db->delete('tbl_pegawai', ['id_pegawai' => $id]);
	}
}