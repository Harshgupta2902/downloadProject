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
        $query = $this->db->get('softwares');
        return $query->num_rows();
    }

	public function getTotalUsers() {
        $query = $this->db->get('user');
        return $query->num_rows();
    }

	public function getTotalCategory() {
        $query = $this->db->get('category');
        return $query->num_rows();
    }


	public function get_count() {
        return $this->db->count_all('blogs');
    }

	public function getBlog() {
		$this->db->order_by('id', 'DESC');
		$query = $this->db->get("blogs");
		return $query->result();
	}
	
    public function getSoftwares(){

    $softwares = $this->db->select('slug_permanent')
                ->get('category')
                ->result_array();
    return $softwares;
    }






    public function get_sorted_category(){
        $query['Windows'] = $this->db->select('category.*, navs.slug_permanent as category_slug_permanent')
                                        ->join('navs', 'category.relation = navs.id', 'left')
                                        ->where('relation','1')
                                        ->get('category')
                                        ->result_array();
        $query['mac'] = $this->db->select('category.*, navs.slug_permanent as category_slug_permanent')
                                        ->join('navs', 'category.relation = navs.id', 'left')
                                        ->where('relation','2')
                                        ->get('category')
                                        ->result_array();

        $query['android'] = $this->db->select('category.*, navs.slug_permanent as category_slug_permanent')
                                        ->join('navs', 'category.relation = navs.id', 'left')
                                        ->where('relation','3')
                                        ->get('category')
                                        ->result_array();
        return $query;
    }







}
