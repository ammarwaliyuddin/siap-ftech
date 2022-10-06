<?php

/**
 * 
 */
class TipeModel extends CI_model
{

	public function __construct()
	{
		parent::__construct();
	}
	
    public function getAllTipe()
    {
        $q = $this->db->query("SELECT * FROM tbl_tipe ORDER BY tipe ASC ");
		return $q;
    }

    public function getTipeById($id)
	{
		return $this->db->get_where('tbl_tipe' , ['id_tipe' => $id])->row_array();
	}

    public function tambahdata ($data)
    {
        $data = [
			"tipe" => $this->input->post('tipe',true)
		];
		$this->db->insert('tbl_tipe', $data);
    }

    public function ubahdata($data)
    {
        $data = [
			"tipe" => $this->input->post('tipe',true)
		];
        
        $this->db->where('id_tipe', $this->input->post('id_tipe'));
		$this->db->update('tbl_tipe', $data);
    }

    public function hapusdata($id)
	{
		$this->db->delete('tbl_tipe', ['id_tipe' => $id]);
	}
}