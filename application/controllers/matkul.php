<?php

class Matkul extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('m_crud3');
        $this->load->helper('url');
    }

    function matkul() {
        $data['matkul'] = $this->m_crud3->tampil_data()->result();
        $this->load->view('matkul', $data);
    }
    function tambah() {
        $this->load->view('/tamplate/meta');
        $this->load->view('/tamplate/header');
        $this->load->view('/tamplate/sidebar');
        $this->load->view('/matkul/v_input');
        $this->load->view('/tamplate/footer');
    }
    function tambah_aksi() {
        $nama_matkul = $this->input->post('nama_matkul');
        $kode_matkul = $this->input->post('kode_matkul');
        $data = array(
            'nama_matkul' => $nama_matkul,
            'kode_matkul' => $kode_matkul,
        );
        $this->m_crud3->input_data($data, 'matkul');
        redirect('/page/matkul');
    }
    function hapus($id) {
        $where = array('id' => $id);
        $this->m_crud3->hapus_data($where, 'matkul');
        redirect('page/matkul');
    }

    function edit($id) {
        $where = array('id' => $id);
        $data['matkul'] = $this->m_crud3->edit_data($where, 'matkul')->result();
        $this->load->view('/tamplate/meta');
        $this->load->view('/tamplate/header');
        $this->load->view('/tamplate/sidebar');
        $this->load->view('/matkul/v_edit', $data);
        $this->load->view('/tamplate/footer');
    }
    function update() {
        $id = $this->input->post('id');
        $nama_matkul = $this->input->post('nama_matkul');
        $kode_matkul = $this->input->post('kode_matkul');
        $data = array(
            'nama_matkul' => $nama_matkul,
            'kode_matkul' => $kode_matkul,
        );
        $where = array('id' => $id);
        $this->m_crud3->update_data($where, $data, 'matkul');
        redirect('page/matkul');
    }
}