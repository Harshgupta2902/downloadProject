
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
		$finalData['tabCard'] = $this->GetQuery->getTabsData();

			// echo "<pre>";
			// print_r($finalData['tabCard']);
		$this->load->view('index', $finalData);
	}
		
	public function product($id){
		$finalData['mainNav'] = $this->GetQuery->getNavData(); 
		$finalData['softData'] = $this->GetQuery->getJoinedSoftwareData($id);
        // echo "<pre>";
        // print_r($finalData['softData']);
		$this->load->view('product', $finalData);
	}

    public function blog($id){
		$finalData['mainNav'] = $this->GetQuery->getNavData();
        $finalData['blogData'] = $this->GetQuery->getBlogData($id);
		// print_r($finalData['blogData'][0]['image']);
        $this->load->view('blog', $finalData);
    }

	public function comments(){
		$software_id =  $this->input->post('software_id');
		$data = array(
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'comment' => $this->input->post('comment'),
			'software_id' => $software_id,
		);
		$this->db->insert('comments', $data);
		redirect('product/'.$software_id);
		// print_r($data);
	}
	


	
    

   
}