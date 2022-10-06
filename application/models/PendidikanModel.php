<?php

/**
 * 
 */
class PendidikanModel extends CI_model
{

	public function __construct()
	{
		parent::__construct();
	}
	
    public function getAllPendidikan()
    {
        $q = $this->db->query("SELECT * FROM tbl_pendidikan ORDER BY pendidikan ASC ");
		return $q;
    }

    public function getPendidikanById($id)
	{
		return $this->db->get_where('tbl_pendidikan' , ['id_pendidikan' => $id])->row_array();
	}

    public function tambahdata ($data)
    {
        $data = [
			"pendidikan" => $this->input->post('pendidikan',true)
		];
		$this->db->insert('tbl_pendidikan', $data);
    }

    public function ubahdata($data)
    {
        $data = [
			"pendidikan" => $this->input->post('pendidikan',true)
		];
        
        $this->db->where('id_pendidikan', $this->input->post('id_pendidikan'));
		$this->db->update('tbl_pendidikan', $data);
    }

    public function hapusdata($id)
	{
		$this->db->delete('tbl_pendidikan', ['id_pendidikan' => $id]);
	}
}