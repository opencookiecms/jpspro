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

          <?php echo form_open('mrk/MRK_03'); ?>
            <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">Maklumat Rekod Kerja - MRK 03</h3>
              </div><!-- end of box header-->
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">No Pendaftaran Kontraktor</label>

                  <div class="col-sm-3">
                    <input type="text" class="form-control" id="nokontr" value="  <?php echo $get_detail[0]->mrk_nopkk?>" name="nokontr" placeholder="No Pendaftaran Kontraktor" readonly>
                  </div>

                  <label class="col-sm-1">Nama Kontraktor</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="namakon" name="namakon" placeholder="Nama Kontraktor" value="  <?php echo $get_detail[0]->mrk_namakon?>" readonly>
                  </div>
                </div>

              </div><!--end of body-->

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">No Kontrak</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="nokontrak" name="nokontrak" placeholder="No Kontrak" value="  <?php echo $get_detail[0]->df_nosebutharga?>" readonly>
                  </div>

                  <label class="col-sm-2">No Inden/Pesanan Tempatan</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="noinden" name="noinden" placeholder="No Inden" value="  <?php echo $get_detail[0]->df_kodvot?>" readonly>
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">Tajuk Kerja</label>

                  <div class="col-sm-5">
                    <textarea type="text" class="form-control" id="tajukkerjamrk" name="tajukkerjamrk" placeholder="Tajuk Kerja" readonly>  <?php echo $get_detail[0]->df_tajuk?></textarea>
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">Tarikh Mula</label>

                  <div class="col-sm-2">
                    <input type="date" class="form-control" id="tarikhmulakon" name="tarikhmulakon" value="<?php echo $get_detail[0]->mrk_tarikhmulakon ?>" placeholder="Tarikh Mula" readonly>
                  </div>

                  <label class="col-sm-3">Tarikh Jangka Siap</label>

                  <div class="col-sm-2">
                    <input type="date" class="form-control" id="tarikhjangka" name="tarikhjangka" value="<?php echo $get_detail[0]->mrk_tarikhjangkasiap ?>" readonly>
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">Dilanjutkan Masa</label>

                  <div class="col-sm-2">
                    <input type="date" class="form-control" id="tariklanjut" name="tariklanjut" value="<?php echo $get_detail[0]->lsk_lanjutmasa ?>" readonly>
                  </div>

                  <label class="col-sm-3">Tarikh Siap Sebenar</label>

                  <div class="col-sm-2">
                    <input type="date" class="form-control" id="tarikhkerjasempurna" name="tarikhkerjasempurna" value="<?php echo $get_detail[0]->lsk_tarikhkerjasiap?>" readonly>
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">Kos Projek (RM)</label>

                  <div class="col-sm-2">
                    <input type="text" class="form-control" id="kosprojek" name="kosprojek" value="<?php echo $get_detail[0]->mrk_kosprojek?>" placeholder="RM" readonly>
                  </div>

                  <label class="col-sm-2">Kos Sebenar (RM)</label>

                  <div class="col-sm-2">
                    <input type="text" class="form-control" id="kossebenar" name="kossebenar" value="" placeholder="RM" readonly>
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">L.A.D Dikenakan</label>

                  <label class="col-sm-2">Dari</label>

                  <div class="col-sm-2">
                    <input type="date" class="form-control" id="laddari" name="laddari" value="<?php echo $get_detail[0]->mrk_laddari?>" readonly>
                  </div>

                  <label class="col-sm-2">Sehingga</label>

                  <div class="col-sm-2">
                    <input type="date" class="form-control" id="ladsehingga" name="ladsehingga" value="<?php echo $get_detail[0]->mrk_ladsehingga?>" readonly>
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2"></label>

                  <label class="col-sm-2">RM</label>

                  <div class="col-sm-2">
                    <input type="text" class="form-control" id="rmsehari" name="rmsehari" placeholder="RM/Sehari" value="<?php echo $get_detail[0]->mrk_ladsehari?>" readonly>
                  </div>
                </div>
              </div>

              <hr>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-3">Pengurusan Tapak Bina</label>
                  <input type="radio" name="urustapak" value="urustapak">
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-3">Pentadbiran</label>
                  <input type="radio" name="tadbir" value="tadbir">
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-3">Perancangan/Pentadbiran</label>
                  <input type="radio" name="rancang" value="rancang">
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-3">Mutu Kerangka</label>
                  <input type="radio" name="urustapak" value="urustapak">
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-3">Mutu Kerja-kerja</label>
                  <input type="radio" name="urustapak" value="urustapak">
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-3">Mutu Kemasan</label>
                  <input type="radio" name="urustapak" value="urustapak">
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-3">Mutu Kerja-kerja Luar</label>
                  <input type="radio" name="urustapak" value="urustapak">
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-3">Pengawasan Kontraktor</label>
                  <input type="radio" name="urustapak" value="urustapak">
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">Sokongan/Ulasan</label>

                  <div class="col-sm-6">
                  <textarea type="text" class="form-control" name="sokongan"></textarea>
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">Kesimpulan</label>

                  <div class="col-sm-6">
                  <textarea type="text" class="form-control" name="kesimpulan"></textarea>
                  </div>
                </div>
              </div>

              <hr>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">Pegawai</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="pegawai" name="pegawai" placeholder="Pegawai">
                  </div>

                  <label class="col-sm-2">Jawatan</label>

                  <div class="col-sm-2">
                    <input type="text" class="form-control" id="jawatan" name="jawatan" placeholder="Jawatan">
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">Tarikh</label>

                  <div class="col-sm-2">
                    <input type="date" class="form-control" id="tarikh" name="tarikh">
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
