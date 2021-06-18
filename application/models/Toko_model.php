<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Toko_model extends CI_Model 
{
    private $_table = "data-toko";

    public $id_toko;
    public $nama_toko;
    public $gambar = "default.jpg";
    public $gambar2 = "default.jpg";
    public $gambar3 = "default.jpg";
    public $alamat;
    public $deskripsi;
    public $latitude;
    public $longitude;

    public function rules()
    {
        return [
            ['field' => 'nama_toko',
            'label' => 'Nama Toko',
            'rules' => 'required'],
                
            ['field' => 'alamat',
            'label' => 'Alamat',
            'rules' => 'required'],

            ['field' => 'latitude',
            'label' => 'Latitude',
            'rules' => 'required'],

            ['field' => 'longitude',
            'label' => 'Longitude',
            'rules' => 'required'],
                
            ['field' => 'deskripsi',
            'label' => 'Deskripsi',
            'rules' => 'required']             
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id) 
    {
        return $this->db->get_where($this->_table, ["id_toko" => $id])->row();   
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_toko = uniqid();
        $this->nama_toko = $post["nama_toko"];
        $this->gambar = $this->_uploadImage();
        $this->gambar2 = $this->_uploadImage2();
        $this->gambar3 = $this->_uploadImage3();
        $this->alamat = $post["alamat"];
        $this->deskripsi = $post["deskripsi"];
        $this->latitude = $post["latitude"];
        $this->longitude = $post["longitude"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_toko = $post["id"];
        $this->nama_toko = $post["nama_toko"];

        if (!empty($_FILES["gambar"]["name"])) {
            $this->gambar = $this->_uploadImage();
        } else {
            $this->gambar = $post["old_image"];
        }

        if (!empty($_FILES["gambar2"]["name"])) {
            $this->gambar2 = $this->_uploadImage2();
        } else {
            $this->gambar2 = $post["old_image2"];
        }

        if (!empty($_FILES["gambar3"]["name"])) {
            $this->gambar3 = $this->_uploadImage3();
        } else {
            $this->gambar3 = $post["old_image3"];
        }

        $this->alamat = $post["alamat"];
        $this->deskripsi = $post["deskripsi"];
        $this->latitude = $post["latitude"];
        $this->longitude = $post["longitude"];
        $this->db->update($this->_table, $this, array('id_toko' => $post['id']));        
    }

    public function delete($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array("id_toko" => $id));
    }

    private function _uploadImage()
    {
    $config['upload_path']          = './upload/toko/';
    $config['allowed_types']        = 'gif|jpg|png';
    //$config['file_name']            = $this->id_toko;
    $config['overwrite']			= true;
    $config['max_size']             = 5024; // 1MB
    // $config['max_width']            = 1024;
    // $config['max_height']           = 768;

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('gambar')) {
        return $this->upload->data("file_name");
    }
    
    return "default.jpg";
    }

    private function _uploadImage2()
    {
    $config['upload_path']          = './upload/toko/';
    $config['allowed_types']        = 'gif|jpg|png';
    //$config['file_name']            = $this->id_toko;
    $config['overwrite']			= true;
    $config['max_size']             = 5024; // 1MB
    // $config['max_width']            = 1024;
    // $config['max_height']           = 768;

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('gambar2')) {
        return $this->upload->data("file_name");
    }
    
    return "default.jpg";
    }

    private function _uploadImage3()
    {
    $config['upload_path']          = './upload/toko/';
    $config['allowed_types']        = 'gif|jpg|png';
    //$config['file_name']            = $this->id_toko;
    $config['overwrite']			= true;
    $config['max_size']             = 5024; // 1MB
    // $config['max_width']            = 1024;
    // $config['max_height']           = 768;

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('gambar3')) {
        return $this->upload->data("file_name");
    }
    
    return "default.jpg";
    }

    private function _deleteImage($id)
    {
    $toko = $this->getById($id);
    if ($toko->gambar != "default.jpg") {
	    $filename = explode(".", $toko->gambar)[0];
		return array_map('unlink', glob(FCPATH."upload/toko/$filename.*"));
    }
    }
}