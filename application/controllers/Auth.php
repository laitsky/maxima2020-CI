<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function login()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if(!($this->form_validation->run())) {
            $this->load->view('templates/header');
            $this->load->view('auth/login');
            $this->load->view('templates/footer');
        } else {
            $this->_login();
        }
    }

    private function _login() 
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if($user) {
            if ($user['is_active'] == 1) {
                if(password_verify($password, $user['password'])) {
                    $data = array(
                        'nama' => $user['nama'],
                        'email' => $user['email'],
                        'role_id' => $user['role_id']
                    );
                    $this->session->set_userdata($data);
                    if ($user['role_id'] == 1) {
                        redirect('admin');
                    } elseif ($user['role_id'] == 2) {
                        redirect('panitia');
                    } else {
                        redirect('mahasiswa');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password yang dimasukkan salah!</div>');
                    redirect('auth/login');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email tidak terdaftar!</div>');
                redirect('auth/login') ;
            }
        }
    }

    public function daftar()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('nim', 'NIM', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('jurusan', 'Jurusan', 'required|trim');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[6]|matches[password2]');
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
        
        if (!($this->form_validation->run())) {
            $this->load->view('templates/header');
            $this->load->view('auth/daftar');
            $this->load->view('templates/footer');
        } else {
            $email = $this->input->post('email', true);

            $data = array(
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'nim' => htmlspecialchars($this->input->post('nim', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'jurusan' => htmlspecialchars($this->input->post('jurusan', true)),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 1
            );

            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Registrasi akun MAXIMA Berhasil!</div>');
            redirect('home');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('nama');
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');
     
        $this->session->set_flashdata('logout_msg', '<div class="alert alert-success" role="alert">Kamu berhasil logout!</div>');
        redirect('auth/login');
    }
}
