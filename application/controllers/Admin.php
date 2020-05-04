<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('State_model');
        is_logged_in();
    }

    public function index()
    {
        $data['list_kebutuhan'] = $this->State_model->getListKebutuhan();
        $this->load->view('templates/panel_header');
        $this->load->view('templates/panel_sidebar');
        $this->load->view('templates/panel_topbar');
        $this->load->view('admin/index', $data);
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
        } else {
            $nama_menu = $this->input->post('nama_menu');

            $this->db->insert('user_menu', ['menu' => $nama_menu]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Menu berhasil ditambahkan!</div>');
            redirect('admin/kelola_menu');
        }
    }

    public function kelola_submenu()
    {
        $this->load->model('Admin_model', 'admin');
        $data['sub_menu'] = $this->admin->get_sub_menu();
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('title', 'judul', 'required|trim');
        $this->form_validation->set_rules('url', 'URL', 'required|trim');
        $this->form_validation->set_rules('icon', 'icon', 'required|trim');

        if (!($this->form_validation->run())) {
            $this->load->view('templates/panel_header');
            $this->load->view('templates/panel_sidebar');
            $this->load->view('templates/panel_topbar');
            $this->load->view('admin/kelola_submenu', $data);
            $this->load->view('templates/panel_footer');
        } else {
            if (!($this->input->post('is_active'))) {
                $is_active = 0;
            } else {
                $is_active = 1;
            }

            $data = [
                'title' => $this->input->post('title'),
                'menu_id' => $this->input->post('menu_id'),
                'url' => $this->input->post('url'),
                'icon' => $this->input->post('icon'),
                'is_active' => $is_active
            ];

            $this->db->insert('user_sub_menu', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Submenu berhasil ditambahkan!</div>');
            redirect('admin/kelola_menu');
        }
    }

    public function role()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['role'] = $this->db->get('user_role')->result_array();

        $this->load->view('templates/panel_header');
        $this->load->view('templates/panel_sidebar');
        $this->load->view('templates/panel_topbar');
        $this->load->view('admin/role', $data);
        $this->load->view('templates/panel_footer');
    }

    public function role_access($role_id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();
        $this->db->where('id !=', 1);
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->load->view('templates/panel_header');
        $this->load->view('templates/panel_sidebar');
        $this->load->view('templates/panel_topbar');
        $this->load->view('admin/role_access', $data);
        $this->load->view('templates/panel_footer');
    }

    public function change_access()
    {
        $menu_id = $this->input->post('menuId');
        $role_id = $this->input->post('roleId');

        $data = [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ];

        $result = $this->db->get_where('user_access_menu', $data);

        if ($result->num_rows() < 1) {
            $this->db->insert('user_access_menu', $data);
        } else {
            $this->db->delete('user_access_menu', $data);
        }

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Access Changed!</div>');
    }

    public function lkstate()
    {
        $this->load->view('templates/panel_header');
        $this->load->view('templates/panel_sidebar');
        $this->load->view('templates/panel_topbar');
        $this->load->view('admin/lkstate');
        $this->load->view('templates/panel_footer');
    }

    public function truncate_lkstate()
    {
        $this->db->truncate('list_kebutuhan_state');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Tabel berhasil ditruncate!</div>');
        redirect('admin/lkstate');
    }
}
