<?php

class Feedback extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model("Feedback_Model");
        $this->load->library('form_validation');
    }

    public function add(){
        $fb = $this->Feedback_Model;
        $validation = $this->form_validation;
        $validation->set_rules($fb->rules());

        if ($validation->run()) {
            $fb->save();
            
        }
        
        //$this->load->view('home/index');
        redirect()->to('home');
    }
}



?>