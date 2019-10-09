<div class="main-panel">
    <div class="content-wrapper cnt" style="background: #606c88;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #3f4c6b, #606c88);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #3f4c6b, #606c88); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
">
    <div class="row">
      <div class="col-md-8 grid-margin stretch-card">
        <div class="card" style="border-radius:10px;">
          <div class="card-body" style="background-color:#cf6a87; border-radius:10px;">
            <h4 class="card-title">  <h2 class=" f ts">MRK 02</h2>
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
      <div class="col-8 grid-margin">



        <?php

            $pkkNo = $get_detail[0]->mrk2_noinden;
              if($pkkNo == null){
                  echo form_open('mrk/MRK_02/'.$get_detail[0]->projek_id);
              }
              else {
                echo form_open('mrk/MRK_02_Update');
              }

        ?>
        <div class="card" style="border-radius:10px;">
          <div class="card-body" style="background-color:#dfe4ea;border-radius:10px;">
            <h4 class="card-title ts" style="color:#38ada9;font-weight:bold;">Maklumat Rekod Kerja - MRK 02</h4>
             <h5 class="text-danger"><?php echo validation_errors(); ?></h5>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-8">
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
                    <div class="col-sm-8">
                      <label class="tl">No Inden/Pesanan tempatan</label>
                      <input type="text" class="form-control ts" style="font-weight:bold;" id="noinden" value="<?php echo $get_detail[0]->mrk_noinden ?>" name="noinden" placeholder="No Inden" readonly>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-5">
                      <label class="tl">Kos Projek</label>
                      <div class="input-group">
                        <div class="input-group-prepend bg-success border-primary">
                          <span class="input-group-text bg-transparent text-white">RM</span>
                        </div>
                          <input type="text" class="form-control ts" style="font-weight:bold;" id="kosprojek" value="<?php echo $get_detail[0]->mrk_kosprojek ?>" name="kosprojek" placeholder="RM" readonly>
                       
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-8">
                      <label class="tl">No Sebutharga:</label>
                        <input type="text" class="form-control ts" style="font-weight:bold;" id="nokon" value="<?php echo $get_detail[0]->df_nosebutharga ?>" name="nokon" placeholder="No Kontrak" readonly>
                    </div>
                  </div>
                </div>
              </div>
                   <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-8">
                      <label class="tl">Nama Kontraktor:</label>
                        <input type="text" class="form-control ts" style="font-weight:bold;" id="namakon" name="namakon" value="<?php echo $get_detail[0]->mrk_namakon ?>" placeholder="Nama Kontraktor" readonly>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-4">
                      <label class="tl">Tarikh Mula Kontrak</label>
                      <input type="text" data-toggle="datepicker" class="form-control ts" style="font-weight:bold;" id="tarikhmulakon" value="<?php echo $get_detail[0]->mrk_tarikhmulakon ?>" name="tarikhmulakon" placeholder="Tarikh Mula Kontrak" readonly>
                    </div>
                    <div class="col-sm-4">
                      <label class="tl">Tarikh Jangka Siap</label>
                      <input type="text" data-toggle="datepicker" class="form-control ts" style="font-weight:bold;" id="tarikhjangka" value="<?php echo $get_detail[0]->mrk_tarikhjangkasiap ?>" name="tarikhjangka" readonly>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-8">
                      <label class="tl">Tajuk Kerja:</label>
                        <textarea rows="7" type="text" readonly  class="form-control ts" style="font-weight:bold;" id="tajukkerjamrk" name="tajukkerjamrk" placeholder="Tajuk Kerja"><?php echo $get_detail[0]->df_tajuk ?></textarea>
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
            <h4 class="card-title ts" style="color:#38ada9;font-weight:bold;">Laporan Kemajuan Kerja Fizikal</h4>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group row">
                      <label class="col-sm-4 col-form-label tl">Kemajuan Kerja Mengikut Jadual : %</label>
                      <div class="col-sm-2">
                            <input type="text" class="form-control ts" style="font-weight:bold;" id="ikutjadual" value="<?php echo $get_detail[0]->mrk_majukerja ?>" name="ikutjadual">
                          </div>
                        </div>
                      </div>
                    </div>

                <div class="row">
                <div class="col-md-12">
                    <div class="form-group row">
                      <label class="col-sm-4 col-form-label tl">Kemajuan Kerja Sebenar(Semasa) Sehingga</label>
                      <div class="col-sm-2">
                     <input type="text" data-toggle="datepicker" class="form-control ts" style="font-weight:bold;" id="kerjasebenar" value="<?php echo $get_detail[0]->mrk_majukerjasebenar?>" name="kerjasebenar">
                      </div>
                            <label class="col-sm-1 col-form-label tl">=</label>
                             <div class="col-sm-2">
                   <input type="text" class="form-control ts" style="font-weight:bold;" id="kerjasebenarsatu" value="<?php echo $get_detail[0]->mrk_psebenar?>" name="kerjasebenarsatu">
                      </div>
                        </div>
                      </div>
                    </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                 
                      <label class="col-sm-4 col-form-label tl">Bayaran Kemajuan Semasa  NO:</label>
                   
                    <div class="col-sm-2">
                        <input type="text" class="form-control ts" style="font-weight:bold;" id="bayarmaju" name="bayarmaju" value="<?php echo $get_detail[0]->mrk_bayarmajusemasa?>">
                    </div>
                
                  </div>
                </div>
              </div>

               <div class="row">
                <div class="col-md-12">
                    <div class="form-group row">
                      <label class="col-sm-4 col-form-label tl">Jumlah Bayaran Kemajuan (RM):</label>
                        <div class="col-sm-4">
                      <div class="input-group">
                        <div class="input-group-prepend bg-success border-primary">
                          <span class="input-group-text bg-transparent text-white">RM</span>
                        </div>
                        <input type="text" class="form-control ts" style="font-weight:bold;" id="jumlahbayarmaju" name="jumlahbayarmaju" value="<?php echo $get_detail[0]->mrk_jumlahbayarmaju?>">
                      
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
            <h4 class="card-title ts" style="color:#38ada9;font-weight:bold;">Kerja Tergendala Kerana Masalah: Tandakan ( / ) Pada Ruang Berkenaan.</h4>
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
                    <div class="col-sm-8">
                      <p>
                      <label class="tl">Disebabkan Oleh:</label>
                       <textarea rows="4" type="text" class="form-control ts" style="font-weight:bold;" id="sebab" name="sebab"><?php echo $get_detail[0]->mrk_sebaboleh?></textarea>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-8">
                      <p>
                      <label class="tl">Lain-Lain(Nyatakan):</label>
                       <textarea rows="4" class="form-control ts" style="font-weight:bold;" id="lainlain" name="lainlain"><?php echo $get_detail[0]->mrk_lainlain?></textarea>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-3">
                      <p>
                      <label class="tl">Lanjut Masa Ke</label>
                       <input type="text" class="form-control ts" style="font-weight:bold;" id="masa" name="masa" value="<?php echo $get_detail[0]->mrk_lanjutmasa?>">
                    </div>
                    <div class="col-sm-3">
                      <p>
                      <label class="tl">Dari</label>
                         <input type="text" class="form-control ts" style="font-weight:bold;"data-toggle="datepicker" name="dari" value="<?php echo $get_detail[0]->mrk_dari?>">
                    </div>
                    <div class="col-sm-3">
                      <p>
                      <label class="tl">Sehingga</label>
                         <input type="text" class="form-control ts" style="font-weight:bold;" data-toggle="datepicker" name="sehingga" value="<?php echo $get_detail[0]->mrk_sehingga?>">
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-8">
                      <p>
                      <label class="tl">Disebabkan:</label>
                        <textarea rows="4" class="form-control ts" style="font-weight:bold;" id="disebab" name="disebab"><?php echo $get_detail[0]->mrk_disebab?></textarea> 
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
                      <input type="text" data-toggle="datepicker" class="form-control ts" style="font-weight:bold;" id="dari2" value="<?php echo $get_detail[0]->mrk_laddari?>"name="dari2">
                    </div>


                    <div class="col-sm-3">
                    <label class="tl">Sehingga</label>
                    <input type="text" data-toggle="datepicker" class="form-control ts" style="font-weight:bold;" id="sehingga1"value="<?php echo $get_detail[0]->mrk_ladsehingga?>" name="sehingga1">
                    </div>
                    </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-4">
                    <label class="tl">Perakuan Kerja Tidak Siap Dikeluarkan Pada :</label>
                      <input type="text" data-toggle="datepicker" class="form-control ts" style="font-weight:bold;" id="tarikhperaku" value="<?php echo $get_detail[0]->mrk_perakukerjataksiap?>" name="tarikhperaku">
                    </div>
                    </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group row">
                      <div class="col-sm-4">
                        <label class="tl">Projek Mansuh/Ditamatkan</label><p>
                        <input type="text" data-toggle="datepicker" class="form-control ts" style="font-weight:bold;" id="projekmansuh" value="<?php echo $get_detail[0]->mrk_projekmansuh?>" name="projekmansuh">
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
                        <input type="text" data-toggle="datepicker" class="form-control ts" style="font-weight:bold;"  id="tarikhlaporan" value="<?php echo $get_detail[0]->mrk_tarikhlaporan?>" name="tarikhlaporan">
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
                           <button type="submit" name="submit" data-toggle="tooltip" data-placement="bottom" title="Simpan Maklumat MRK01" class="btn btn-primary mr-2 btn-rounded ">Simpan</button>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active"style="margin-left:5px;">
             <a href="<?php echo site_url('mrk/MRK_01/'.$get_detail[0]->projek_id) ?>" class="btn btn-warning mr-2 btn-rounded" role="button" data-toggle="tooltip" data-placement="bottom" title="Maklumat Rekod Kerja 01">MRK 01</a>

      </li>
      <li class="nav-item" style="margin-left:5px;">
                         <a href="<?php echo site_url('Report/Report_MRK_02/'.$get_detail[0]->projek_id) ?>" data-toggle="tooltip" data-placement="bottom" title="Muat Turun / Cetak" class="btn btn-success mr-2 btn-rounded" role="button" target="_blank">Lihat / Cetak</a>
      </li>
         <li class="nav-item" style="margin-left:5px;">
               <a href="<?php echo site_url('mrk/LSK/'.$get_detail[0]->projek_id) ?>" class="btn btn-info mr-2 btn-rounded" role="button" data-toggle="tooltip" data-placement="bottom" title="Laporan Siap Kerja">Laporan Siap Kerja</a>
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
