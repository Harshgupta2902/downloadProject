
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
	
	// public function search(){
	// 	$finalData['mainNav'] = $this->GetQuery->getNavData();
	// 	$this->db->select('id, name, logo,relation ');
    //         $this->db->from('softdata');
    //         $query = $this->db->get();
    //         $finalData['Data'] = $query->result_array();
	// 	
	// 	
	// 	// $this->load->view('search', $finalData);
	// }

	public function search() {
        $searchTerm = $this->input->get('search');
		$finalData['mainNav'] = $this->GetQuery->getNavData();
        $finalData['Data'] = $this->GetQuery->searchData($searchTerm);
// echo "<pre	>";print_r($finalData['Data']);
        $this->load->view('search', $finalData);
    }
	
    












	public function insertWindowsCategories() {
		$jsonUrl = 'https://filecr.com/_next/data/LnRWXyXzsGeT0GM56c-0b/navigation/ms-windows.json?slug=ms-windows';
        $jsonData = file_get_contents($jsonUrl);
        $data = json_decode($jsonData, true);
        if ($data !== null && isset($data['pageProps']['category']['children'])) {
			$extractedData = $this->processAndExtractData($data['pageProps']['category']['children'], "1");

            // Print the extracted data
			echo"<pre>";
            print_r($extractedData);
        } else {
            echo 'Error decoding JSON data.';
        }
    }

	public function insertMacOsCategories() {
		$jsonUrl = 'https://filecr.com/_next/data/LnRWXyXzsGeT0GM56c-0b/navigation/macos.json?slug=macos';
        $jsonData = file_get_contents($jsonUrl);
        $data = json_decode($jsonData, true);
        if ($data !== null && isset($data['pageProps']['category']['children'])) {
			$extractedData = $this->processAndExtractData($data['pageProps']['category']['children'], "2");

            // Print the extracted data
			echo"<pre>";
            print_r($extractedData);
        } else {
            echo 'Error decoding JSON data.';
        }
    }

	public function insertAndroidCategories() {
		$jsonUrl = 'https://filecr.com/_next/data/LnRWXyXzsGeT0GM56c-0b/navigation/android.json?slug=android';
        $jsonData = file_get_contents($jsonUrl);
        $data = json_decode($jsonData, true);
        if ($data !== null && isset($data['pageProps']['category']['children'])) {
			$extractedData = $this->processAndExtractData($data['pageProps']['category']['children'][0]['children'], "3");

            // Print the extracted data
			echo"<pre>";
            print_r($extractedData);
        } else {
            echo 'Error decoding JSON data.';
        }
    }

	private function processAndExtractData($categoryData, $type) {
        $extractedData = [];
        foreach ($categoryData as $category) {
            $name = $category['name'];
            $slug = $category['slug'];
            $slug_permanent = $category['slug_permanent'];
            $title = $category['title'];
            $description = $category['description'];

            // Add data to the array
            $extractedData[] = [
                'name' => $name,
                'slug' => $slug,
				'slug_permanent' => $slug_permanent,
				'title' => $title,
				'description'  => $description,
				'relation' => $type
            ];
        }
        $this->db->insert_batch('category', $extractedData);
        return $extractedData;
    }

	public function getAllWindowsSoftwares() {
		$totalPage = $this->input->post('totalPage');
		$slug = $this->input->post('slug');
		$category_slug = $this->input->post('category_slug');
        $allData = [];	

        for ($pageNumber = 1; $pageNumber <= $totalPage; $pageNumber++) {
            $jsonData = $this->getWindowsSoftwares($pageNumber, $slug, $category_slug);

            if ($jsonData !== false) {
                $data = json_decode($jsonData, true);

                if ($data !== null && isset($data['pageProps']['posts'])) {
                    $extractedData = $this->getData($data['pageProps']['posts']);
                    $allData = array_merge($allData, $extractedData);
                } else {
                    echo 'Error decoding JSON data for page ' . $pageNumber . '.';
                }
            } else {
                echo 'Error fetching JSON data for page ' . $pageNumber . '.';
            }
        }

        // Print or process the combined data
        // echo "<pre>";
        print_r($allData);
    }

    private function getWindowsSoftwares($pageNumber, $slug, $category_slug) {
        $jsonUrl = "https://filecr.com/_next/data/LnRWXyXzsGeT0GM56c-0b/$slug/$category_slug.json?categorySlug=$slug&postSlug=$category_slug&page=" . $pageNumber;
        $jsonData = file_get_contents($jsonUrl);

        return $jsonData;
    }

    private function getData($softData) {
        $extractedData = [];
        foreach ($softData as $software) {
            $title = $software['title'];
            $icon = $software['icon'];

            // Add data to the array
            $extractedData[] = [
                'title' => $title,
                'icon' => $icon,
            ];
        }
        // $this->db->insert_batch('category', $extractedData);
        return $extractedData;
    }

   
}