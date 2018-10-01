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

        <?php if(isset($_SESSION['success'])) { ?>
          <div class="alert alert-success"><?php echo $_SESSION['success'] ?></div>
        <?php
          } ?>
        <?php //echo validation_errors('<div class="alert alert-danger">', '</div'); ?>

        <?php echo validation_errors(); ?>

          <?php echo form_open('mrk/rekodkerjatiga'); ?>
            <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">Maklumat Rekod Kerja - MRK 03</h3>
              </div><!-- end of box header-->
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">No Pendaftaran Kontraktor</label>

                  <div class="col-sm-3">
                    <input type="text" class="form-control" id="nokontr" name="nokontr" placeholder="No Pendaftaran Kontraktor">
                  </div>

                  <label class="col-sm-1">Nama Kontraktor</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="namakon" name="namakon" placeholder="Nama Kontraktor">
                  </div>
                </div>

              </div><!--end of body-->

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">No Kontrak</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="nokontrak" name="nokontrak" placeholder="No Kontrak">
                  </div>

                  <label class="col-sm-2">No Inden/Pesanan Tempatan</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="noinden" name="noinden" placeholder="No Inden">
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">Tajuk Kerja</label>

                  <div class="col-sm-5">
                    <textarea type="text" class="form-control" id="tajukkerjamrk" name="tajukkerjamrk" placeholder="Tajuk Kerja"></textarea>
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">Tarikh Mula</label>

                  <div class="col-sm-2">
                    <input type="date" class="form-control" id="tarikhmulakon" name="tarikhmulakon" placeholder="Tarikh Mula">
                  </div>

                  <label class="col-sm-3">Tarikh Jangka Siap</label>

                  <div class="col-sm-2">
                    <input type="date" class="form-control" id="tarikhjangka" name="tarikhjangka">
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">Dilanjutkan Masa</label>

                  <div class="col-sm-2">
                    <input type="date" class="form-control" id="tariklanjut" name="tariklanjut">
                  </div>

                  <label class="col-sm-3">Tarikh Siap Sebenar</label>

                  <div class="col-sm-2">
                    <input type="date" class="form-control" id="tarikhkerjasempurna" name="tarikhkerjasempurna">
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">Kos Projek (RM)</label>

                  <div class="col-sm-2">
                    <input type="text" class="form-control" id="kosprojek" name="kosprojek" placeholder="RM">
                  </div>

                  <label class="col-sm-2">Kos Sebenar (RM)</label>

                  <div class="col-sm-2">
                    <input type="text" class="form-control" id="kossebenar" name="kossebenar" placeholder="RM">
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">L.A.D Dikenakan</label>

                  <label class="col-sm-2">Dari</label>

                  <div class="col-sm-2">
                    <input type="date" class="form-control" id="laddari" name="laddari">
                  </div>

                  <label class="col-sm-2">Sehingga</label>

                  <div class="col-sm-2">
                    <input type="date" class="form-control" id="ladsehingga" name="ladsehingga">
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2"></label>

                  <label class="col-sm-2">RM</label>

                  <div class="col-sm-2">
                    <input type="text" class="form-control" id="rmsehari" name="rmsehari" placeholder="RM/Sehari">
                  </div>
                </div>
              </div>

              <div class="box-footer">
                <button type="submit" name="submit" class="btn btn-default">Simpan</button>
                <a href="<?php echo site_url('mrk/perakuansiapkerja') ?>" class="btn btn-info" role="button">Perakuan Siap Kerja</a>
              </div>
            </div>
          </form>  
        </div>
      </div><!--end of row-->


    </section>
    <!-- /.content -->
    
  </div>
  <!-- /.content-wrapper -->
