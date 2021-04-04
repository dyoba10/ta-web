<?php

class Map_model extends CI_Model {
    
    
    public function get_coordinates()
    {
        $return = array();
        $this->db->select("nama_wisata,alamat,gambar,latitude,longitude");
        $this->db->from("data-wisata");
        $query = $this->db->get();
         if ($query->num_rows()>0) {
          foreach ($query->result() as $row) {
            array_push($return, $row);
            }
        }

        return $return;
    }        

}