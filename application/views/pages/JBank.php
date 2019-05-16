<div class="main-panel">
  <div class="content-wrapper cnt" style="background: #606c88;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #3f4c6b, #606c88);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #3f4c6b, #606c88); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
">
    <div class="row">
      <div class="col-md-8 grid-margin stretch-card">
        <div class="card" style="border-radius:10px">
          <div class="card-body " style="background-color:#6a89cc; border-radius:10px;">
            <h4 class="card-title">  <h2 class="f ts">Surat Pelepasan Jaminan Bank</h2>
            <p class="card-description"><h5><span class="error ts" style="color:#ffda79;">No Sebutharga :<?php echo $get_detail[0]->df_nosebutharga ?> </span></h5></p>
            <?php if(isset($_SESSION['pjb'])) { ?>
              <div class="alert alert-success"><?php echo $_SESSION['pjb'] ?></div>
            <?php
              } ?>
            <?php //echo validation_errors('<div class="alert alert-danger">', '</div'); ?>

          </div>
        </div>
      </div>
      <!--start col-md-12 for form-->
      <div class="col-8 grid-margin">
        <?php echo validation_errors(); ?>
        <?php
        $pkkNo = $get_detail[0]->js_inden;
        if($pkkNo == null){
          echo form_open('mrk/Jaminan_Bank');
        }
        else {
          echo form_open('mrk/JB_Update');
        }
        ?>
        <div class="card" style="border-radius:10px;">
          <div class="card-body" style="background-color:#dfe4ea; border-radius:10px;">
            <h4 class="card-title ts" style="color:#38ada9;font-weight:bold;">Surat Pelepasan Jaminan Bank</h4>
            <div class="row">
              <div class="col-md-12 tl">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Rujukan Bank</label>
                  <div class="col-sm-7 tl">
                  <input type="text" class="form-control ts" style="font-weight:bold;" id="rujukbank" name="rujukbank" placeholder="Rujukan Bank" value="<?php echo $get_detail[0]->mrk_rujukanbank?>">
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 tl">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Nama Bank</label>
                  <div class="col-sm-7">
                  <input type="text" class="form-control ts" style="font-weight:bold;" id="namabank" name="namabank" placeholder="Nama Bank" value="<?php echo $get_detail[0]->mrk_namabank?>" >
                  </div>
                </div>
              </div>
            </div>
               <div class="row">
              <div class="col-md-12 tl">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Tarik Mula Tanggungan</label>
                  <div class="col-sm-7 tl">
                  <input type="date" class="form-control ts" style="font-weight:bold;" id="mulatanggung" name="mulatanggung" readonly value="<?php echo $get_detail[0]->mrk_tarikhmulatanggungcacat?>">
                  </div>
                </div>
              </div>
            </div>
              <div class="row">
              <div class="col-md-12 tl">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Tarik Luput Tanggungan</label>
                  <div class="col-sm-7">
                  <input type="date" class="form-control ts" style="font-weight:bold;" id="luputtanggung" name="luputtanggung" readonly value="<?php echo $get_detail[0]->mrk_tarikhtamattanggungcacat?>">
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 tl">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Alamat Bank</label>
                  <div class="col-sm-7">
                  <textarea rows="6" type="text" class="form-control ts" style="font-weight:bold;" id="alamatbank" name="alamatbank" placeholder="Alamat Bank"><?php echo $get_detail[0]->mrk_alamatbank?></textarea>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12 tl">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Nama Jurutera</label>
                  <div class="col-sm-3">
                  <input type="text" class="form-control ts" style="font-weight:bold;" id="namajuru" name="namajuru" placeholder="Nama Jurutera" readonly value="<?php echo $get_detail[0]->mrk_pegawaipenguasa?>">
                  </div>
                  <label class="col-sm-1 col-form-label">Jawatan</label>
                  <div class="col-sm-3">
                  <input type="text" class="form-control ts" style="font-weight:bold;" id="jawatan" name="jawatan" placeholder="Jawatan" readonly value="<?php echo $get_detail[0]->mrk_jawatanpp?>">
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12 tl">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Nama Pemborong</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control ts" style="font-weight:bold;" id="namaborong" name="namaborong" placeholder="Nama Pemborong" readonly value="<?php echo $get_detail[0]->mrk_namakon?>">
                    <input type="hidden" name="noinden" readonly value="<?php echo $get_detail[0]->mrk_noinden?>">
                    <input type="hidden"  name="kodvot"  readonly value="<?php echo $get_detail[0]->df_kodvot?>">
                    <input type="hidden"  name="hiddenid" readonly value="<?php echo $get_detail[0]->mrksatuid?>">
                    <input type="hidden"  name="hiddenids"  readonly value="<?php echo $get_detail[0]->projek_id?>">
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
                <div class="col-md-12 tl">
                  <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Alamat Pemborong</label>
                        <div class="col-sm-7">
                          <textarea rows="4" type="text" class="form-control ts" style="font-weight:bold;" readonly id="alamatborong" name="alamatborong" placeholder="Alamat Pemborong"><?php echo $get_detail[0]->mrk_alamatkon?></textarea>
                        </div>
                    </div>
                 </div>
              </div>
              <div class="row">
                <div class="col-md-12 tl">
                  <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Alamat Pemborong untuk Surat</label>
                        <div class="col-sm-7">
                          <textarea rows="4" type="text" class="form-control ts" style="font-weight:bold;" id="alamatborong" name="alamatborongsurat" placeholder="Alamat Pemborong"><?php echo $get_detail[0]->jb_alamatsurat?></textarea>
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
                    <button type="submit" name="submit" class="btn btn-primary mr-2 btn-rounded " data-toggle="tooltip" data-placement="bottom" title="Simpan">Simpan</button>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" role="button" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown" >
    <ul class="navbar-nav" >
    
      <li class="nav-item">
                          <a href="<?php echo site_url('Report/Report_PJB/'.$get_detail[0]->projek_id) ?>" class="btn btn-success mr-2 btn-rounded" role="button" data-toggle="tooltip" data-placement="bottom" target="_blank" title="Muat Turun / Cetak">Print</a>
      </li>
      <li class="nav-item" style="margin-left:5px;" >
  <a href="<?php echo site_url('mrk/MRK_PSMK/'.$get_detail[0]->projek_id) ?>" class="btn btn-warning mr-2 btn-rounded" role="button" data-toggle="tooltip" data-placement="bottom" title="Perakuan Siap Membaiki Kecacatan">PSMK</a>
      </li>

          <li class="nav-item" style="margin-left:5px;">
                  <a href="<?php echo site_url('mrk/PP_WJP/'.$get_detail[0]->projek_id) ?>" class="btn btn-info mr-2 btn-rounded" role="button" data-toggle="tooltip" data-placement="bottom" title="Perakuan Pemulangan WJP">Perakuan Pemulangan WJP</a>
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
    </div>
  </form>
  </div>
