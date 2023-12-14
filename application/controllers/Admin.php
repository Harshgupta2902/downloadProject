
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->model('AdminModel');
        $this->load->helper('form');
        $this->load->library('session'); // Load the session library
        $this->load->library('form_validation'); // Set rules for each field

        $this->load->library("pagination");

    }

    public function login()
    {
        $this->load->view('admin/sign-in');
    }

    public function auth()
    {
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

            redirect('dashboard');
        } else {
            redirect('login');
        }
    }

    public function logOut()
    {
        $this->session->sess_destroy();
        redirect('login');
    }

    public function dashboard()
    {
        if ($this->session->userdata('user_id')) {
            $dashboard['totalBlogs'] = $this->AdminModel->getTotalBlogs();
            $dashboard['totalSoftwares'] = $this->AdminModel->getTotalSoftwares();
            $dashboard['totalUsers'] = $this->AdminModel->getTotalUsers();
            $dashboard['totalCategory'] = $this->AdminModel->getTotalCategory();
            // print_r($dashboard);
            $this->load->view('admin/dashboard', $dashboard);
        } else {
            redirect('login');
        }
    }


    public function comments()
    {
        if ($this->session->userdata('user_id')) {
            $comments['comments'] = $this->db->query('SELECT * FROM comments ORDER BY timestamp DESC')->result_array();
            // echo"<pre>";
            // print_r($comments);
            $this->load->view('admin/comments', $comments);
        } else {
            redirect('login');
        }
    }

    
    public function softwares()
    {
        if ($this->session->userdata('user_id')) {
            $data = $this->AdminModel->getSoftwares();
            $softwares['softwares'] = $this->AdminModel->organize_softwares_by_relation($data);
            print_r($softwares);
            // $this->load->view('admin/softwares', $softwares);
        } else {
            redirect('login');
        }

    }

    public function blogs()
    {
        if ($this->session->userdata('user_id')) {
            $data['blogs'] = $this->AdminModel->getBlog();
            $this->load->view('admin/blogs', $data);
        } else {
            redirect('login');
        }

    }

    public function deleteBlog($id)
    {
        if ($this->session->userdata('user_id')) {
            $this->db->where('id', $id);
            $this->db->delete('blogs');
            redirect('Admin/blogs');
        } else {
            redirect('login');
        }

    }

    public function addSoftware()
    {

        if ($this->session->userdata('user_id')) {
            $this->load->helper('form');
            $this->load->library('form_validation'); // Set rules for each field
            $this->form_validation->set_rules('title', 'Title', 'required');
            $this->form_validation->set_rules('relation', 'Relation', 'required');
            $this->form_validation->set_rules('logo', 'Logo', 'required');
            $this->form_validation->set_rules('download_url', 'Download URL', 'required');
            $this->form_validation->set_rules('company', 'Company', 'required');
            $this->form_validation->set_rules('free', 'Free', 'required');
            $this->form_validation->set_rules('overview', 'overview', 'required');
            $this->form_validation->set_rules('features', 'features', 'required');
            $this->form_validation->set_rules('requirement', 'requirement', 'required');
            $this->form_validation->set_rules('category', 'Category', 'required');
            $trending = $this->input->post('trending');
            $isTrend = ($trending === null) ? 0 : $trending;
            $data = array(
                'name' => $this->input->post('title'),
                'logo' => $this->input->post('logo'),
                'company' => $this->input->post('company'),
                'free' => $this->input->post('free'),
                'overview' => $this->input->post('overview'),
                'features' => $this->input->post('features'),
                'downloadurl' => $this->input->post('download_url'),
                'requirement' => $this->input->post('requirement'),
                'category' => $this->input->post('category'),
                'description' => $this->input->post('description'),
                'version' => $this->input->post('version'),
                'released_date' => $this->input->post('released_date'),
                'relation' => $this->input->post('relation'),
                'trending' => $isTrend,
            );

            if ($this->form_validation->run() === false) {
                $this->load->view('admin/addsoftware');
            } else {
                $this->db->insert('softdata', $data);
                // print_r($data);
                redirect('addSoftware');
            }
        } else {
            redirect('login');
        }

    }

    public function createBlog()
    {

        if ($this->session->userdata('user_id')) {
            $this->load->view('admin/createBlog');
        } else {
            redirect('login');
        }

    }

    public function save_blog()
    {
        if ($this->session->userdata('user_id')) {
            $data = array(
                'title' => $this->input->post('title'),
                'content' => $this->input->post('content'),
                'category' => $this->input->post('category'),
                'image' => $this->input->post('image'),
            );

            $blog_id = $this->AdminModel->save_blog($data);

            if ($blog_id) {
                redirect('createBlog');
            } else {
                redirect('createBlog');
            }
        } else {
            redirect('login');
        }

    }

    public function update_blog($id)
    {
        if ($this->session->userdata('user_id')) {
            $data = array(
                'title' => $this->input->post('title'),
                'content' => $this->input->post('content'),
                'category' => $this->input->post('category'),
                'image' => $this->input->post('image'),
            );

            $blog_id = $this->AdminModel->updateBlog($id, $data);

            if ($blog_id) {
                redirect('blogs');
            } else {
                redirect('blogs');
            }
        } else {
            redirect('login');
        }

    }

    public function editBlog($id)
    {

        if ($this->session->userdata('user_id')) {
            $blogs['blogData'] = $this->db->query("select * from blogs where id = '$id' ")->result_array();
            // $this->load->view('admin/editBlog',$blogs);
            print_r($blogs);
        } else {
            redirect('login');
        }

    }

}