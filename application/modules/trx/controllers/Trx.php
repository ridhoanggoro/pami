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
        $data['user_data'] = '';
        $this->load->view('include/header'); 
        $this->load->view('overview', $data);
        $this->load->view('include/footer');
    }
}