<?php
class User_model extends CI_Model {       
	function __construct(){            
	  	parent::__construct();
		$this->user_id =isset($this->session->get_userdata()['user_details'][0]->id)?$this->session->get_userdata()['user_details'][0]->users_id:'1';
	}

	/**
      * This function is used authenticate user at login
      */
  	function auth_user() {
		$email = $this->input->post('email');
		$password = $this->input->post('password');
    	$this->db->where("is_deleted='0' AND (name='$email' OR email='$email')");
		$result = $this->db->get('users')->result();
		if(!empty($result)){       
			if (password_verify($password, $result[0]->password)) {       
				if($result[0]->status != 'active') {
					return 'not_varified';
				}
				return $result;                    
			}
			else {             
				return false;
			}
		} else {
			return false;
		}
  	}

  	/**
     * This function is used to delete user
     * @param: $id - id of user table
     */
	function delete($id='') {
		$this->db->where('users_id', $id);  
		$this->db->delete('users'); 
	}
	
	/**
      * This function is used to load view of reset password and varify user too 
      */
	function mail_varify() {    
		$ucode = $this->input->get('code');     
		$this->db->select('email as e_mail');        
		$this->db->from('users');
		$this->db->where('var_key',$ucode);
		$query = $this->db->get();     
		$result = $query->row();   
		if(!empty($result->e_mail)){      
			return $result->e_mail;         
		}else{     
			return false;
		}
	}


	/**
      * This function is used Reset password  
      */
	function ResetPpassword(){
		$email = $this->input->post('email');
		if($this->input->post('password_confirmation') == $this->input->post('password')){
			$npass = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
			$data['password'] = $npass;
			$data['var_key'] = '';
			return $this->db->update('users',$data, "email = '$email'");
		}
	}
 
  	/**
      * This function is used to select data form table  
      */
	function get_data_by($tableName='', $value='', $colum='',$condition='') {	
		if((!empty($value)) && (!empty($colum))) { 
			$this->db->where($colum, $value);
		}
		$this->db->select('*');
		$this->db->from($tableName);
		$query = $this->db->get();
		return $query->result();
  	}

  	/**
      * This function is used to check user is alredy exist or not  
      */
	function check_exists($table='', $colom='',$colomValue=''){
		$this->db->where($colom, $colomValue);
		$res = $this->db->get($table)->row();
		if(!empty($res)){ return false;} else{ return true;}
 	}

 	/**
      * This function is used to get users detail  
      */
	function get_users($userID = '') {
		$this->db->where('is_deleted', '0');                  
		if(isset($userID) && $userID !='') {
			$this->db->where('users_id', $userID); 
		} else if($this->session->userdata('user_details')[0]->user_type == 'admin') {
			$this->db->where('user_type', 'admin'); 
		} else {
			$this->db->where('users.users_id !=', '1'); 
		}
		$result = $this->db->get('users')->result();
		return $result;
  	}

  	/**
      * This function is used to get email template  
      */
  	function get_template($code){
	  	$this->db->where('code', $code);
	  	return $this->db->get('templates')->row();
	}

	/**
      * This function is used to Insert record in table  
      */
  	public function insertRow($table, $data){
	  	$this->db->insert($table, $data);
	  	return  $this->db->insert_id();
	}

	/**
      * This function is used to Update record in table  
      */
  	public function updateRow($table, $col, $colVal, $data) {
  		$this->db->where($col,$colVal);
		$this->db->update($table,$data);
		return true;
  	}

  	public function get_doc_filename($value='')
  	{
  		$this->db->where('unique_id', $value);
  		$query = $this->db->get('file_upload');
  		if ($query->num_rows() > 0) {
  			$row = $query->row_array();
  			return $row['nama_file'];
  		}
  	}

  	public function get_registration_status($id='ALL')
  	{
		$mode   = $this->input->post('obj');
		$role 	= $this->session->userdata ('user_details')[0]->user_type;
		if(strtoupper($mode) === 'APP')
		{			
			$param = array('user_account_info.account_status >= ' => 2);
			$sql = "SELECT a.*,b.*, CASE WHEN a.account_status=2 THEN '<span class=\"label label-success\">Manager Approval</span>' WHEN a.account_status=3 THEN '<span class=\"label label-success\">Active Member</span>' ELSE '<span class=\"label label-success\">Unknown Status</span>' END AS member_status FROM `user_account_info` a INNER JOIN users b ON a.users_id=b.users_id WHERE a.account_status >= 2 ";
			return $this->db->query($sql);
		} 
		else { 
			if (strtoupper($id) === 'ALL') {
				if (strtoupper($role ) === 'ADMIN') {
					$param = array('user_account_info.account_status' => 0);
				} else {
					$param = array('user_account_info.account_status' => 1);
				}
				// $param = array('user_account_info.account_status' > 0);
			} 			
			else {
				$param = array('user_account_info.users_id' => $id, 'user_account_info.account_status !=' => 3); 
			}				

			$this->db->select('*');
			$this->db->from('user_account_info');
			$this->db->join('users', 'user_account_info.users_id=users.users_id');
			$this->db->where($param);
			$query = $this->db->get();
		  	return $query;
		}
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

  	public function update_registration_status($data, $key)
  	{
        $this->db->where('seq_id',  $key);
		$result = $this->db->update('user_account_info', $data);
        return $result;
	}
	
	/**
      * This function is used to check ktp is available or not 
      */
	function ktp_verify($param) {    
		$this->db->where('e_ktp_no', $param);  
		$query = $this->db->get("user_account_info");  
		if($query->num_rows() > 0)  
		{  
			return true;  
		}  
		else  
		{  
			return false;  
		}  
	}

	/**
	  * This function is pull data member already approved KYC 
	  * Member status definition
	  * 0 = New Registered Member
	  * 1 = Approved by Admin
	  * 2 = Approved by Manager
	  * 3 = Member Active (Have IFUA No)
	  * 8 = Rejected By Admin
	  * 9 = Rejected By Manager
	  * 7 = Inactive Member
	  */
	function get_user_approved()
	{
		$response = array();
		$cmd 	  = "SELECT a.users_id, b.name, '' AS SID,'' AS Investor_Fund_Unit_Acc_No FROM `user_account_info` a INNER JOIN users b ON a.users_id=b.users_id WHERE account_status=2";
		$response = $this->db->query($cmd)->result_array();
	
		return $response;
	}

	function update($data, $key)
	{
		$this->db->where('users_id', $key);		
		return $this->db->update('user_account_info', $data);
	}

	

}