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

	public function get_product()
	{
		$param = array('status' => 1);
		return $this->db->get('product');
	}

	public function get_registration_status($id='ALL')
  	{
  		$role 	= $this->session->userdata ('user_details')[0]->user_type;
  		if (strtoupper($id) === 'ALL') {
  			if (strtoupper($role )=='ADMIN') {
  				$param = array('user_account_info.account_status' => 0);
  			} else {
  				$param = array('user_account_info.account_status' => 1);
  			}
  			  
		} else {
			$param = array('user_account_info.users_id' => $id, 'user_account_info.account_status !=' => 2); 
		}
  				
		$this->db->select('*');
		$this->db->from('user_account_info');
		$this->db->join('users', 'user_account_info.users_id=users.users_id');
		$this->db->where($param);
  		$query = $this->db->get();
  		return $query;
	  }
    
}