<?php

class Form_model extends CI_Model{
	public function get_name($user_name){
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where(' user_name = ', $user_name);
		$q = $this->db->get();
		return $result = $q->row_array();

}
    public function update_first($first_name,$new_first_name){

        $data= array('first_name' => $new_first_name, );

    	$this->db->where('first_name = ',$first_name);
    	$this->db->update('users', $data);
    	// $this->db->set('first_name = ',$new_first_name);
    	
  //   	$w = $this->db->get();
		// return $result = $w->row_array();
    }
    public function update_phone($phone,$new_phone){

    	$data= array('phone' => $new_phone, );
    	$this->db->where('phone = ',$phone);
    	$this->db->update('users', $data);

    }
    public function get_movies(){
    	$this->db->select();
		$this->db->from('movies');
		
		$q = $this->db->get();
		return $q->result_array();
    }

}