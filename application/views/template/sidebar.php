
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <?php
      $ssname = $this->session->userdata("name");
      $ssroles = $this->session->userdata("roles");
      ?>
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="user-wrapper">
                <div class="profile-image">
                  <img src="<?php echo base_url() ?>assets/staradmin/images/faces-clipart/pic-4.png" alt="profile image">
                </div>
                <div class="text-wrapper">
                  <p class="profile-name"><?php echo $ssname?></p>
                  <div>
                    <small class="designation text-muted"><?php echo $ssroles?></small>
                    <span class="status-indicator online"></span>
                  </div>
                </div>
              </div>
              <!-- <a href="//echo site_url('daftar/stepsatu')" data-toggle="tooltip" data-placement="top" title="Pastikan No Sebutharga didaftar sebelum prosess penambahan dilakukan" class="btn btn-success btn-block">+ Projek
                <i class="mdi mdi-plus"></i>
              </a> -->
            </div>
          </li>
          <?php switch($ssroles): case "admin": ?>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('mydashboard')?>">
              <i class="menu-icon mdi  mdi-home-modern"></i>
              <span class="menu-title">Halaman Utama</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('projek')?>">
              <i class="menu-icon mdi  mdi-source-fork"></i>
              <span class="menu-title">Senarai Tempahan</span>
            </a>
          </li>
              <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('daftar/stepsatu')?>">
              <i class="menu-icon mdi  mdi-source-fork"></i>
              <span class="menu-title">Projek</span>
            </a>
          </li>
            <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('Daftar/orderSebutharga')?>">
              <i class="menu-icon mdi  mdi-elevation-rise"></i>
              <span class="menu-title">Tempahan No Sebutharga</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('mrk')?>">
              <i class="menu-icon mdi mdi-content-copy"></i>
              <span class="menu-title">Dokumen Bayaran</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('Report/Laporan')?>">
              <i class="menu-icon mdi mdi-sticker"></i>
              <span class="menu-title">Laporan</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('Setting_con')?>">
              <i class="menu-icon mdi mdi-math-compass"></i>
              <span class="menu-title">Konfigurasi</span>
            </a>
          </li>

          <?php break; ?>
          <?php case "user":?>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('mydashboard')?>">
              <i class="menu-icon mdi  mdi-home-modern"></i>
              <span class="menu-title">Halaman Utama</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('projek')?>">
              <i class="menu-icon mdi  mdi-source-fork"></i>
              <span class="menu-title">Senarai Tempahan</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('mrk')?>">
              <i class="menu-icon mdi mdi-content-copy"></i>
              <span class="menu-title">Dokumen Bayaran</span>
            </a>
          </li>
          <?php break;?>
          <?php endswitch; ?>
        </ul>
      </nav>
      <!-- partial -->
