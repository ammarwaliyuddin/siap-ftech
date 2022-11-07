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

	public function cekPangkat ($pangkat,$golongan)
    {
        return $this->db->get_where('tbl_pangkat' , ['pangkat' => $pangkat , 'golongan' => $golongan])->row_array();
    }

    // public function tambahdata ($data)
    // {
    //     $data = [
	// 		"pangkat" => $this->input->post('pangkat',true)
	// 	];
	// 	$this->db->insert('tbl_pangkat', $data);
    // }

	public function tambahdata ($pangkat,$golongan)
    {
        $data = [
			"pangkat" => $pangkat,
			"golongan" => $golongan
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

	public function ubahdata($idPangkat,$pangkat,$golongan)
    {
        $data = [
			"pangkat" => $pangkat,
			"golongan" => $golongan
		];
        
        $this->db->where('id_pangkat', $idPangkat);
		return $this->db->update('tbl_pangkat', $data);
    }

    public function hapusdata($id)
	{
		$this->db->delete('tbl_pangkat', ['id_pangkat' => $id]);
	}
}