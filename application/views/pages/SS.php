<div class="main-panel">
<div class="content-wrapper cnt" style="background: #C9D6FF;background: -webkit-linear-gradient(to right, #E2E2E2, #C9D6FF);background: linear-gradient(to right, #E2E2E2, #C9D6FF);">
    <div class="row">
      <div class="col-md-12 grid-margin stretch-card">
        <div class="card" style="border-radius:10px;">
          <div class="card-body">
            <h4 class="card-title">  <h2 class="f">Senarai Semakan</h2>
            <p class="card-description"><h5><span class="error" style="color:#FF0000;">No Sebutharga :<?php echo $get_detail[0]->df_nosebutharga ?> </span></h5></p>
            <?php if(isset($_SESSION['success'])) { ?>
              <div class="alert alert-success"><?php echo $_SESSION['success'] ?></div>
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
                  echo form_open('mrk/Senarai_Semak');
              }
              else {
                echo form_open('mrk/SS_Update');
              }
        ?>
        <div class="card" style="border-radius:10px;">
          <div class="card-body">
            <h4 class="card-title">Senarai Semakan</h4>
            <div class="row">
              <div class="col-md-3">
                <div class="form-group">
                  <div class="form-radio form-radio-flat">
                    <label class="form-check-label">
                      <?php $check=$get_detail[0]->cb1; if($check==1){$ch1='checked';}else{$ch1='null';}?>
                      <input type="checkbox" class="form-check-input" name="chk1" value="1" <?php echo $ch1?> >Surat Tuntutan
                    </label>
                  </div>

                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <div class="form-radio form-radio-flat">
                    <label class="form-check-label">
                      <?php $check=$get_detail[0]->cb2; if($check==1){$ch2='checked';}else{$ch2='null';}?>
                      <input type="checkbox" class="form-check-input" name="chk2" value="1" <?php echo $ch2 ?>>Keputusan Panel
                    </label>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                    <div class="form-radio form-radio-flat">
                        <label class="form-check-label">
                        <?php $check=$get_detail[0]->cb3; if($check==1){$ch3='checked';}else{$ch3='null';}?>
                        <input type="checkbox" class="form-check-input"  name="chk3" value="1" <?php echo $ch3?>>Surat Tawaran Kerja
                        </label>
                   </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-3">
                <div class="form-group">
                  <div class="form-radio form-radio-flat">
                    <label class="form-check-label">
                      <?php $check=$get_detail[0]->cb4; if($check==1){$ch4='checked';}else{$ch4='null';}?>
                      <input type="checkbox" class="form-check-input" name="chk4" value="1" <?php echo $ch4?>>Inden / Nota Minta
                    </label>
                  </div>

                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <div class="form-radio form-radio-flat">
                    <label class="form-check-label">
                      <?php $check=$get_detail[0]->cb5; if($check==1){$ch5='checked';}else{$ch5='null';}?>
                      <input type="checkbox" class="form-check-input" name="chk5" value="1" <?php echo $ch5?>>Perakuan Siap Kerja
                    </label>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                    <div class="form-radio form-radio-flat">
                        <label class="form-check-label">
                          <?php $check=$get_detail[0]->cb6; if($check==1){$ch6='checked';}else{$ch6='null';}?>
                          <input type="checkbox" class="form-check-input" name="chk6" value="1" <?php echo $ch6?>>Detail Butiran Tawaran Terus
                        </label>
                   </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-3">
                <div class="form-group">
                  <div class="form-radio form-radio-flat">
                    <label class="form-check-label">
                      <?php $check=$get_detail[0]->cb7; if($check==1){$ch7='checked';}else{$ch7='null';}?>
                      <input type="checkbox" class="form-check-input" name="chk7" value="1" <?php echo $ch7?>>Laporan Siap Kerja
                    </label>
                  </div>

                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <div class="form-radio form-radio-flat">
                    <label class="form-check-label">
                      <?php $check=$get_detail[0]->cb8; if($check==1){$ch8='checked';}else{$ch8='null';}?>
                      <input type="checkbox" class="form-check-input" name="chk8" value="1" <?php echo $ch8?>>Salinan Penyata Bank
                    </label>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                    <div class="form-radio form-radio-flat">
                        <label class="form-check-label">
                          <?php $check=$get_detail[0]->cb9; if($check==1){$ch9='checked';}else{$ch9='null';}?>
                          <input type="checkbox" class="form-check-input" name="chk9" value="1" <?php echo $ch9?>>Perakuan Perubahan Kerja
                        </label>
                   </div>
                </div>
              </div>
            </div>


            <div class="row">
              <div class="col-md-3">
                <div class="form-group">
                  <div class="form-radio form-radio-flat">
                    <label class="form-check-label">
                      <?php $check=$get_detail[0]->cb10; if($check==1){$ch10='checked';}else{$ch10='null';}?>
                      <input type="checkbox" class="form-check-input" name="chk10" value="1" <?php echo $ch10;?>>Salinan Sijil PKK
                    </label>
                  </div>

                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <div class="form-radio form-radio-flat">
                    <label class="form-check-label">
                      <?php $check=$get_detail[0]->cb11; if($check==1){$ch11='checked';}else{$ch11='null';}?>
                      <input type="checkbox" class="form-check-input" name="chk11" value="1" <?php echo $ch11?>>Surat Akaun Sumpah
                    </label>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                    <div class="form-radio form-radio-flat">
                        <label class="form-check-label">
                          <?php $check=$get_detail[0]->cb12; if($check==1){$ch12='checked';}else{$ch12='null';}?>
                          <input type="checkbox" class="form-check-input" name="chk12" value="1" <?php echo $ch12?>>Borang MRK03
                        </label>
                   </div>
                </div>
              </div>
            </div>


            <div class="row">
              <div class="col-md-3">
                <div class="form-group">
                  <div class="form-radio form-radio-flat">
                    <label class="form-check-label">
                      <?php $check=$get_detail[0]->cb13; if($check==1){$ch13='checked';}else{$ch13='null';}?>
                      <input type="checkbox" class="form-check-input"  name="chk13" value="1" <?php echo $ch13?>>Salinan Sijil CIDB
                    </label>
                  </div>

                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <div class="form-radio form-radio-flat">
                    <label class="form-check-label">
                      <?php $check=$get_detail[0]->cb14; if($check==1){$ch14='checked';}else{$ch14='null';}?>
                      <input type="checkbox" class="form-check-input"  name="chk14" value="1" <?php echo $ch14?>>Gambar
                    </label>
                  </div>
                </div>
              </div>
            </div>
            <p></p>
            <p></p>
            <h4 class="card-title">Bon Perlaksaanan</h4>
            <div class="row">
              <div class="col-md-3">
                <div class="form-group">
                  <div class="form-radio form-radio-flat">
                    <label class="form-check-label">
                      <?php $check=$get_detail[0]->cb15; if($check==1){$ch15='checked';}else{$ch15='null';}?>
                      <input type="checkbox" class="form-check-input"  name="chk15" value="1" <?php echo $ch15?>>Jaminan Bank/Insurans
                    </label>
                  </div>

                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <div class="form-radio form-radio-flat">
                    <label class="form-check-label">
                      <?php $check=$get_detail[0]->cb16; if($check==1){$ch16='checked';}else{$ch16='null';}?>
                    <input type="checkbox" class="form-check-input"  name="chk16" value="1" <?php echo $ch16?>>Wang Jaminan Perlaksanaan
                    </label>
                  </div>
                </div>
              </div>
            </div>

            <p></p>
            <p></p>
            <h4 class="card-title">Polisi Insurans</h4>
            <div class="row">
              <div class="col-md-3">
                <div class="form-group">
                  <div class="form-radio form-radio-flat">
                    <label class="form-check-label">
                      <?php $check=$get_detail[0]->cb17; if($check==1){$ch17='checked';}else{$ch17='null';}?>
                      <input type="checkbox" class="form-check-input"  name="chk17" value="1" <?php echo $ch17?>>Public Liabiliti
                    </label>
                  </div>

                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <div class="form-radio form-radio-flat">
                    <label class="form-check-label">
                      <?php $check=$get_detail[0]->cb18; if($check==1){$ch18='checked';}else{$ch18='null';}?>
                      <input type="checkbox" class="form-check-input"  name="chk18" value="1" <?php echo $ch18?>>Workman /Compasation/PERKESO
                    </label>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="form-group row">
                  <div class="col-sm-3">
                    <p></p>
                    <label>Desediakan Oleh</label>
                    <select type="text" class="form-control" id="sedia" name="sedia">
                      <option value="<?php echo $get_detail[0]->ss_disediakan?>"><?php echo $get_detail[0]->ss_disediakan?></option>
                      <option value="km">Mohamad Ridzam B. Jusoh</option>
                      <option value="s">Nazar Shah B. Awang</option>
                      <option value="b">Shuhel B. Mohd Saad</option>
                      <option value="b">Azhar B. Ahmadd</option>
                      <option value="km">Shahriful Azhar B. Mohd. Hassan</option>
                      <option value="s">Mohd. Tarmizi B. Taib</option>
                      <option value="b">Ku Izham B. Ku Din</option>
                      <option value="b">Noorzita Bt. Mustaffa</option>
                      <option value="km">Haji Shukri B. Man</option>
                      <option value="s">Othman B. Shariff</option>
                      <option value="b">Intan Zahida Bt. Abu Bakar</option>
                      <option value="b">Jamil B. Ahmad</option>
                      <option value="b">Rosli B. Shaari</option>
                      <option value="km">Roshidi B. Ismail</option>
                      <option value="s">Shaari Bin Abdullah</option>
                      <option value="b">Hafizah Binti Yahaya</option>
                      <option value="b">Mohamed Radzi Bin Ishak</option>
                      <option value="b">Juhari Bin Md. Ali</option>
                      <option value="b">Johari Bin Ali</option>
                    </select>
                  </div>
                  <div class="col-sm-3">
                    <p></p>
                    <label>Tarikh</label>
                    <input type="date" class="form-control" id="tarikhsedia" name="tarikhsedia" value="<?php echo $get_detail[0]->ss_date?>">

                                <input type="hidden" readonly name="hiddenid"  value="<?php echo $get_detail[0]->mrksatuid?>">
                                <input type="hidden" readonly  name="kodvot"  value="<?php echo $get_detail[0]->df_kodvot?>">
                                <input type="hidden" readonly  name="noinden"  value="<?php echo $get_detail[0]->mrk_noinden?>">
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
                    <button type="submit" name="submit" class="btn btn-primary mr-2 btn-rounded ">Simpan</button>
                  </div>
                  <div class="col-sm-6">
                    <p>
                    <p>
                      <a href="<?php echo site_url('Report/Report_MRK_01/'.$get_detail[0]->projek_id) ?>" class="btn btn-success mr-2 btn-rounded" role="button">Print</a>
                      <a href="<?php echo site_url('mrk/PSK/'.$get_detail[0]->projek_id) ?>" class="btn btn-warning mr-2 btn-rounded" role="button">Perakuan Siap Kerja</a>
                      <a href="<?php echo site_url('mrk/MRK_PSMK/'.$get_detail[0]->projek_id) ?>" class="btn btn-info mr-2 btn-rounded" role="button">PSMK</a>
                  </div>
                  <div class="col-sm-4">
                  <p>
                  <p>
                  <a href="<?php echo site_url('projek/view_data/'.$get_detail[0]->mrks_kodvot) ?>" class="btn btn-danger mr-2 btn-rounded" role="button">Close</a>
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
