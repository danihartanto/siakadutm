<?php 
 
class M_dosen extends CI_Model{	
	function tambahmatkul($table,$where){		
		return $this->db->get_where($table,$where);
		$this->load->database();
	}	
	public function get_all_data()
	{
		$query = $this->db->get('matkul');
		return $query->result();
	}
	public function hapus_matkul($kode_matkul)
	{
		$this->db->delete('matkul', ['kode_matkul' => $kode_matkul]);
	}
	public function edit_matkul($kode_matkul)
	{
		$query = $this->db->get_where('matkul', ['kode_matkul' => $kode_matkul]);
		return $query->row();
	}
}