<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Toko extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Toko_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["toko"] = $this->Toko_model->getAll();
        $this->load->view("admin/toko/list", $data);

    }

    public function add()
    {
        $toko = $this->Toko_model;
        $validation = $this->form_validation;
        $validation->set_rules($toko->rules());

        if ($validation->run()) {
            $toko->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        
        }
           
        $this->load->view("admin/toko/new_form");
        
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect ('admin/toko');
        
        $toko = $this->Toko_model;
        $validation = $this->form_validation;
        $validation->set_rules($toko->rules());

        if ($validation->run()) {
            $toko->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["toko"] = $toko->getById($id);
        if (!$data["toko"]) show_404();

        $this->load->view("admin/toko/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();

        if ($this->Toko_model->delete($id)) {
            redirect(site_url('admin/toko'));
        }
    }
}