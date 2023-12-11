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
		// echo "<pre>";
		// print_r($finalarray);
	}

    public function getBlogs() {
        $this->db->select('*');
        $this->db->from('blogs');
        $this->db->order_by('id', 'DESC'); // Assuming 'id' is the primary key; replace it with the actual column you want to order by
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
    }
        

}
