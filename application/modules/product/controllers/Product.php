<?php
defined('BASEPATH') OR exit('No direct script access allowed ');
class Product extends CI_Controller {

    function __construct() {
        parent::__construct(); 
        $this->load->model('Product_model');
        $this->user_id = isset($this->session->get_userdata()['user_details'][0]->id)?$this->session->get_userdata()['user_details'][0]->users_id:'1';
    }

    /**
     * This function is used for show product list
     * @return Void
     */
    public function index(){
        is_login();
        if(CheckPermission("user", "own_read")){
            $this->load->view('include/header');
            $this->load->view('product_list');                
            $this->load->view('include/footer');            
        } else {
            $this->session->set_flashdata('messagePr', 'You don\'t have permission to access.');
            redirect( base_url().'user/profile', 'refresh');
        }
    }

    public function dataTable (){
        is_login();
        $table = 'product';
        $primaryKey = 'product_id';
        $columns = array(
                    array( 'db' => 'product_id', 'dt' => 0 ),
                    array( 'db' => 'product_id', 'dt' => 1 ),
                    array( 'db' => 'name', 'dt' => 2 ),
                    array( 'db' => 'type', 'dt' => 3 ),
                    array( 'db' => 'status', 'dt' => 4 ),
                    array( 'db' => 'product_id', 'dt' => 5 )
        );

        $sql_details = array(
            'user' => $this->db->username,
            'pass' => $this->db->password,
            'db'   => $this->db->database,
            'host' => $this->db->hostname
        );
        //$where = array("status = 1");
        $where = '';
        $output_arr = SSP::complex( $_GET, $sql_details, $table, $primaryKey, $columns, $where);
        foreach ($output_arr['data'] as $key => $value) {
            $id = $output_arr['data'][$key][count($output_arr['data'][$key])  - 1];
            $output_arr['data'][$key][count($output_arr['data'][$key])  - 1] = '';
            if(CheckPermission('user', "all_update")){
            $output_arr['data'][$key][count($output_arr['data'][$key])  - 1] .= '<a id="btnEditRow" class="modalButtonProduct mClass"  href="javascript:;" type="button" data-src="'.$id.'" title="Rubah"><i class="fa fa-pencil" data-id=""></i></a>';
            }else if(CheckPermission('user', "own_update") && (CheckPermission('user', "all_update")!=true)){
                $user_id =getRowByTableColomId($table,$id,'users_id','user_id');
                if($user_id==$this->user_id){
            $output_arr['data'][$key][count($output_arr['data'][$key])  - 1] .= '<a id="btnEditRow" class="modalButtonProduct mClass"  href="javascript:;" type="button" data-src="'.$id.'" title="Edit"><i class="fa fa-pencil" data-id=""></i></a>';
                }
            }
            
            if(CheckPermission('user', "all_delete")){
            $output_arr['data'][$key][count($output_arr['data'][$key])  - 1] .= '<a style="cursor:pointer;" data-toggle="modal" class="mClass" onclick="setId('.$id.', \'product\')" data-target="#cnfrm_delete" title="delete"><i class="fa fa-trash-o" ></i></a>';}
            else if(CheckPermission('user', "own_delete") && (CheckPermission('user', "all_delete")!=true)){
                $user_id =getRowByTableColomId($table,$id,'users_id','user_id');
                if($user_id==$this->user_id){
            $output_arr['data'][$key][count($output_arr['data'][$key])  - 1] .= '<a style="cursor:pointer;" data-toggle="modal" class="mClass" onclick="setId('.$id.', \'product\')" data-target="#cnfrm_delete" title="delete"><i class="fa fa-trash-o" ></i></a>';
                }
            }
            $output_arr['data'][$key][0] = '<input type="checkbox" name="selData" value="'.$output_arr['data'][$key][0].'">';
        }
        echo json_encode($output_arr);
    }
    
    /**
     * This function is used to show popup of product to add and update
     * @return Void
     */
    public function get_modal() {
        is_login();
        if($this->input->post('id')){
            $data['productData'] = getDataByid('product',$this->input->post('id'),'product_id'); 
            echo $this->load->view('add_product', $data, true);
        } else {
            echo $this->load->view('add_product', '', true);
        }
        exit;
    }

     /**
     * This function is used to add and update product
     * @return Void
     */
    public function add_edit($id='') {          
        if($this->input->post('prod_id')) {
            $id = $this->input->post('prod_id');
        }
        
        if($id != '') {
            
            $id = $this->input->post('prod_id');
            $data['name'] = $this->input->post('name');
            $data['type'] = $this->input->post('type');
            $data['status'] = $this->input->post('status');
                    
            $this->Product_model->updateRow('product', 'product_id', $id, $data);
            $this->session->set_flashdata('messagePr', 'Your data updated Successfully..'. $id.$data['name'].$data['type'].$data['status']);
            redirect('product');
        } 
        else 
        { 
            $data['product_id'] = $this->input->post('product_id');
            $data['name'] = $this->input->post('name');
            $data['type'] = $this->input->post('type');
            $data['status'] = $this->input->post('status');
            $this->Product_model->insertRow('product', $data);
            
            $this->session->set_flashdata('messagePr', 'Your data insert Successfully..');
            redirect('product');
        }
    }

    /**
     * This function is used to delete product
     * @return Void
     */
    public function delete($id){
        is_login(); 
        $ids = explode('-', $id);
        foreach ($ids as $id) {
            $this->Product_model->delete($id); 
        }
        $this->session->set_flashdata('messagePr', 'Your data delete Successfully..');
        redirect('product');
    }
}
