<?php

Class Grid extends CI_Controller{
	function __construct() {
        parent::__construct();
    }
    
    function index(){
        //$this->load->view('template');
       $this->template->load('template2','grid');
    }
}