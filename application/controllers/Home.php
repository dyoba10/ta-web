<?php 

class Home extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Toko_model");
        $this->load->model("Wisata_model");
        $this->load->model("Fasilitas_model");
        $this->load->model('Map_model', '', TRUE);
        $this->load->library('Googlemaps');
    }

    public function index() 
    {
        
        $coords = $this->Map_model->get_coordinates();
        $coords1 = $this->Map_model->get_coordinates_toko();
        $coords2 = $this->Map_model->get_coordinates_fasilitas();

        $config['center'] = 'auto';//Coordinate tengah peta
        $config['zoom'] = '12';
        $config['sensor'] = TRUE;
        $config['https'] = TRUE;
        //$config['directions'] = TRUE;
        //$config['directionsStart'] = 'auto';
        //$config['directionsEnd'] = $coords;
        
        

        $this->googlemaps->initialize($config);

        foreach ($coords as $coordinate) {
            // $url = prep_url($coordinate->website);
            $url1 = base_url('upload/wisata/'.$coordinate->gambar);
            $marker = array();
            $marker['position'] = $coordinate->latitude.','.$coordinate->longitude;
            $marker['infowindow_content'] = 'Nama Wisata : ' .$coordinate->nama_wisata.'<br>'.'Alamat : '.$coordinate->alamat.'<br>'.'<img src="'.$url1.'" width="100">';
            $this->googlemaps->add_marker($marker);
        }

        foreach ($coords1 as $coordinate) {
            // $url = prep_url($coordinate->website);
            $url1 = base_url('upload/toko/'.$coordinate->gambar);
            $marker = array();
            $marker['position'] = $coordinate->latitude.','.$coordinate->longitude;
            $marker['infowindow_content'] = 'Nama Toko : ' .$coordinate->nama_toko.'<br>'.'Alamat : '.$coordinate->alamat.'<br>'.'<img src="'.$url1.'" width="100">';
            $this->googlemaps->add_marker($marker);
        }

        foreach ($coords2 as $coordinate) {
            // $url = prep_url($coordinate->website);
            $url1 = base_url('upload/fasilitas/'.$coordinate->gambar);
            $marker = array();
            $marker['position'] = $coordinate->latitude.','.$coordinate->longitude;
            $marker['infowindow_content'] = 'Nama Fasilitas : ' .$coordinate->nama_fasilitas.'<br>'.'Alamat : '.$coordinate->alamat.'<br>'.'<img src="'.$url1.'" width="100">';
            $this->googlemaps->add_marker($marker);
        }

        $data= array();
        $data['map'] = $this->googlemaps->create_map();
        $data["toko"] = $this->Toko_model->getAll();
        $data["fasilitas"] = $this->Fasilitas_model->getAll();
        $data["wisata"] = $this->Wisata_model->getAll();
        $this->load->view('home/index', $data);
    }

}