
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
	


	
    

   
}