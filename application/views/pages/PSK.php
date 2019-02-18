<div class="main-panel">
  <div class="content-wrapper cnt" style="background: #757F9A;background: -webkit-linear-gradient(to right, #D7DDE8, #757F9A);background: linear-gradient(to right, #D7DDE8, #757F9A);">
    <div class="row">
      <div class="col-md-12 grid-margin stretch-card">
        <div class="card" style="border-radius:10px;">
          <div class="card-body ts" style="background-color:#786fa6;border-radius:10px;">
            <h4 class="card-title">  <h2 class="f ts">Perakuan Siap Kerja</h2>
            <p class="card-description"><h5><span class="error ts" style="color:#ffda79;">No Sebutharga :<?php echo $get_detail[0]->df_nosebutharga ?> </span></h5></p>
            <?php if(isset($_SESSION['psk'])) { ?>
              <div class="alert alert-success"><?php echo $_SESSION['psk'] ?></div>
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
            $pkkNo = $get_detail[0]->mrk_pskinden;
              if($pkkNo == null){
                  echo form_open('mrk/PSK');
              }
              else {
                echo form_open('mrk/PSK_Update');
              }
        ?>
        <div class="card" style="border-radius:10px;">
          <div class="card-body ts" style="background-color:#786fa6;border-radius:10px;">
            <h4 class="card-title ts" style="color:#ffda79;font-weight:bold;">Maklumat Dokument -PSK</h4>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-5">
                      <label class="tl">Nama Pemborong</label>
                      <input type="hidden" name="hiddenid" value="<?php echo $get_detail[0]->mrksatuid?>">
                      <input type="hidden" name="hiddenids" value="<?php echo $get_detail[0]->projek_id?>">
                      <input type="text" class="form-control ts" style="font-weight:bold;" id="namapombr" name="namapomb" value="<?php echo $get_detail[0]->mrk_namakon?>" placeholder="Nama Pemborong" readonly>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-4">
                      <label class="tl">Alamat</label>
                      <textarea rows="3" type="text" class="form-control ts" style="font-weight:bold;" id="alamat" name="alamat" placeholder="Alamat" readonly><?php echo $get_detail[0]->mrk_alamatkon?></textarea>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-4">
                      <label class="tl">Fail Rujukan</label>
                      <input type="text" class="form-control ts" style="font-weight:bold;" id="failrujuk" name="failrujuk" placeholder="Fail Rujukan" readonly value="<?php echo $get_detail[0]->df_nosebutharga?>">
                    </div>
                    <div class="col-sm-4">
                      <label class="tl">No Sebutharga</label>
                      <input type="text" class="form-control ts" style="font-weight:bold;" id="nosebut" name="nosebut" placeholder="No Sebutharga" value="<?php echo $get_detail[0]->df_nosebutharga?>" readonly>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-6">
                      <label class="tl">Butiran Kerja:</label>
                    <textarea rows="5" type="text" readonly class="form-control ts" style="font-weight:bold;" id="butirkerja" name="butirkerja" placeholder="Butiran Kerja"><?php echo $get_detail[0]->mrk_tajukkerja?></textarea>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-3">
                      <label class="tl">Inden No</label>
                      <input type="text" class="form-control ts" style="font-weight:bold;" name="indenno" placeholder="Inden No" value="<?php echo $get_detail[0]->mrk_noinden?>" readonly>
                      <input type="hidden" name="kodvods" value="<?php echo $get_detail[0]->df_kodvot?>">
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-3">
                      <label class="tl">Tarikh Siap Sebenar:</label>
                      <input type="date" class="form-control ts" style="font-weight:bold;" id="tarikhsiapsebenar" name="tarikhsiapsebenar" value="<?php echo $get_detail[0]->lsk_tarikhkerjasiap?>">
                    </div>
                    <div class="col-sm-3">
                      <label class="tl">Tarikh Ambil Milik:</label>
                      <input type="date" class="form-control ts" style="font-weight:bold;" id="tarikhambikmilik" name="tarikhambikmilik" value="<?php echo $get_detail[0]->mrk_tarikhambikmilik?>">
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-3">
                      <label class="tl">Tarikh Mula Tanggungan &nbsp;&nbsp;&nbsp;&nbsp;  Kecacatan </label>
                      <input type="date" class="form-control ts" style="font-weight:bold;" id="mulacacat" name="mulacacat" value="<?php echo $get_detail[0]->mrk_tarikhmulatanggungcacat?>">
                    </div>
                    <div class="col-sm-3">
                      <label class="tl">Tarikh Tamat Tanggungan Kecacatan</label>
                      <input type="date" class="form-control ts" style="font-weight:bold;" id="cacattamat" name="cacattamat"  value="<?php echo $get_detail[0]->mrk_tarikhtamattanggungcacat?>">
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
                    <div class="col-md-2">
                      <p>
                      <p>
                    <div class="dropdown">
                      <button class="btn btn-success mr-2 btn-rounded dropdown-toggle" type="button" data-toggle="dropdown">Print
                        <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                          <li><a href="<?php echo site_url('Report/Report_PSK_01/'.$get_detail[0]->projek_id) ?>">PSK 01</a></li>
                          <li><a href="<?php echo site_url('Report/Report_PSK_02/'.$get_detail[0]->projek_id) ?>">PSK 02</a></li>

                        </ul>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <p>
                      <p>

                        <a href="<?php echo site_url('mrk/MRK_03/'.$get_detail[0]->projek_id) ?>" class="btn btn-warning mr-2 btn-rounded" role="button">MRK03</a>

                        <a href="<?php echo site_url('mrk/Senarai_Semak/'.$get_detail[0]->projek_id) ?>" class="btn btn-info mr-2 btn-rounded" role="button">Senarai Semakan</a>
                    </div>
                    <div class="col-sm-4">
                    <p>
                    <p>
                      <a href="<?php echo site_url('projek/view_data/'.$get_detail[0]->projek_id) ?>" class="btn btn-danger mr-2 btn-rounded" role="button">Close</a>


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
