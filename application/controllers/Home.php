<?php 

class Home extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Sekolah_model");
        $this->load->model("Wisata_model");
        $this->load->model('Map_model', '', TRUE);
        $this->load->library('Googlemaps');
    }

    public function index() 
    {
        
        $config['center'] = 'auto';//Coordinate tengah peta
        $config['zoom'] = '12';
        $config['sensor'] = TRUE;
        $config['https'] = TRUE;
        $this->googlemaps->initialize($config);
        
        $coords = $this->Map_model->get_coordinates();

        foreach ($coords as $coordinate) {
            // $url = prep_url($coordinate->website);
            $url1 = base_url('upload/wisata/'.$coordinate->gambar);
            $marker = array();
            $marker['position'] = $coordinate->latitude.','.$coordinate->longitude;
            $marker['infowindow_content'] = 'Nama Wisata : ' .$coordinate->nama_wisata.'<br>'.'Alamat : '.$coordinate->alamat.'<br>'.'<img src="'.$url1.'" width="100">';
            $this->googlemaps->add_marker($marker);
        }

        $data= array();
        $data['map'] = $this->googlemaps->create_map();
        $data["sekolah"] = $this->Sekolah_model->getAll();
        $data["wisata"] = $this->Wisata_model->getAll();
        $this->load->view('home/index', $data);
    }

}