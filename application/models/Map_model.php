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
    
    public function get_coordinates_toko()
    {
        $return = array();
        $this->db->select("nama_toko,alamat,gambar,latitude,longitude");
        $this->db->from("data-toko");
        $query = $this->db->get();
         if ($query->num_rows()>0) {
          foreach ($query->result() as $row) {
            array_push($return, $row);
            }
        }

        return $return;
    }

    public function get_coordinates_fasilitas()
    {
        $return = array();
        $this->db->select("nama_fasilitas,alamat,gambar,latitude,longitude");
        $this->db->from("data-fasilitas");
        $query = $this->db->get();
         if ($query->num_rows()>0) {
          foreach ($query->result() as $row) {
            array_push($return, $row);
            }
        }

        return $return;
    }

}