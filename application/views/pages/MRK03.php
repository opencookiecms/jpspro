<div class="main-panel">
  <div class="content-wrapper cnt" style="background: #606c88;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #3f4c6b, #606c88);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #3f4c6b, #606c88); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
">
    <div class="row">
      <div class="col-md-8 grid-margin stretch-card">
        <div class="card" style="border-radius:10px;">
          <div class="card-body" style="background-color:#4b7bec;border-radius:10px;">
            <h4 class="card-title">  <h2 class="f ts">MRK 03</h2>
            <p class="card-description"><h5><span class="error ts" style="color:#ffda79">No Sebutharga :<?php echo $get_detail[0]->df_nosebutharga ?> </span></h5></p>
            <?php if(isset($_SESSION['mrk03'])) { ?>
              <div class="alert alert-success"><?php echo $_SESSION['mrk03'] ?></div>
            <?php
              } ?>
            <?php //echo validation_errors('<div class="alert alert-danger">', '</div'); ?>

          </div>
        </div>
      </div>
      <!--start col-md-12 for form-->
      <div class="col-8 grid-margin">

          <?php
              $pkkNo = $get_detail[0]->mrktiga_kodvots;
                if($pkkNo == null){
                    echo form_open('mrk/MRK_03/'.$get_detail[0]->projek_id);
                }
                else {
                  echo form_open('mrk/MRK_03_Update');
                }
          ?>
        <div class="card" style="border-radius:10px;">
              <div class="card-body" style="background-color:#dfe4ea;border-radius:10px;">
            <h4 class="card-title ts" style="color:#38ada9;font-weight:bold;">Maklumat Rekod Kerja - MRK 03</h4>
                <h5 class="text-danger"><?php echo validation_errors(); ?></h5>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-8">
                      <label class="tl">No Pendaftaran PKK</label>
                      <input type="hidden" value="<?php echo $get_detail[0]->df_kodvot ?>" name="kodvods">
                      <input type="hidden" name="mrksatuid" value="<?php echo $get_detail[0]->mrksatuid?>">
                      <input type="hidden" name="hiddenids" value="<?php echo $get_detail[0]->projek_id ?>">
                       <input type="hidden" name="main_id" value="<?php echo $get_detail[0]->projek_id?>">
                      <input type="text" class="form-control ts" style="font-weight:bold;" id="nopkk" name="nopkk" value="<?php echo $get_detail[0]->mrk_nopkk ?>" placeholder="No Pendaftaran PKK" readonly>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-8">
                      <label class="tl">Nama Kontraktor</label>
                      <input type="text" class="form-control ts" style="font-weight:bold;" id="namakon" name="namakon" placeholder="Nama Kontraktor" value="<?php echo $get_detail[0]->mrk_namakon?>" readonly>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-8">
                      <label class="tl">No Kontrak / No Sebutharga</label>
                      <input type="text" class="form-control ts" style="font-weight:bold;" id="nokontrak" name="nokontrak" placeholder="No Kontrak" value="<?php echo $get_detail[0]->df_nosebutharga?>" readonly>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-8">
                      <label class="tl">No Inden/Pesanan Tempatan:</label>
                      <input type="text" class="form-control ts" style="font-weight:bold;" id="noinden" name="noinden" placeholder="No Inden" value="<?php echo $get_detail[0]->mrk_noinden?>" readonly>
                      <input type="hidden" name="kodvods" value=" <?php echo $get_detail[0]->df_kodvot?>">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-6">
                      <label class="tl">Tajuk Kerja:</label>
                        <textarea rows="5" type="text" readonly  class="form-control ts" style="font-weight:bold;" id="tajukkerjamrk" name="tajukkerjamrk" placeholder="Tajuk Kerja"><?php echo $get_detail[0]->df_tajuk ?></textarea>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-4">
                      <label class="tl">Tarikh Mula:</label>
                    <input type="text" data-toggle="datepicker" class="form-control ts" style="font-weight:bold;" id="tarikhmulakon" name="tarikhmulakon" value="<?php echo $get_detail[0]->mrk_tarikhmulakon ?>" placeholder="Tarikh Mula" readonly>
                    </div>
                    <div class="col-sm-4">
                      <label class="tl">Tarikh Jangka Siap:</label>
                        <input type="text" data-toggle="datepicker" class="form-control ts" style="font-weight:bold;" id="tarikhjangka" name="tarikhjangka" value="<?php echo $get_detail[0]->mrk_tarikhjangkasiap ?>" readonly>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-4">
                      <label class="tl">Dilanjutkan Masa:</label>
                      <input type="text" data-toggle="datepicker" class="form-control ts" style="font-weight:bold;" id="tariklanjut" name="tariklanjut" value="<?php echo $get_detail[0]->lsk_lanjutmasa ?>" readonly>
                    </div>
                    <div class="col-sm-4">
                      <label class="tl">Tarikh Siap Sebenar:</label>
                      <input type="text" data-toggle="datepicker" class="form-control ts" style="font-weight:bold;" id="tarikhkerjasempurna" name="tarikhkerjasempurna" value="<?php echo $get_detail[0]->lsk_tarikhkerjasiap?>" readonly>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-4">
                      <label class="tl">Kos Projek RM:</label>
                      <div class="input-group">
                        <div class="input-group-prepend bg-success border-primary">
                          <span class="input-group-text bg-transparent text-white">RM</span>
                        </div>
                        <input type="text" class="form-control ts" style="font-weight:bold;" id="kosprojek" name="kosprojek" value="<?php echo $get_detail[0]->mrk_kosprojek?>" placeholder="RM" readonly>

                      </div>
                    </div>
                    <div class="col-sm-4">
                      <label class="tl">Kos Sebenar RM:</label>
                      <div class="input-group">
                        <div class="input-group-prepend bg-success border-primary">
                          <span class="input-group-text bg-transparent text-white">RM</span>
                        </div>
                        <input type="text" class="form-control ts" style="font-weight:bold;" id="kossebenar" name="kossebenar" value="<?php echo $get_detail[0]->lks_hargasebenar?>" placeholder="RM" readonly>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

          </div>
        </div>
      </div>
      <!--end here col-md-12-->

      <!--start col-md-12 for form-->
      <div class="col-8 grid-margin">
        <div class="card" style="border-radius:10px;">
              <div class="card-body" style="background-color:#dfe4ea;border-radius:10px;">
          <h4 class="card-title  ts" style="color:#38ada9;font-weight:bold;">L.A.D Dikenakan</h4>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group row">
                <div class="col-sm-4">
                  <label class="tl">Dari:</label>
                    <input type="text" data-toggle="datepicker" class="form-control ts" style="font-weight:bold;"  id="laddari" name="laddari" value="<?php echo $get_detail[0]->mrk_laddari?>" readonly>
                </div>
                <div class="col-sm-4">
                  <label class="tl">Sehingga</label>
                  <input type="text" data-toggle="datepicker" class="form-control ts" style="font-weight:bold;"id="ladsehingga" name="ladsehingga" value="<?php echo $get_detail[0]->mrk_ladsehingga?>" readonly>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group row">
                <div class="col-sm-4">
                  <label class="tl">L.A.D Dikenakan:</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-success border-primary">
                      <span class="input-group-text bg-transparent text-white">RM</span>
                    </div>
                    <input type="text" class="form-control ts" style="font-weight:bold;" id="rmsehari" name="rmsehari" placeholder="RM/Sehari" value="<?php echo $get_detail[0]->mrk_ladsehari?>" readonly>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>
      <!--end here col-md-12-->
      <!--start col-md-12 for form-->
      <div class="col-8 grid-margin">
        <div class="card" style="border-radius:10px;">
              <div class="card-body" style="background-color:#dfe4ea;border-radius:10px;">
            <h4 class="card-title ts" style="color:#38ada9;;font-weight:bold;">Prestasi kontrakotor semasa menjalankan tugas .</h4>
              <div class="row">
                <style type="text/css">
                .tg  {border-collapse:collapse;border-spacing:0;border-color:#ccc; margin-left: 10px; margin-bottom:10px;}
                .tg td{font-size:12px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#fff;}
                .tg th{font-size:12px;font-weight:bold;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#ffff;background: #606c88;}
                .tg .tg-s6z2{text-align:center}
                .tg .tg-baqh{text-align:center;vertical-align:top}
                .tg .tg-s268{text-align:center;vertical-align:top}
                .tg .tg-0lax{text-align:center;vertical-align:top}
                </style>
                <?php



                ?>
                <table class="tg table table-striped" style="undefined;table-layout: fixed; width: 713px">
                <colgroup>
                <col style="width: 200px">
                <col style="width: 90px">
                <col style="width: 90px">
                <col style="width: 150px">
                <col style="width: 150px">
                <col style="width: 230px">
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
                  <td class="tg-s268"><input type="text" class="form-control ts" style="font-weight:bold;" name="catat1" value="<?php echo $get_detail[0]->tiga_catat1?>"></td>

                </tr>
                <tr>
                  <td class="tg-0lax">Pentadbiran</td>
                  <td class="tg-0lax"><input type="radio" name="tadbir" value="90% - Keatas"<?php if($get_detail[0]->tiga_tadbir=="90% - Keatas"){echo "checked";}else{echo  "unchecked";} ?>></td>
                  <td class="tg-0lax"><input type="radio" name="tadbir" value="75% - 89%"<?php if($get_detail[0]->tiga_tadbir=="75% - 89%"){echo "checked";}else{echo  "unchecked";} ?>> </td>
                  <td class="tg-0lax"><input type="radio" name="tadbir" value="50% - 74%"<?php if($get_detail[0]->tiga_tadbir=="50% - 74%"){echo "checked";}else{echo  "unchecked";} ?>> </td>
                  <td class="tg-0lax"><input type="radio" name="tadbir" value="50% kebawah"<?php if($get_detail[0]->tiga_tadbir=="50% kebawah"){echo "checked";}else{echo  "unchecked";} ?>> </td>
                  <td class="tg-0lax"><input type="text" class="form-control ts" style="font-weight:bold;" name="catat2" value="<?php echo $get_detail[0]->tiga_catat2?>"></td>
                </tr>
                <tr>
                  <td class="tg-0lax">Perancagan/Kemajuan</td>
                  <td class="tg-0lax"><input type="radio" name="ran" value="90% - Keatas"<?php if($get_detail[0]->tiga_kemajuan=="90% - Keatas"){echo "checked";}else{echo  "unchecked";} ?>></td>
                  <td class="tg-0lax"><input type="radio" name="ran" value="75% - 89%"<?php if($get_detail[0]->tiga_kemajuan=="75% - 89%"){echo "checked";}else{echo  "unchecked";} ?>> </td>
                  <td class="tg-0lax"><input type="radio" name="ran" value="50% - 74%"<?php if($get_detail[0]->tiga_kemajuan=="50% - 74%"){echo "checked";}else{echo  "unchecked";} ?>> </td>
                  <td class="tg-0lax"><input type="radio" name="ran" value="50% kebawah"<?php if($get_detail[0]->tiga_kemajuan=="50% kebawah"){echo "checked";}else{echo  "unchecked";} ?>> </td>
                  <td class="tg-0lax"><input type="text" class="form-control ts" style="font-weight:bold;" name="catat3" value="<?php echo $get_detail[0]->tiga_catat3?>"></td>
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
                  <td class="tg-0lax"><input type="text" class="form-control ts" style="font-weight:bold;" name="catat5" value="<?php echo $get_detail[0]->tiga_catat5?>"></td>
                </tr>
                <tr>
                  <td class="tg-0lax">Mutu Kemasan</td>
                  <td class="tg-0lax"><input type="radio" name="mas" value="90% - Keatas"<?php if($get_detail[0]->tiga_kemasan=="90% - Keatas"){echo "checked";}else{echo  "unchecked";} ?>></td>
                  <td class="tg-0lax"><input type="radio" name="mas" value="75% - 89%"<?php if($get_detail[0]->tiga_kemasan=="75% - 89%"){echo "checked";}else{echo  "unchecked";} ?>> </td>
                  <td class="tg-0lax"><input type="radio" name="mas" value="50% - 74%"<?php if($get_detail[0]->tiga_kemasan=="50% - 74%"){echo "checked";}else{echo  "unchecked";} ?>> </td>
                  <td class="tg-0lax"><input type="radio" name="mas" value="50% kebawah"<?php if($get_detail[0]->tiga_kemasan=="50% kebawah"){echo "checked";}else{echo  "unchecked";} ?>> </td>
                  <td class="tg-0lax"><input type="text" class="form-control ts" style="font-weight:bold;" name="catat6" value="<?php echo $get_detail[0]->tiga_catat6?>"></td>
                </tr>
                <tr>
                  <td class="tg-0lax">Mutu Kerja-Kerja Luar</td>
                  <td class="tg-0lax"><input type="radio" name="luar" value="90% - Keatas"<?php if($get_detail[0]->tiga_luar=="90% - Keatas"){echo "checked";}else{echo  "unchecked";} ?>></td>
                  <td class="tg-0lax"><input type="radio" name="luar" value="75% - 89%"<?php if($get_detail[0]->tiga_luar=="75% - 89%"){echo "checked";}else{echo  "unchecked";} ?>> </td>
                  <td class="tg-0lax"><input type="radio" name="luar" value="50% - 74%"<?php if($get_detail[0]->tiga_luar=="50% - 74%"){echo "checked";}else{echo  "unchecked";} ?>> </td>
                  <td class="tg-0lax"><input type="radio" name="luar" value="50% kebawah"<?php if($get_detail[0]->tiga_luar=="50% kebawah"){echo "checked";}else{echo  "unchecked";} ?>> </td>
                  <td class="tg-0lax"><input type="text" class="form-control ts" style="font-weight:bold;"name="catat7" value="<?php echo $get_detail[0]->tiga_catat7?>"></td>
                </tr>
                <tr>
                  <td class="tg-0lax">Pengawasan Kontraktor</td>
                  <td class="tg-0lax"><input type="radio" name="kon" value="90% - Keatas"<?php if($get_detail[0]->tiga_kontraktor=="90% - Keatas"){echo "checked";}else{echo  "unchecked";} ?>></td>
                  <td class="tg-0lax"><input type="radio" name="kon" value="75% - 89%"<?php if($get_detail[0]->tiga_kontraktor=="75% - 89%"){echo "checked";}else{echo  "unchecked";} ?>> </td>
                  <td class="tg-0lax"><input type="radio" name="kon" value="50% - 74%"<?php if($get_detail[0]->tiga_kontraktor=="50% - 74%"){echo "checked";}else{echo  "unchecked";} ?>> </td>
                  <td class="tg-0lax"><input type="radio" name="kon" value="50% kebawah"<?php if($get_detail[0]->tiga_kontraktor=="50% kebawah"){echo "checked";}else{echo  "unchecked";} ?>> </td>
                  <td class="tg-0lax"><input type="text" class="form-control ts" style="font-weight:bold;" name="catat8" value="<?php echo $get_detail[0]->tiga_catat8?>"></td>
                </tr>
                </table>

              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-6">
                      <label class="tl">Sokongan / Ulasan:</label>
                        <textarea rows="5" class="form-control ts" style="font-weight:bold;" id="tajukkerjamrk" name="ulasanpegawai"><?php echo $get_detail[0]->mrk_ulasan ?></textarea>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-4">
                      <p></p>
                      <p></p>
                      <p></p>
                      <p></p>
                      <label class="tl">Pegawai</label>
                      <input type="text" class="form-control ts" style="font-weight:bold;" id="pegawai" name="pegawai" placeholder="Pegawai" value="<?php
                      $pegawai=$get_detail[0]->tiga_pegawai;
                      if($pegawai)
                      {
                        echo $pegawai;
                      }
                      else {
                        echo $this->session->userdata("name");
                      }
                      ?>">
                      <input type="hidden"  name="noinden" value="<?php echo $get_detail[0]->mrk_noinden?>" >
                      <input type="hidden"  name="kodvot" value="<?php echo $get_detail[0]->df_kodvot?>">
                      <input type="hidden" name="hiddenid"  value="<?php echo $get_detail[0]->mrksatuid?>">
                    </div>
                    <div class="col-sm-4">
                      <p></p>
                      <p></p>
                      <p></p>
                      <p></p>
                      <label class="tl">Jawatan</label>
                      <input type="text" class="form-control ts" style="font-weight:bold;" id="jawatan" name="jawatan" placeholder="Jawatan" value="<?php
                      $jawatan=$get_detail[0]->tiga_jawatan;
                      if($jawatan)
                      {
                        echo $jawatan;
                      }
                      else {
                        echo $this->session->userdata("jawatan");
                      }
                      ?>">
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-4">
                      <label class="tl">Tarikh</label>
                      <input type="text" data-toggle="datepicker" class="form-control ts" style="font-weight:bold;" id="tarikh" name="tarikh" value="<?php echo $get_detail[0]->tiga_tarikah?>">
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">

                        <p>
                <p>
                   <p>
                <p>
                <br>

                               <nav class="navbar navbar-expand-lg navbar-light bg-light" style="border-radius:10px;">
                                <a class="navbar-brand" href="#">Menu</a>
                       <button type="submit" name="submit" class="btn btn-primary mr-2 btn-rounded " data-toggle="tooltip" data-placement="bottom" title="Simpan Maklumat Rekod Kerja 03">Simpan</button>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active"style="margin-left:5px;">
                              <a href="<?php echo site_url('mrk/LSK/'.$get_detail[0]->projek_id) ?>" class="btn btn-warning mr-2 btn-rounded" role="button" data-toggle="tooltip" data-placement="bottom" title="Laporan Siap Kerja">Laporan Siap Kerja</a>
                            
      </li>
      <li class="nav-item" style="margin-left:5px;">
  <a href="<?php echo site_url('Report/Report_MRK_03/'.$get_detail[0]->projek_id) ?>" class="btn btn-success mr-2 btn-rounded" role="button" data-toggle="tooltip" data-placement="bottom" target="_blank" title="Muat Turun / Cetak" >Lihat / Cetak</a>
      </li>
         <li class="nav-item" style="margin-left:5px;">
                                <a href="<?php echo site_url('mrk/PSK/'.$get_detail[0]->projek_id) ?>" class="btn btn-info mr-2 btn-rounded" role="button" data-toggle="tooltip" data-placement="bottom" title="Perakuan Siap Kerja">Perakuan Siap Kerja</a>
      </li>
      <li class="nav-item" style="margin-left:5px;">
                          <a href="<?php echo site_url('projek/view_data/'.$get_detail[0]->projek_id) ?>" class="btn btn-danger mr-2 btn-rounded" role="button" data-toggle="tooltip" data-placement="bottom" title="Kembali ke Senarai Maklumat">Close</a>
      </li>
     
    </ul>
  </div>
</nav>

                </div>
              </div>
          </div>
        </div>
      </div>
      <!--end here col-md-12-->
      <!--end here col-md-12-->
        <script>
            $('[data-toggle="datepicker"]').datepicker({
              dateFormat: 'dd-mm-yy'
            });
           </script>

    </div>
  </form>
  </div>
