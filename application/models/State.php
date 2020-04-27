<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class State extends CI_Model {
    public function sendListKebutuhan() 
    {
        $data = array(
            'nama_ukm' => htmlspecialchars($this->input->post('nama_ukm', true)),
            'nama_pj' => htmlspecialchars($this->input->post('nama_pj', true)),
            'contact_pj' => htmlspecialchars($this->input->post('contact_pj', true)),
            'deskripsi_kegiatan' => htmlspecialchars($this->input->post('deskripsi_kegiatan', true)),
            
        )
    }
}