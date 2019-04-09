<?php
defined('BASEPATH') OR exit('No direct script access allowed ');
class Trx extends CI_Controller {

    function __construct() {
        parent::__construct(); 
        $this->load->model('Trx_model');
        $this->user_id = isset($this->session->get_userdata()['user_details'][0]->id)?$this->session->get_userdata()['user_details'][0]->users_id:'1';
    }

    /**
     * This function is used for show trx list
     * @return Void
     */
    public function index(){
        $this->load->view('include/header'); 
        $this->load->view('trx_list');
        $this->load->view('include/footer');
    }

    public function portfolio($id='')
    {
        $data['user_data'] = '';
        $this->load->view('include/header'); 
        $this->load->view('portfolio', $data);
        $this->load->view('include/footer');
    }

    public function overview($id='')
    {   
        if(!isset($id) || $id == '') {
            $id = $this->session->userdata ('user_details')[0]->users_id;
        }
        $reg_stat = $this->Trx_model->get_registration_status($id);
        if ($reg_stat->num_rows() == 0) {
            $data['registrasi_info'] = 'Anda sudah melakukan registrasi rekening, saat ini sedang dalam proses verifikasi';
        }
        $data['user_data'] = '';
        $this->load->view('include/header'); 
        $this->load->view('overview', $data);
        $this->load->view('include/footer');
    }

    public function product_list($id='')
    {        
        if(!isset($id) || $id == '') {
            $id = $this->session->userdata ('user_details')[0]->users_id;
        }
        $reg_stat = $this->Trx_model->get_registration_status($id);        
        $data['registrasi_info']   = $reg_stat->num_rows();
        $data['product_details']   = $this->Trx_model->get_product();
        $this->load->view('include/header'); 
        $this->load->view('product_list', $data);
        $this->load->view('include/footer');
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
            
            $output_arr['data'][$key][0] = '<input type="checkbox" name="selData" value="'.$output_arr['data'][$key][0].'">';
        }
        echo json_encode($output_arr);
    }
}