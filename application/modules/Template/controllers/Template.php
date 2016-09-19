<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Template extends MY_Controller
{
    function __construct(){
        parent::__construct();
    }

    function sample_template($data = null){
        $this->load->view('Template/sample_template_v',$data);
    }
    function admin_template($data = null){
        $this->load->view('Template/admin_template_v',$data);
    }

    function call_template($data){
        $this->load->view('Template/Template',$data);
    }

}