<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminModel extends CI_Model {

    public function validate_user($email, $password) {
        // Validate user credentials against the database
        $query = $this->db->get_where('user', array('email' => $email, 'password' => $password));
        return $query->row_array();
    }


    public function getBlogs() {
        $this->db->select('*');
        $this->db->from('blogs');
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
    }
        
	public function save_blog($data) {
        $this->db->insert('blogs', $data);
        return $this->db->insert_id();
    }

	public function updateBlog($blog_id, $data) {
        $this->db->where('id', $blog_id);
        $this->db->update('blogs', $data);
    }


    // public function updateTrending($id,$value) {
    // // Assuming you have a 'trending' table with a 'trending' column
    //     $data = array('trending' => $value);

    //     // Assuming you have a unique identifier for your record, replace 'your_id_column' and 'your_id_value' accordingly
    //     $this->db->where('id', $id);
    //     $this->db->update('softdata', $data);
    // }


	public function getTotalBlogs() {
        $query = $this->db->get('blogs');
        return $query->num_rows();
    }

	public function getTotalSoftwares() {
        $query = $this->db->get('softdata');
        return $query->num_rows();
    }

	public function getTotalUsers() {
        $query = $this->db->get('user');
        return $query->num_rows();
    }

	public function getTotalCategory() {
        $query = $this->db->get('navbar');
        return $query->num_rows();
    }



    public function getSoftwares() {
        $this->db->select('*');
        $this->db->order_by('id', 'DESC'); 
        $this->db->limit(8);
        $query = $this->db->get('softdata');
        return $query->result_array();
    }

    public function organize_softwares_by_relation($data) {
        $organizedData = [];
        foreach ($data as $record) {
            $relation = $record['relation'];

            if (!isset($organizedData[$relation])) {
                $organizedData[$relation] = [];
            }

            $organizedData[$relation][] = $record;
        }

        $finalarray=array();
		$finalarray['Windows']=$organizedData[1];
		$finalarray['Mac']=$organizedData[2];
		$finalarray['Ios']=$organizedData[3];
		$finalarray['Android']=$organizedData[4];
        
        return $finalarray;
    }



	public function get_count() {
        return $this->db->count_all('blogs');
    }

	public function getBlog() {
		$this->db->order_by('id', 'DESC'); // Replace 'your_column_name' with the actual column name you want to order by
		$query = $this->db->get("blogs");
		return $query->result();
	}
	
}
