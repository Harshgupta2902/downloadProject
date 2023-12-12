<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminModel extends CI_Model {

    public function validate_user($email, $password) {
        // Validate user credentials against the database
        $query = $this->db->get_where('user', array('email' => $email, 'password' => $password));
        return $query->row_array();
    }

   public function getSoftwares() {
		$this->db->select('*');
		$this->db->from('software');
		$this->db->group_by('relation');
		$query = $this->db->get();
		$result = array();
		$finalarray=array();
		foreach ($query->result() as $row) {
			$this->db->select('softdata.id, softdata.name, softdata.logo, softdata.company, softdata.free');
			$this->db->from('softdata');
			$this->db->join('software', 'softdata.name = software.name');
			$this->db->where('software.relation', $row->relation);
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



	public function get_count() {
        return $this->db->count_all('blogs');
    }

	public function getBlog($limit, $start) {
		$this->db->limit($limit, $start);
		$this->db->order_by('id', 'DESC'); // Replace 'your_column_name' with the actual column name you want to order by
		$query = $this->db->get("blogs");
		return $query->result();
	}
	
}
