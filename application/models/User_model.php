<?php
class User_model extends CI_Model {
    public function get_User($username,$password){
        return $this->db->get_where('users', ['username' => $username, 'password' => $password])->row();
    }
}