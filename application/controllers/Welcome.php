
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
		$this->load->database();
        $this->load->helper('url');
		$this->load->model('GetQuery');
        $this->load->helper('form');
        $this->load->library('form_validation'); // Set rules for each field

    }

	public function index()	
	{
		$finalData['mainNav'] = $this->GetQuery->getNavData();
		$finalData['blogs'] = $this->GetQuery->getBlogs();
		$finalData['tabCard'] = $this->GetQuery->tabCard('App');
        // echo "<pre>";
        // print_r($finalData['tabCard']);
		$this->load->view('index', $finalData);
	}
		
	public function product($title){	
		$originalText = $title;
		$cleanedText = str_replace('-', ' ', $originalText);
		$finalData['mainNav'] = $this->GetQuery->getNavData(); 
		$finalData['softData'] = $this->GetQuery->getJoinedSoftwareData($cleanedText);
        // echo "<pre>";
        // print_r($finalData['softData']);
		$this->load->view('product', $finalData);
	}

    public function blog($id){
		$finalData['mainNav'] = $this->GetQuery->getNavData();
        $finalData['blogData'] = $this->GetQuery->getBlogData($id);
        $this->load->view('blog', $finalData);
    }
	
    public function createBlog(){
        $this->load->view('Assets/createBlog');
    }

    public function save_blog() {
        $data = array(
            'title' => $this->input->post('title'),
            'content' => $this->input->post('content'),
            'category' => $this->input->post('category'),
            'image' => $this->input->post('image'),
        );

        $blog_id = $this->GetQuery->save_blog($data);

        if ($blog_id) {
            redirect('Welcome/createBlog');
        } else {
            redirect('Welcome/createBlog');
        }
    }

	public function addSoftware() {
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
            'category' => $this->input->post('category'),
            'description' => $this->input->post('description'),
            'version' => $this->input->post('version'),
            'released_date' => $this->input->post('released_date'),
        );
        $data1 = array(
            'name' => $this->input->post('title'),
            'relation' => $this->input->post('relation'),
            'category' => $this->input->post('category'),
        );       
       
        if ($this->form_validation->run() === FALSE) {
            $this->load->view('Assets/addsoftware');
        } else {
			$this->db->insert('software', $data1);
			$this->db->insert('softdata', $data);
            redirect('Welcome/addSoftware');

            // $this->load->view('Assets/addsoftware');

        }
    }
    

   
}