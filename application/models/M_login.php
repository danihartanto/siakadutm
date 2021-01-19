<?php 
 
class M_login extends CI_Model{	
	function cek_login($nim,$password){		
        $hasil=$this->db->query("select*from user where nim='$nim'and password=md5('$password')");
        return $hasil;
    }
	}	
	function validate($nim,$password){
    	$this->db->where('nim',$nim);
    	$this->db->where('password',$password);
    	$result = $this->db->get('user',1);
    	return $result;
  	}
  function cekuserdaftar($nim){
  	$query = $this->db->query("SELECT * FROM user WHERE nim = '$nim' ");


  	if ($query->num_rows()==1)
  	{
  		return $query->result();
  	}else{
  			return false;
  	}

  }
  
}