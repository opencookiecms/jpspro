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

          <?php echo form_open('mrk/jaminanbank'); ?>
            <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">Surat Pelepasan Wang Jaminan Perlaksanaan</h3>
              </div><!-- end of box header-->

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">ID</label>

                  <div class="col-sm-1">
                    <input type="text" class="form-control" id="id" name="id" placeholder="ID">
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">Kepada</label>

                  <div class="col-sm-3">
                    <input type="text" class="form-control" id="kepada" name="kepada" placeholder="Kepada">
                  </div>

                  <label class="col-sm-2"></label>
                  <label class="col-sm-2">Rujukan Tuan</label>

                  <div class="col-sm-3">
                    <input type="text" class="form-control" id="rujuktuan" name="rujuktuan" placeholder="Rujukan Tuan">
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">

                  <label class="col-sm-2">Alamat</label>

                  <div class="col-sm-5">
                    <textarea type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat"></textarea>
                  </div>

                  <label class="col-sm-2">Rujukan Kami</label>

                  <div class="col-sm-3">
                    <input type="text" class="form-control" id="rujukkami" name="rujukkami" placeholder="Rujukan Kami">
                  </div>
                </div>

              </div>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">Nama Kontraktor</label>

                  <div class="col-sm-5">
                    <input type="text" class="form-control" id="namakon" name="namakon" placeholder="Nama Kontraktor">
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">

                  <label class="col-sm-2">No Kontraktor</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="nokon" name="nokon" placeholder="No Kontraktor">
                  </div>
                </div>
              </div><!--end of body-->

              <div class="box-body">
                <div class="form-group">

                  <label class="col-sm-2">Melalui</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="melalui" name="melalui" placeholder="Melalui">
                  </div>

                  <label class="col-sm-4">Jumlah Wang Jaminan Perlaksanaan RM</label>

                  <div class="col-sm-2">
                    <input type="text" class="form-control" id="wangjamin" name="wangjaminan" placeholder="RM">
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">

                  <label class="col-sm-2">Alamat</label>

                  <div class="col-sm-4">
                    <textarea type="text" class="form-control" id="alamat1" name="alamat1" placeholder="Alamat"></textarea>
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">

                  <label class="col-sm-2">Pegawai Penguasa</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="pegawaikuasa" name="pegawaikuasa" placeholder="Pegawai Penguasa">
                  </div>

                  <label class="col-sm-1">Jawatan</label>

                  <div class="col-sm-3">
                    <input type="text" class="form-control" id="jawatan" name="jawatan" placeholder="Jawatan">
                  </div>
                </div>
              </div>

              <div class="box-footer">
                <button type="submit" name="submit" class="btn btn-default">Simpan</button>
                <a href="<?php echo base_url('surat') ?>" class="btn btn-info" role="button">Surat</a>
              </div>
            </div>
          </form>  
        </div>
      </div><!--end of row-->


    </section>
    <!-- /.content -->

  </div>
  <!-- /.content-wrapper -->
