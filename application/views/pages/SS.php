<div class="main-panel">
  <div class="content-wrapper cnt" style="background: #606c88;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #3f4c6b, #606c88);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #3f4c6b, #606c88); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
">
    <div class="row">
      <div class="col-md-12 grid-margin stretch-card">
        <div class="card" style="border-radius:10px;">
          <div class="card-body" style="background-color:#c44569;border-radius:10px;">
            <h4 class="card-title">  <h2 class="f ts">Senarai Semakan</h2>
            <p class="card-description"><h5><span class="error ts" style="color:#ffda79;">No Sebutharga :<?php echo $get_detail[0]->df_nosebutharga ?> </span></h5></p>
            <?php if(isset($_SESSION['ss'])) { ?>
              <div class="alert alert-success"><?php echo $_SESSION['ss'] ?></div>
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
            $pkkNo = $get_detail[0]->ss_kodvot;
              if($pkkNo == null){
                  echo form_open('mrk/Senarai_Semak/'.$get_detail[0]->projek_id);
              }
              else {
                echo form_open('mrk/SS_Update');
              }
        ?>
        <div class="card" style="border-radius:10px;">
          <div class="card-body" style="background-color:#747d8c;border-radius:10px;">
            <h4 class="card-title ts" style="color:#ffda79;font-weight:bold;">Senarai Semakan</h4>
            <div class="row">
              <div class="col-md-3 tls">
                <div class="form-group">
                  <div class="form-radio form-radio-flat">
                    <label class="form-check-label">
                      <?php $check=$get_detail[0]->cb1; if($check==1){$ch1='checked';}else{$ch1='null';}?>
                      <input type="checkbox" class="form-check-input" style="border:blue;" name="chk1" value="1" <?php echo $ch1?>>I. Inden/Nota Minta
                    </label>
                  </div>

                </div>
              </div>
              <div class="col-md-3 tls">
                <div class="form-group">
                  <div class="form-radio form-radio-flat">
                    <label class="form-check-label">
                      <?php $check=$get_detail[0]->cb2; if($check==1){$ch2='checked';}else{$ch2='null';}?>
                      <input type="checkbox" class="form-check-input" name="chk2" value="1" <?php echo $ch2 ?>>II. Laporan Siap Kerja
                    </label>
                  </div>
                </div>
              </div>
              <div class="col-md-3 tls">
                <div class="form-group">
                    <div class="form-radio form-radio-flat">
                        <label class="form-check-label">
                        <?php $check=$get_detail[0]->cb3; if($check==1){$ch3='checked';}else{$ch3='null';}?>
                        <input type="checkbox" class="form-check-input"  name="chk3" value="1" <?php echo $ch3?>>III. Tuntutan Invois
                        </label>
                   </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-3 tls">
                <div class="form-group">
                  <div class="form-radio form-radio-flat">
                    <label class="form-check-label">
                      <?php $check=$get_detail[0]->cb4; if($check==1){$ch4='checked';}else{$ch4='null';}?>
                      <input type="checkbox" class="form-check-input" name="chk4" value="1" <?php echo $ch4?>>IV .Sebutharga/Lantikan Terus
                    </label>
                  </div>

                </div>
              </div>
              <div class="col-md-3 tls">
                <div class="form-group">
                  <div class="form-radio form-radio-flat">
                    <label class="form-check-label">
                      <?php $check=$get_detail[0]->cb5; if($check==1){$ch5='checked';}else{$ch5='null';}?>
                      <input type="checkbox" class="form-check-input" name="chk5" value="1" <?php echo $ch5?>>V.Penerimaan Tawaran
                    </label>
                  </div>
                </div>
              </div>
              <div class="col-md-3 tls">
                <div class="form-group">
                    <div class="form-radio form-radio-flat">
                        <label class="form-check-label">
                          <?php $check=$get_detail[0]->cb6; if($check==1){$ch6='checked';}else{$ch6='null';}?>
                          <input type="checkbox" class="form-check-input" name="chk6" value="1" <?php echo $ch6?>>VI. Jadual Sebutarga
                        </label>
                   </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-3 tls">
                <div class="form-group">
                  <div class="form-radio form-radio-flat">
                    <label class="form-check-label">
                      <?php $check=$get_detail[0]->cb7; if($check==1){$ch7='checked';}else{$ch7='null';}?>
                      <input type="checkbox" class="form-check-input" name="chk7" value="1" <?php echo $ch7?>>VII. Kertas Taklimat Sebutharga
                    </label>
                  </div>

                </div>
              </div>
              <div class="col-md-3 tls">
                <div class="form-group">
                  <div class="form-radio form-radio-flat">
                    <label class="form-check-label">
                      <?php $check=$get_detail[0]->cb8; if($check==1){$ch8='checked';}else{$ch8='null';}?>
                      <input type="checkbox" class="form-check-input" name="chk8" value="1" <?php echo $ch8?>>VIII. Dokumen Sebutharga
                    </label>
                  </div>
                </div>
              </div>
              <div class="col-md-3 tls">
                <div class="form-group">
                    <div class="form-radio form-radio-flat">
                        <label class="form-check-label">
                          <?php $check=$get_detail[0]->cb9; if($check==1){$ch9='checked';}else{$ch9='null';}?>
                          <input type="checkbox" class="form-check-input" name="chk9" value="1" <?php echo $ch9?>>IX. Permohonan Lanjut Masa
                        </label>
                   </div>
                </div>
              </div>
            </div>


            <div class="row">
              <div class="col-md-3 tls">
                <div class="form-group">
                  <div class="form-radio form-radio-flat">
                    <label class="form-check-label">
                      <?php $check=$get_detail[0]->cb10; if($check==1){$ch10='checked';}else{$ch10='null';}?>
                      <input type="checkbox" class="form-check-input" name="chk10" value="1" <?php echo $ch10;?>>X. Salinan Akaun Bank
                    </label>
                  </div>

                </div>
              </div>
              <div class="col-md-3 tls">
                <div class="form-group">
                  <div class="form-radio form-radio-flat">
                    <label class="form-check-label">
                      <?php $check=$get_detail[0]->cb11; if($check==1){$ch11='checked';}else{$ch11='null';}?>
                      <input type="checkbox" class="form-check-input" name="chk11" value="1" <?php echo $ch11?>>XI. CIDB Malaysia
                    </label>
                  </div>
                </div>
              </div>
              <div class="col-md-3 tls">
                <div class="form-group">
                    <div class="form-radio form-radio-flat">
                        <label class="form-check-label">
                          <?php $check=$get_detail[0]->cb12; if($check==1){$ch12='checked';}else{$ch12='null';}?>
                          <input type="checkbox" class="form-check-input" name="chk12" value="1" <?php echo $ch12?>>XII. PKK
                        </label>
                   </div>
                </div>
              </div>
            </div>


            <div class="row">
              <div class="col-md-3 tls">
                <div class="form-group">
                  <div class="form-radio form-radio-flat">
                    <label class="form-check-label">
                      <?php $check=$get_detail[0]->cb13; if($check==1){$ch13='checked';}else{$ch13='null';}?>
                      <input type="checkbox" class="form-check-input"  name="chk13" value="1" <?php echo $ch13?>>XIII. SSM
                    </label>
                  </div>

                </div>
              </div>
              <div class="col-md-3 tls">
                <div class="form-group">
                  <div class="form-radio form-radio-flat">
                    <label class="form-check-label">
                      <?php $check=$get_detail[0]->cb14; if($check==1){$ch14='checked';}else{$ch14='null';}?>
                      <input type="checkbox" class="form-check-input"  name="chk14" value="1" <?php echo $ch14?>>XIV Kementerian Kewangan
                    </label>
                  </div>
                </div>
              </div>
            </div>
            <p></p>
            <p></p>
            <h4 class="card-title ts" style="color:#ffda79;font-weight:bold;">Insurans</h4>
            <div class="row">
              <div class="col-md-3 tls">
                <div class="form-group">
                  <div class="form-radio form-radio-flat">
                    <label class="form-check-label">
                      <?php $check=$get_detail[0]->cb15; if($check==1){$ch15='checked';}else{$ch15='null';}?>
                      <input type="checkbox" class="form-check-input"  name="chk15" value="1" <?php echo $ch15?>> Insuran: Perkeso/Workmen/Public Liability/Kerja
                    </label>
                  </div>

                </div>
              </div>
             
            </div>

            <p></p>
            <p></p>
            <h4 class="card-title ts" style="color:#ffda79;font-weight:bold;">Gambar</h4>
            <div class="row">
        <div class="col-md-3 tls">
                <div class="form-group">
                  <div class="form-radio form-radio-flat">
                    <label class="form-check-label">
                      <?php $check=$get_detail[0]->cb16; if($check==1){$ch16='checked';}else{$ch16='null';}?>
                    <input type="checkbox" class="form-check-input"  name="chk16" value="1" <?php echo $ch16?>>Gambar
                    </label>
                  </div>
                </div>
              </div>
             
            </div>

            <div class="row">
              <div class="col-md-12 tls">
                <div class="form-group row">
                  <div class="col-sm-3 tls">
                    <p></p>
                    <label>Desediakan Oleh</label>
                    <input type="text" class="form-control ts" style="font-weight:bold;" value="<?php echo $this->session->userdata("name")?>" id="sedia" name="sedia">
                  </div>
                  <div class="col-sm-3 tls">
                    <p></p>
                    <label>Tarikh</label>
                    <input type="text" data-toggle="datepicker" class="form-control ts" style="font-weight:bold;" id="tarikhsedia" name="tarikhsedia" value="<?php echo $get_detail[0]->ss_date?>">

                                <input type="hidden" readonly name="hiddenid"  value="<?php echo $get_detail[0]->mrksatuid?>">
                                <input type="hidden" readonly name="hiddenids"  value="<?php echo $get_detail[0]->projek_id?>">
                                <input type="hidden" readonly  name="kodvot"  value="<?php echo $get_detail[0]->df_kodvot?>">
                                <input type="hidden" readonly  name="noinden"  value="<?php echo $get_detail[0]->mrk_noinden?>">
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
                                       <button type="submit" name="submit" data-toggle="tooltip" data-placement="bottom" title="Simpan Maklumat Senarai Semakan"  class="btn btn-primary mr-2 btn-rounded ">Simpan</button>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
        <li class="nav-item" style="margin-left:5px;">
                          <a href="<?php echo site_url('mrk/PSK/'.$get_detail[0]->projek_id) ?>" class="btn btn-warning mr-2 btn-rounded" data-toggle="tooltip" data-placement="bottom" title="Perakuan Siap Kerja"  role="button">Perakuan Siap Kerja</a>
      </li>
      <li class="nav-item active"style="margin-left:5px;">
                             <a href="<?php echo site_url('Report/Report_SS/'.$get_detail[0]->projek_id)?>" target="_blank" class="btn btn-success mr-2 btn-rounded" data-toggle="tooltip" data-placement="bottom" title="Muat Turun Fail / Cetak"  role="button">Lihat / Cetak</a>
      </li>
  
         <li class="nav-item" style="margin-left:5px;">
             <a href="<?php echo site_url('mrk/MRK_PSMK/'.$get_detail[0]->projek_id) ?>" data-toggle="tooltip" data-placement="bottom" title="Perakuan Siap Membaiki Kecatatan"  class="btn btn-info mr-2 btn-rounded" role="button">PSMK</a>
      </li>
      <li class="nav-item" style="margin-left:5px;">
                  <a href="<?php echo site_url('projek/view_data/'.$get_detail[0]->projek_id) ?>" class="btn btn-danger mr-2 btn-rounded" data-toggle="tooltip" data-placement="bottom" title="Kembali ke Senarai Maklumat" role="button">Tutup</a>
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
        <script>
            $('[data-toggle="datepicker"]').datepicker({
              dateFormat: 'dd-mm-yy'
            });
           </script>

      <!--end here col-md-12-->
    </div>
  </form>
  </div>
