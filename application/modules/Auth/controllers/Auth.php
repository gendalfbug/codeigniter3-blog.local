<?php



class Auth extends MY_Controller
{
    function __construct(){
        parent::__construct();
    }

    function signup(){
        if($this->input->post()){

        }else{
            $data['title'] = 'Sign up';
            $data['content_view'] = 'Auth/signup_v';
            $this->template->call_template($data);

        }
    }

}