  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <center>
        <h1>
          Daftar Projek
        </h1>
      </center>
    </section>
    <br>

    <!-- Main content -->
    <section class="content">
     
      <div class="row">
        <div class="col-lg-12">
        <form action="<?php echo site_url('stepsatu/stepone'); ?>" method="post"></form>
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Daftar</h3>
            </div><!-- end of box header-->
            <div class="box-body">
              <div class="form-group">
                <label class="col-sm-1">No Sebutharga</label>

                <div class="col-sm-3">
                  <input type="text" class="form-control" id="nosebut" placeholder="No Fail Sebutharga" required>
                </div>
                <label class="col-sm-1">Tarikh Permohonan</label>

                <div class="col-sm-2">
                  <input type="date" class="form-control" id="tarikhmohon" placeholder="Tarikh Permohonan">
                </div>
                <label class="col-sm-1">Jenis Sebutharga</label>

                <div class="col-sm-2">
                  <input type="text" class="form-control" id="jenissebut" placeholder="Tarikh Permohonan">
                </div>
              </div>

            </div><!--end of body-->
            
            <div class="box-body">
              <div class="form-group">
                <label class="col-sm-1">Tajuk Projek</label>

                <div class="col-sm-6">
                  <textarea type="text" class="form-control" id="tajukprojek" placeholder="No Fail Sebutharga"></textarea>
                </div>
              </div>
            </div>
            <div class="box-footer">
              <button type="submit" id="stepone-submit" class="btn btn-default">Simpan</button>
              <a href="<?php echo site_url('daftar/stepdua') ?>" class="btn btn-info" role="button">Seterusnya</a>
            </div>
          </div>
        </div>
      </div><!--end of row-->


    </section>
    <!-- /.content -->
    
  </div>
  <!-- /.content-wrapper -->
