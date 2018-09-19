  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <center>
        <h2>
          Maklumat Projek
        </h2>
      </center>
    </section>
    <br>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="table-responsive"></div>
        <div class="col-md-12">
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">Info</a></li>
              <li><a href="#tab_2" data-toggle="tab">Projek</a></li>
              <li><a href="#tab_3" data-toggle="tab">Lokasi</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                <p><b>No Sebutharga :</b><?php echo $get_detail[0]->df_nosebutharga ?></p>
                <p><b>Tarikh Mohon :</b><?php echo $get_detail[0]->df_tarikmohon ?></p>
                <p><b>Jenis Sebutharga :</b><?php echo $get_detail[0]->df_jsebutharga ?></p>
                <p><b>Tajuk Projek :</b><?php echo $get_detail[0]->df_tajuk ?></p>

              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
                <p><b>Gred :</b> <?php echo $get_detail[0]->df_gred ?></p>
                <p><b>Kategori :</b> <?php echo $get_detail[0]->df_kategori ?></p>
                <p><b>Pengkhususan :</b> <?php echo $get_detail[0]->df_khusus ?></p>
                <p><b>Taraf :</b> <?php echo $get_detail[0]->df_taraf ?></p>
                <p><b>Tempoh Siap Kerja :</b> <?php echo $get_detail[0]->df_tempohsiap ?></p>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_3">
                <p><b>Koordinat Lokasi Projek : Latitud(N) : </b>A: <?php echo $get_detail[0]->dp_lata ?>  B: <?php echo $get_detail[0]->dp_latb ?>  C: <?php echo $get_detail[0]->dp_latc ?></p>
                <p><b>Koordinat Lokasi Projek : Longitud(E) : </b>A: <?php echo $get_detail[0]->dp_longa ?>  B: <?php echo $get_detail[0]->dp_longb ?>  C: <?php echo $get_detail[0]->dp_longc ?></p>
                <p><b>Lembangan Sungai :</b><?php echo $get_detail[0]->dp_sungai ?></p>
                <p><b>Sistem :</b><?php echo $get_detail[0]->dp_sistem ?></p>
                <p><b>Sub Sistem :</b><?php echo $get_detail[0]->dp_subsistem ?></p>
                <p><b>Komponen :</b><?php echo $get_detail[0]->dp_komponen ?></p>
                <p><b>Dimensi :</b><?php echo $get_detail[0]->dp_dimensi ?></p>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>




    </section>
    <!-- /.content -->

  </div>
  <!-- /.content-wrapper -->
