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
                <h3 class="box-title">Surat Pelepasan Jaminan Bank</h3>
              </div><!-- end of box header-->

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">Rujukan Bank</label>

                  <div class="col-sm-3">
                    <input type="text" class="form-control" id="rujukbank" placeholder="Rujukan Bank" required>
                  </div>

                  <label class="col-sm-3">Tarikh Mula Tanggungan</label>

                  <div class="col-sm-2">
                    <input type="date" class="form-control" id="mulatanggung">
                  </div>
                </div>

              </div>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">Nama Bank</label>

                  <div class="col-sm-3">
                    <input type="text" class="form-control" id="namabank" placeholder="Nama Bank" required>
                  </div>

                  <label class="col-sm-3">Tarikh Luput Tanggungan</label>

                  <div class="col-sm-2">
                    <input type="date" class="form-control" id="luputtanggung">
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">

                  <label class="col-sm-1">Alamat Bank</label>

                  <div class="col-sm-7">
                    <textarea type="text" class="form-control" id="alamatbank" placeholder="Alamat Bank"></textarea>
                  </div>
                </div>
              </div><!--end of body-->

              <div class="box-body">
                <div class="form-group">

                  <label class="col-sm-1">Nama Jurutera</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="namajuru" placeholder="Nama Jurutera">
                  </div>

                  <label class="col-sm-1">Jawatan</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="jawatan" placeholder="Jawatan">
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">

                  <label class="col-sm-1">Nama Pemborong</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="namaborong" placeholder="Nama Pemborong">
                  </div>

                  <label class="col-sm-1">Alamat Pemborong</label>

                  <div class="col-sm-6">
                    <textarea type="text" class="form-control" id="alamatborong" placeholder="Alamat Pemborong"></textarea>
                  </div>
                </div>
              </div>

              <div class="box-footer">
                <button type="submit" name="submit" class="btn btn-default">Simpan</button>
                <a href="<?php echo site_url('mrk/senaraisemak') ?>" class="btn btn-info" role="button">Pelepasan Jaminan Bank</a>
              </div>
            </div>
          </form>  
        </div>
      </div><!--end of row-->


    </section>
    <!-- /.content -->

  </div>
  <!-- /.content-wrapper -->