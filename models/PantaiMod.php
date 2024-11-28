<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PantaiMod extends CI_Model
{
    public function Pantai()
    {
        return $this->db->get('pantai')->result_array();
    }
    public function data($id)
    {
        return $this->db->get_where('pantai', array('id' => $id))->row();
    }
    public function tambah($data)
    {
        $this->db->insert('pantai', $data);
        return $this->db->insert_id();
    }

    public function perbarui($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('pantai', $data);
    }

    public function hapus($id)
    {
        $this->db->delete('pantai', array('id' => $id));
    }
}