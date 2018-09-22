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
                <h3 class="box-title">Perakuan Siap Kerja</h3>
              </div><!-- end of box header-->
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">Nama Pemborong</label>

                  <div class="col-sm-3">
                    <input type="text" class="form-control" id="nokontr" name="nokontr" placeholder="Nama Pemborong">
                  </div>

                  <label class="col-sm-1">Alamat</label>

                  <div class="col-sm-6">
                    <textarea type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat"></textarea>
                  </div>
                </div>

              </div><!--end of body-->

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">Fail Rujukan</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="failrujuk" name="failrujuk" placeholder="Fail Rujukan">
                  </div>

                  <label class="col-sm-1">No Sebutharga</label>

                  <div class="col-sm-5">
                    <input type="text" class="form-control" id="nosebut" name="nosebut" placeholder="No Sebutharga">
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">Butiran Kerja</label>

                  <div class="col-sm-5">
                    <textarea type="text" class="form-control" id="butirkerja" name="butirkerja" placeholder="Butiran Kerja"></textarea>
                  </div>

                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">Tarikh Siap Sebenar</label>

                  <div class="col-sm-2">
                    <input type="date" class="form-control" id="tarikhsiapsebenar" name="tarikhsiapsebenar">
                  </div>

                  <label class="col-sm-3">Tarikh Ambik Milik</label>

                  <div class="col-sm-2">
                    <input type="date" class="form-control" id="tarikhambikmilik" name="tarikhambikmilik">
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">Tarikh Mula Tanggungan Kecacatan</label>

                  <div class="col-sm-2">
                    <input type="date" class="form-control" id="mulacacat" name="mulacacat">
                  </div>

                  <label class="col-sm-3">Tarikh Tamat Tanggungan Kecacatan</label>

                  <div class="col-sm-2">
                    <input type="date" class="form-control" id="cacattamat" name="cacattamat">
                  </div>
                </div>
              </div>

              <div class="box-footer">
                <button type="submit" name="submit" class="btn btn-default">Simpan</button>
                <a href="<?php echo site_url('mrk/senaraisemak') ?>" class="btn btn-info" role="button">Senarai Semakan</a>
              </div>
            </div>
          </form>  
        </div>
      </div><!--end of row-->


    </section>
    <!-- /.content -->
    
  </div>
  <!-- /.content-wrapper -->
