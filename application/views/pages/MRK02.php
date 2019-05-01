<div class="main-panel">
  <div class="content-wrapper cnt" style="background: #757F9A;background: -webkit-linear-gradient(to right, #D7DDE8, #757F9A);background: linear-gradient(to right, #D7DDE8, #757F9A);">
    <div class="row">
      <div class="col-md-12 grid-margin stretch-card">
        <div class="card" style="border-radius:10px;">
          <div class="card-body" style="background-color:#34495E; border-radius:10px;">
            <h4 class="card-title">  <h2 class=" f ts">MRK_02</h2>
            <p class="card-description"><h5><span class="error ts" style="color:#ffda79;">No Sebutharga :<?php echo $get_detail[0]->df_nosebutharga ?> </span></h5></p>
            <?php if(isset($_SESSION['mrk02'])) { ?>
              <div class="alert alert-success"><?php echo $_SESSION['mrk02'] ?></div>
            <?php
              } ?>
            <?php //echo validation_errors('<div class="alert alert-danger">', '</div'); ?>

          </div>
        </div>
      </div>
      <!--start col-md-12 for form-->
      <div class="col-12 grid-margin">
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
        <div class="card" style="border-radius:10px;">
          <div class="card-body" style="background-color:#34495E;border-radius:10px;">
            <h4 class="card-title ts" style="color:#ffda79;font-weight:bold;">Maklumat Rekod Kerja - MRK 02</h4>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-5">
                      <label class="tl">No Pendaftaran PKK</label>
                      <input type="hidden" value="<?php echo $get_detail[0]->df_kodvot ?>" name="kodvods">
                      <input type="hidden" name="mrksatuid" value="<?php echo $get_detail[0]->mrksatuid?>">
                      <input type="hidden" name="hiddenid" value="<?php echo $get_detail[0]->projek_id?>">
                      <input type="text" class="form-control ts" style="font-weight:bold;" id="nopkk" name="nopkk" value="<?php echo $get_detail[0]->mrk_nopkk ?>" placeholder="No Pendaftaran PKK" readonly>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-5">
                      <label class="tl">No Inden/Pesanan tempatan</label>
                      <input type="text" class="form-control ts" style="font-weight:bold;" id="noinden" value="<?php echo $get_detail[0]->mrk_noinden ?>" name="noinden" placeholder="No Inden" readonly>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-4">
                      <label class="tl">Kos Projek</label>
                      <div class="input-group">
                        <div class="input-group-prepend bg-success border-primary">
                          <span class="input-group-text bg-transparent text-white">RM</span>
                        </div>
                          <input type="text" class="form-control ts" style="font-weight:bold;" id="kosprojek" value="<?php echo number_format( $get_detail[0]->mrk_kosprojek,2 )?>" name="kosprojek" placeholder="RM" readonly>
                        <div class="input-group-append bg-success border-primary">
                          <span class="input-group-text bg-transparent text-white">.00</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-6">
                      <label class="tl">No Sebutharga:</label>
                        <input type="text" class="form-control ts" style="font-weight:bold;" id="nokon" value="<?php echo $get_detail[0]->df_nosebutharga ?>" name="nokon" placeholder="No Kontrak" readonly>
                    </div>
                    <div class="col-sm-6">
                      <label class="tl">Nama Kontraktor:</label>
                        <input type="text" class="form-control ts" style="font-weight:bold;" id="namakon" name="namakon" value="<?php echo $get_detail[0]->mrk_namakon ?>" placeholder="Nama Kontraktor" readonly>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-3">
                      <label class="tl">Tarikh Mula Kontrak</label>
                      <input type="date" class="form-control ts" style="font-weight:bold;" id="tarikhmulakon" value="<?php echo $get_detail[0]->mrk_tarikhmulakon ?>" name="tarikhmulakon" placeholder="Tarikh Mula Kontrak" readonly>
                    </div>
                    <div class="col-sm-3">
                      <label class="tl">Tarikh Jangka Siap</label>
                      <input type="date" class="form-control ts" style="font-weight:bold;" id="tarikhjangka" value="<?php echo $get_detail[0]->mrk_tarikhjangkasiap ?>" name="tarikhjangka" readonly>
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
          </div>
        </div>
      </div>
      <!--end here col-md-12-->

      <!--start col-md-12 for form-->
      <div class="col-12 grid-margin">
        <div class="card" style="border-radius:10px;">
            <div class="card-body" style="background-color:#34495E;border-radius:10px;">
            <h4 class="card-title ts" style="color:#ffda79;font-weight:bold;">Laporan Kemajuan Kerja Fizikal</h4>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-3">
                      <p>
                      <label class="tl">Kemajuan Kerja Mengikut Jadual : %</label>
                    </div>
                    <div class="col-sm-1">
                      <input type="text" class="form-control ts" style="font-weight:bold;" id="ikutjadual" value="<?php echo $get_detail[0]->mrk_majukerja ?>" name="ikutjadual">
                    </div>
                    <div class="col-sm-3">
                      <p>
                      <label class="tl">Kemajuan Kerja Sebenar(Semasa) Sehingga</label>
                    </div>
                    <div class="col-sm-2">
                      <input type="date" class="form-control ts" style="font-weight:bold;" id="kerjasebenar" value="<?php echo $get_detail[0]->mrk_majukerjasebenar?>" name="kerjasebenar">
                    </div>
                    <div class="col-sm-1">
                      <p>
                      <label class="tl">=</label>
                    </div>
                    <div class="col-sm-2">
                      <input type="text" class="form-control ts" style="font-weight:bold;" id="kerjasebenarsatu" name="kerjasebenarsatu">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-3">
                      <p>
                      <label class="tl">Bayaran Kemajuan Semasa  NO:</label>
                    </div>
                    <div class="col-sm-1">
                        <input type="text" class="form-control ts" style="font-weight:bold;" id="bayarmaju" name="bayarmaju" value="<?php echo $get_detail[0]->mrk_bayarmajusemasa?>">
                    </div>
                    <div class="col-sm-3">
                      <p>
                      <label class="tl">Jumlah Bayaran Kemajuan (RM):</label>
                    </div>
                    <div class="col-sm-4">
                      <div class="input-group">
                        <div class="input-group-prepend bg-success border-primary">
                          <span class="input-group-text bg-transparent text-white">RM</span>
                        </div>
                        <input type="text" class="form-control ts" style="font-weight:bold;" id="jumlahbayarmaju" name="jumlahbayarmaju" value="<?php echo number_format($get_detail[0]->mrk_jumlahbayarmaju,2)?>">
                        <div class="input-group-append bg-success border-primary">
                          <span class="input-group-text bg-transparent text-white">.00</span>
                        </div>
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
      <div class="col-12 grid-margin">
        <div class="card" style="border-radius:10px;">
            <div class="card-body" style="background-color:#34495E;border-radius:10px;">
            <h4 class="card-title ts" style="color:#ffda79;font-weight:bold;">Kerja Tergendala Kerana Masalah: Tandakan ( / ) Pada Ruang Berkenaan.</h4>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-2">
                        <?php $check=$get_detail[0]->mrk_modal; if($check==1){$ch1='checked';}else{$ch1='null';}?>
                        <input type="checkbox" class="" name="chk1" value="1" <?php echo $ch1?>> <span class="tl" style="font-size:16px;">Modal</span>
                    </div>
                    <div class="col-sm-3">
                        <?php $check=$get_detail[0]->mrk_bahan; if($check==1){$ch1='checked';}else{$ch1='null';}?>
                        <input type="checkbox" name="chk2" value="1" <?php echo $ch1?>> <span class="tl" style="font-size:16px;">Kekurangan Bahan</span>
                    </div>
                    <div class="col-sm-2">

                        <?php $check=$get_detail[0]->mrk_pekerja; if($check==1){$ch1='checked';}else{$ch1='null';}?>
                        <input type="checkbox" name="chk3" value="1" <?php echo $ch1?>> <span class="tl" style="font-size:16px;">Tiada Pekerja</span>
                    </div>
                    <div class="col-sm-2">

                        <?php $check=$get_detail[0]->mrk_tapak; if($check==1){$ch1='checked';}else{$ch1='null';}?>
                        <input type="checkbox" name="chk4" value="1" <?php echo $ch1?>> <span class="tl" style="font-size:16px;">Tapak</span>
                    </div>

                    <div class="col-sm-2">

                      <?php $check=$get_detail[0]->mrk_cuaca; if($check==1){$ch1='checked';}else{$ch1='null';}?>
                      <input type="checkbox" name="chk5" value="1" <?php echo $ch1?>> <span class="tl" style="font-size:16px;">Cuaca</span>
                  </div>
                </div>
              </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-5">
                      <p>
                      <label class="tl">Disebabkan Oleh:</label>
                      <input type="text" class="form-control ts" style="font-weight:bold;" id="sebab" name="sebab" value="<?php echo $get_detail[0]->mrk_sebaboleh?>">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-5">
                      <p>
                      <label class="tl">Lain-Lain(Nyatakan):</label>
                       <input type="text" class="form-control ts" style="font-weight:bold;" id="lainlain" name="lainlain"value="<?php echo $get_detail[0]->mrk_lainlain?>">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-2">
                      <p>
                      <label class="tl">Lanjut Masa Ke</label>
                       <input type="text" class="form-control ts" style="font-weight:bold;" id="masa" name="masa" value="<?php echo $get_detail[0]->mrk_lanjutmasa?>">
                    </div>
                    <div class="col-sm-2">
                      <p>
                      <label class="tl">Dari</label>
                         <input type="date" class="form-control ts" style="font-weight:bold;" id="dari" name="dari" value="<?php echo $get_detail[0]->mrk_dari?>">
                    </div>
                    <div class="col-sm-2">
                      <p>
                      <label class="tl">Sehingga</label>
                         <input type="date" class="form-control ts" style="font-weight:bold;" id="sehingga" name="sehingga" value="<?php echo $get_detail[0]->mrk_sehingga?>">
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-5">
                      <p>
                      <label class="tl">Disebabkan:</label>
                      <input type="text" class="form-control ts" style="font-weight:bold;" id="disebab" name="disebab" value="<?php echo $get_detail[0]->mrk_disebab?>">
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-3">
                    <label class="tl">L. A. D Dikenakan (RM)</label>
                    <input type="text" class="form-control ts" style="font-weight:bold;" id="rm" name="rm" value="<?php echo $get_detail[0]->mrk_ladsehari?>" placeholder="RM/Sehari">
                    </div>


                    <div class="col-sm-3">
                    <label class="tl">Dari</label>
                      <input type="date" class="form-control ts" style="font-weight:bold;" id="dari2" value="<?php echo $get_detail[0]->mrk_laddari?>"name="dari2">
                    </div>


                    <div class="col-sm-3">
                    <label class="tl">Sehingga</label>
                    <input type="date" class="form-control ts" style="font-weight:bold;" id="sehingga1"value="<?php echo $get_detail[0]->mrk_ladsehingga?>" name="sehingga1">
                    </div>
                    </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-3">
                    <label class="tl">Perakuan Kerja Tidak Siap Dikeluarkan Pada :</label>
                      <input type="date" class="form-control ts" style="font-weight:bold;" id="tarikhperaku" value="<?php echo $get_detail[0]->mrk_perakukerjataksiap?>" name="tarikhperaku">
                    </div>
                    </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group row">
                      <div class="col-sm-3">
                        <label class="tl">Projek Mansuh/Ditamatkan</label><p>
                        <input type="date" class="form-control ts" style="font-weight:bold;" id="projekmansuh" value="<?php echo $get_detail[0]->mrk_projekmansuh?>" name="projekmansuh">
                      </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group row">
                      <div class="col-sm-3">
                        <label class="tl">Pegawai</label>
                        <input type="text" class="form-control ts" style="font-weight:bold;" readonly id="pegawai" value="<?php echo $get_detail[0]->mrk_pegawai?>" name="pegawai">
                      </div>
                      <div class="col-sm-3">
                        <label class="tl">Jawatan</label>
                        <input type="text" class="form-control ts" style="font-weight:bold;"readonly id="jawatan" value="<?php echo $get_detail[0]->mrk_jawatan?>" name="jawatan">
                      </div>
                      <div class="col-sm-3">
                        <label class="tl">Tarikh Laporan</label>
                        <input type="date" class="form-control ts" style="font-weight:bold;"  id="tarikhlaporan" value="<?php echo $get_detail[0]->mrk_tarikhlaporan?>" name="tarikhlaporan">
                      </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-2">
                      <p>
                      <p>
                      <button type="submit" name="submit" data-toggle="tooltip" data-placement="bottom" title="Simpan Maklumat Rekod Kerja 02" class="btn btn-primary mr-2 btn-rounded " >Simpan</button>
                    </div>
                    <div class="col-sm-6">
                      <p>
                      <p>
                        <a href="<?php echo site_url('Report/Report_MRK_02/'.$get_detail[0]->projek_id) ?>" data-toggle="tooltip" data-placement="bottom" title="Muat Turun / Cetak" class="btn btn-success mr-2 btn-rounded" role="button">Print</a>
                        <a href="<?php echo site_url('mrk/MRK_01/'.$get_detail[0]->projek_id) ?>" class="btn btn-warning mr-2 btn-rounded" role="button" data-toggle="tooltip" data-placement="bottom" title="Maklumat Rekod Kerja 01">MRK01</a>
                        <a href="<?php echo site_url('mrk/LSK/'.$get_detail[0]->projek_id) ?>" class="btn btn-info mr-2 btn-rounded" role="button" data-toggle="tooltip" data-placement="bottom" title="Laporan Siap Kerja">Laporan Siap Kerja</a>
                    </div>
                    <div class="col-sm-4">
                    <p>
                    <p>
                    <a href="<?php echo site_url('projek/view_data/'.$get_detail[0]->projek_id) ?>" class="btn btn-danger mr-2 btn-rounded" role="button" data-toggle="tooltip" data-placement="bottom" title="Kembali ke Senarai Maklumat">Close</a>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
      <!--end here col-md-12-->
      <!--end here col-md-12-->
    </div>
  </form>
  </div>
