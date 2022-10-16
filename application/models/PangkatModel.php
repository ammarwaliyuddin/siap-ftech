<?php

/**
 * 
 */
class PangkatModel extends CI_model
{

	public function __construct()
	{
		parent::__construct();
	}
	
    public function getAllPangkat()
    {
        $q = $this->db->query("SELECT * FROM tbl_pangkat ORDER BY pangkat ASC ");
		return $q;
    }

    public function getPangkatById($id)
	{
		return $this->db->get_where('tbl_pangkat' , ['id_pangkat' => $id])->row_array();
	}

	public function cekPangkat ($data)
    {
        return $this->db->get_where('tbl_pangkat' , ['pangkat' => $data])->row_array();
    }

    // public function tambahdata ($data)
    // {
    //     $data = [
	// 		"pangkat" => $this->input->post('pangkat',true)
	// 	];
	// 	$this->db->insert('tbl_pangkat', $data);
    // }

	public function tambahdata ($data)
    {
        $data = [
			"pangkat" => $data
		];
		return $this->db->insert('tbl_pangkat', $data);
    }

    // public function ubahdata($data)
    // {
    //     $data = [
	// 		"pangkat" => $this->input->post('pangkat',true)
	// 	];
        
    //     $this->db->where('id_pangkat', $this->input->post('id_pangkat'));
	// 	$this->db->update('tbl_pangkat', $data);
    // }

	public function ubahdata($idPangkat,$pangkat)
    {
        $data = [
			"pangkat" => $pangkat
		];
        
        $this->db->where('id_pangkat', $idPangkat);
		return $this->db->update('tbl_pangkat', $data);
    }

    public function hapusdata($id)
	{
		$this->db->delete('tbl_pangkat', ['id_pangkat' => $id]);
	}
}