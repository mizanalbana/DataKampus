<?php

class Mahasiswa extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('m_crud');
        $this->load->helper('url');
    }

    function index() {
        $data['mahasiswa'] = $this->m_crud->tampil_data()->result();
        $this->load->view('mahasiswa', $data);
    }
    function tambah() {
        $this->load->view('tamplate/meta');
        $this->load->view('tamplate/header');
        $this->load->view('tamplate/sidebar');
        $this->load->view('/mahasiswa/v_input');
        $this->load->view('tamplate/footer');
    }
    function tambah_aksi() {
        $nama = $this->input->post('nama');
        $npm = $this->input->post('npm');
        $prodi = $this->input->post('prodi');
        $alamat = $this->input->post('alamat');
        $email = $this->input->post('email');
        $data = array(
            'nama' => $nama,
            'npm' => $npm,
            'prodi' => $prodi,
            'alamat' => $alamat,
            'email' => $email
        );
        $this->m_crud->input_data($data, 'mahasiswa');
        redirect('/page/mahasiswa');
    }
    function hapus($id) {
        $where = array('id' => $id);
        $this->m_crud->hapus_data($where, 'mahasiswa');
        redirect('page/mahasiswa');
    }
    function edit($id) {
        $where = array('id' => $id);
        $data['mahasiswa'] = $this->m_crud->edit_data($where, 'mahasiswa')->result();
        $this->load->view('tamplate/meta');
        $this->load->view('tamplate/header');
        $this->load->view('tamplate/sidebar');
        $this->load->view('mahasiswa/v_edit', $data);
        $this->load->view('tamplate/footer');
    }
    function update() {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $npm = $this->input->post('npm');
        $prodi = $this->input->post('prodi');
        $alamat = $this->input->post('alamat');
        $email = $this->input->post('email');
        $data = array(
            'nama' => $nama,
            'npm' => $npm,
            'prodi' => $prodi,
            'alamat' => $alamat,
            'email' => $email
        );
        $where = array('id' => $id);
        $this->m_crud->update_data($where, $data, 'mahasiswa');
        redirect('page/mahasiswa');
    }
}