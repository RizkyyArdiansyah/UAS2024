<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function dashboard()
    {
        $data['pantai'] = $this->PantaiMod->Pantai();
        $data['gunung'] = $this->GunungMod->Gunung();
        $this->load->view('admin', $data);
    }

    public function tambah_pg()
    {
        $this->load->view('tambah');
    }

    private function tambah_item($model)
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required|numeric');
        $this->form_validation->set_rules('lat', 'Latitude', 'required|numeric');
        $this->form_validation->set_rules('lon', 'Longitude', 'required|numeric');
        
        if ($this->form_validation->run() === FALSE) {
            $this->session->set_flashdata('error', validation_errors());
            redirect('admin/tambah_pg');
        } else {
            $data = array(
                'nama' => $this->input->post('nama'),
                'deskripsi' => $this->input->post('deskripsi'),
                'harga' => $this->input->post('harga'),
                'lat' => $this->input->post('lat'),
                'lon' => $this->input->post('lon'),
                'img' => $this->input->post('img'),
            );
            $model->tambah($data);
            $this->session->set_flashdata('success', 'Item berhasil ditambahkan.');
            redirect('admin');
        }
    }

    private function update_item($model, $id)
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required|numeric');
        $this->form_validation->set_rules('lat', 'Latitude', 'required|numeric');
        $this->form_validation->set_rules('lon', 'Longitude', 'required|numeric');
        
        if ($this->form_validation->run() === FALSE) {
            $this->session->set_flashdata('error', validation_errors());
            redirect('admin/data_pt/'.$id);
        } else {
            $data = array(
                'nama' => $this->input->post('nama'),
                'deskripsi' => $this->input->post('deskripsi'),
                'harga' => $this->input->post('harga'),
                'lat' => $this->input->post('lat'),
                'lon' => $this->input->post('lon'),
                'img' => $this->input->post('img'),
            );
            $model->perbarui($id, $data);
            $this->session->set_flashdata('success', 'Item berhasil diperbarui.');
            redirect('admin');
        }
    }

    private function delete_item($model, $id)
    {
        $model->hapus($id);
        $this->session->set_flashdata('success', 'Item berhasil dihapus.');
        redirect('admin');
    }

    public function tambah_pt()
    {
        $this->tambah_item($this->PantaiMod);
    }

    public function tambah_gn()
    {
        $this->tambah_item($this->GunungMod);
    }

    public function data_pt($id)
    {
        $data['pantai'] = $this->PantaiMod->data($id);
        $this->load->view('edit', $data);
    }

    public function data_gn($id)
    {
        $data['gunung'] = $this->GunungMod->data($id);
        $this->load->view('edit', $data);
    }

    public function perbarui_pt($id)
    {
        $this->update_item($this->PantaiMod, $id);
    }

    public function perbarui_gn($id)
    {
        $this->update_item($this->GunungMod, $id);
    }

    public function hapus_pt($id)
    {
        $this->delete_item($this->PantaiMod, $id);
    }

    public function hapus_gn($id)
    {
        $this->delete_item($this->GunungMod, $id);
    }
}