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

    public function getJoinedSoftwareData($id) {
        $this->db->select('');
        $this->db->from('softdata');
        $this->db->where('id', $id);
        $query = $this->db->get();
        $result = $query->result_array();
    
        if (!empty($result)) {
            return ['data' => $result[0]];
        } else {
            return [];
        }
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
    

    public function getTabsData() {
        $query['Windows'] = $this->db->select('id, name, relation, logo, description, free')
                          ->order_by('id','DESC')
                          ->where('trending','1')
                          ->where('relation','1')
                          ->limit(8)
                          ->get('softdata')
                          ->result_array();

        $query['Mac'] = $this->db->select('id, name, relation, logo, description, free')
                          ->order_by('id','DESC')
                          ->where('trending','1')
                          ->where('relation','2')
                          ->limit(8)
                          ->get('softdata')
                          ->result_array();

        $query['Ios'] = $this->db->select('id, name, relation, logo, description, free')
                          ->order_by('id','DESC')
                          ->where('trending','1')
                          ->where('relation','3')
                          ->limit(8)
                          ->get('softdata')
                          ->result_array();

        $query['Android'] = $this->db->select('id, name, relation, logo, description, free')
                          ->order_by('id','DESC')
                          ->where('trending','1')
                          ->where('relation','4')
                          ->limit(8)
                          ->get('softdata')
                          ->result_array();
        return $query;
    }
}
