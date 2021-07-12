<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Feedback extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model("Feedback_Model");
    }

    public function index()
    {
        $data["feedback"] = $this->Feedback_Model->getAll();
        $this->load->view("admin/feedback/list", $data);

    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();

        if ($this->Feedback_Model->delete($id)) {
            redirect(site_url('admin/feedback'));
        }
    }
}

?>