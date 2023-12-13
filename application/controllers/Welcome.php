
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
		$data = $this->GetQuery->getTabsData();
        $finalData['tabCard'] = $this->GetQuery->organize_tabs_by_relation($data);

			// echo "<pre>";
			// print_r($finalData['mainNav']);
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
	


	
    

   
}