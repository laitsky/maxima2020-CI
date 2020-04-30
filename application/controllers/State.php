<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class State extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('State_model');
    }


    public function formListKebutuhan() 
    {
        $this->form_validation->set_rules('nama_ukm', 'Nama UKM', 'trim|required');
        $this->form_validation->set_rules('nama_pj', 'Nama penanggungjawab', 'trim|required');
        $this->form_validation->set_rules('contact_pj', 'Contact penanggungjawab', 'trim|required');
        $this->form_validation->set_rules('deskripsi_kegiatan', 'Deskripsi kegiatan', 'trim|required');

        if(!($this->form_validation->run())) {
            $this->load->view('templates/header');
            $this->load->view('state/form_list_kebutuhan');
            $this->load->view('templates/footer');
        } else {
            $this->State_model->addListKebutuhan();
            redirect('home');
        }
    }
}