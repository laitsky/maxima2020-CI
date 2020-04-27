<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class State_model extends CI_Model {
    
    public function addListKebutuhan() 
    {
        $data = array(
            'nama_ukm' => htmlspecialchars($this->input->post('nama_ukm', true)),
            'nama_pj' => htmlspecialchars($this->input->post('nama_pj', true)),
            'contact_pj' => htmlspecialchars($this->input->post('contact_pj', true)),
            'deskripsi_kegiatan' => htmlspecialchars($this->input->post('deskripsi_kegiatan', true)),
            'waktu' => htmlspecialchars($this->input->post('waktu', true)),
            'ruangan' => htmlspecialchars($this->input->post('ruangan', true)),
            'kuota_peserta' => htmlspecialchars($this->input->post('kuota', true)),
            'jml_meja' => htmlspecialchars($this->input->post('jml_meja', true)),
            'jml_kursi' => htmlspecialchars($this->input->post('jml_kursi', true)),
            'jml_kabelroll' => htmlspecialchars($this->input->post('jml_kabelroll', true)),
            'jml_mic' => htmlspecialchars($this->input->post('jml_mic', true)),
            'jml_soundsystem' => htmlspecialchars($this->input->post('jml_soundsystem', true)),
            'jml_layar' => htmlspecialchars($this->input->post('jml_layar', true)),
            'jml_proyektor' => htmlspecialchars($this->input->post('jml_proyektor', true)),
            'jml_pc' => htmlspecialchars($this->input->post('jml_pc', true)),
            'perlengkapan_peserta' => htmlspecialchars($this->input->post('perlengkapan_peserta', true))
        );

        $this->db->insert('list_kebutuhan_state', $data);
    }
}