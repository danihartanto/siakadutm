<?php 
 
class M_admin extends CI_Model{	
		
	public function getAllUser()
	{
		return $this->db->get('user')->result_array();
		
	}
	public function hapus_data($id)
	{
		$this->db->delete('user', ['id_user' => $id]);
	}


	//mengambil data berdasarkan id
	public function ambildataIdUser($id_user)
	{
	    return $this->db->get_where('user', ['id_user' => $id_user])->row_array();
	    //return $this->db->get_where('mahasiswa', ['id' => $id])->row_array();
	}


	public function ubahdataUser()
	{

	    $data = [
	        "name" => $this->input->post('name', true ),
	        "nim" => $this->input->post('nim', true),
	        "email" => $this->input->post('email', true),
	        "password" => md5($this->input->post('password', true)),
	        "alamat" => $this->input->post('alamat', true)
	    ];

	    $this->db->where('id_user',$this->input->post('id_user'));
	    $this->db->update('user', $data);
	}


	public function cariDataMhs(){
	    $keyword = $this->input->post('keyword', true);
	    $this->db->like('name', $keyword);
	    $this->db->or_like('jurusan', $keyword);
	    $this->db->or_like('nim', $keyword);
	    $this->db->or_like('email', $keyword);
	    return $this->db->get('user')->result_array();
	}


	
}