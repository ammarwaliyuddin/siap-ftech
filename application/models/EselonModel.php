<?php

/**
 * 
 */
class EselonModel extends CI_model
{

	public function __construct()
	{
		parent::__construct();
	}
	
    public function getAllEselon()
    {
        $q = $this->db->query("SELECT * FROM tbl_eselon ORDER BY eselon ASC ");
		return $q;
    }

    public function getEselonById($id)
	{
		return $this->db->get_where('tbl_eselon' , ['id_eselon' => $id])->row_array();
	}

	public function cekEselon ($data)
    {
        return $this->db->get_where('tbl_eselon' , ['eselon' => $data])->row_array();
    }

    // public function tambahdata ($data)
    // {
    //     $data = [
	// 		"eselon" => $this->input->post('eselon',true)
	// 	];
	// 	$this->db->insert('tbl_eselon', $data);
    // }

	public function tambahdata ($data)
    {
        $data = [
			"eselon" => $data
		];
		return $this->db->insert('tbl_eselon', $data);
    }

    public function ubahdata($idEselon,$eselon)
    {
        $data = [
			"eselon" => $eselon
		];
        
        $this->db->where('id_eselon', $idEselon);
		return $this->db->update('tbl_eselon', $data);
    }

    public function hapusdata($id)
	{
		$this->db->delete('tbl_eselon', ['id_eselon' => $id]);
	}
}