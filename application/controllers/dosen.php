<?php

class Dosen extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('m_crud4');
        $this->load->helper('url');
    }

    function dosen() {
        $data['dosen'] = $this->m_crud4->tampil_data()->result();
        $this->load->view('dosen', $data);
    }
    function tambah() {
        $this->load->view('/tamplate/meta');
        $this->load->view('/tamplate/header');
        $this->load->view('/tamplate/sidebar');
        $this->load->view('/dosen/v_input');
        $this->load->view('/tamplate/footer');
    }
    function tambah_aksi() {
        $nama_dosen = $this->input->post('nama_dosen');
        $fakultas = $this->input->post('fakultas');
        $kode_dosen = $this->input->post('kode_dosen');
        $data = array(
            'nama_dosen' => $nama_dosen,
            'fakultas' => $fakultas,
            'kode_dosen' => $kode_dosen,
        );
        $this->m_crud4->input_data($data, 'dosen');
        redirect('/page/dosen');
    }
    function hapus($id) {
        $where = array('id' => $id);
        $this->m_crud4->hapus_data($where, 'dosen');
        redirect('page/dosen');
    }

    function edit($id) {
        $where = array('id' => $id);
        $data['dosen'] = $this->m_crud4->edit_data($where, 'dosen')->result();
        $this->load->view('/tamplate/meta');
        $this->load->view('/tamplate/header');
        $this->load->view('/tamplate/sidebar');
        $this->load->view('/dosen/v_edit', $data);
        $this->load->view('/tamplate/footer');
    }
    function update() {
        $id = $this->input->post('id');
        $nama_dosen = $this->input->post('nama_dosen');
        $fakultas = $this->input->post('fakultas');
        $kode_dosen = $this->input->post('kode_dosen');
        $data = array(
            'nama_dosen' => $nama_dosen,
            'fakultas' => $fakultas,
            'kode_dosen' => $kode_dosen,
        );
        $where = array('id' => $id);
        $this->m_crud4->update_data($where, $data, 'dosen');
        redirect('page/dosen');
    }
}