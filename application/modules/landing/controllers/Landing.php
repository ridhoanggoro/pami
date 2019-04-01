<?php
defined('BASEPATH') OR exit('No direct script access allowed ');
class Landing extends CI_Controller {

    function __construct() {
        parent::__construct(); 
    }

    /**
      * This function is redirect to users profile page
      * @return Void
      */
    public function index() {
    	   $this->load->view('main_page');  
    	} 
    }
