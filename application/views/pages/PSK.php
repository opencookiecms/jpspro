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

              $pkkNo = $get_detail[0]->mrk_pskinden;
                if($pkkNo == null){
                    echo form_open('mrk/PSK');
                }
                else {
                  echo form_open('mrk/PSK_Update');
                }

          ?>
            <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">Perakuan Siap Kerja</h3>
              </div><!-- end of box header-->
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">Nama Pemborong</label>
                  <input type="hidden" name="hiddenid" value="<?php echo $get_detail[0]->mrksatuid?>">
                  <div class="col-sm-3">
                    <input type="text" class="form-control" id="namapombr" name="namapomb" value="<?php echo $get_detail[0]->mrk_namakon?>" placeholder="Nama Pemborong" readonly>
                  </div>

                  <label class="col-sm-1">Alamat</label>

                  <div class="col-sm-6">
                    <textarea type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" readonly><?php echo $get_detail[0]->mrk_alamatkon?></textarea>
                  </div>
                </div>

              </div><!--end of body-->

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">Fail Rujukan</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="failrujuk" name="failrujuk" placeholder="Fail Rujukan" readonly value="<?php echo $get_detail[0]->df_nosebutharga?>">
                  </div>

                  <label class="col-sm-1">No Sebutharga</label>

                  <div class="col-sm-5">
                    <input type="text" class="form-control" id="nosebut" name="nosebut" placeholder="No Sebutharga" value="<?php echo $get_detail[0]->df_nosebutharga?>" readonly>
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">Butiran Kerja</label>

                  <div class="col-sm-5">
                    <textarea type="text" readonly class="form-control" id="butirkerja" name="butirkerja" placeholder="Butiran Kerja"><?php echo $get_detail[0]->mrk_tajukkerja?></textarea>
                  </div>

                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">Inden No</label>
                  <div class="col-sm-4">
                  <input type="text" class="form-control" name="indenno" placeholder="Inden No" value="<?php echo $get_detail[0]->mrk_noinden?>" readonly>
                  <input type="hidden" name="kodvods" value="<?php echo $get_detail[0]->df_kodvot?>">
                </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">Tarikh Siap Sebenar</label>

                  <div class="col-sm-2">
                    <input type="date" class="form-control" id="tarikhsiapsebenar" name="tarikhsiapsebenar" value="<?php echo $get_detail[0]->mrk_tarikhsiapsebenar?>">
                  </div>

                  <label class="col-sm-3">Tarikh Ambil Milik</label>

                  <div class="col-sm-2">
                    <input type="date" class="form-control" id="tarikhambikmilik" name="tarikhambikmilik" value="<?php echo $get_detail[0]->mrk_tarikhambikmilik?>">
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">Tarikh Mula Tanggungan Kecacatan</label>

                  <div class="col-sm-2">
                    <input type="date" class="form-control" id="mulacacat" name="mulacacat" value="<?php echo $get_detail[0]->mrk_tarikhmulatanggungcacat?>">
                  </div>

                  <label class="col-sm-3">Tarikh Tamat Tanggungan Kecacatan</label>

                  <div class="col-sm-2">
                    <input type="date" class="form-control" id="cacattamat" name="cacattamat"  value="<?php echo $get_detail[0]->mrk_tarikhtamattanggungcacat?>">
                  </div>
                </div>
              </div>

              <div class="box-footer">
                <button type="submit" name="submit" class="btn btn-default">Simpan</button>
                  <a href="<?php echo site_url('Report/Report_PSK_02/'.$get_detail[0]->projek_id) ?>" class="btn btn-success" role="button" target="_blank">Cetak</a>
                  <a href="<?php echo site_url('Report/Report_PSK_01/'.$get_detail[0]->projek_id) ?>" class="btn btn-success" role="button" target="_blank">Cetak</a>
              </div>
            </div>
          </form>
        </div>
      </div><!--end of row-->


    </section>
    <!-- /.content -->

  </div>
  <!-- /.content-wrapper -->
