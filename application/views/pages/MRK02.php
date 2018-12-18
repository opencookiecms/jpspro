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

            $pkkNo = $get_detail[0]->mrk2_noinden;
              if($pkkNo == null){
                  echo form_open('mrk/MRK_02');
              }
              else {
                echo form_open('mrk/MRK_02_Update');
              }

        ?>

            <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">Maklumat Rekod Kerja - MRK 02</h3>
              </div><!-- end of box header-->

              <input type="hidden" name="mrksatuid" value="<?php echo $get_detail[0]->mrksatuid?>">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">No Pendaftaran PKK</label>
                  <input type="text" value="<?php echo $get_detail[0]->df_kodvot ?>" name="kodvods">

                  <div class="col-sm-3">
                    <input type="text" class="form-control" id="nopkk" name="nopkk" value="    <?php echo $get_detail[0]->mrk_nopkk ?>" placeholder="No Pendaftaran PKK" readonly>
                    <small id="nopkk" class="form-text text-muted">Pastikan No Pendaftaran PKK dinyatakan dengan betul.</small>
                  </div>
                  


                </div>

              </div><!--end of body-->

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">No Inden/Pesanan tempatan</label>

                  <div class="col-sm-5">
                    <input type="text" class="form-control" id="noinden" value="<?php echo $get_detail[0]->mrk_noinden ?>" name="noinden" placeholder="No Inden" readonly>
                  </div>

                  <label class="col-sm-2">Kos Projek (RM)</label>

                  <div class="col-sm-2">
                    <input type="text" class="form-control" id="kosprojek" value="<?php echo number_format( $get_detail[0]->mrk_kosprojek,2 )?>" name="kosprojek" placeholder="RM" readonly>
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">No Kontrak</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="nokon" value="<?php echo $get_detail[0]->df_nosebutharga ?>" name="nokon" placeholder="No Kontrak" readonly>
                  </div>

                  <label class="col-sm-1">Nama Kontraktor</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="namakon" name="namakon" value="<?php echo $get_detail[0]->mrk_namakon ?>" placeholder="Nama Kontraktor" readonly>
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">

                  <label class="col-sm-2">Tarikh Mula Kontrak</label>

                  <div class="col-sm-2">
                    <input type="date" class="form-control" id="tarikhmulakon" value="<?php echo $get_detail[0]->mrk_tarikhmulakon ?>" name="tarikhmulakon" placeholder="Tarikh Mula Kontrak" readonly>
                  </div>

                  <label class="col-sm-3">Tarikh Jangka Siap Kontrak</label>

                  <div class="col-sm-2">
                    <input type="date" class="form-control" id="tarikhjangka" value="<?php echo $get_detail[0]->mrk_tarikhjangkasiap ?>" name="tarikhjangka" readonly>
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">Tajuk Kerja</label>

                  <div class="col-sm-8">
                    <textarea type="text" class="form-control" id="tajukkerjamrk" name="tajukkerjamrk" placeholder="Tajuk Kerja" readonly><?php echo $get_detail[0]->df_tajuk ?></textarea>
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <div class="box-header with-border">
                  <h3 class="box-title">Laporan Kemajuan Kerja Fizikal</h3>
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-3">Kemajuan Kerja Mengikut Jadual : %</label>

                  <div class="col-sm-1">
                    <input type="text" class="form-control" id="ikutjadual" value="<?php echo $get_detail[0]->mrk_majukerja ?>" name="ikutjadual">
                  </div>

                  <label class="col-sm-3">Kemajuan Kerja Sebenar(Semasa) Sehingga</label>

                  <div class="col-sm-2">
                    <input type="date" class="form-control" id="kerjasebenar" value="<?php echo $get_detail[0]->mrk_majukerjasebenar?>" name="kerjasebenar">
                  </div>

                  <label class="col-sm-1">=</label>

                  <div class="col-sm-2">
                    <input type="text" class="form-control" id="kerjasebenarsatu" name="kerjasebenarsatu">
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">


                  <label class="col-sm-3">Bayaran Kemajuan Semasa  NO:</label>

                  <div class="col-sm-1">
                    <input type="text" class="form-control" id="bayarmaju" name="bayarmaju" value="<?php echo $get_detail[0]->mrk_bayarmajusemasa?>">
                  </div>

                  <label class="col-sm-3">Jumlah Bayaran Kemajuan (RM):</label>

                  <div class="col-sm-2">
                    <input type="text" class="form-control" id="jumlahbayarmaju" name="jumlahbayarmaju" value="<?php echo number_format($get_detail[0]->mrk_jumlahbayarmaju,2)?>">
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <div class="box-header with-border">
                  <h3 class="box-title">Kerja Tergendala Kerana Masalah: Tandakan ( / ) Pada Ruang Berkenaan.</h3>
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <div class="col-md-2">
                  <label class="">Modal</label>
                      <?php $check=$get_detail[0]->mrk_modal; if($check==1){$ch1='checked';}else{$ch1='null';}?>
                  <input type="checkbox" name="chk1" value="1" <?php echo $ch1?>>
                </div>


              <div class="col-md-2">
              <label class="">Kekurangan Bahan</label>
                  <?php $check=$get_detail[0]->mrk_bahan; if($check==1){$ch1='checked';}else{$ch1='null';}?>
              <input type="checkbox" name="chk2" value="1" <?php echo $ch1?>>
            </div>

            <div class="col-md-2">
            <label class="">Tiada Pekerja</label>
                <?php $check=$get_detail[0]->mrk_pekerja; if($check==1){$ch1='checked';}else{$ch1='null';}?>
            <input type="checkbox" name="chk3" value="1" <?php echo $ch1?>>
          </div>

          <div class="col-md-2">
          <label class="">Tapak</label>
              <?php $check=$get_detail[0]->mrk_tapak; if($check==1){$ch1='checked';}else{$ch1='null';}?>
          <input type="checkbox" name="chk4" value="1" <?php echo $ch1?>>
        </div>

        <div class="col-md-2">
        <label class="">Cuaca</label>
        <?php $check=$get_detail[0]->mrk_cuaca; if($check==1){$ch1='checked';}else{$ch1='null';}?>
        <input type="checkbox" name="chk5" value="1" <?php echo $ch1?>>
      </div>


                </div>

              </div>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">Disebabkan Oleh : </label>

                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="sebab" name="sebab" value="<?php echo $get_detail[0]->mrk_sebaboleh?>">
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">Lain-Lain (Nyatakan) : </label>

                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="lainlain" name="lainlain"value="<?php echo $get_detail[0]->mrk_lainlain?>">
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">Lanjutan Masa Ke : </label>

                  <div class="col-sm-1">
                    <input type="text" class="form-control" id="masa" name="masa" value="<?php echo $get_detail[0]->mrk_lanjutmasa?>">
                  </div>

                  <label class="col-sm-1">Dari: </label>

                  <div class="col-sm-2">
                    <input type="date" class="form-control" id="dari" name="dari" value="<?php echo $get_detail[0]->mrk_dari?>">
                  </div>

                  <label class="col-sm-1">Sehingga </label>

                  <div class="col-sm-2">
                    <input type="date" class="form-control" id="sehingga" name="sehingga" value="<?php echo $get_detail[0]->mrk_sehingga?>">
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">Disebabkan : </label>

                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="disebab" name="disebab" value="<?php echo $get_detail[0]->mrk_disebab?>">
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">L. A. D Dikenakan (RM) </label>

                  <div class="col-sm-2">
                    <input type="text" class="form-control" id="rm" name="rm" value="<?php echo $get_detail[0]->mrk_ladsehari?>" placeholder="RM/Sehari">
                  </div>

                  <label class="col-sm-1">Dari: </label>

                  <div class="col-sm-2">
                    <input type="date" class="form-control" id="dari2" value="<?php echo $get_detail[0]->mrk_laddari?>"name="dari2">
                  </div>

                  <label class="col-sm-1">Sehingga</label>

                  <div class="col-sm-2">
                    <input type="date" class="form-control" id="sehingga1"value="<?php echo $get_detail[0]->mrk_ladsehingga?>" name="sehingga1">
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">Perakuan Kerja Tidak Siap Dikeluarkan Pada :</label>

                  <div class="col-sm-2">
                    <input type="date" class="form-control" id="tarikhperaku" value="<?php echo $get_detail[0]->mrk_perakukerjataksiap?>" name="tarikhperaku">
                  </div>

                  <label class="col-sm-2">Projek Mansuh/Ditamat:</label>

                  <div class="col-sm-2">
                    <input type="date" class="form-control" id="projekmansuh" value="<?php echo $get_detail[0]->mrk_projekmansuh?>" name="projekmansuh">
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-1">Pegawai</label>

                  <div class="col-sm-3">
                    <input type="text" class="form-control" readonly id="pegawai" value="<?php echo $get_detail[0]->mrk_pegawai?>" name="pegawai">
                  </div>

                  <label class="col-sm-1">Jawatan</label>

                  <div class="col-sm-3">
                    <input type="text" class="form-control" readonly id="jawatan" value="<?php echo $get_detail[0]->mrk_jawatan?>" name="jawatan">
                  </div>

                  <label class="col-sm-2">Tarikh Laporan</label>

                  <div class="col-sm-2">
                    <input type="date" class="form-control" id="tarikhlaporan" value="<?php echo $get_detail[0]->mrk_tarikhlaporan?>" name="tarikhlaporan">
                  </div>
                </div>
              </div>

              <div class="box-footer">
                <div class="form-group">
                <div class="col-md-2">
                <button type="submit" name="submit" class="btn btn-primary">Save</button>

              </div>
              <div class="col-md-6">
                  <a href="<?php echo site_url('Report/Report_MRK_02/'.$get_detail[0]->projek_id) ?>" class="btn btn-success" target="_blank" role="button">Print</a>
                    <a href="<?php echo site_url('mrk/MRK_01/'.$get_detail[0]->projek_id) ?>" class="btn btn-danger" role="button">MRK01</a>

                  <a href="<?php echo site_url('mrk/LSK/'.$get_detail[0]->projek_id) ?>" class="btn btn-danger" role="button">Laporan Siap Kerja</a>
              </div>

              <div class="col-md-4">
                  <a href="<?php echo site_url('projek/view_data/'.$get_detail[0]->mrks_kodvot) ?>" class="btn btn-warning" role="button">Close</a>

              </div>
            </div>
              </div>
            </div>
          </form>
        </div>
      </div><!--end of row-->


    </section>
    <!-- /.content -->

  </div>
  <!-- /.content-wrapper -->
