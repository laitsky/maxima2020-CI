<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Panitia extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('State_model');
    }
    public function index()
    {
        $data['list_kebutuhan'] = $this->State_model->getListKebutuhan();
        $this->load->view('templates/panel_header');
        $this->load->view('templates/panel_sidebar');
        $this->load->view('templates/panel_topbar');
        $this->load->view('panitia/index', $data);
        $this->load->view('templates/panel_footer');
    }
}