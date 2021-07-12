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
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Pesan</th>
                        <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($feedback as $fb): ?>
                    <tr>
                        <td width="150">
                            <?php echo $fb->id ?>
                        </td>
                        <td>
                            <?php echo $fb->nama ?>
                        </td>
                        <td>
                            <?php echo $fb->email ?>
                        </td>
                        <td>
                            <?php echo $fb->pesan ?>
                        </td>
                        <td width="250">
						    <a onclick="deleteConfirm('<?php echo site_url('admin/feedback/delete/'.$fb->id) ?>')"
							    href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
						</td>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>  
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