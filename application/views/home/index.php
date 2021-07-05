<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SIG</title>

  <!-- Font Awesome Icons -->
  <link href="<?php echo base_url('landing/asset/fontawesome-free/css/all.min.css')?>" rel="stylesheet" type="text/css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>

  <!-- Plugin CSS -->
  <link href="<?php echo base_url('landing/asset/magnific-popup/magnific-popup.css')?>" rel="stylesheet">

  <!-- Theme CSS - Includes Bootstrap -->
  <link href="<?php echo base_url('landing/css/creative.min.css')?>" rel="stylesheet">


  <?php echo $map['js']; ?>
</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">SIG</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto my-2 my-lg-0">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">Tentang</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#maps">Peta</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#daftar">Wisata</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#daftar-toko">Toko</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#daftar-fasilitas">Fasilitas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Kontak</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Masthead -->
  <header class="masthead">
    <div class="container h-100">
      <div class="row h-100 align-items-center justify-content-center text-center">
        <div class="col-lg-10 align-self-end">
          <h1 class="text-uppercase text-white font-weight-bold">Sistem Informasi Geografis</h1>
          <hr class="divider my-4">
        </div>
        <div class="col-lg-8 align-self-baseline">
          <p class="text-white-75 font-weight-light mb-5">Mencari Lokasi wisata di Bandar Lampung</p>
          <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Telusuri lebih lanjut</a>
        </div>
      </div>
    </div>
  </header>

  <!-- About Section -->
  <section class="page-section bg-primary" id="about">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
        <h2 class="text-white mt-0">SIG</h2>
          <hr class="divider light my-4">
          <p class="text-white-50 mb-4">Sistem Informasi Geografis untuk mempermudah mencari informasi letak secara visual di Bandar Lampung.</p>
          <a class="btn btn-light btn-xl js-scroll-trigger" href="#maps">Get Started!</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Services Section -->
  
   <!-- Services Section -->
   <section class="page-section" id="maps">
    <div class="container">
     <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="text-center mt-0">Peta lokasi Bandar lampung</h2>
          <hr class="divider my-4">
        </div> 
      <?php echo $map['html']; ?>
      <p>*Marker pada maps adalah titik lokasi di daerah ProvinsiLampung, Marker berwarna biru adalah titik lokasi pengguna</p>
      <div id="direction_canvas"></div>
    </div>

     <div class="row justify-content-center">
     <button onclick="get_location()" class="btn btn-xl btn-info">Lokasi anda</button>
     </div>
    </div>
  </section>

  <!-- Daftar Lokasi Wisata -->
  <section class="page-section" id="daftar">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12 text-center">
        <h2 class="text-center mt-0">Daftar Lokasi Wisata di daerah Bandar Lampung</h2>
        <hr class="divider my-4">
        <div class="table-responsive">
          <table class="table table-hover table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                  <th>Nama Wisata</th>
                  <th>Gambar</th>
                  <th>Alamat</th>
                  <th>Deskripsi</th>
                  <!--<th>Website</th>
                  <th>Kontak</th> -->
                  <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($wisata as $wisata): ?>
                    <tr>
                        <td width="150">
                            <?php echo $wisata->nama_wisata ?>
                        </td>
                        <td>
                            <img id="imgsource" src="<?php echo base_url('upload/wisata/'.$wisata->gambar) ?>" width="64">
                        </td>
                        <td>
                            <?php echo $wisata->alamat ?>
                        </td>
                        <td>
                            <?php echo $wisata->deskripsi ?>
                        </td>
                        <td><a 
                              href="javascript:;"
                              data-id="<?php echo $wisata->id_wisata ?>"
                              data-nama_wisata="<?php echo $wisata->nama_wisata ?>"
                              data-imgsource="<?php echo base_url('upload/wisata/'.$wisata->gambar) ?>"
                              data-imgsource2="<?php echo base_url('upload/wisata/'.$wisata->gambar2) ?>"
                              data-imgsource3="<?php echo base_url('upload/wisata/'.$wisata->gambar3) ?>"
                              data-alamat="<?php echo $wisata->alamat ?>"
                              data-deskripsi="<?php echo $wisata->deskripsi ?>"
                              data-toggle="modal" data-target="#edit-data">
                            <button  data-toggle="modal" data-target="#tampil-data" class="btn btn-info">Tampil</button>
                            <a/>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
          </table>
         </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Daftar Lokasi Toko -->
  <section class="page-section" id="daftar-toko">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12 text-center">
        <h2 class="text-center mt-0">Daftar Lokasi Toko di daerah Bandar Lampung</h2>
        <hr class="divider my-4">
        <div class="table-responsive">
          <table class="table table-hover table-bordered" id="dataTable1" width="100%" cellspacing="0">
            <thead>
                <tr>
                  <th>Nama Toko</th>
                  <th>Gambar</th>
                  <th>Alamat</th>
                  <th>Deskripsi</th>
                  <!--<th>Website</th>
                  <th>Kontak</th> -->
                  <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($toko as $toko): ?>
                    <tr>
                        <td width="150">
                            <?php echo $toko->nama_toko ?>
                        </td>
                        <td>
                            <img id="imgsource" src="<?php echo base_url('upload/toko/'.$toko->gambar) ?>" width="64">
                        </td>
                        <td>
                            <?php echo $toko->alamat ?>
                        </td>
                        <td>
                            <?php echo $toko->deskripsi ?>
                        </td>
                        <td><a 
                              href="javascript:;"
                              data-id="<?php echo $toko->id_toko ?>"
                              data-nama_toko="<?php echo $toko->nama_toko ?>"
                              data-imgsource="<?php echo base_url('upload/toko/'.$toko->gambar) ?>"
                              data-imgsource2="<?php echo base_url('upload/toko/'.$toko->gambar2) ?>"
                              data-imgsource3="<?php echo base_url('upload/toko/'.$toko->gambar3) ?>"
                              data-alamat="<?php echo $toko->alamat ?>"
                              data-deskripsi="<?php echo $toko->deskripsi ?>"
                              data-toggle="modal" data-target="#edit-data-toko">
                            <button  data-toggle="modal" data-target="#tampil-data" class="btn btn-info">Tampil</button>
                            <a/>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
          </table>
         </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- Daftar Lokasi Fasilitas -->
  <section class="page-section" id="daftar-fasilitas">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12 text-center">
        <h2 class="text-center mt-0">Daftar Lokasi Fasilitas di daerah Bandar Lampung</h2>
        <hr class="divider my-4">
        <div class="table-responsive">
          <table class="table table-hover table-bordered" id="dataTable2" width="100%" cellspacing="0">
            <thead>
                <tr>
                  <th>Nama Fasilitas</th>
                  <th>Gambar</th>
                  <th>Alamat</th>
                  <th>Deskripsi</th>
                  <!--<th>Website</th>
                  <th>Kontak</th> -->
                  <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($fasilitas as $fasilitas): ?>
                    <tr>
                        <td width="150">
                            <?php echo $fasilitas->nama_fasilitas ?>
                        </td>
                        <td>
                            <img id="imgsource" src="<?php echo base_url('upload/fasilitas/'.$fasilitas->gambar) ?>" width="64">
                        </td>
                        <td>
                            <?php echo $fasilitas->alamat ?>
                        </td>
                        <td>
                            <?php echo $fasilitas->deskripsi ?>
                        </td>
                        <td><a 
                              href="javascript:;"
                              data-id="<?php echo $fasilitas->id_fasilitas ?>"
                              data-nama_fasilitas="<?php echo $fasilitas->nama_fasilitas ?>"
                              data-imgsource="<?php echo base_url('upload/fasilitas/'.$fasilitas->gambar) ?>"
                              data-imgsource2="<?php echo base_url('upload/fasilitas/'.$fasilitas->gambar2) ?>"
                              data-imgsource3="<?php echo base_url('upload/fasilitas/'.$fasilitas->gambar3) ?>"
                              data-alamat="<?php echo $fasilitas->alamat ?>"
                              data-deskripsi="<?php echo $fasilitas->deskripsi ?>"
                              data-toggle="modal" data-target="#edit-data-fasilitas">
                            <button  data-toggle="modal" data-target="#tampil-data" class="btn btn-info">Tampil</button>
                            <a/>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
          </table>
         </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Call to Action Section -->
  <!-- <section class="page-section bg-dark text-white">
    <div class="container text-center">
      <h2 class="mb-4">Free Download at Start Bootstrap!</h2>
      <a class="btn btn-light btn-xl" href="https://startbootstrap.com/themes/creative/">Download Now!</a>
    </div>
  </section> -->

  <!-- Contact Section -->
  <section class="page-section bg-dark text-white" id="contact">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="mt-0">SIG</h2>
          <hr class="divider my-4">
          <p class="text-muted mb-5"></p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
          <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
          <div>085378986367</div>
        </div>
        <div class="col-lg-4 mr-auto text-center">
          <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
          <!-- Make sure to change the email address in anchor text AND the link below! -->
          <a class="d-block" href="mailto:kontak@gis.com">kontak@gis.com</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-dark text-white py-5">
    <div class="container">
      <div class="small text-center text-muted">Copyright &copy; 2021 - SIG - Dyoba</div>
    </div>
  </footer>

  <script type="text/javascript">
 $(".btn").click(function(){
    get_location();
  });


function get_location() {
    if ("geolocation" in navigator) {
        navigator.geolocation.getCurrentPosition(register_coords);
    } else {
        // no native support; maybe try Gears?
    }
}

function direction() {
  var directionsService = new google.maps.DirectionsService;
  var directionsDisplay = new google.maps.DirectionsRenderer;
  directionsDisplay.setMap(map);

  marker.addListener('click', function() {
            directionsService.route({
                // origin: document.getElementById('start').value,
                origin: myLatlng,

                // destination: marker.getPosition(),
                destination: {
                    lat: latit,
                    lng: longit
                },
                travelMode: 'DRIVING'
            }, function(response, status) {
                if (status === 'OK') {
                    directionsDisplay.setDirections(response);
                } else {
                    window.alert('Directions request failed due to ' + status);
                }
            });

        });
}


function register_coords(position) {
    var latitude = position.coords.latitude;
    var longitude = position.coords.longitude;
    var myLatlng = new google.maps.LatLng(latitude,longitude);
    var marker = new google.maps.Marker({ 
      map:map, 
      position:myLatlng,
      icon: 'http://maps.google.com/mapfiles/ms/icons/blue.png',
      title: "ini adalah lokasi anda"
    });
    var circle = new google.maps.Circle({
              strokeColor: '#FF0000',
              strokeOpacity: 0.8,
              strokeWeight: 2,
              fillColor: '#FF0000',
              fillOpacity: 0.35,
              map: map,
              mapId : "c640a805d751796",
              center: myLatlng,
              radius: 3000
            });
    google.maps.event.addListener(marker, "click", function (e) {
      var infoWindow = new google.maps.InfoWindow();
      infoWindow.setContent(marker.title);
      infoWindow.open(map, marker);
     });
createCircle(circle);
createMarker(marker);
}


//Error Callback
function show_error(error){
   switch(error.code) {
        case error.PERMISSION_DENIED:
            alert("Permission denied by user.");
            break;
        case error.POSITION_UNAVAILABLE:
            alert("Location position unavailable.");
            break;
        case error.TIMEOUT:
            alert("Request timeout.");
            break;
        case error.UNKNOWN_ERROR:
            alert("Unknown error.");
            break;
    }
}
</script>

  <!-- Bootstrap core JavaScript -->
  <script src="landing/asset/jquery/jquery.min.js"></script>
  <script src="landing/asset/bootstrap/js/bootstrap.bundle.min.js"></script>

  <?php $this->load->view('admin/_partials/modal.php') ?>

  <!-- Plugin JavaScript -->
  <script src="landing/asset/jquery-easing/jquery.easing.min.js"></script>
  <script src="landing/asset/magnific-popup/jquery.magnific-popup.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="landing/js/creative.min.js"></script>
  <script src="<?php echo base_url('js/demo/datatables-demo.js')?>"></script>
  <script src="<?php echo base_url('js/demo/chart-area-demo.js')?>"></script>
  <script src="<?php echo base_url('assets/datatables/jquery.dataTables.js')?>"></script>
  <script src="<?php echo base_url('assets/datatables/dataTables.bootstrap4.js')?>"></script>
  <script>
    $(document).ready(function() {
        $('#dataTable1').DataTable({
            responsive: true
        });
        $('#dataTable2').DataTable({
            responsive: true
        });
    });
</script>
</body>

</html>