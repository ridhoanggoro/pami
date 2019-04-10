<?php
defined('BASEPATH') OR exit('No direct script access allowed ');
class User extends CI_Controller {

    function __construct() {
        parent::__construct(); 
        $this->load->model('User_model');
		$this->user_id = isset($this->session->get_userdata()['user_details'][0]->id)?$this->session->get_userdata()['user_details'][0]->users_id:'1';
    }

    /**
      * This function is redirect to users profile page
      * @return Void
      */
    public function index() {
    	if(is_login()){
    		redirect( base_url().'trx/overview', 'refresh');
    	} 
    }

    /**
      * This function is used to load login view page
      * @return Void
      */
    public function login(){
    	if(isset($_SESSION['user_details'])){
    		redirect( base_url().'trx/overview', 'refresh');
    	}   
    	//$this->load->view('include/script');
        $this->load->view('login'); 
    }

    /**
      * This function is used to logout user
      * @return Void
      */
    public function logout(){
        is_login();
        $this->session->unset_userdata('user_details');               
        redirect(base_url(), 'refresh');
    }

    /**
     * This function is used to registr user
     * @return Void
     */
    public function registration(){
    	if(isset($_SESSION['user_details'])){
    		redirect( base_url().'user/profile', 'refresh');
    	}
        //Check if admin allow to registration for user
		if(setting_all('register_allowed')==1){
			if($this->input->post()) {
				$this->add_edit();
				$this->session->set_flashdata('messagePr', 'Successfully Registered..');
			} else {
				$this->load->view('include/script');
				$this->load->view('register');
			}
		}
		else {
			$this->session->set_flashdata('messagePr', 'Registration Not allowed..');
			redirect( base_url().'user/login', 'refresh');
		}
    }
    
    /**
     * This function is used for user authentication ( Working in login process )
     * @return Void
     */
	public function auth_user($page =''){ 
		$return = $this->User_model->auth_user();
		if(empty($return)) { 
			$this->session->set_flashdata('messagePr', 'Invalid details');	
            redirect( base_url().'user/login', 'refresh');  
        } else { 
			if($return == 'not_varified') {
				$this->session->set_flashdata('messagePr', 'This accout is not varified. Please contact to your admin..');
                redirect( base_url().'user/login', 'refresh');
			} else {
                $this->session->set_userdata('user_details',$return);
            }
            
            if($return[0]->user_type =='Member')
            {
                redirect( base_url().'trx/overview', 'refresh');
            } else {
                redirect( base_url().'user/profile', 'refresh');
            }
        }
    }

    /**
     * This function is used send mail in forget password
     * @return Void
     */
    public function forgetpassword(){
        $page['title'] = 'Forgot Password';
        if($this->input->post()){
            $setting = settings();
            $res = $this->User_model->get_data_by('users', $this->input->post('email'), 'email',1);
            if(isset($res[0]->users_id) && $res[0]->users_id != '') { 
                $var_key = $this->getVarificationCode(); 
                $this->User_model->updateRow('users', 'users_id', $res[0]->users_id, array('var_key' => $var_key));
                $sub = "Reset password";
                $email_address = $this->input->post('email');      
                $data = array(
                    'user_name' => $res[0]->name,
                    'action_url' =>base_url(),
                    'sender_name' => $setting['company_name'],
                    'website_name' => $setting['website'],
                    'varification_link' => base_url().'user/mail_varify?code='.$var_key,
                    'url_link' => base_url().'user/mail_varify?code='.$var_key,
                    );
                $body = $this->User_model->get_template('forgot_password');
                $body = $body->html;
                foreach ($data as $key => $value) {
                    $body = str_replace('{var_'.$key.'}', $value, $body);
                }               
                $config = Array(        
                    'protocol' => $setting['mail_setting'],
                    'smtp_host' => $setting['HOST'],
                    'smtp_port' => $setting['SMTP_SECURE'],
                    'smtp_user' => $setting['SMTP_EMAIL'],
                    'smtp_pass' => $setting['SMTP_PASSWORD'],
                    'smtp_timeout' => '4',
                    'mailtype'  => 'html', 
                    'charset'   => 'iso-8859-1'
                );

                $this->load->library('email', $config);
                $this->email->set_newline("\r\n");

                $this->email->to($email_address);
                $this->email->from($setting['SMTP_EMAIL'],$setting['company_name']);
                $this->email->subject('Password Reset Notification');

                $this->email->message($body);  
                $this->email->set_mailtype('html'); 
            
                if ($this->email->send()) {
                     $this->session->set_flashdata('messagePr', 'To reset your password, link has been sent to your email <b>'.$email_address.'</b> if you dont see in your inbox please check on junk/spam folder');
                     redirect( base_url().'user/login','refresh');
                } else { 
                     $this->session->set_flashdata("messagePr","You have encountered an error ".$this->email->print_debugger());
                     redirect( base_url().'user/login','refresh');
                }
                
            } else {    
                $this->session->set_flashdata('forgotpassword', 'This account does not exist');//die;
                redirect( base_url()."user/forgetpassword");
            }
        } else {
            $this->load->view('include/script');
            $this->load->view('forget_password');
        }
    }

    /**
      * This function is used to load view of reset password and varify user too 
      * @return : void
      */
    public function mail_varify(){
      	$return = $this->User_model->mail_varify();         
      	$this->load->view('include/script');
      	if($return){          
        	$data['email'] = $return;
        	$this->load->view('set_password', $data);        
      	} else { 
	  		$data['email'] = 'allredyUsed';
        	$this->load->view('set_password', $data);
    	} 
    }
	
    /**
      * This function is used to reset password in forget password process
      * @return : void
      */
    public function reset_password(){
        $return = $this->User_model->ResetPpassword();
        if($return){
        	$this->session->set_flashdata('messagePr', 'Password Changed Successfully..');
            redirect( base_url().'user/login', 'refresh');
        } else {
        	$this->session->set_flashdata('messagePr', 'Unable to update password');
            redirect( base_url().'user/login', 'refresh');
        }
    }

    /**
     * This function is generate hash code for random string
     * @return string
     */
    public function getVarificationCode(){        
        $pw = $this->randomString();   
        return $varificat_key = password_hash($pw, PASSWORD_DEFAULT); 
    }

    

    /**
     * This function is used for show users list
     * @return Void
     */
    public function userTable(){
        is_login();
        if(CheckPermission("user", "own_read")){
            $this->load->view('include/header');
            $this->load->view('user_table');                
            $this->load->view('include/footer');            
        } else {
            $this->session->set_flashdata('messagePr', 'You don\'t have permission to access.');
            redirect( base_url().'user/profile', 'refresh');
        }
    }

    /**
     * This function is used to create datatable in users list page
     * @return Void
     */
    public function dataTable (){
        is_login();
	    $table = 'users';
    	$primaryKey = 'users_id';
    	$columns = array(
           array( 'db' => 'users_id', 'dt' => 0 ),array( 'db' => 'status', 'dt' => 1 ),
					array( 'db' => 'name', 'dt' => 2 ),
					array( 'db' => 'email', 'dt' => 3 ),
					array( 'db' => 'users_id', 'dt' => 4 )
		);

        $sql_details = array(
			'user' => $this->db->username,
			'pass' => $this->db->password,
			'db'   => $this->db->database,
			'host' => $this->db->hostname
		);
		$where = array("user_type != 'admin'");
		$output_arr = SSP::complex( $_GET, $sql_details, $table, $primaryKey, $columns, $where);
		foreach ($output_arr['data'] as $key => $value) {
			$id = $output_arr['data'][$key][count($output_arr['data'][$key])  - 1];
			$output_arr['data'][$key][count($output_arr['data'][$key])  - 1] = '';
			if(CheckPermission('user', "all_update")){
			$output_arr['data'][$key][count($output_arr['data'][$key])  - 1] .= '<a id="btnEditRow" class="modalButtonUser mClass"  href="javascript:;" type="button" data-src="'.$id.'" title="Edit"><i class="fa fa-pencil" data-id=""></i></a>';
			}else if(CheckPermission('user', "own_update") && (CheckPermission('user', "all_update")!=true)){
				$user_id =getRowByTableColomId($table,$id,'users_id','user_id');
				if($user_id==$this->user_id){
			$output_arr['data'][$key][count($output_arr['data'][$key])  - 1] .= '<a id="btnEditRow" class="modalButtonUser mClass"  href="javascript:;" type="button" data-src="'.$id.'" title="Edit"><i class="fa fa-pencil" data-id=""></i></a>';
				}
			}
			
			if(CheckPermission('user', "all_delete")){
			$output_arr['data'][$key][count($output_arr['data'][$key])  - 1] .= '<a style="cursor:pointer;" data-toggle="modal" class="mClass" onclick="setId('.$id.', \'user\')" data-target="#cnfrm_delete" title="delete"><i class="fa fa-trash-o" ></i></a>';}
			else if(CheckPermission('user', "own_delete") && (CheckPermission('user', "all_delete")!=true)){
				$user_id =getRowByTableColomId($table,$id,'users_id','user_id');
				if($user_id==$this->user_id){
			$output_arr['data'][$key][count($output_arr['data'][$key])  - 1] .= '<a style="cursor:pointer;" data-toggle="modal" class="mClass" onclick="setId('.$id.', \'user\')" data-target="#cnfrm_delete" title="delete"><i class="fa fa-trash-o" ></i></a>';
				}
			}
            $output_arr['data'][$key][0] = '<input type="checkbox" name="selData" value="'.$output_arr['data'][$key][0].'">';
		}
		echo json_encode($output_arr);
    }

    /**
     * This function is Showing users profile
     * @return Void
     */
    public function profile($id='') {   
        is_login();
        if(!isset($id) || $id == '') {
            $id = $this->session->userdata ('user_details')[0]->users_id;
        }
        $reg_count          = $this->User_model->get_registration_status('ALL');
        $data['reg_stat']   = $reg_count->num_rows();        
        $data['user_data']  = $this->User_model->get_users($id);
        $this->load->view('include/header', $data); 
        $this->load->view('profile', $data);
        $this->load->view('include/footer');
    }

    public function dashboard_user($id='')
    {
        is_login();
        if(!isset($id) || $id == '') {
            $id = $this->session->userdata ('user_details')[0]->users_id;
        }
        $data['user_data'] = $this->User_model->get_users($id);
        $this->load->view('include/header'); 
        $this->load->view('dashboard_user', $data);
        $this->load->view('include/footer');
    }

    /**
     * This function is used to show popup of user to add and update
     * @return Void
     */
    public function get_modal() {
        is_login();
        if($this->input->post('id')){
            $data['userData'] = getDataByid('users',$this->input->post('id'),'users_id'); 
            echo $this->load->view('add_user', $data, true);
        } else {
            echo $this->load->view('add_user', '', true);
        }
        exit;
    }

	
    /**
     * This function is used to upload file
     * @return Void
     */
    function upload() {
        foreach($_FILES as $name => $fileInfo)
        {
            $filename=$_FILES[$name]['name'];
            $tmpname=$_FILES[$name]['tmp_name'];
            $exp=explode('.', $filename);
            $ext=end($exp);
            $newname=  $exp[0].'_'.time().".".$ext; 
            $config['upload_path'] = 'assets/images/';
            $config['upload_url'] =  base_url().'assets/images/';
            $config['allowed_types'] = "gif|jpg|jpeg|png|iso|dmg|zip|rar|doc|docx|xls|xlsx|ppt|pptx|csv|ods|odt|odp|pdf|rtf|sxc|sxi|txt|exe|avi|mpeg|mp3|mp4|3gp";
            $config['max_size'] = '2000000'; 
            $config['file_name'] = $newname;
            $this->load->library('upload', $config);
            move_uploaded_file($tmpname,"assets/images/".$newname);
            return $newname;
        }
    }
  
    /**
     * This function is used to add and update users
     * @return Void
     */
    public function add_edit($id='') {   
        $data = $this->input->post();
        $profile_pic = 'user.png';
        if($this->input->post('users_id')) {
            $id = $this->input->post('users_id');
        }
        if(isset($this->session->userdata ('user_details')[0]->users_id)) {
            if($this->input->post('users_id') == $this->session->userdata ('user_details')[0]->users_id){
                $redirect = 'profile';
            } else {
                $redirect = 'userTable';
            }
        } else {
            $redirect = 'login';
        }
        if($this->input->post('fileOld')) {  
            $newname = $this->input->post('fileOld');
            $profile_pic =$newname;
        } else {
            $data[$name]='';
            $profile_pic ='user.png';
        }
        foreach($_FILES as $name => $fileInfo)
        { 
             if(!empty($_FILES[$name]['name'])){
                $newname=$this->upload(); 
                $data[$name]=$newname;
                $profile_pic =$newname;
             } else {  
                if($this->input->post('fileOld')) {  
                    $newname = $this->input->post('fileOld');
                    $data[$name]=$newname;
                    $profile_pic =$newname;
                } else {
                    $data[$name]='';
                    $profile_pic ='user.png';
                } 
            } 
        }
        if($id != '') {
            $data = $this->input->post();
            if($this->input->post('status') != '') {
                $data['status'] = $this->input->post('status');
            }
            if($this->input->post('users_id') == 1) { 
            $data['user_type'] = 'admin';
            }
            if($this->input->post('password') != '') {
                if($this->input->post('currentpassword') != '') {
                    $old_row = getDataByid('users', $this->input->post('users_id'), 'users_id');
                    if(password_verify($this->input->post('currentpassword'), $old_row->password)){
                        if($this->input->post('password') == $this->input->post('confirmPassword')){
                            $password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
                            $data['password']= $password;     
                        } else {
                            $this->session->set_flashdata('messagePr', 'Password and confirm password should be same...');
                            redirect( base_url().'user/'.$redirect, 'refresh');
                        }
                    } else {
                        $this->session->set_flashdata('messagePr', 'Enter Valid Current Password...');
                        redirect( base_url().'user/'.$redirect, 'refresh');
                    }
                } else {
                    $this->session->set_flashdata('messagePr', 'Current password is required');
                    redirect( base_url().'user/'.$redirect, 'refresh');
                }
            }
            $id = $this->input->post('users_id');
            unset($data['fileOld']);
            unset($data['currentpassword']);
            unset($data['confirmPassword']);
            unset($data['users_id']);
            unset($data['user_type']);
            if(isset($data['edit'])){
                unset($data['edit']);
            }
            if($data['password'] == ''){
                unset($data['password']);
            }
            $data['profile_pic'] = $profile_pic;
            $this->User_model->updateRow('users', 'users_id', $id, $data);
            $this->session->set_flashdata('messagePr', 'Your data updated Successfully..');
            redirect( base_url().'user/'.$redirect, 'refresh');
        } else { 
            if($this->input->post('user_type') != 'admin') {
                $data = $this->input->post();
                $password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
                $checkValue = $this->User_model->check_exists('users','email',$this->input->post('email'));
                if($checkValue==false)  {  
                    $this->session->set_flashdata('messagePr', 'This Email Already Registered with us..');
                    redirect( base_url().'user/registration', 'refresh');
                }
                $checkValue1 = $this->User_model->check_exists('users','name',$this->input->post('name'));
                if($checkValue1==false) {  
                    $this->session->set_flashdata('messagePr', 'Username Already Registered with us..');
                    redirect( base_url().'user/registration', 'refresh');
                }
                $data['status'] = 'active';
                if(setting_all('admin_approval') == 1) {
                    $data['status'] = 'deleted';
                }
                
                if($this->input->post('status') != '') {
                    $data['status'] = $this->input->post('status');
                }
                //$data['token'] = $this->generate_token();
                $data['user_id'] = $this->user_id;
                $data['password'] = $password;
                $data['profile_pic'] = $profile_pic;
                $data['is_deleted'] = 0;
                if(isset($data['password_confirmation'])){
                    unset($data['password_confirmation']);    
                }
                if(isset($data['call_from'])){
                    unset($data['call_from']);    
                }
                unset($data['submit']);
                $this->User_model->insertRow('users', $data);
                redirect( base_url().'user/'.$redirect, 'refresh');
            } else {
                $this->session->set_flashdata('messagePr', 'You Don\'t have this autherity ' );
                redirect( base_url().'user/registration', 'refresh');
            }
        }
    
    }


    /**
     * This function is used to delete users
     * @return Void
     */
    public function delete($id){
        is_login(); 
        $ids = explode('-', $id);
        foreach ($ids as $id) {
            $this->User_model->delete($id); 
        }
       redirect(base_url().'user/userTable', 'refresh');
    }

    /**
     * This function is used to send invitation mail to users for registration
     * @return Void
     */
    public function InvitePeople() {
        is_login();
    	if($this->input->post('emails')){
            $setting = settings();
			$var_key = $this->randomString();
    		$emailArray = explode(',', $this->input->post('emails'));
    		$emailArray = array_map('trim', $emailArray);
    		$body = $this->User_model->get_template('invitation');
            $result['existCount'] = 0;
            $result['seccessCount'] = 0;
            $result['invalidEmailCount'] = 0;
            $result['noTemplate'] = 0;
            if(isset($body->html) && $body->html != '') {
                $body = $body->html;
	    		foreach ($emailArray as $mailKey => $mailValue) {
	    			if(filter_var($mailValue, FILTER_VALIDATE_EMAIL)) {
	    				$res = $this->User_model->get_data_by('users', $mailValue, 'email');
	    				if(is_array($res) && empty($res)) {
			    			$link = (string) '<a href="'.base_url().'user/registration?invited='.$var_key.'">Click here</a>';
			    			$data = array('var_user_email' => $mailValue, 'var_inviation_link' => $link);
    				        foreach ($data as $key => $value) {
    				          $body = str_replace('{'.$key.'}', $value, $body);
    				        }
                            
                            $config = Array(        
                                'protocol' => $setting['mail_setting'],
                                'smtp_host' => $setting['HOST'],
                                'smtp_port' => $setting['SMTP_SECURE'],
                                'smtp_user' => $setting['SMTP_EMAIL'],
                                'smtp_pass' => $setting['SMTP_PASSWORD'],
                                'smtp_timeout' => '4',
                                'mailtype'  => 'html', 
                                'charset'   => 'iso-8859-1'
                            );
            
                            $this->load->library('email', $config);
                            $this->email->set_newline("\r\n");
            
                            $this->email->to($mailValue);
                            $this->email->from($setting['SMTP_EMAIL'],$setting['company_name']);
                            $this->email->subject('Invitation to Register');
            
                            $this->email->message($body);  
                            $this->email->set_mailtype('html'); 

			    			if($this->email->send()) {
			    				$darr = array('email' => $mailValue, 'var_key' => $var_key);
			    				$this->User_model->insertRow('users', $darr);
			    				$result['seccessCount'] += 1;
			    			}
                            } else {
                                $result['existCount'] += 1;
                            }
                        } else {
                            $result['invalidEmailCount'] += 1;
                        }
                    }
                } else {
                    $result['noTemplate'] = 'No Email Template Availabale.';
    		}
    	}
    	echo json_encode($result);
        exit;
    }

    /**
     * This function is used to Check invitation code for user registration
     * @return TRUE/FALSE
     */
    public function chekInvitation() {
    	if($this->input->post('code') && $this->input->post('code') != '') {
    		$res = $this->User_model->get_data_by('users', $this->input->post('code'), 'var_key');
    		$result = array();
    		if(is_array($res) && !empty($res)) {
    			$result['email'] = $res[0]->email;
    			$result['users_id'] = $res[0]->users_id;
    			$result['result'] = 'success';
    		} else {
    			$this->session->set_flashdata('messagePr', 'This code is not valid..');
    			$result['result'] = 'error';
    		}
    	}
    	echo json_encode($result);
    	exit;
    }

    /**
     * This function is used to registr invited user
     * @return Void
     */
    public function register_invited($id){
        $data = $this->input->post();
        $password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
        $data['password'] = $password;
        $data['var_key'] = NULL;
        $data['is_deleted'] = 0;
        $data['status'] = 'active';
        $data['user_id'] = 1;
        if(isset($data['password_confirmation'])) {
            unset($data['password_confirmation']);
        }
        if(isset($data['call_from'])) {
            unset($data['call_from']);
        }
        if(isset($data['submit'])) {
            unset($data['submit']);
        }
        $this->User_model->updateRow('users', 'users_id', $id, $data);
        $this->session->set_flashdata('messagePr', 'Successfully Registered..');
        redirect( base_url().'user/login', 'refresh');
    }

    /**
     * This function is used to check email is alredy exist or not
     * @return TRUE/FALSE
     */
    public function checEmailExist() {
      	$result = 1;
      	$res = $this->User_model->get_data_by('users', $this->input->post('email'), 'email');
      	if(!empty($res)){
      		if($res[0]->users_id != $this->input->post('uId')){
      			$result = 0;
      		}
      	}
      	echo $result;
      	exit;
    }

    /**
     * This function is used to Generate a token for varification
     * @return String
     */
    public function generate_token(){
        $alpha = "abcdefghijklmnopqrstuvwxyz";
        $alpha_upper = strtoupper($alpha);
        $numeric = "0123456789";
        $special = ".-+=_,!@$#*%<>[]{}";
        $chars = $alpha . $alpha_upper . $numeric ;            
        $token = '';  
        $up_lp_char = $alpha . $alpha_upper .$special;
        $chars = str_shuffle($chars);
        $token = substr($chars, 10,10).strtotime("now").substr($up_lp_char, 8,8) ;
        return $token;
    }

    /**
     * This function is used to Generate a random string
     * @return String
     */
    public function randomString(){
        $alpha = "abcdefghijklmnopqrstuvwxyz";
        $alpha_upper = strtoupper($alpha);
        $numeric = "0123456789";
        $special = ".-+=_,!@$#*%<>[]{}";
        $chars = $alpha . $alpha_upper . $numeric;            
        $pw = '';    
        $chars = str_shuffle($chars);
        $pw = substr($chars, 8,8);
        return $pw;
    }

    /**
     * This function is Showing users registration form
     * @return Void
     */
    public function registrasi($id='') {   
        is_login();
        if(!isset($id) || $id == '') {
            $id = $this->session->userdata ('user_details')[0]->users_id;
        }
        $data['user_data'] = $this->User_model->get_users($id);
        $this->load->view('include/header'); 
        $this->load->view('add_rekening', $data);
        $this->load->view('include/footer');
    }

    //Untuk proses upload foto
    public function proses_upload(){

        $config['upload_path']   = FCPATH.'/upload-foto/';
        $config['allowed_types'] = 'gif|jpg|png|ico';
        $this->load->library('upload',$config);

        if($this->upload->do_upload('userfile'))
        {
            $upload_data        = $this->upload->data();
            $token              = $this->input->post('token_foto');
            $nama_file          = $this->upload->data('file_name');            
            $this->db->insert('file_upload',array('nama_file'=>$nama_file ,'unique_id'=>$token));
        }
    }

    //Untuk menghapus foto
    public function remove_foto(){

        //Ambil token foto
        $token=$this->input->post('token');
        
        $foto=$this->db->get_where('foto',array('token'=>$token));

        if($foto->num_rows()>0){
            $hasil=$foto->row();
            $nama_foto=$hasil->nama_foto;
            if(file_exists($file=FCPATH.'/upload-foto/'.$nama_foto)){
                unlink($file);
            }
            // $this->db->delete('foto',array('token'=>$token));

        }
        echo "{}";
    }

    // save account
    public function insert_account()
    {
        $setting = settings();
        $userid = $this->session->userdata('user_details')[0]->users_id;
        $username = $this->session->userdata('user_details')[0]->name;
        $email_address = $this->session->userdata('user_details')[0]->email;
        $reg_stat = $this->User_model->get_registration_status($userid);
        if ($reg_stat->num_rows() > 0) {
            $this->session->set_flashdata('messagePr', 'Anda sudah melakukan registrasi, saat ini sedang dalam proses verifikasi');
            redirect( base_url().'user/registrasi', 'refresh');
        }
        else { 
            $dob_date   = $this->input->post('dob-date');
            $dob_month = $this->input->post('dob-month');
            $dob_years = $this->input->post('dob-year');

            $dob = $dob_years.'-'.$dob_month.'-'.$dob_date;

            $doc_id = $this->input->post('foto');
            $e_ktp_foto = $this->User_model->get_doc_filename($doc_id);

            $data = array(
                'users_id'              => $userid,
                'e_ktp_no'              => $this->input->post('id_number'),
                'e_ktp_foto'            => $e_ktp_foto,
                'tempat_lahir'          => $this->input->post('place_of_birth'),
                'tanggal_lahir'         => $dob,
                'jenis_kelamin'         => $this->input->post('kelamin'), 
                'status_kawin'          => $this->input->post('marital_status'),
                'pendidikan_terakhir'   => $this->input->post('education'),
                'agama'                 => $this->input->post('religion'),
                'no_hp'                 => $this->input->post('mobile_phone_number'),
                'pekerjaan'             => $this->input->post('occupation'),
                'penghasilan_per_tahun' => $this->input->post('gross_income'),
                'sumber_dana'           => $this->input->post('source_of_fund'),
                'alamat'                => $this->input->post('ktp_address'),
                'kota'                  => $this->input->post('ktp_city'),
                'kode_pos'              => $this->input->post('ktp_postal_code'),
                'rekening_bank_code'    => $this->input->post('bank_code'),
                'rekening_bank_no'      => $this->input->post('account_number'),
                'ttd'                   => $this->input->post('signatureDone'),
                'account_status'        => 0,
            );

            $this->User_model->insertRow('user_account_info', $data);

            $body = $this->User_model->get_template('member_info');
            $data = array(
                'user_name' => $username,
                'e_ktp' => $this->input->post('id_number'),
                'ttl' => $dob_date.'-'.$dob_month.'-'.$dob_years,
                'alamat' => $this->input->post('ktp_address'),
                'sender_name' => $setting['company_name'],
                'website_name' => $setting['company_name']
                );
            $body = $body->html;
            foreach ($data as $key => $value) {
                $body = str_replace('{var_'.$key.'}', $value, $body);
            } 

            $config = Array(        
                'protocol' => $setting['mail_setting'],
                'smtp_host' => $setting['HOST'],
                'smtp_port' => $setting['SMTP_SECURE'],
                'smtp_user' => $setting['SMTP_EMAIL'],
                'smtp_pass' => $setting['SMTP_PASSWORD'],
                'smtp_timeout' => '4',
                'mailtype'  => 'html', 
                'charset'   => 'iso-8859-1'
            );

            $this->load->library('email', $config);
            $this->email->set_newline("\r\n");

            $this->email->to($email_address);
            $this->email->from($setting['SMTP_EMAIL'],$setting['company_name']);
            $this->email->subject('Informasi Pembukaan Rekening');

            $this->email->message($body);  
            $this->email->set_mailtype('html'); 
            $this->email->send();
        }
    }

     /**
     * This function is Showing new users registered
     * @return Void
     */
    public function registered_list($id='') {   
        is_login();
        if(!isset($id) || $id == '') {
            $id = $this->session->userdata ('user_details')[0]->users_id;
        }
        $reg_count          = $this->User_model->get_registration_status('ALL');
        $data['reg_stat']   = $reg_count->num_rows();
        $data['user_data']  = $this->User_model->get_users($id);
        $this->load->view('include/header'); 
        $this->load->view('member_register_list', $data);
        $this->load->view('include/footer');
    }

    /**
     * This function is Showing approved users by manager
     * @return Void
     */
    public function approved_list($id='') {   
        is_login();
        if(!isset($id) || $id == '') {
            $id = $this->session->userdata ('user_details')[0]->users_id;
        }
        $reg_count          = $this->User_model->get_registration_status('APP');
        $this->load->view('include/header'); 
        $this->load->view('member_approved_list', $data);
        $this->load->view('include/footer');
    }

    /**
     * This function is to get raw data new users registered
     * @return Void
     */
    public function get_acc_registered_list(){        
        $data = $this->User_model->get_registration_status('ALL');
        echo json_encode($data->result());
    }

    public function approve_update(){

        $userid = $this->session->userdata ('user_details')[0]->name;
        $email_address = $this->input->post('email');
  		$role 	= $this->session->userdata ('user_details')[0]->user_type;
  		$seq_id = $this->input->post('seq_id');
       	
       	if (strtoupper($role )=='ADMIN') {
               $update_code = '1';
               $reg_status = 'Approved by Admin';
       	} else if (strtoupper($role )=='MANAGER') {
               $update_code = '2';
               $reg_status = 'Approved by Manager, Saat ini anda sudah dapat melakukan transaksi';
       	}   
           
       	$data = array(
                'update_user'  		=> $userid, 
                'update_date'  		=> date('Y-m-d H:i:s'), 
                'account_status'  	=> $update_code
            );

        $reVal = $this->User_model->update_registration_status($data, $seq_id);

        $setting = settings();
        $body = $this->User_model->get_template('approve_reject');
        $data = array(
            'user_name' => $username,
            'e_ktp' => $this->input->post('e_ktp'),
            'ttl' => $this->input->post('dob'),
            'alamat' => $this->input->post('alamat'),
            'sender_name' => $setting['company_name'],
            'website_name' => $setting['company_name'],
            'status' => $reg_status
            );
        $body = $body->html;
        foreach ($data as $key => $value) {
            $body = str_replace('{var_'.$key.'}', $value, $body);
        } 

        $config = Array(        
            'protocol' => $setting['mail_setting'],
            'smtp_host' => $setting['HOST'],
            'smtp_port' => $setting['SMTP_SECURE'],
            'smtp_user' => $setting['SMTP_EMAIL'],
            'smtp_pass' => $setting['SMTP_PASSWORD'],
            'smtp_timeout' => '4',
            'mailtype'  => 'html', 
            'charset'   => 'iso-8859-1'
        );

        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");

        $this->email->to($email_address);
        $this->email->from($setting['SMTP_EMAIL'],$setting['company_name']);
        $this->email->subject('Informasi Status Pembukaan Rekening');

        $this->email->message($body);  
        $this->email->set_mailtype('html'); 
        $this->email->send();

        echo json_encode($reVal);
    }

    public function check_exists()
    {
        $ktp_id = $this->input->post('ktp_no');
        if($this->User_model->ktp_verify($ktp_id))  
            {  
                echo '<label class="text-danger"><span class="glyphicon glyphicon-remove"></span> ID KTP sudah terdaftar</label>';  
            }  
            else  
            {  
                echo '<label class="text-success"><span class="glyphicon glyphicon-ok"></span> ID KTP Available</label>';  
            } 
    }

    public function export_csv()
    {
        // file name 
        $filename = 'users_'.date('Ymd').'.csv'; 
        header("Content-Description: File Transfer"); 
        header("Content-Disposition: attachment; filename=$filename"); 
        header("Content-Type: application/csv; ");
        
        // get data 
        $usersData = $this->User_model->get_user_approved();

        // file creation 
        $file = fopen('php://output', 'w');
        
        $header = array("SA Code","SA Name","SID","Investor Fund Unit A/C No."); 
        fputcsv($file, $header);
        foreach ($usersData as $key=>$line){ 
            fputcsv($file,$line); 
        }
        fclose($file); 
        exit; 
    }

    public function import_csv()
    {
        $file_data = $this->csvimport->get_array($_FILES["csv_file"]["tmp_name"]);
        foreach($file_data as $row)
        {
            $key = $row["SID"];
            //$key = '3';
            $data = array(
                'ifua_no'            => $row["Investor Fund Unit A/C No."],
                'account_status'     => '3',
                'update_user'        => $this->session->userdata('user_details')[0]->name,
                'update_date'        => date("Y-m-d H:i:s")
            );
            $this->User_model->update($data, $key);
        }
        
    }
}