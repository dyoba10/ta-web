<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Fasilitas extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Fasilitas_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["fasilitas"] = $this->Fasilitas_model->getAll();
        $this->load->view("admin/fasilitas/list", $data);

    }

    public function add()
    {
        $fasilitas = $this->Fasilitas_model;
        $validation = $this->form_validation;
        $validation->set_rules($fasilitas->rules());

        if ($validation->run()) {
            $fasilitas->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        
        }
           
        $this->load->view("admin/fasilitas/new_form");
        
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect ('admin/fasilitas');
        
        $fasilitas = $this->Fasilitas_model;
        $validation = $this->form_validation;
        $validation->set_rules($fasilitas->rules());

        if ($validation->run()) {
            $fasilitas->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["fasilitas"] = $fasilitas->getById($id);
        if (!$data["fasilitas"]) show_404();

        $this->load->view("admin/fasilitas/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();

        if ($this->Fasilitas_model->delete($id)) {
            redirect(site_url('admin/fasilitas'));
        }
    }
}