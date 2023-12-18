<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GetQuery extends CI_Model {

    public function getNavData() {
        $this->db->select('navbar.id AS nav_id, navbar.title AS nav_title, softdata.id AS subnav_id, softdata.name AS subnav_title');
        $this->db->from('navbar');
        $this->db->join('softdata', 'navbar.id = softdata.relation', 'left');
        $query = $this->db->get();
        $result = $query->result_array();
        $organizedData = [];

        foreach ($result as $row) {
            $navbarId = $row['nav_id'];
            $subnavId = $row['subnav_id'];

            if (!isset($organizedData[$navbarId])) {
                $organizedData[$navbarId] = [
                    'nav_id' => $navbarId,
                    'nav_title' => $row['nav_title'],
                    'subnav' => []
                ];
            }
            if (count($organizedData[$navbarId]['subnav']) < 6) {
                if ($subnavId !== null) {
                    $organizedData[$navbarId]['subnav'][] = [
                        'subnav_id' => $subnavId,
                        'subnav_title' => $row['subnav_title']
                    ];
                }
            }
        }   

        return array_values($organizedData);
    }



    public function getBlogs(){
        $this->db->select('*');
        $this->db->from('blogs');
        $this->db->order_by('id', 'DESC');  // Order by id in descending order
        $query = $this->db->get();
        $result = $query->result_array();
    
        $latestBlog = array_shift($result);  // Get the latest blog
        $latest2Blogs = array_slice($result, 0, 2);  // Get the latest 2 blogs
        $latest4Blogs = array_slice($result, 2, 5);  // Get the latest 4 blogs
    
        $organizedData = [
            'latest' => $latestBlog,
            'latest2' => $latest2Blogs,
            'latest4' => $latest4Blogs
        ];
    
        return $organizedData;
    }
   
    public function getBlogData($id) {
        $this->db->select('*');
        $this->db->from('blogs');
        $this->db->where('id', $id);
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
    }
    


    public function searchData($searchTerm) {
        if ($searchTerm !== null && is_string($searchTerm)) {
            $this->db->select('softdata.*, navbar.title as relation_name');
            $this->db->like('name', $searchTerm);
            $this->db->or_like('description', $searchTerm);
            $this->db->join('navbar', 'navbar.id = softdata.relation', 'left');
            $query = $this->db->get('softdata');
            return $query->result_array();
        } else {
            $this->db->select('softdata.*, navbar.title as relation_name');
            $this->db->join('navbar', 'navbar.id = softdata.relation', 'left');
            $query = $this->db->get('softdata');
            return $query->result_array();
        }
    }

    public function gethomedata(){
        $query['windows'] = $this->db->query("SELECT * FROM `softwares` WHERE `badge` IS NOT NULL AND TRIM(`badge`) <> '' AND `category_slug` = 'windows'");
        $query['macos'] = $this->db->query("SELECT * FROM `softwares` WHERE `badge` IS NOT NULL AND TRIM(`badge`) <> '' AND `category_slug` = 'macos'");
        $query['android'] = $this->db->query("SELECT * FROM `softwares` WHERE `badge` IS NOT NULL AND TRIM(`badge`) <> '' AND `category_slug` = 'android'");
        $data['windows'] = $query['windows']->result_array();
        $data['macos'] = $query['macos']->result_array();
        $data['android'] = $query['android']->result_array();
        return $data;
    }

    public function getSoftwareData(){
        $query['windows'] = $this->db->query("SELECT * FROM `softwares` WHERE `badge` IS NOT NULL AND TRIM(`badge`) <> '' AND `category_slug` = 'windows'");
        $query['macos'] = $this->db->query("SELECT * FROM `softwares` WHERE `badge` IS NOT NULL AND TRIM(`badge`) <> '' AND `category_slug` = 'macos'");
        $query['android'] = $this->db->query("SELECT * FROM `softwares` WHERE `badge` IS NOT NULL AND TRIM(`badge`) <> '' AND `category_slug` = 'android'");
        $data['windows'] = $query['windows']->result_array();
        $data['macos'] = $query['macos']->result_array();
        $data['android'] = $query['android']->result_array();
        return $data;
    }




///// scrap data of softwares inside data and save to db 

    public function getSoftwareDetails($category_slug, $softwareslug) {
        $url = "https://filecr.com/_next/data/LnRWXyXzsGeT0GM56c-0b/$category_slug/$softwareslug.json?categorySlug=$category_slug&postSlug=$softwareslug";
        $jsonResponse = file_get_contents($url);
        $data = json_decode($jsonResponse, true);
        $allSoftData = $data["pageProps"]["post"];
        $postId = $allSoftData["id"];
        $existingRecord = $this->db->get_where('softwaredata', array('post_id' => $postId))->row_array();
        if ($existingRecord) {
            $finalRecord = $this->db
                                ->select('softwaredata.*, softwares.*')  // Select columns from both tables
                                ->from('softwaredata')
                                ->join('softwares', 'softwaredata.slug = softwares.slug')
                                ->where('softwaredata.post_id', $postId)
                                ->get()
            ->row_array();
            // print_r($existingRecord);

            return $finalRecord;
            
        } else {
            $downloadurl = $this->getDownloadLink($allSoftData['downloads'][0]['links'][0]['id']);
            $dataToInsert = array(
                'post_id' => $allSoftData["id"],
                'title' => $allSoftData["title"],
                'extra_title' => $allSoftData["extra_title"],
                'slug' => $allSoftData["slug"],
                'excerpt' => $allSoftData["excerpt"],
                'article' => $allSoftData["article"],
                'license' => $allSoftData["license"],
                'downloads_count' => $allSoftData["downloads_count"],
                'seo_title' => $allSoftData["seo"]['title'],
                'seo_description' => $allSoftData["seo"]['description'],
                'creator_name' => $allSoftData["creators"][0]['name'],
                'creator_url' => $allSoftData["creators"][0]['url'],
                'version' => $allSoftData['downloads'][0]['version'],
                'filename' => $allSoftData['downloads'][0]['filename'],
                'releaseDate' => $allSoftData['downloads'][0]['releaseDate'],
                'download_id' => $allSoftData['downloads'][0]['links'][0]['id'],
                'download_url' => $downloadurl
            );
            $this->db->insert('softwaredata', $dataToInsert);  

            $finalRecord = $this->db
                                ->select('softwaredata.*, softwares.*')  // Select columns from both tables
                                ->from('softwaredata')
                                ->join('softwares', 'softwaredata.slug = softwares.slug')
                                ->where('softwaredata.post_id', $postId)
                                ->get()
                                ->row_array();
            // print_r($finalRecord);

            return $finalRecord;
            // echo"<pre>";
        }
    }

///// scrap download link of softwares inside data and save to db 
    
    private function getDownloadLink($id) {
        $url = "https://filecr.com/api/actions/downloadlink/?id=$id";
        $jsonResponse = file_get_contents($url);
        $data = json_decode($jsonResponse, true);
        $url = $data['url'];
        return $url;
    }
    





}
