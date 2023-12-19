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

    public function getProductDetails($softwareslug){
        $softwareDataQuery = $this->db->select('*')
        ->from('softwaredata')
        ->where('slug', $softwareslug)
        ->get();

    $softwareData = $softwareDataQuery->row();  // Assuming you expect only one row

    if ($softwareData) {
        // If software data is found, perform a join with 'softwares' table
        $joinedQuery = $this->db->select('softwares.*, softwaredata.*')
            ->from('softwares')
            ->join('softwaredata', 'softwaredata.slug = softwares.slug', 'left')
            ->where('softwares.slug', $softwareslug)
            ->get();
        $result = $joinedQuery->result_array();

    return $result;
    } else {
        return array();  // Return an empty array if no data is found
    }
    }






}
