<?php

class Form_model extends CI_Model{
	public function get_name($user_name){
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where(' user_name = ', $user_name);
		$q = $this->db->get();
		return $result = $q->row_array();

}
}