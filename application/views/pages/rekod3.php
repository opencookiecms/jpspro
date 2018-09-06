  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <center>
        <h1>
          Maklumat Rekod Kerja
        </h1>
      </center>
    </section>
    <br>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-lg-12">

          <form  method="post" action="<?php echo site_url('daftar/rekodkerja'); ?>">
            <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">Maklumat Rekod Kerja - MRK 03</h3>
              </div><!-- end of box header-->
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">No Pendaftaran Kontraktor</label>

                  <div class="col-sm-3">
                    <input type="text" class="form-control" id="nokontr" placeholder="No Pendaftaran Kontraktor" required>
                  </div>

                  <label class="col-sm-1">Nama Kontraktor</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="namakon" placeholder="Nama Kontraktor">
                  </div>
                </div>

              </div><!--end of body-->

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">No Inden/Pesanan Tempatan</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="noinden" placeholder="No Inden/Pesanan Tempatan">
                  </div>

                  <label class="col-sm-1">Tajuk Kerja</label>

                  <div class="col-sm-5">
                    <textarea type="text" class="form-control" id="tajukkerjamrk" placeholder="Tajuk Kerja"></textarea>
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">Tarikh Mula</label>

                  <div class="col-sm-2">
                    <input type="date" class="form-control" id="tarikhmulakon" placeholder="Tarikh Mula">
                  </div>

                  <label class="col-sm-3">Tarikh Jangka Siap</label>

                  <div class="col-sm-2">
                    <input type="date" class="form-control" id="tarikhjangka">
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">Dilanjutkan Masa</label>

                  <div class="col-sm-2">
                    <input type="date" class="form-control" id="tariklanjut">
                  </div>

                  <label class="col-sm-3">Tarikh Siap Sebenar</label>

                  <div class="col-sm-2">
                    <input type="date" class="form-control" id="tarikhkerjasempurna">
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">Kos Projek RM</label>

                  <div class="col-sm-2">
                    <input type="text" class="form-control" id="kosprojek" placeholder="RM">
                  </div>

                  <label class="col-sm-2">Kos Sebenar RM</label>

                  <div class="col-sm-2">
                    <input type="text" class="form-control" id="kossebenar" placeholder="RM">
                  </div>
                </div>
              </div>

              <div class="box-footer">
                <button type="submit" name="submit" class="btn btn-default">Simpan</button>
                <a href="<?php echo site_url('daftar/perakuansiapkerja') ?>" class="btn btn-info" role="button">Perakuan Siap Kerja</a>
              </div>
            </div>
          </form>  
        </div>
      </div><!--end of row-->


    </section>
    <!-- /.content -->
    
  </div>
  <!-- /.content-wrapper -->
