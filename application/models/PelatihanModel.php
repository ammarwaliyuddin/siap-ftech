<?php

/**
 * 
 */
class PelatihanModel extends CI_model
{

	public function __construct()
	{
		parent::__construct();
	}
	
    public function getAllPelatihan()
    {
        $q = $this->db->query("SELECT * FROM tbl_pelatihan , tbl_pegawai
		WHERE tbl_pelatihan.id_pegawai = tbl_pegawai.id_pegawai
		ORDER BY nama_pegawai ASC ");
		return $q;
    }

	public function getPelatihanById($id)
	{
		$q = $this->db->query("SELECT * FROM tbl_pelatihan , tbl_pegawai
								WHERE tbl_pelatihan.id_pegawai = tbl_pegawai.id_pegawai
		AND tbl_pelatihan.id_pelatihan ='$id' ");
		return $q;
	}

    public function tambahdata ($data,$file)
    {
        $data = [
			"nama_pelatihan" => $this->input->post('nama_pelatihan',true),
			"id_pegawai" => $this->input->post('id_pegawai',true),
			"jam_pelatihan" => $this->input->post('jam_pelatihan',true),
			"tanggal" => $this->input->post('tanggal',true),
            "file" => $file
		];
		$this->db->insert('tbl_pelatihan', $data);
    }

    public function ubahdata($data,$file)
    {
        $data = [
			"nama_pelatihan" => $this->input->post('nama_pelatihan',true),
			"id_pegawai" => $this->input->post('id_pegawai',true),
			"jam_pelatihan" => $this->input->post('jam_pelatihan',true),
			"tanggal" => $this->input->post('tanggal',true),
            "file" => $file
		];
        
        $this->db->where('id_pelatihan', $this->input->post('id_pelatihan'));
		$this->db->update('tbl_pelatihan', $data);
    }

    public function hapusdata($id)
	{
		$this->db->delete('tbl_pelatihan', ['id_pelatihan' => $id]);
	}
}