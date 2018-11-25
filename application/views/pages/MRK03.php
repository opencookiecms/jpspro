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

                $pkkNo = $get_detail[0]->mrktiga_kodvots;
                  if($pkkNo == null){
                      echo form_open('mrk/MRK_03');
                  }
                  else {
                    echo form_open('mrk/MRK_03_Update');
                  }

            ?>
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
                    <input type="text" class="form-control" id="noinden" name="noinden" placeholder="No Inden" value="  <?php echo $get_detail[0]->mrk_noinden?>" readonly>
                    <input type="text" name="kodvods" value=" <?php echo $get_detail[0]->df_kodvot?>">
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
  <div class="col-md-12">
  <style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;border-color:#ccc;}
.tg td{font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#fff;}
.tg th{font-size:14px;font-weight:bold;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#ffff;background: #606c88;}
.tg .tg-s6z2{text-align:center}
.tg .tg-baqh{text-align:center;vertical-align:top}
.tg .tg-s268{text-align:center;vertical-align:top}
.tg .tg-0lax{text-align:center;vertical-align:top}
</style>
<?php



 ?>
<table class="tg" style="undefined;table-layout: fixed; width: 713px">
<colgroup>
<col style="width: 161px">
<col style="width: 87px">
<col style="width: 80px">
<col style="width: 80px">
<col style="width: 125px">
<col style="width: 250px">
</colgroup>
  <tr>
    <th class="tg-s268"></th>
    <th class="tg-baqh">Terbaik<br>90% Keatas</th>
    <th class="tg-baqh">Baik<br>75% - 89%</th>
    <th class="tg-baqh">Sederhana<br>50% - 74%</th>
    <th class="tg-s6z2">Tidak Memuaskan<br>50% kebawah</th>
    <th class="tg-s6z2">Catatan</th>
  </tr>
  <tr>
    <td class="tg-s268">Pengurusan Tapak Bina</td>
    <td class="tg-0lax"><input type="radio" name="bina" value="90% - Keatas" <?php if($get_detail[0]->tiga_bina=="90% - Keatas"){echo "checked";}else{echo  "unchecked";} ?>></td>
    <td class="tg-0lax"><input type="radio" name="bina" value="75% - 89%" <?php if($get_detail[0]->tiga_bina=="75% - 89%"){ echo "checked";}else{echo "unchecked";} ?> ></td>
    <td class="tg-0lax"><input type="radio" name="bina" value="50% - 74%" <?php if($get_detail[0]->tiga_bina=="50% - 74%"){ echo "checked";}else{echo "unchecked";} ?>></td>
    <td class="tg-0lax"><input type="radio" name="bina" value="50% kebawah" <?php if($get_detail[0]->tiga_bina=="50% kebawah"){ echo "checked";}else{echo "unchecked";} ?>> </td>
    <td class="tg-s268"><input type="text" class="form-control"name="catat1" value="<?php echo $get_detail[0]->tiga_catat1?>"></td>

  </tr>
  <tr>
    <td class="tg-0lax">Pentadbiran</td>
    <td class="tg-0lax"><input type="radio" name="tadbir" value="90% - Keatas"<?php if($get_detail[0]->tiga_tadbir=="90% - Keatas"){echo "checked";}else{echo  "unchecked";} ?>></td>
    <td class="tg-0lax"><input type="radio" name="tadbir" value="75% - 89%"<?php if($get_detail[0]->tiga_tadbir=="75% - 89%"){echo "checked";}else{echo  "unchecked";} ?>> </td>
    <td class="tg-0lax"><input type="radio" name="tadbir" value="50% - 74%"<?php if($get_detail[0]->tiga_tadbir=="50% - 74%"){echo "checked";}else{echo  "unchecked";} ?>> </td>
    <td class="tg-0lax"><input type="radio" name="tadbir" value="50% kebawah"<?php if($get_detail[0]->tiga_tadbir=="50% kebawah"){echo "checked";}else{echo  "unchecked";} ?>> </td>
    <td class="tg-0lax"><input type="text" class="form-control" name="catat2" value="<?php echo $get_detail[0]->tiga_catat2?>"></td>
  </tr>
  <tr>
    <td class="tg-0lax">Perancagan/Kemajuan</td>
    <td class="tg-0lax"><input type="radio" name="ran" value="90% - Keatas"<?php if($get_detail[0]->tiga_kemajuan=="90% - Keatas"){echo "checked";}else{echo  "unchecked";} ?>></td>
    <td class="tg-0lax"><input type="radio" name="ran" value="75% - 89%"<?php if($get_detail[0]->tiga_kemajuan=="75% - 89%"){echo "checked";}else{echo  "unchecked";} ?>> </td>
    <td class="tg-0lax"><input type="radio" name="ran" value="50% - 74%"<?php if($get_detail[0]->tiga_kemajuan=="50% - 74%"){echo "checked";}else{echo  "unchecked";} ?>> </td>
    <td class="tg-0lax"><input type="radio" name="ran" value="50% kebawah"<?php if($get_detail[0]->tiga_kemajuan=="50% kebawah"){echo "checked";}else{echo  "unchecked";} ?>> </td>
    <td class="tg-0lax"><input type="text" class="form-control" name="catat3" value="<?php echo $get_detail[0]->tiga_catat3?>"></td>
  </tr>
  <tr>
    <td class="tg-0lax">Mutu Kerangka</td>
    <td class="tg-0lax"><input type="radio" name="ka" value="90% - Keatas"<?php if($get_detail[0]->tiga_kerangka=="90% - Keatas"){echo "checked";}else{echo  "unchecked";} ?>></td>
    <td class="tg-0lax"><input type="radio" name="ka" value="75% - 89%"<?php if($get_detail[0]->tiga_kerangka=="75% - 89%"){echo "checked";}else{echo  "unchecked";} ?>> </td>
    <td class="tg-0lax"><input type="radio" name="ka" value="50% - 74%"<?php if($get_detail[0]->tiga_kerangka=="50% - 74%"){echo "checked";}else{echo  "unchecked";} ?>> </td>
    <td class="tg-0lax"><input type="radio" name="ka" value="50% kebawah"<?php if($get_detail[0]->tiga_kerangka=="50% kebawah"){echo "checked";}else{echo  "unchecked";} ?>> </td>
    <td class="tg-0lax"><input type="text" class="form-control" name="catat4" value="<?php echo $get_detail[0]->tiga_catat4?>"></td>
  </tr>
  <tr>
    <td class="tg-0lax">Mutu Kerja-Kerja</td>
    <td class="tg-0lax"><input type="radio" name="ker" value="90% - Keatas"<?php if($get_detail[0]->tiga_kerja=="90% - Keatas"){echo "checked";}else{echo  "unchecked";} ?>></td>
    <td class="tg-0lax"><input type="radio" name="ker" value="75% - 89%"<?php if($get_detail[0]->tiga_kerja=="75% - 89%"){echo "checked";}else{echo  "unchecked";} ?>> </td>
    <td class="tg-0lax"><input type="radio" name="ker" value="50% - 74%"<?php if($get_detail[0]->tiga_kerja=="50% - 74%"){echo "checked";}else{echo  "unchecked";} ?>> </td>
    <td class="tg-0lax"><input type="radio" name="ker" value="50% kebawah"<?php if($get_detail[0]->tiga_kerja=="50% kebawah"){echo "checked";}else{echo  "unchecked";} ?>> </td>
    <td class="tg-0lax"><input type="text" class="form-control" name="catat5" value="<?php echo $get_detail[0]->tiga_catat5?>"></td>
  </tr>
  <tr>
    <td class="tg-0lax">Mutu Kemasan</td>
    <td class="tg-0lax"><input type="radio" name="mas" value="90% - Keatas"<?php if($get_detail[0]->tiga_kemasan=="90% - Keatas"){echo "checked";}else{echo  "unchecked";} ?>></td>
    <td class="tg-0lax"><input type="radio" name="mas" value="75% - 89%"<?php if($get_detail[0]->tiga_kemasan=="75% - 89%"){echo "checked";}else{echo  "unchecked";} ?>> </td>
    <td class="tg-0lax"><input type="radio" name="mas" value="50% - 74%"<?php if($get_detail[0]->tiga_kemasan=="50% - 74%"){echo "checked";}else{echo  "unchecked";} ?>> </td>
    <td class="tg-0lax"><input type="radio" name="mas" value="50% kebawah"<?php if($get_detail[0]->tiga_kemasan=="50% kebawah"){echo "checked";}else{echo  "unchecked";} ?>> </td>
    <td class="tg-0lax"><input type="text" class="form-control" name="catat6" value="<?php echo $get_detail[0]->tiga_catat6?>"></td>
  </tr>
  <tr>
    <td class="tg-0lax">Mutu Kerja-Kerja Luar</td>
    <td class="tg-0lax"><input type="radio" name="luar" value="90% - Keatas"<?php if($get_detail[0]->tiga_luar=="90% - Keatas"){echo "checked";}else{echo  "unchecked";} ?>></td>
    <td class="tg-0lax"><input type="radio" name="luar" value="75% - 89%"<?php if($get_detail[0]->tiga_luar=="75% - 89%"){echo "checked";}else{echo  "unchecked";} ?>> </td>
    <td class="tg-0lax"><input type="radio" name="luar" value="50% - 74%"<?php if($get_detail[0]->tiga_luar=="50% - 74%"){echo "checked";}else{echo  "unchecked";} ?>> </td>
    <td class="tg-0lax"><input type="radio" name="luar" value="50% kebawah"<?php if($get_detail[0]->tiga_luar=="50% kebawah"){echo "checked";}else{echo  "unchecked";} ?>> </td>
    <td class="tg-0lax"><input type="text" class="form-control" name="catat7" value="<?php echo $get_detail[0]->tiga_catat7?>"></td>
  </tr>
  <tr>
    <td class="tg-0lax">Pengawasan Kontraktor</td>
    <td class="tg-0lax"><input type="radio" name="kon" value="90% - Keatas"<?php if($get_detail[0]->tiga_kontraktor=="90% - Keatas"){echo "checked";}else{echo  "unchecked";} ?>></td>
    <td class="tg-0lax"><input type="radio" name="kon" value="75% - 89%"<?php if($get_detail[0]->tiga_kontraktor=="75% - 89%"){echo "checked";}else{echo  "unchecked";} ?>> </td>
    <td class="tg-0lax"><input type="radio" name="kon" value="50% - 74%"<?php if($get_detail[0]->tiga_kontraktor=="50% - 74%"){echo "checked";}else{echo  "unchecked";} ?>> </td>
    <td class="tg-0lax"><input type="radio" name="kon" value="50% kebawah"<?php if($get_detail[0]->tiga_kontraktor=="50% kebawah"){echo "checked";}else{echo  "unchecked";} ?>> </td>
    <td class="tg-0lax"><input type="text" class="form-control" name="catat8" value="<?php echo $get_detail[0]->tiga_catat8?>"></td>
  </tr>
</table>
</div>
</div>

              <hr>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">Pegawai</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="pegawai" name="pegawai" placeholder="Pegawai" value="<?php echo $get_detail[0]->tiga_pegawai?>">
                    <input type="hidden"  name="noinden" value="<?php echo $get_detail[0]->mrk_noinden?>" >
                    <input type="hidden"  name="kodvot" value="<?php echo $get_detail[0]->df_kodvot?>">
                  <input type="hidden" name="hiddenid"  value="<?php echo $get_detail[0]->mrksatuid?>">
                  </div>

                  <label class="col-sm-2">Jawatan</label>

                  <div class="col-sm-2">
                    <input type="text" class="form-control" id="jawatan" name="jawatan" placeholder="Jawatan" value="<?php echo $get_detail[0]->tiga_jawatan?>">
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">Tarikh</label>

                  <div class="col-sm-2">
                    <input type="date" class="form-control" id="tarikh" name="tarikh" value="<?php echo $get_detail[0]->tiga_tarikah?>">
                  </div>
                </div>
              </div>


              <div class="box-footer">
                <button type="submit" name="submit" class="btn btn-default">Simpan</button>
                <a href="<?php echo site_url('Report/Report_MRK_03/'.$get_detail[0]->projek_id) ?>" class="btn btn-success" role="button" target="_blank">Cetak</a>
              </div>
            </div>
          </form>
        </div>
      </div><!--end of row-->


    </section>
    <!-- /.content -->

  </div>
  <!-- /.content-wrapper -->
