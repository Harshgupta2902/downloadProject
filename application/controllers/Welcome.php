
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
		$finalData['topCategories'] = $this->GetQuery->get_top_random_categories(12);
        $finalData['trending_softwares'] = $this->GetQuery->trending_softwares();
        $finalData['windows'] = $this->GetQuery->top_softwares_by_os('windows');
        $finalData['android'] = $this->GetQuery->top_softwares_by_os('android');
        // echo "<pre>";
        // print_r($finalData['android']);
		$this->load->view('index', $finalData);
	}


	public function product($softwareslug){
		$finalData['mainNav'] = $this->GetQuery->getNavData(); 
		$finalData['softData'] = $this->GetQuery->getProductDetails($softwareslug);
		$subCatQuery = $this->db->query("SELECT sub_category_slug FROM softwares WHERE slug='$softwareslug'");
		$subCatResult = $subCatQuery->row();
		$subCat = $subCatResult->sub_category_slug;
		$finalData['related_softwares'] = $this->GetQuery->get_related_softwares(4, $subCat);
        // echo "<pre>";
        // print_r($finalData['related_softwares']);
		$this->load->view('product', $finalData);
	}

	public function categories(){
		$categories['mainNav'] = $this->GetQuery->getNavData(); 
		$categories['categories'] = $this->GetQuery->get_all_categories(); 
		// echo "<pre>";
        // print_r($categories['categories']);
		$this->load->view('all_categories', $categories);
	}

	public function search() {
        $keyword = $this->input->get('keyword');
		$data['mainNav'] = $this->GetQuery->getNavData(); 
        $data['results'] = $this->GetQuery->searchSoftwares($keyword);
		$data['searched'] = $keyword;
		// echo "<pre>";
        // print_r($data['results']);
        $this->load->view('search', $data);
    }

	public function getSoftwares($category){
		$data['mainNav'] = $this->GetQuery->getNavData(); 
		$data['catSoftwares'] = $this->GetQuery->get_category_softwares($category);
		$data['name'] = $category;
		// echo "<pre>";
        // print_r($data['catSoftwares']);
        $this->load->view('categories', $data);
	}

	public function softwares($os){
		$data['mainNav'] = $this->GetQuery->getNavData(); 
		$data['allSoftwares'] = $this->GetQuery->get_softwares_by_os($os);
		$data['name'] = $os;
		// echo "<pre>";
        // print_r($data['allSoftwares']);
        $this->load->view('softwares', $data);
	}


	public function blog(){
		$data['mainNav'] = $this->GetQuery->getNavData(); 
		$data['blogs'] = $this->GetQuery->get_blogs();
			// echo "<pre>";
			// print_r($data['blogs']);
        $this->load->view('blog', $data);
	}

    // public function blog($id){
	// 	$finalData['mainNav'] = $this->GetQuery->getNavData();
    //     $finalData['blogData'] = $this->GetQuery->getBlogData($id);
	// 	// print_r($finalData['blogData'][0]['image']);
    //     $this->load->view('blog', $finalData);
    // }


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