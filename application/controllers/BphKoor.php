<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BphKoor extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('State_model', 'state');
        is_logged_in();
    }

    public function list_kebutuhan()
    {
        $data['list_kebutuhan'] = $this->state->getListKebutuhan();

        $this->load->view('templates/panel_header');
        $this->load->view('templates/panel_sidebar');
        $this->load->view('templates/panel_topbar');
        $this->load->view('state/tabel_list_kebutuhan', $data);
        $this->load->view('templates/panel_footer');
    }
}