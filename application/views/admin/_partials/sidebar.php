<ul class="sidebar navbar-nav">
      <li class="nav-item active" <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>> 
        <a class="nav-link" href="<?php echo base_url('admin/') ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <!-- <li class="nav-item dropdown" <?php echo $this->uri->segment(2) == 'sekolah' ? 'active': '' ?>>
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Sekolah</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">Daftar Menu :</h6>
          <a class="dropdown-item" href="<?php echo base_url('admin/sekolah/')?>">List Data Sekolah</a>
          <a class="dropdown-item" href="<?php echo base_url('admin/sekolah/add')?>">Tambah Data Sekolah</a>
          <div class="dropdown-divider"></div>
        </div>
      </li> -->
      <li class="nav-item dropdown" <?php echo $this->uri->segment(2) == 'wisata' ? 'active': '' ?>>
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Wisata</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">Daftar Menu :</h6>
          <a class="dropdown-item" href="<?php echo base_url('admin/wisata/')?>">List Data Wisata</a>
          <a class="dropdown-item" href="<?php echo base_url('admin/wisata/add')?>">Tambah Data Wisata</a>
          <div class="dropdown-divider"></div>
        </div>
      </li>
      <li class="nav-item dropdown" <?php echo $this->uri->segment(2) == 'toko' ? 'active': '' ?>>
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Toko</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">Daftar Menu :</h6>
          <a class="dropdown-item" href="<?php echo base_url('admin/toko/')?>">List Data Toko</a>
          <a class="dropdown-item" href="<?php echo base_url('admin/toko/add')?>">Tambah Data Toko</a>
          <div class="dropdown-divider"></div>
        </div>
      </li>
      <li class="nav-item dropdown" <?php echo $this->uri->segment(2) == 'toko' ? 'active': '' ?>>
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Fasilitas</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">Daftar Menu :</h6>
          <a class="dropdown-item" href="<?php echo base_url('admin/fasilitas/')?>">List Data Fasilitas</a>
          <a class="dropdown-item" href="<?php echo base_url('admin/fasilitas/add')?>">Tambah Data Fasilitas</a>
          <div class="dropdown-divider"></div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('admin/user/')?>">
          <i class="fas fa-fw fa-user"></i>
          <span>Users</span></a>
      </li>
    </ul>