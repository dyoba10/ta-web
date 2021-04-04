<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Wisata extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Wisata_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["wisata"] = $this->Wisata_model->getAll();
        $this->load->view("admin/wisata/list", $data);

    }

    public function add()
    {
        $wisata = $this->Wisata_model;
        $validation = $this->form_validation;
        $validation->set_rules($wisata->rules());

        if ($validation->run()) {
            $wisata->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        
        }
           
        $this->load->view("admin/wisata/new_form");
        
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect ('admin/wisata');
        
        $wisata = $this->Wisata_model;
        $validation = $this->form_validation;
        $validation->set_rules($wisata->rules());

        if ($validation->run()) {
            $wisata->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["wisata"] = $wisata->getById($id);
        if (!$data["wisata"]) show_404();

        $this->load->view("admin/wisata/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();

        if ($this->Wisata_model->delete($id)) {
            redirect(site_url('admin/wisata'));
        }
    }
}