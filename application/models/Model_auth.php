<?php
class Model_auth extends CI_Model{

  function validate($nim,$password){
    $this->db->where('nim',$nim);
    $this->db->where('password',$password);
    $result = $this->db->get('user',1);
    return $result;
  }

}
