<?php
class User_model extends CI_Model {
	
	public function newsletter_sign_up() { 
		
		$email = $this->input->post('email');
		
		$this->db->select('email');
		$this->db->from('users');
		$this->db->where('email', $email);
		$query = $this->db->get();
		
		if($query->result()){
			return false;
		} else {
			$data = array(
				'email' => $email
			);
		
			$insert = $this->db->insert('users',$data);
			return $insert;
		}
	}	
}