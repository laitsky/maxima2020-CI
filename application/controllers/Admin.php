<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
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

    public function kelola_menu()
    {
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('nama_menu', 'nama menu', 'required|trim');

        if (!($this->form_validation->run())) {
            $this->load->view('templates/panel_header');
            $this->load->view('templates/panel_sidebar');
            $this->load->view('templates/panel_topbar');
            $this->load->view('admin/kelola_menu', $data);
            $this->load->view('templates/panel_footer');
        } 
        else {
            $nama_menu = $this->input->post('nama_menu');
            
            $this->db->insert('user_menu', ['menu' => $nama_menu]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> simple success alert—check it out!</div>');
            redirect('admin/kelola_menu');
        }
    }

    public function kelola_submenu() 
    {
        $this->load->model('Admin_model', 'admin');
        $data['sub_menu'] = $this->admin->get_sub_menu();

        $this->form_validation->set_rules('title', 'judul', 'required|trim');
        $this->form_validation->set_rules('url', 'URL', 'required|trim');
        $this->form_validation->set_rules('icon', 'icon', 'required|trim');

        if(!($this->form_validation->run())) {
            $this->load->view('templates/panel_header');
            $this->load->view('templates/panel_sidebar');
            $this->load->view('templates/panel_topbar');
            $this->load->view('admin/kelola_submenu', $data);
            $this->load->view('templates/panel_footer');
        } 
        else {
            $is_active = $this->input->post('is_active');
            echo $is_active;
        }
    }
}