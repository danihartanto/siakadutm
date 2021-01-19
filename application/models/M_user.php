<?php

class M_user extends CI_model {
    public function getAllUser()
    {
    return $this->db->get('user')->result_array();
    }

    public function getAllkelas(){
      $this->db->select('*');
      $this->db->from('kelas');   
      $query = $this->db->get();
      return $query;
    }


    public function getAllmatkul()
    {
        //return $this->db->get('matkul');  
        //$this->db->select('*');
        $this->db->from('matkul');   
        $query = $this->db->get();
        return $query;
        
    }
    public function getAlljadwal()
    {
        //return $this->db->get('matkul');  
        //$this->db->select('*');
        $this->db->from('jadwal');   
        $query = $this->db->get();
        return $query;
        
    }

    public function tambahdatamahasiswa()
    {
        $data = [
            "name" => $this->input->post('name', true ),
            "nim" => $this->input->post('nim', true),
            "email" => $this->input->post('email', true),
            "alamat" => $this->input->post('alamat', true),
            "level" => $this->input->post('level', true)
        ];

        $this->db->insert('user', $data);
    }

    public function hapusDataUser($id_user){
        $this->db->where('id_user', $id_user);
        $this->db->delete('user');
    }

    public function tambahdatajadwal()
    {
        $data = [
            
            "nim" => $this->input->post('nim', true ),
            "nama" => $this->input->post('nama', true),
            "matkul" => $this->input->post('matkul', true),
            "jam" => $this->input->post('jam', true),
            "kelas" => $this->input->post('kelas', true)
        ];

        $this->db->insert('jadwal', $data);
    }

    public function getMax($table=null, $field=null)   {

        $this->db->select_max($field);
        return $this->db->get($table)->row_array()[$field];
    }


}
 