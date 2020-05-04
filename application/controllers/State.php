<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class State extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('State_model', 'state');
    }


    public function formListKebutuhan() 
    {
        $this->form_validation->set_rules('nama_ukm', 'Nama UKM', 'trim|required');
        $this->form_validation->set_rules('nama_pj', 'Nama Penanggungjawab', 'trim|required');
        $this->form_validation->set_rules('contact_pj', 'Contact Penanggungjawab', 'trim|required');
        $this->form_validation->set_rules('deskripsi_kegiatan', 'Deskripsi Kegiatan', 'trim|required');
        $this->form_validation->set_rules('waktu', 'Waktu', 'trim|required');
        $this->form_validation->set_rules('perlengkapan_peserta', 'Perlengkapan Peserta', 'trim|required');

        if(!($this->form_validation->run())) {
            $this->load->view('templates/header');
            $this->load->view('state/form_list_kebutuhan');
            $this->load->view('templates/footer');
        } else {
            $this->state->addListKebutuhan();
            $this->session->set_flashdata('message', '<div class="alert alert-success mt-3" role="alert">Terima kasih! List kebutuhan kamu sudah berhasil dikirimkan!</div>');
            redirect('state/formListKebutuhan');
        }
    }
}