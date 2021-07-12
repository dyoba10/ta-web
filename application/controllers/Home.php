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
        $this->load->model("Feedback_Model");
        $this->load->library('form_validation');
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
        $config['directions'] = TRUE;
        $config['places'] = TRUE;
        
        $config['placesAutocompleteInputID'] = 'myPlaceTextBox';
        $config['placesAutocompleteBoundsMap'] = TRUE; // set results biased towards the maps viewport
        $config['placesAutocompleteOnChange'] = "
        markers_map[0].setVisible(false);
        var place = placesAutocomplete.getPlace();
        if (!place.geometry) {
          return;
        }

        // If the place has a geometry, then present it on a map.
        if (place.geometry.viewport) {
          map.fitBounds(place.geometry.viewport);
          map.setZoom(15);
        } else {
          map.setCenter(place.geometry.location);
          map.setZoom(15);
        }

        

        var address = '';
        if (place.address_components) {
          address = [
            (place.address_components[0] && place.address_components[0].short_name || ''), (place.address_components[1] && place.address_components[1].short_name || ''), (place.address_components[2] && place.address_components[2].short_name || '')
          ].join(' ');
        }   
        ";

        

        $styles = array();
        $styles['clickableIcons'] = FALSE;
        //$config['styles'] = "clickableIcons: false";
        //$config['directionsStart'] = 'auto';
        //$config['directionsEnd'] = $coords;
        //$config['directionsDivID'] = 'directions_canvas';
        

        $this->googlemaps->initialize($config,$styles);

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

    public function add(){
        $fb = $this->Feedback_Model;
        $validation = $this->form_validation;
        $validation->set_rules($fb->rules());

        if ($validation->run()) {
            $fb->save();
            
        }
        
        redirect()->to('home');
    }


}