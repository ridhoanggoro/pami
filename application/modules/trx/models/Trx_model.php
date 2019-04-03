<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Trx_model extends CI_Model {       
	function __construct(){            
	    parent::__construct();
	    $this->load->database();
    } 
    
}