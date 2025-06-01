<?php

class User extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('m_crud1');
        $this->load->helper('url');
    }

    function user() {
        $data['users'] = $this->m_crud1->tampil_data()->result();
        $this->load->view('user', $data);
    }
    function tambah() {
        $this->load->view('/tamplate/meta');
        $this->load->view('/tamplate/header');
        $this->load->view('/tamplate/sidebar');
        $this->load->view('/user/v_input');
        $this->load->view('/tamplate/footer');
    }
    function tambah_aksi() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $data = array(
            'username' => $username,
            'password' => $password,
        );
        $this->m_crud1->input_data($data, 'users');
        redirect('/page/user');
    }
    function hapus($id) {
        $where = array('id' => $id);
        $this->m_crud1->hapus_data($where, 'users');
        redirect('page/user');
    }
    function edit($id) {
        $where = array('id' => $id);
        $data['users'] = $this->m_crud1->edit_data($where, 'users')->result();
        $this->load->view('/tamplate/meta');
        $this->load->view('/tamplate/header');
        $this->load->view('/tamplate/sidebar');
        $this->load->view('/user/v_edit', $data);
        $this->load->view('/tamplate/footer');
    }
    function update() {
        $id = $this->input->post('id');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $data = array(
            'username' => $username,
            'password' => $password,
        );
        $where = array('id' => $id);
        $this->m_crud1->update_data($where, $data, 'users');
        redirect('page/user');
    }
}