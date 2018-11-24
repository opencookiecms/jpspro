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

            <?php

                $pkkNo = $get_detail[0]->swjp_kodvot;
                  if($pkkNo == null){
                      echo form_open('Surat/Surat_WJP');
                  }
                  else {
                    echo form_open('Surat/Surat_WJP_Update');
                  }

            ?>
            <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">Surat Pelepasan Wang Jaminan Perlaksanaan</h3>
              </div><!-- end of box header-->

              <div class="box-body">

              </div>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">Kepada</label>

                  <div class="col-sm-3">
                    <input type="text" class="form-control" id="kepada" name="kepada" placeholder="Kepada" value="<?php echo $get_detail[0]->swjp_kepada?>">
                  </div>

                  <label class="col-sm-2"></label>
                  <label class="col-sm-2">Rujukan Tuan</label>

                  <div class="col-sm-3">
                    <input type="text" class="form-control" id="rujuktuan" name="rujuktuan" placeholder="Rujukan Tuan" value="<?php echo $get_detail[0]->swjp_rujuktuan?>">
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">

                  <label class="col-sm-2">Alamat</label>

                  <div class="col-sm-5">
                    <textarea type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat"><?php echo $get_detail[0]->swjp_alamat?></textarea>
                  </div>

                  <label class="col-sm-2">Rujukan Kami</label>

                  <div class="col-sm-3">
                    <input type="text" class="form-control" id="rujukkami" name="rujukkami" placeholder="Rujukan Kami" readonly value="<?php echo $get_detail[0]->df_nosebutharga?>">
                    <input type="text" name="noinden" value="<?php echo $get_detail[0]->mrk_noinden?>" readonly>
                      <input type="text" name="kodvot" value="<?php echo $get_detail[0]->df_kodvot?>" readonly>
                        <input type="text" name="hiddenid"value="<?php echo $get_detail[0]->mrksatuid?>" readonly>
                  </div>
                </div>

              </div>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">Nama Kontraktor</label>

                  <div class="col-sm-5">
                    <input type="text" class="form-control" id="namakon" name="namakon" placeholder="Nama Kontraktor" readonly value="<?php echo $get_detail[0]->mrk_namakon?>">
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">

                  <label class="col-sm-2">No Kontraktor</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="nokon" name="nokon" placeholder="No Kontraktor" readonly value="<?php echo $get_detail[0]->df_nosebutharga?>">
                  </div>
                </div>
              </div><!--end of body-->

              <div class="box-body">
                <div class="form-group">

                  <label class="col-sm-2">Melalui</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="melalui" name="melalui" placeholder="Melalui" value="<?php echo $get_detail[0]->swjp_melalui?>">
                  </div>

                  <label class="col-sm-4">Jumlah Wang Jaminan Perlaksanaan RM</label>

                  <div class="col-sm-2">
                    <input type="text" class="form-control" id="wangjamin" name="wangjaminan" placeholder="RM" value="<?php echo $get_detail[0]->swjp_wangjamin?>">
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">

                  <label class="col-sm-2">Alamat</label>

                  <div class="col-sm-4">
                    <textarea type="text" class="form-control" id="alamat1" name="alamat1" placeholder="Alamat"><?php echo $get_detail[0]->swjp_alamatlalu?></textarea>
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">

                  <label class="col-sm-2">Pegawai Penguasa</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="pegawaikuasa" name="pegawaikuasa" placeholder="Pegawai Penguasa" value="<?php echo $get_detail[0]->swjp_pegawaikuasa?>">
                  </div>

                  <label class="col-sm-1">Jawatan</label>

                  <div class="col-sm-3">
                    <input type="text" class="form-control" id="jawatan" name="jawatan" placeholder="Jawatan" value="<?php echo $get_detail[0]->swjp_jawatanpp?>">
                  </div>
                </div>
              </div>

              <div class="box-footer">
                <button type="submit" name="submit" class="btn btn-default">Simpan</button>
          <a href="<?php echo site_url('Report/Report_Cover_PWJP/'.$get_detail[0]->projek_id) ?>" class="btn btn-success" role="button" target="_blank">Cetak</a>
              </div>
            </div>
          </form>
        </div>
      </div><!--end of row-->


    </section>
    <!-- /.content -->

  </div>
  <!-- /.content-wrapper -->
