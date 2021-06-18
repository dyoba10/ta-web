<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('admin/_partials/head.php') ?>
</head>

<body id="page-top">

    <?php $this->load->view('admin/_partials/nav.php') ?>

  <div id="wrapper">

    <?php $this->load->view('admin/_partials/sidebar.php') ?>

    <div id="content-wrapper">

      <div class="container-fluid">

      <?php $this->load->view('admin/_partials/breadcrumb.php') ?>

      <!-- DataTables -->
      <div class="card mb-3">
        <div class="card-header">
        <a href="<?php echo site_url('admin/wisata/add') ?>"><i class="fas fa-plus"></i> Add New</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                        <th>Nama Wisata</th>
                        <th>Gambar</th>
                        <th>Alamat</th>
                        <th>Deskripsi</th>
                        <th>Latitude</th>
                        <th>Longitude</th>
                        <th>Action</th>
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
                        <img id="imgsource" src="<?php echo base_url('upload/wisata/'.$wisata->gambar2) ?>" width="64">
                        <img id="imgsource" src="<?php echo base_url('upload/wisata/'.$wisata->gambar3) ?>" width="64">
                        </td>
                        <td>
                            <?php echo $wisata->alamat ?>
                        </td>
                        <td>
                            <?php echo $wisata->deskripsi ?>
                        </td>
                        <td>
                            <?php echo $wisata->latitude ?>
                        </td>
                        <td>
                            <?php echo $wisata->longitude ?>
                        </td>
                        <td width="250">
						    <a href="<?php echo site_url('admin/wisata/edit/'.$wisata->id_wisata) ?>"
								 class="btn btn-small"><i class="fas fa-edit"></i>Edit</a>
						    <a onclick="deleteConfirm('<?php echo site_url('admin/wisata/delete/'.$wisata->id_wisata) ?>')"
							    href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
						</td>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>    
            </div>
        </div>
      </div>  

      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      
    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <?php $this->load->view('admin/_partials/modal.php') ?>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url('assets/jquery/jquery.min.js')?>"></script>
  <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.min.js')?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url('assets/jquery-easing/jquery.easing.min.js')?>"></script>

  <!-- Page level plugin JavaScript-->
  <script src="<?php echo base_url('assets/chart.js/Chart.min.js')?>"></script>
  <script src="<?php echo base_url('assets/datatables/jquery.dataTables.js')?>"></script>
  <script src="<?php echo base_url('assets/datatables/dataTables.bootstrap4.js')?>"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url('js/sb-admin.min.js')?>"></script>

  <!-- Demo scripts for this page-->
  <script src="<?php echo base_url('js/demo/datatables-demo.js')?>"></script>
  <script src="<?php echo base_url('js/demo/chart-area-demo.js')?>"></script>

<script>
function deleteConfirm(url){
	$('#btn-delete').attr('href', url);
	$('#deleteModal').modal();
}
</script>

</body>

</html>