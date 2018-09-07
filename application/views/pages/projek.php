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
              <li class="active"><a href="#tab_1" data-toggle="tab">LANGKAH 1</a></li>
              <li><a href="#tab_2" data-toggle="tab">LANGKAH 2</a></li>
              <li><a href="#tab_3" data-toggle="tab">LANGKAH 3</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                <p><b>No Sebutharga :</b><?php echo $h[0]->df_nosebutharga ?></p>
                <p><b>Tarikh Mohon :</b><?php echo $h[0]->df_tarikmohon ?></p>
                <p><b>Jenis Sebutharga :</b><?php echo $h[0]->df_jsebutharga ?></p>
                <p><b>Tajuk Projek :</b><?php echo $h[0]->df_tajuk ?></p>

              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
                <p><b>Gred :</b></p>
                <p><b>Kategori :</b></p>
                <p><b>Pengkhususan :</b></p>
                <p><b>Taraf :</b></p>
                <p><b>Tempoh Siap Kerja :</b></p>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_3">
                <p><b>Koordinat Lokasi Projek : Latitud(N) : </b></p>
                <p><b>Lembangan Sungai :</b></p>
                <p><b>Sistem :</b></p>
                <p><b>Sub Sistem :</b></p>
                <p><b>Komponen :</b></p>
                <p><b>Dimensi :</b></p>
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
