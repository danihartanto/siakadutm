<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_user');
    	$this->load->library('form_validation');
    	if(!$this->session->userdata('nim')){
    		$this->session->unset_userdata('nim');
    		redirect('auth');
    	}
	}
	public function index(){
		$data['title'] = 'User Page';
		$data['user'] = $this->db->get_where('user',['nim' =>
			$this->session->userdata('nim')])->row_array();


		//$data['title'] = "Admin page";
		$this->load->view('templates/user_header',$data);
		$this->load->view('user/index',$data);
		$this->load->view('templates/user_footer');
	}
	public function krs(){
		$data['title'] = 'KRS page';
		$kelas = $this->M_user->getAllkelas();
		$data['kelas'] = $kelas;
		//$data['matkul'] = $this->M_user->getAllmatkul()->result();

		$matkul = $this->M_user->getAllmatkul(); // memanggil method getAll
	    $data['matkul'] = $matkul; 
	    

		$data['user'] = $this->db->get_where('user',['nim' =>
			$this->session->userdata('nim')])->row_array();

		$this->load->view('templates/user_header',$data);
		$this->load->view('user/krs',$data);
		$this->load->view('templates/user_footer');
	}

	public function khs(){
		$data['title'] = 'KRS page';
		$kelas = $this->M_user->getAlljadwal();
		$data['jadwal'] = $kelas;

		$data['user'] = $this->db->get_where('user',['nim' =>
			$this->session->userdata('nim')])->row_array();

		$this->load->view('templates/user_header',$data);
		$this->load->view('user/khs',$data);
		$this->load->view('templates/user_footer');
	}
	public function tambahMatkul(){
		$this->M_user->tambahdatajadwal();
        $this->session->set_flashdata('flash', 'Ditambahkan');
        redirect('user');
	}

}