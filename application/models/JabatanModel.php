<?php

/**
 * 
 */
class JabatanModel extends CI_model
{

	public function __construct()
	{
		parent::__construct();
	}
	
    public function getAllJabatan()
    {
        $q = $this->db->query("SELECT * FROM tbl_jabatan ORDER BY jabatan ASC ");
		return $q;
    }

    public function getJabatanById($id)
	{
		return $this->db->get_where('tbl_jabatan' , ['id_jabatan' => $id])->row_array();
	}

	public function cekJabatan ($data)
    {
        return $this->db->get_where('tbl_jabatan' , ['jabatan' => $data])->row_array();
    }

    // public function tambahdata ($data)
    // {
    //     $data = [
	// 		"jabatan" => $this->input->post('jabatan',true)
	// 	];
	// 	$this->db->insert('tbl_jabatan', $data);
    // }

	public function tambahdata ($data)
    {
        $data = [
			"jabatan" => $data
		];
		return $this->db->insert('tbl_jabatan', $data);
    }

    // public function ubahdata($data)
    // {
    //     $data = [
	// 		"jabatan" => $this->input->post('jabatan',true)
	// 	];
        
    //     $this->db->where('id_jabatan', $this->input->post('id_jabatan'));
	// 	$this->db->update('tbl_jabatan', $data);
    // }

	public function ubahdata($idJabatan,$jabatan)
    {
        $data = [
			"jabatan" => $jabatan
		];
        
        $this->db->where('id_jabatan', $idJabatan);
		return $this->db->update('tbl_jabatan', $data);
    }

    public function hapusdata($id)
	{
		$this->db->delete('tbl_jabatan', ['id_jabatan' => $id]);
	}
}