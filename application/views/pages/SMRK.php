  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper b">
    <!-- Content Header (Page header) 
    <section class="content-header">
      <center>
        <h1>
          Maklumat Rekod Kerja
        </h1>
      </center>
    </section>
  -->
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

                $pkkNo = $get_detail[0]->s_kodvot;
                  if($pkkNo == null){
                      echo form_open('Surat/Surat_MRK');
                  }
                  else {
                    echo form_open('Surat/Surat_MRK_Update');
                  }

            ?>
            <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">Surat Maklumat Rekod Kerja</h3>
              </div><!-- end of box header-->

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">Rujukan Tuan</label>

                  <div class="col-sm-3">
                    <input type="text" class="form-control" id="rujuktuan" name="rujuktuan" placeholder="Rujukan Bank" value="<?php echo $get_detail[0]->s_rujuktuan?>">
                  </div>

                  <label class="col-sm-3">Bertarikh</label>

                  <div class="col-sm-2">
                    <input type="date" class="form-control" id="tarikhtuan" name="tarikhtuan" value="<?php echo $get_detail[0]->s_tarikhtuan?>">
                  </div>
                </div>

              </div>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">Rujukan Kami</label>

                  <div class="col-sm-3">
                    <input type="text" class="form-control" id="rujukkami" name="rujukkami" readonly placeholder="Rujukan Kami" value="<?php echo $get_detail[0]->df_nosebutharga?>">
                  </div>

                  <label class="col-sm-3">Jenis Borang MRK</label>

                  <div class="col-sm-2">
                    <select type="text" class="form-control" id="mrk" name="mrk">
                    <option value="<?php echo $get_detail[0]->s_jenisborang?>"><?php echo $get_detail[0]->s_jenisborang?></option>
                      <option value="MRK 01">MRK 01</option>
                      <option value="MRK 02">MRK 02</option>
                      <option value="MRK 03">MRK 03</option>
                    </select>
                  </div>
                </div>

              </div>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">Nama Kontraktor</label>

                  <div class="col-sm-5">
                    <input type="text" class="form-control" id="namakon" name="namakon" readonly value="<?php echo $get_detail[0]->mrk_namakon?>">
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">

                  <label class="col-sm-2">No Kontraktor</label>

                  <div class="col-sm-3">
                    <input type="text" class="form-control" id="nokon" name="nokon" readonly placeholder="No Kontraktor" value="<?php echo $get_detail[0]->mrk_nopkk?>">
                  </div>
                </div>
              </div><!--end of body-->

              <div class="box-body">
                <div class="form-group">

                  <label class="col-sm-2">No Inden</label>

                  <div class="col-sm-3">
                    <input type="text" class="form-control" id="noinden" name="noinden" readonly placeholder="No Inden" value="<?php echo $get_detail[0]->mrk_noinden?>">
                  </div>

                  <label class="col-sm-2">Pegawai Penguasa</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="pegawaikuasa" name="pegawaikuasa" placeholder="Pegawai Penguasa" value="<?php echo $get_detail[0]->s_pegawaikuasa?>">
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">

                  <label class="col-sm-2">No Sebutharga</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="nosebutharga" readonly name="nosebutharga" placeholder="No Sebutharga" value="<?php echo $get_detail[0]->df_nosebutharga?>">
                        <input type="text"  name="kodvot" value="<?php echo $get_detail[0]->df_kodvot?>">
                              <input type="text"  name="hiddenid" value="<?php echo $get_detail[0]->mrksatuid?>">


                  </div>

                  <label class="col-sm-1">Jawatan</label>

                  <div class="col-sm-3">
                    <input type="text" class="form-control" id="jawatan" name="jawatan" placeholder="Jawatan" value="<?php echo $get_detail[0]->s_jawatanpp?>">
                  </div>
                </div>
              </div>

              <div class="box-footer">
                <button type="submit" name="submit" class="btn btn-default">Simpan</button>
                <a href="<?php echo site_url('Report/Report_PKK01/'.$get_detail[0]->projek_id) ?>" class="btn btn-success" role="button" target="_blank">Cetak 01</a>
                  <a href="<?php echo site_url('Report/Report_PKK02/'.$get_detail[0]->projek_id) ?>" class="btn btn-warning" role="button" target="_blank">Cetak 02</a>
              </div>
            </div>
          </form>
        </div>
      </div><!--end of row-->


    </section>
    <!-- /.content -->

  </div>
  <!-- /.content-wrapper -->
