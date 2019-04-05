<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Trx_model extends CI_Model {       
	function __construct(){            
	    parent::__construct();
	    $this->load->database();
	} 
	
	public function is_registered($id)
	{
		$param = array('user_account_info.users_id' => $id); 
		$this->db->select('*');
		$this->db->from('user_account_info');
		$this->db->join('users', 'user_account_info.users_id=users.users_id');
		$this->db->where($param);
  		$query = $this->db->get();
  		return $query;
	}
    
}