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

    public function tambahdata ($data)
    {
        $data = [
			"eselon" => $this->input->post('eselon',true)
		];
		$this->db->insert('tbl_eselon', $data);
    }

    public function ubahdata($data)
    {
        $data = [
			"eselon" => $this->input->post('eselon',true)
		];
        
        $this->db->where('id_eselon', $this->input->post('id_eselon'));
		$this->db->update('tbl_eselon', $data);
    }

    public function hapusdata($id)
	{
		$this->db->delete('tbl_eselon', ['id_eselon' => $id]);
	}
}