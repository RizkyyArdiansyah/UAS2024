<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function dashboard()
    {
        $user_id = $this->session->userdata('user_sess')['id'];
        $data['tiket'] = $this->TiketModel->getTiketByUser($user_id);

        $this->load->view('user', $data);
    }

    public function pesanTiket()
    {
        $user_id = $this->session->userdata('user_sess')['id'];

        $data = [
            'user_id' => $user_id,
            'destinasi' => $this->input->post('destinasi'),
            'tanggal' => $this->input->post('tanggal'),
            'jumlah' => $this->input->post('jumlah'),
        ];

        $this->TiketModel->pesanTiket($data);
        redirect('user/dashboard');
    }
}
