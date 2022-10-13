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
        $q = $this->db->query("SELECT * FROM tbl_pegawai , tbl_eselon , tbl_jabatan , tbl_pangkat , tbl_pendidikan , tbl_tipe , tbl_unit
		WHERE tbl_pegawai.id_eselon = tbl_eselon.id_eselon
		AND tbl_pegawai.id_jabatan = tbl_jabatan.id_jabatan
		AND tbl_pegawai.id_pangkat = tbl_pangkat.id_pangkat
		AND tbl_pegawai.id_pendidikan = tbl_pendidikan.id_pendidikan
		AND tbl_pegawai.id_tipe = tbl_tipe.id_tipe
		ANd tbl_pegawai.id_unit = tbl_unit.id_unit 
		ORDER BY nama_pegawai ASC ");
		return $q;
    }

    // public function getPegawaiById($id)
	// {
	// 	return $this->db->get_where('tbl_pegawai' , ['id_pegawai' => $id])->row_array();
	// }

	public function getPegawaiById($id)
	{
		$q = $this->db->query("SELECT * FROM tbl_pegawai , tbl_eselon , tbl_jabatan , tbl_pangkat , tbl_pendidikan , tbl_tipe , tbl_unit 
								WHERE tbl_pegawai.id_eselon = tbl_eselon.id_eselon
		AND tbl_pegawai.id_jabatan = tbl_jabatan.id_jabatan
		AND tbl_pegawai.id_pangkat = tbl_pangkat.id_pangkat
		AND tbl_pegawai.id_pendidikan = tbl_pendidikan.id_pendidikan
		AND tbl_pegawai.id_tipe = tbl_tipe.id_tipe
		AND tbl_pegawai.id_unit = tbl_unit.id_unit
		AND tbl_pegawai.id_pegawai ='$id' ");
		return $q;
	}

    public function tambahdata ($data,$foto)
    {
        $data = [
			"nama_pegawai" => $this->input->post('nama_pegawai',true),
			"nip" => $this->input->post('nip',true),
			"id_pangkat" => $this->input->post('id_pangkat',true),
			"tmt" => $this->input->post('tmt',true),
			"gaji_pokok" => $this->input->post('gaji_pokok',true),
			"pejabat" => $this->input->post('pejabat',true),
			"nomor_sk" => $this->input->post('nomor_sk',true),
			"tanggal_sk" => $this->input->post('tanggal_sk',true),
			"id_tipe" => $this->input->post('id_tipe',true),
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
			"id_eselon" => $this->input->post('id_eselon',true),
			"id_jabatan" => $this->input->post('id_jabatan',true),
			"id_pendidikan" => $this->input->post('id_pendidikan',true),
			"id_unit" => $this->input->post('id_unit',true),
            "foto" => $foto
		];
		$this->db->insert('tbl_pegawai', $data);
    }

    public function ubahdata($data,$foto)
    {
        $data = [
			"nama_pegawai" => $this->input->post('nama_pegawai',true),
			"nip" => $this->input->post('nip',true),
			"id_pangkat" => $this->input->post('id_pangkat',true),
			"tmt" => $this->input->post('tmt',true),
			"gaji_pokok" => $this->input->post('gaji_pokok',true),
			"pejabat" => $this->input->post('pejabat',true),
			"nomor_sk" => $this->input->post('nomor_sk',true),
			"tanggal_sk" => $this->input->post('tanggal_sk',true),
			"id_tipe" => $this->input->post('id_tipe',true),
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
			"id_eselon" => $this->input->post('id_eselon',true),
			"id_jabatan" => $this->input->post('id_jabatan',true),
			"id_pendidikan" => $this->input->post('id_pendidikan',true),
			"id_unit" => $this->input->post('id_unit',true),
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