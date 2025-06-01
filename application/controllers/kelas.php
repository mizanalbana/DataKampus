<?php

class Kelas extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('m_crud2');
        $this->load->helper('url');
    }

    function kelas() {
        $data['kelas'] = $this->m_crud2->tampil_data()->result();
        $this->load->view('kelas', $data);
    }
    function tambah() {
        $this->load->view('/tamplate/meta');
        $this->load->view('/tamplate/header');
        $this->load->view('/tamplate/sidebar');
        $this->load->view('/kelas/v_input');
        $this->load->view('/tamplate/footer');
    }
    function tambah_aksi() {
        $nama_kelas = $this->input->post('nama_kelas');
        $kode_kelas = $this->input->post('kode_kelas');
        $data = array(
            'nama_kelas' => $nama_kelas,
            'kode_kelas' => $kode_kelas,
        );
        $this->m_crud2->input_data($data, 'kelas');
        redirect('/page/kelas');
    }
    function hapus($id) {
        $where = array('id' => $id);
        $this->m_crud2->hapus_data($where, 'kelas');
        redirect('page/kelas');
    }

    function edit($id) {
        $where = array('id' => $id);
        $data['kelas'] = $this->m_crud2->edit_data($where, 'kelas')->result();
        $this->load->view('/tamplate/meta');
        $this->load->view('/tamplate/header');
        $this->load->view('/tamplate/sidebar');
        $this->load->view('/kelas/v_edit', $data);
        $this->load->view('/tamplate/footer');
    }
    function update() {
        $id = $this->input->post('id');
        $nama_kelas = $this->input->post('nama_kelas');
        $kode_kelas = $this->input->post('kode_kelas');
        $data = array(
            'nama_kelas' => $nama_kelas,
            'kode_kelas' => $kode_kelas,
        );
        $where = array('id' => $id);
        $this->m_crud2->update_data($where, $data, 'kelas');
        redirect('page/kelas');
    }
}