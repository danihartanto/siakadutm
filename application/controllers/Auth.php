<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');

	}

	public function index()
	{
		$this->form_validation->set_rules('nim','Nim','trim|required|min_length[12]');
		$this->form_validation->set_rules('password','Password','required|trim|min_length[8]|is_unique[user.password]');

		if ($this->form_validation->run() == false) {

			$data['title'] = "Login page";

			$this->load->view('templates/auth_header',$data);
			$this->load->view('auth/login');
			$this->load->view('templates/auth_footer');
		} else{
			$this->_login();
		}



	}
	private function _login(){
		$nim = $this->input->post('nim');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['nim' => $nim])->row_array();

        // jika usernya ada
        if ($user) {
            // jika usernya aktif
            if ($user['is_active'] == 1) {
                // cek password
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'nim' => $user['nim'],
                        'role_id' => $user['role_id']
                    ];
                    $this->session->set_userdata($data);
					if ($data['role_id']=='1'){

						redirect('admin');

					} 
					elseif($data['role_id']=='2'){

						redirect('user');

					}
					elseif($data['role_id']=='3'){

						redirect('dosen');
					}
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password!</div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">This email has not been activated!</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Nim belum terdaftar!</div>');
            redirect('auth');
        }
    }


	public function register(){

		$this->form_validation->set_rules('name','Name','required|trim');
		$this->form_validation->set_rules('nim','Nim','required|trim');
		$this->form_validation->set_rules('email','Email','required|trim|valid_email|is_unique[user.email]');
		$this->form_validation->set_rules('password','Password','required|trim|min_length[8]|matches[password2]');
		$this->form_validation->set_rules('password2','Password','required|trim|min_length[8]|matches[password]');
		$this->form_validation->set_rules('alamat','Alamat','required|trim');



		if($this->form_validation->run() == false){
			$data['title'] = "SIAKAD Trunojoyo";
			$this->load->view('templates/auth_header',$data);
			$this->load->view('auth/register');
			$this->load->view('templates/auth_footer');
		} else{
			$data = [
				'name' => htmlspecialchars($this->input->post('name', true)),
				'nim' => $this->input->post('nim'),
				'email' => $this->input->post('email', true),
				'alamat' => $this->input->post('alamat'),
				'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
				'role_id' => $this->input->post('role_id'),
				'is_active' => 1,
				'date_created' => date('l, d-m-Y  h:i:s a')
			];

			$this->db->insert('user',$data);
			$this->session->set_flashdata('message','<div class="alert alert-info" role="alert">
  				Anda Berhasil Daftar!! </div>');
			redirect('auth');
		}

		
	}
	public function logout(){
		$this->session->unset_userdata('nim');
		$this->session->unset_userdata('role_id');
		$this->session->set_flashdata('message','<div class="alert alert-info" role="alert">
  			Anda Berhasil Logout!! </div>');
		redirect('auth');

	}
}
