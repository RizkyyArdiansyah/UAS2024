<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TiketMod extends CI_Model
{
    public function getTiketByUser($user_id)
    {
        return $this->db->get_where('tiket', ['user_id' => $user_id])->result_array();
    }
    public function pesanTiket($data)
    {
        $this->db->insert('tiket', $data);
    }
}