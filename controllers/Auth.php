<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller 
{
    private function login($type) {
        if ($this->session->userdata("{$type}_sess")) {
            redirect("{$type}/dashboard");
        }

        if ($this->input->post()) {
            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');

            if ($this->form_validation->run() === TRUE) {
                $username = $this->input->post('username');
                $password = $this->input->post('password');

                if ($type == 'user') {
                    $user = $this->AuthMod->check_user_login($username, $password);
                    if ($user) {
                        $this->session->set_userdata('user_sess', $user);
                        redirect('user/dashboard');
                    }
                } else {
                    $admin = $this->AuthMod->check_admin_login($username, $password);
                    if ($admin) {
                        $this->session->set_userdata('admin_sess', $admin);
                        redirect('admin/dashboard');
                    }
                }
                $this->session->set_flashdata('error', 'Oopps!! Username atau Passwod salah');
            }
        }

        $this->load->view("login_{$type}");
    }

    public function index() {
        $this->login('user');
    }

    public function admin() {
        $this->login('admin');
    }

    public function user_regist() {
        if ($this->input->post()) {
            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
            $this->form_validation->set_rules('password_confirm', 'Password Confirmation', 'required|matches[password]');

            if ($this->form_validation->run() === TRUE) {
                $username = $this->input->post('username');
                $email = $this->input->post('email');
                $password = $this->input->post('password');

                $this->AuthMod->register_user($username, $email, $password);
                $this->session->set_flashdata('success', 'Registration successful! Please login.');
                redirect('login');
            }
        }

        $this->load->view('register_user');
    }

    public function admin_regist() {
        if ($this->input->post()) {
            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
            $this->form_validation->set_rules('password_confirm', 'Password Confirmation', 'required|matches[password]');

            if ($this->form_validation->run() === TRUE) {
                $username = $this->input->post('username');
                $password = $this->input->post('password');

                $this->AuthMod->register_admin($username, $password);
                $this->session->set_flashdata('success', 'Registration successful! Please login.');
                redirect('admin');
            }
        }

        $this->load->view('register_admin');
    }

    public function user_logout() {
        $this->session->unset_userdata('user_sess');
        $this->session->sess_destroy();
        redirect('login');
    }

    public function admin_logout() {
        $this->session->unset_userdata('admin_sess');
        $this->session->sess_destroy();
        redirect('admin');
    }
}