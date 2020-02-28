
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
                  <img src="<?php echo base_url() ?>assets/images/profile/<?php echo $this->session->userdata('userpic') ?>" alt="profile image">
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
            <a class="nav-link" data-toggle="collapse" href="#ui" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi  mdi-elevation-rise"></i>
              <span class="menu-title">Daftar No.Perolehan</span>
                <i class="menu-arrow"></i>
            </a>
               <div class="collapse" id="ui">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo site_url('Daftar/orderSebutharga')?>">Pendaftaran</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo site_url('Daftar/senarai_tempahan')?>">Senarai Pendaftaran</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo site_url('Daftar/senarai_tahunan')?>">Mengikut Tahunan</a>
                </li>
              
              </ul>
            </div>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('daftar/stepsatu')?>">
              <i class="menu-icon mdi  mdi-source-fork"></i>
              <span class="menu-title">Maklumat Perolehan</span>
            </a>
          </li>
          <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi  mdi-source-fork"></i>
              <span class="menu-title">Senarai Projek</span>
                <i class="menu-arrow"></i>
            </a>
             <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo site_url('projek/sebutharga')?>">Sebutharga</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo site_url('projek/lantikan_terus')?>">Lantikan Terus</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo site_url('projek/undi')?>">Undi</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo site_url('projek/senarai_projek_tahunan')?>">Tahunan</a>
                </li>
              </ul>
            </div>
          </li>

           <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basics" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi  mdi-source-fork"></i>
              <span class="menu-title">Laporan</span>
                <i class="menu-arrow"></i>
            </a>
             <div class="collapse" id="ui-basics">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" target="_blank" href="<?php echo site_url('Report/Laporan')?>">Laporan Tahunan Semasa</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo site_url('Report/Laporan_Tahunan_C')?>">Laporan Tahunan</a>
                </li>
              </ul>
            </div>
          </li>
       
   
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('mrk')?>">
              <i class="menu-icon mdi mdi-content-copy"></i>
              <span class="menu-title">Dokumen Bayaran</span>
            </a>
          </li>

  
       
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('Setting_con')?>">
              <i class="menu-icon mdi mdi-math-compass"></i>
              <span class="menu-title">Konfigurasi</span>
            </a>
          </li>

          <li class="nav-item">
             <a class="nav-link" href="<?php echo base_url()?>assets/docx/user_manual.pdf" download="User Manual">
              <i class="menu-icon mdi  mdi-home-modern"></i>
              <span class="menu-title">User Manual 1</span>
            </a>
          </li>

          <li class="nav-item">
             <a class="nav-link" href="<?php echo base_url()?>assets/docx/MANUAL_SISTEM.doc" download="User Manual">
              <i class="menu-icon mdi  mdi-home-modern"></i>
              <span class="menu-title">Manual Sistem</span>
            </a>
          </li>

          <?php break; ?>

          <?php case "special": ?>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('mydashboard')?>">
              <i class="menu-icon mdi  mdi-home-modern"></i>
              <span class="menu-title">Halaman Utama</span>
            </a>
          </li>
                <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi  mdi-elevation-rise"></i>
              <span class="menu-title">Daftar No.Perolehan</span>
                <i class="menu-arrow"></i>
            </a>
               <div class="collapse" id="ui">
              <ul class="nav flex-column sub-menu">
             
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo site_url('Daftar/senarai_tempahan')?>">Senarai Pendaftaran</a>
                </li>
                 <li class="nav-item">
                  <a class="nav-link" href="<?php echo site_url('Daftar/senarai_tahunan')?>">Mengikut Tahunan</a>
                </li>
              
              </ul>
            </div>
          </li>
          <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi  mdi-source-fork"></i>
              <span class="menu-title">Senarai Projek</span>
                <i class="menu-arrow"></i>
            </a>
             <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo site_url('projek/sebutharga')?>">Sebutharga</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo site_url('projek/lantikan_terus')?>">Lantikan Terus</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo site_url('projek/undi')?>">Undi</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo site_url('projek/tahunan')?>">Tahunan</a>
                </li>
              </ul>
            </div>
          </li>

           <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basics" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi  mdi-source-fork"></i>
              <span class="menu-title">Laporan</span>
                <i class="menu-arrow"></i>
            </a>
             <div class="collapse" id="ui-basics">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" target="_blank" href="<?php echo site_url('Report/Laporan')?>">Laporan Tahunan Semasa</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo site_url('Report/Laporan_Tahunan_C')?>">Laporan Tahunan</a>
                </li>
              </ul>
            </div>
          </li>
       
   
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('mrk')?>">
              <i class="menu-icon mdi mdi-content-copy"></i>
              <span class="menu-title">Dokumen Bayaran</span>
            </a>
          </li>

          <li class="nav-item">
             <a class="nav-link" href="<?php echo base_url()?>assets/docx/user_manual.pdf" download="User Manual">
              <i class="menu-icon mdi  mdi-home-modern"></i>
              <span class="menu-title">User Manual</span>
            </a>
          </li>

          <li class="nav-item">
             <a class="nav-link" href="<?php echo base_url()?>assets/docx/MANUAL_SISTEM.doc" download="User Manual">
              <i class="menu-icon mdi  mdi-home-modern"></i>
              <span class="menu-title">Manual Sistem</span>
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
              <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi  mdi-source-fork"></i>
              <span class="menu-title">Senarai Projek</span>
                <i class="menu-arrow"></i>
            </a>
             <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo site_url('projek/sebutharga')?>">Sebutharga</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo site_url('projek/lantikan_terus')?>">Lantikan Terus</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo site_url('projek/undi')?>">Undi</a>
                </li>
                 <li class="nav-item">
                  <a class="nav-link" href="<?php echo site_url('projek/senarai_projek_tahunan')?>">Tahunan</a>
                </li>
              </ul>
            </div>
          </li>
       
   
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('mrk')?>">
              <i class="menu-icon mdi mdi-content-copy"></i>
              <span class="menu-title">Dokumen Bayaran</span>
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('report/laporan_semua_user')?>">
              <i class="menu-icon mdi mdi-content-copy"></i>
              <span class="menu-title">Laporan</span>
            </a>
          </li>

          <li class="nav-item">
             <a class="nav-link" href="<?php echo base_url()?>assets/docx/user_manual.pdf" download="User Manual">
              <i class="menu-icon mdi  mdi-home-modern"></i>
              <span class="menu-title">User Manual</span>
            </a>
          </li>

          <li class="nav-item">
             <a class="nav-link" href="<?php echo base_url()?>assets/docx/MANUAL_SISTEM.doc" download="User Manual">
              <i class="menu-icon mdi  mdi-home-modern"></i>
              <span class="menu-title">Manual Sistem</span>
            </a>
          </li>
      
  
          <?php break;?>


          <?php case "clerk": ?>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('mydashboard')?>">
              <i class="menu-icon mdi  mdi-home-modern"></i>
              <span class="menu-title">Halaman Utama</span>
            </a>
          </li>
           <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi  mdi-elevation-rise"></i>
              <span class="menu-title">Daftar No.Perolehan</span>
                <i class="menu-arrow"></i>
            </a>
               <div class="collapse" id="ui">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo site_url('Daftar/orderSebutharga')?>">Pendaftaran</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo site_url('Daftar/senarai_tempahan')?>">Senarai Pendaftaran</a>
                </li>
                 <li class="nav-item">
                  <a class="nav-link" href="<?php echo site_url('Daftar/senarai_tahunan')?>">Mengikut Tahunan</a>
                </li>
              
              </ul>
            </div>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('daftar/stepsatu')?>">
              <i class="menu-icon mdi  mdi-source-fork"></i>
              <span class="menu-title">Maklumat Perolehan</span>
            </a>
          </li>
          <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi  mdi-source-fork"></i>
              <span class="menu-title">Senarai Projek</span>
                <i class="menu-arrow"></i>
            </a>
             <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo site_url('projek/sebutharga')?>">Sebutharga</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo site_url('projek/lantikan_terus')?>">Lantikan Terus</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo site_url('projek/undi')?>">Undi</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo site_url('projek/senarai_projek_tahunan')?>">Tahunan</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url()?>assets/docx/user_manual.pdf" download="User Manual">
              <i class="menu-icon mdi  mdi-home-modern"></i>
              <span class="menu-title">User Manual</span>
            </a>
          </li>

          <li class="nav-item">
             <a class="nav-link" href="<?php echo base_url()?>assets/docx/MANUAL_SISTEM.doc" download="User Manual">
              <i class="menu-icon mdi  mdi-home-modern"></i>
              <span class="menu-title">Manual Sistem</span>
            </a>
          </li>
          
      
          <?php break; ?>

    
          <?php endswitch; ?>
        </ul>
      </nav>
      <!-- partial -->
