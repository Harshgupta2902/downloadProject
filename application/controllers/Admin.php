
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
		$this->load->database();
        $this->load->helper('url');
        $this->load->model('AdminModel');
        $this->load->helper('form');
        $this->load->library('session'); // Load the session library
        $this->load->library('form_validation'); // Set rules for each field

    }

    public function login() {
        $this->load->view('admin/sign-in');
    }

    public function auth() {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $user = $this->AdminModel->validate_user($email, $password);
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('email', $email);
        $query = $this->db->get();
        $userData = $query->result_array();
        if ($user) {
            $this->db->select('*');
            $this->db->from('user');
            $this->db->where('email', $email);
            $query = $this->db->get();
            $userData = $query->result_array();
            $this->session->set_userdata('user_id', $user['id']);
            $this->session->set_userdata('user_data', $userData);

            redirect('Admin/dashboard');
        } else {
            redirect('Admin/login');
        }
    }

    public function dashboard() {
        if ($this->session->userdata('user_id')) {
            $this->load->view('admin/dashboard');
        } else {
            redirect('Admin/login');
        }   
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('Admin/login');
    }

    public function softwares() {
        $softwares['softwares'] = $this->AdminModel->getSoftwares();
        $this->load->view('admin/softwares', $softwares);
    }

    public function blogs() {
        $blogs['blogs'] = $this->AdminModel->getBlogs();
        $this->load->view('admin/blogs',$blogs);
    }

    public function deleteBlog($id) {
        echo $id;
        $this->db->where('id', $id);
        $this->db->delete('blogs');
        redirect('Admin/blogs');

    }
}