<?php

class Dashboard_admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Admin Page';


        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/dashboard');
        $this->load->view('templates_admin/footer');
    }

    // public function registration()
    // {
    //     $this->form_validation->set_rules('name', 'Name', 'required|trim');
    //     $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
    //         'is_unique' => 'This email has already registered!'
    //     ]);
    //     $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
    //         'matches' => 'Password dont match!',
    //         'min_length' => 'Password too short!'
    //     ]);
    //     $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');


    //     if ($this->form_validation->run() == false) {
    //         $data['title'] = 'Tahura User Registration';
    //         $this->load->view('templates_auth/auth_header', $data);
    //         $this->load->view('admin/registration');
    //         $this->load->view('templates_auth/auth_footer');
    //     } else {
    //         $data = [
    //             'name' => htmlspecialchars($this->input->post('name', true)),
    //             'email' => htmlspecialchars($this->input->post('email', true)),
    //             'image' => 'default.jpg',
    //             'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
    //             'role_id' => 1,
    //             'is_active' => 1,
    //             'date_created' => time()
    //         ];

    //         $this->db->insert('user', $data);
    //         $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
    //             Your account has been created! </div>');
    //         redirect('admin/dashboard_admin/registration');
    //     }
    // }
    // public function logout()
    //{
    //   $this->session->unset_userdata('email');
    //  $this->session->unset_userdata('role_id');

    // $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
    //    Your have been logout </div>');
    // redirect('admin/dashboard_admin/registration');
    // }
}
