<?php

/**
 * 
 */
class UnitModel extends CI_model
{

	public function __construct()
	{
		parent::__construct();
	}
	
    public function getAllUnit()
    {
        $q = $this->db->query("SELECT * FROM tbl_unit ORDER BY unit_kerja ASC ");
		return $q;
    }

    public function getUnitById($id)
	{
		return $this->db->get_where('tbl_unit' , ['id_unit' => $id])->row_array();
	}

    public function cekUnit ($data)
    {
        return $this->db->get_where('tbl_unit' , ['unit_kerja' => $data])->row_array();
    }
    public function tambahdata ($data)
    {
        $data = [
			"unit_kerja" => $data
		];
		return $this->db->insert('tbl_unit', $data);
    }

    public function ubahdata($idUnit,$unitKerja)
    {
        $data = [
			"unit_kerja" => $unitKerja
		];
        
        $this->db->where('id_unit', $idUnit);
		return $this->db->update('tbl_unit', $data);
    }

    public function hapusdata($id)
	{
		$this->db->delete('tbl_unit', ['id_unit' => $id]);
	}
}