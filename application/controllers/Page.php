<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('m_crud');
        $this->load->model('m_crud1');
        $this->load->model('m_crud2');
        $this->load->model('m_crud3');
        $this->load->model('m_crud4');
        $this->load->helper('url');

    }
    
    public function index()
    {
        // fungsi untuk me-load view home.php
        $this->load->view('auth/login');
    }
    public function mahasiswa()
    {
        // fungsi untuk me-load view home.php
        $data['mahasiswa'] = $this->m_crud->tampil_data()->result();
        $this->load->view('tamplate/meta', $data);
        $this->load->view('tamplate/header');
        $this->load->view('tamplate/sidebar');
        $this->load->view('mahasiswa/data', $data);
        $this->load->view('tamplate/footer');
        // $this->load->view('');
    }

    public function user()
    {
        // fungsi untuk me-load view about.php
        $data['users'] = $this->m_crud1->tampil_data()->result();
        $this->load->view('tamplate/meta', $data);
        $this->load->view('tamplate/header');
        $this->load->view('tamplate/sidebar');
        $this->load->view('user/user', $data);
        $this->load->view('tamplate/footer');
    }

    public function kelas()
    {
        // fungsi untuk me-load view contact.php
        $data['kelas'] = $this->m_crud2->tampil_data()->result();
        $this->load->view('tamplate/meta', $data);
        $this->load->view('tamplate/header');
        $this->load->view('tamplate/sidebar');
        $this->load->view('kelas/kelas', $data);
        $this->load->view('tamplate/footer');
    }
    public function matkul()
    {
        // fungsi untuk me-load view contact.php
        $data['matkul'] = $this->m_crud3->tampil_data()->result();
        $this->load->view('tamplate/meta', $data);
        $this->load->view('tamplate/header');
        $this->load->view('tamplate/sidebar');
        $this->load->view('matkul/matkul', $data);
        $this->load->view('tamplate/footer');
    }
    public function dosen()
    {
        // fungsi untuk me-load view contact.php
        $data['dosen'] = $this->m_crud4->tampil_data()->result();
        $this->load->view('tamplate/meta', $data);
        $this->load->view('tamplate/header');
        $this->load->view('tamplate/sidebar');
        $this->load->view('dosen/dosen', $data);
        $this->load->view('tamplate/footer');
    }
}