<?php
class Mahasiswa extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_mahasiswa');
        $this->load->library('form_validation');
        if(!$this->session->userdata('nim')){
            redirect('auth');
        }
    }

    public function index()
    {
        $data['title'] = 'Daftar Mahasiswa';

        $data['mahasiswa'] = $this->M_mahasiswa->getAllMahasiswa();

        if ($this->input->post('keyword')) {

            $data['mahasiswa'] = $this->M_mahasiswa->cariDataMahasiswa();
        }
        $this->load->view('templates/admin_header', $data);
        $this->load->view('admin/mahasiswa/index', $data);
        $this->load->view('templates/admin_footer');
    }

    public function tambahdata()
    {
        $data['title'] = 'Tambah Data Mahasiswa';
        /* memberikan form validation untuk */
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('npm', 'NPM', 'required|numeric');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');


        if ($this->form_validation->run() == FALSE) {
                $this->load->view('templates/admin_header', $data);
                $this->load->view('admin/mahasiswa/tambah');
                $this->load->view('templates/admin_footer');
            } else {
                $this->M_mahasiswa->tambahdatamahasiswa();
                $this->session->set_flashdata('flash', 'Ditambahkan');
                redirect('mahasiswa');
            }
    }

    public function hapus($id)
    {
        $this->M_mahasiswa->hapusDataMahasiswa($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('mahasiswa');
    }


    public function detail($id)
    {
        $data['title'] = 'Detail Data Mahasiswa';

        $data['mahasiswa'] = $this->M_mahasiswa->ambildatamahasiswadgnId($id);
        $this->load->view('templates/admin_header', $data);
        $this->load->view('admin/mahasiswa/detail', $data);
        $this->load->view('templates/admin_footer');
    }


    public function ubah($id)
    {
        $data['title'] = 'Form Ubah Data Mahasiswa';
        $data['mahasiswa'] = $this->M_mahasiswa->ambildatamahasiswadgnId($id);
        $data['jurusan'] = ['Teknik Informatika', 'Bahasa Inggris', 'Manajemen Informatika', 'Bahasa Indonesia', 'Teknik Komputer'];


        /* memberikan form validation untuk */
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('npm', 'NPM', 'required|numeric');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');


        if ($this->form_validation->run() == FALSE) {
                $this->load->view('templates/admin_header', $data);
                $this->load->view('admin/mahasiswa/ubah', $data);
                $this->load->view('templates/admin_footer');
            } else {
                $this->M_mahasiswa->ubahdatamahasiswa();
                $this->session->set_flashdata('flash', 'Diubah');
                redirect('mahasiswa');
            }
    }
}
