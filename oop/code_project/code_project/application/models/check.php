<?php
class check extends CI_Model{
public function get_username(){
	$q=$this->db->get('user_names');
	return $q->result_array();
}
}