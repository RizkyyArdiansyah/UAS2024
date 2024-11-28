<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthMod extends CI_Model 
{
    public function check_user_login($username, $password) {
        $this->db->where('username', $username);
        $query = $this->db->get('user');
        
        if ($query->num_rows() > 0) {
            $user = $query->row();
            if (password_verify($password, $user->password)) {
                return $user;
            }
        }
        return false;
    }

    public function check_admin_login($username, $password) {
        $this->db->where('username', $username);
        $query = $this->db->get('admin');
        
        if ($query->num_rows() > 0) {
            $admin = $query->row();
            if (password_verify($password, $admin->password)) {
                return $admin;
            }
        }
        return false;
    }

    public function register_user($username, $email, $password) {
        $data = array(
            'username' => $username,
            'email' => $email,
            'password' => password_hash($password, PASSWORD_DEFAULT),
        );
        return $this->db->insert('user', $data);
    }

    public function register_admin($username, $password) {
        $data = array(
            'username' => $username,
            'password' => password_hash($password, PASSWORD_DEFAULT),
        );
        return $this->db->insert('admin', $data);
    }
}