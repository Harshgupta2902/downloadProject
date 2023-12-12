<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GetQuery extends CI_Model {

    public function getNavData() {
        $this->db->select('navbar.id AS nav_id, navbar.title AS nav_title, software.id AS subnav_id, software.name AS subnav_title');
        $this->db->from('navbar');
        $this->db->join('software', 'navbar.id = software.relation', 'left');
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

            // Check if the count of subnav entries for this navbar entry is less than 6
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

    public function getJoinedSoftwareData($softwareName) {
        $this->db->select('s.*, sd.*');
        $this->db->from('software s');
        $this->db->join('softdata sd', 's.name = sd.name', 'left');
        $this->db->where('s.name', $softwareName);
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

    public function tabCard($type) {
		$this->db->select('*');
		$this->db->from('software');
		$this->db->group_by('relation');
		$query = $this->db->get();
	
		$result = array();
		$finalarray=array();
		foreach ($query->result() as $row) {
			$this->db->select('*');
			$this->db->from('softdata');
			$this->db->join('software', 'softdata.name = software.name');
			$this->db->where('software.relation', $row->relation);
            $this->db->where('softdata.category', $type); // Add this line to filter by category
			$this->db->limit(8);
			$subquery = $this->db->get();
			foreach ($subquery->result() as $subrow) {
				$result[$row->relation][] = $subrow;
			}
		}
		$finalarray['Windows']=$result[1];
		$finalarray['Mac']=$result[2];
		$finalarray['Ios']=$result[3];
		$finalarray['Android']=$result[4];
        
        return $finalarray;
		// echo "<pre>";
		// print_r($finalarray);
	}
   
    public function getBlogData($id) {
        $this->db->select('*');
        $this->db->from('blogs');
        $this->db->where('id', $id);
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
    }
    
}
