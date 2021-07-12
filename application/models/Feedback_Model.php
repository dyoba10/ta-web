<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Feedback_Model extends CI_Model{
    private $_table = "feedback";

    public $id;
    public $nama;
    public $email;
    public $pesan;

    public function rules(){
        return [
            ['field' => 'nama',
            'label' => 'nama',
            'rules' => 'required'],

            ['field' => 'email',
            'label' => 'email',
            'rules' => 'required'],
                
            ['field' => 'pesan',
            'label' => 'pesan',
            'rules' => 'required']            
        ];
    }

    public function getAll(){
        return $this->db->get($this->_table)->result();
    }

    public function getById($id){
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    public function save(){
        $post = $this->input->post();
        $this->id = uniqid();
        $this->nama = $post["nama"];
        $this->email = $post["email"];
        $this->pesan = $post["pesan"];
        $this->db->insert($this->_table, $this);
    }

    public function update(){
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->nama =$post["nama"];
        $this->email =$post["email"];
        $this->pesan =$post["pesan"];
        $this->db->update($this->_table, $this, array('id' => $post['id']));
    }

    public function delete($id){
        return $this->db->delete($this->_table, array("id" => $id));
    }
}


?>