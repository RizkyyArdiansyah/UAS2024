<?php
defined('BASEPATH') or exit('No direct script access allowed');

class GunungMod extends CI_Model
{
    public function Gunung()
    {
        return $this->db->get('gunung')->result_array();
    }
    public function data($id)
    {
        return $this->db->get_where('gunung', array('id' => $id))->row();
    }
    public function tambah($data)
    {
        $this->db->insert('gunung', $data);
        return $this->db->insert_id();
    }

    public function perbarui($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('gunung', $data);
    }

    public function hapus($id)
    {
        $this->db->delete('gunung', array('id' => $id));
    }
}