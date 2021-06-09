<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Fasilitas_model extends CI_Model 
{
    private $_table = "data-fasilitas";

    public $id_fasilitas;
    public $nama_fasilitas;
    public $gambar = "default.jpg";
    public $alamat;
    public $deskripsi;
    public $latitude;
    public $longitude;

    public function rules()
    {
        return [
            ['field' => 'nama_fasilitas',
            'label' => 'Nama Fasilitas',
            'rules' => 'required'],
                
            ['field' => 'alamat',
            'label' => 'Alamat',
            'rules' => 'required'],

            ['field' => 'latitude',
            'label' => 'Latitude',
            'rules' => 'required'],

            ['field' => 'longitude',
            'label' => 'Longitude',
            'rules' => 'required']             
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id) 
    {
        return $this->db->get_where($this->_table, ["id_fasilitas" => $id])->row();   
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_fasilitas = uniqid();
        $this->nama_fasilitas = $post["nama_fasilitas"];
        $this->gambar = $this->_uploadImage();
        $this->alamat = $post["alamat"];
        $this->deskripsi = $post["deskripsi"];
        $this->latitude = $post["latitude"];
        $this->longitude = $post["longitude"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_fasilitas = $post["id"];
        $this->nama_fasilitas = $post["nama_fasilitas"];

        if (!empty($_FILES["gambar"]["name"])) {
            $this->gambar = $this->_uploadImage();
        } else {
            $this->gambar = $post["old_image"];
        }

        $this->alamat = $post["alamat"];
        $this->deskripsi = $post["deskripsi"];
        $this->latitude = $post["latitude"];
        $this->longitude = $post["longitude"];
        $this->db->update($this->_table, $this, array('id_fasilitas' => $post['id']));        
    }

    public function delete($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array("id_fasilitas" => $id));
    }

    private function _uploadImage()
    {
    $config['upload_path']          = './upload/fasilitas/';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['file_name']            = $this->id_fasilitas;
    $config['overwrite']			= true;
    $config['max_size']             = 1024; // 1MB
    // $config['max_width']            = 1024;
    // $config['max_height']           = 768;

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('gambar')) {
        return $this->upload->data("file_name");
    }
    
    return "default.jpg";
    }

    private function _deleteImage($id)
    {
    $product = $this->getById($id);
    if ($product->gambar != "default.jpg") {
	    $filename = explode(".", $product->gambar)[0];
		return array_map('unlink', glob(FCPATH."upload/product/$filename.*"));
    }
    }
}