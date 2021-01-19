<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_dosen');
    	$this->load->library('form_validation');
    	if(!$this->session->userdata('nim')){
    		redirect('auth');
    	}
	}

	public function index(){
		$data['title'] = 'Dosen Page';
		$data['user'] = $this->db->get_where('user',['nim' =>
			$this->session->userdata('nim')])->row_array();
		$data['user_role'] = $this->db->get_where('user_role',['id_role' =>
			$this->session->userdata('role')])->row_array();

		//$data['title'] = "Admin page";
		$this->load->view('templates/dosen_header',$data);
		$this->load->view('dosen/index',$data,$data);
		$this->load->view('templates/dosen_footer');
	}



	public function data_matkul(){
		$data['database'] = $this->M_dosen->get_all_data();
		$data['title'] = 'Data Mata Kuliah';
		$data['matkul'] = $this->db->get_where('matkul',['kode_matkul']);

		//$data['title'] = "Admin page";
		$this->load->view('templates/dosen_header',$data);
		$this->load->view('dosen/data_matkul',$data);
		$this->load->view('templates/dosen_footer');
	}

	public function cekkodematkul()
    {
        $query = $this->db->query("SELECT MAX(kode_matkul) as kode_matkul from matkul");
        $hasil = $query->row();
        return $hasil->kode_matkul;
    }


		public function tambahmatkul(){

		$this->form_validation->set_rules('nama_matkul','Nama Matkul','required|trim');
		$this->form_validation->set_rules('sks','SKS','required|trim');

		if($this->form_validation->run() == false){
			$data['title'] = "Tambah Mata Kuliah";
			$this->load->view('templates/dosen_header',$data);
			$this->load->view('dosen/tambahmatkul');
			$this->load->view('templates/dosen_footer');
		} else{

			$data = [
				'kode_matkul' => $this->input->post('kode_matkul'),
				'nama_matkul' => htmlspecialchars($this->input->post('nama_matkul', true)),
				'sks' => $this->input->post('sks'),
				'date_created' => date('l, d-m-Y  h:i:s a')
				
			];

			$this->db->insert('matkul',$data);
			$this->session->set_flashdata('message','<div class="alert alert-info" role="alert">
  				Data berhasil di tambahkan </div>');
			redirect('dosen/data_matkul');
		}

		
	}

		public function hapusdata($kode_matkul)
	{
		$this->M_dosen->hapus_matkul($kode_matkul);
		$this->session->set_flashdata('hapus_sukses','Data $nama_matkul berhasil di hapus');
		redirect('dosen/data_matkul');
	}

	

	public function updatematkul(){

		$this->form_validation->set_rules('nama_matkul','Nama Matkul','required|trim');
		$this->form_validation->set_rules('sks','SKS','required|trim');
		$kondisi = ['kode_matkul' => $this->input->post('kode_matkul')];

		if($this->form_validation->run() == false){
			$data['title'] = "Tambah Mata Kuliah";
			$this->load->view('templates/dosen_header',$data);
			$this->load->view('dosen/updatematkul');
			$this->load->view('templates/dosen_footer');
		} else{
			$data = [
				'nama_matkul' => htmlspecialchars($this->input->post('nama_matkul', true)),
				'sks' => $this->input->post('sks'),
				'date_created' => date('l, d-m-Y ')
			];

			$this->db->update('matkul',$data,$kondisi);
			$this->session->set_flashdata('message','<div class="alert alert-info" role="alert">
  				Data berhasil di tambahkan </div>');
			redirect('dosen/data_matkul');
		}

		
	}
}