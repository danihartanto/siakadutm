<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_admin');
    	$this->load->library('form_validation');
    	if(!$this->session->userdata('nim')){
    		redirect('auth');
    	}
	}
	public function index(){
		$data['title'] = 'Admin page';
		$data["user"] = $this->M_admin->getAllUser();
		$data['user'] = $this->db->get_where('user',['nim' => $this->session->userdata('nim')])->row_array();

		$data['title'] = "Admin page";
		$this->load->view('templates/admin_header',$data);
		$this->load->view('admin/index',$data);
		$this->load->view('templates/admin_footer');
		
	}
	
	public function data_user(){
		$data['user'] = $this->M_admin->getAllUser();
		$data['title'] = 'Data User';

		//$data['title'] = "Admin page";
		$this->load->view('templates/admin_header',$data);
		$this->load->view('admin/data_user',$data);
		$this->load->view('templates/admin_footer');
	}

	public function deleteData($id){
		$this->M_admin->hapus_data($id);
		$this->session->set_flashdata('hapus_sukses','<div class="alert alert-info" role="alert">
  				Data User berhasil di Hapus!! </div>');
		redirect('/admin/data_user');
	}
	
	public function ubahDataUser($id_user) 
    {
        $data['title'] = 'Form Ubah Data Mahasiswa';
        $data['user'] = $this->M_admin->ambildataIdUser($id_user);

        /* memberikan form validation untuk */
        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('nim', 'nim', 'required');
        $this->form_validation->set_rules('email', 'email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'password', 'required|trim|min_length[8]');
        $this->form_validation->set_rules('alamat', 'alamat', 'required');


        if ($this->form_validation->run() == FALSE) {
                $this->load->view('templates/admin_header', $data);
                $this->load->view('admin/ubah', $data);
                $this->load->view('templates/admin_footer');
            } else {
                $this->M_admin->ubahdataUser();
                $this->session->set_flashdata('flash', 'Diubah');
                redirect('admin/data_user');
            }
    } 


}