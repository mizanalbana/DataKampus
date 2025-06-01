<?php

class Auth extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
    }

    public function login() {
        if ($this->session->userdata('logged_in')) {
            redirect('page/user');
        }

        $this->load->view('page/index');
    }

    public function login_action() {
        $username = $this->input->post('username');
        $password = md5($this->input->post('password')); // gunakan md5 di sini

        $user = $this->User_model->get_user($username, $password);

        if ($user) {
            $this->session->set_userdata([
                'user_id' => $user->id,
                'username' => $user->username,
                'logged_in' => true
            ]);
            redirect('page/user');
        } else {
            $this->session->set_flashdata('error', 'Username atau password salah');
            redirect('page/index');
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('page/index');
    }
    public function register() {
        $this->load->view('auth/register');
    }
    public function register_action() {
        $username = $this->input->post('username');
        $password = md5($this->input->post('password')); // hash md5
    
        // Cek apakah username sudah ada
        $existing = $this->db->get_where('users', ['username' => $username])->row();
        if ($existing) {
            $this->session->set_flashdata('error', 'Username sudah digunakan');
            redirect('auth/register');
            return;
        }
    
        $data = [
            'username' => $username,
            'password' => $password
        ];
    
        $this->db->insert('users', $data);
    
        $this->session->set_flashdata('success', 'Registrasi berhasil! Silakan login.');
        redirect('page/index');
    }
}
   
    


?>