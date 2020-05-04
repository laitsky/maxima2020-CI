<?php 

function is_logged_in()
{
    $ci = get_instance();

    if (!($ci->session->userdata('nama'))) {
        $ci->session->set_flashdata('auth_guard', '<div class="alert alert-warning" role="alert">Kamu harus login terlebih dahulu!</div>');
        redirect('auth/login');
    } 
}

function check_access($role_id, $menu_id)
{
    $ci = get_instance();

    $ci->db->where('role_id', $role_id);
    $ci->db->where('menu_id', $menu_id);
    $result = $ci->db->get('user_access_menu');

    if ($result->num_rows() > 0) {
        return "checked='checked'";
    }
}