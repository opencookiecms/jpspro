<div class="main-panel">
  <div class="content-wrapper" style="background: #114357;background: -webkit-linear-gradient(to right, #F29492, #114357);background: linear-gradient(to right, #F29492, #114357);">
    <div class="row">
      <div class="col-md-12 grid-margin stretch-card">
        <div class="card" style="border-radius:10px">
          <div class="card-body">
            <h4 class="card-title">  <h2 class="f">Surat Pelepasan Jaminan Bank</h2>
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
        $pkkNo = $get_detail[0]->js_inden;
        if($pkkNo == null){
          echo form_open('mrk/Jaminan_Bank');
        }
        else {
          echo form_open('mrk/JB_Update');
        }
        ?>
        <div class="card" style="border-radius:10px;">
          <div class="card-body">
            <h4 class="card-title">Surat Pelepasan Jaminan Bank</h4>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group row">
                  <label class="col-sm-1 col-form-label">Rujukan Bank</label>
                  <div class="col-sm-3">
                  <input type="text" class="form-control" id="rujukbank" name="rujukbank" placeholder="Rujukan Bank" value="<?php echo $get_detail[0]->mrk_rujukanbank?>">
                  </div>
                  <label class="col-sm-2 col-form-label">Tarik Mula Tanggungan</label>
                  <div class="col-sm-3">
                  <input type="date" class="form-control" id="mulatanggung" name="mulatanggung" readonly value="<?php echo $get_detail[0]->mrk_tarikhmulatanggungcacat?>">
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group row">
                  <label class="col-sm-1 col-form-label">Nama Bank</label>
                  <div class="col-sm-3">
                  <input type="text" class="form-control" id="namabank" name="namabank" placeholder="Nama Bank" value="<?php echo $get_detail[0]->mrk_namabank?>" >
                  </div>
                  <label class="col-sm-2 col-form-label">Tarik Luput Tanggungan</label>
                  <div class="col-sm-3">
                  <input type="date" class="form-control" id="luputtanggung" name="luputtanggung" readonly value="<?php echo $get_detail[0]->mrk_tarikhtamattanggungcacat?>">
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group row">
                  <label class="col-sm-1 col-form-label">Alamat Bank</label>
                  <div class="col-sm-3">
                  <textarea type="text" class="form-control" id="alamatbank" name="alamatbank" placeholder="Alamat Bank"><?php echo $get_detail[0]->mrk_alamatbank?></textarea>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="form-group row">
                  <label class="col-sm-1 col-form-label">Nama Jurutera</label>
                  <div class="col-sm-3">
                  <input type="text" class="form-control" id="namajuru" name="namajuru" placeholder="Nama Jurutera" readonly value="<?php echo $get_detail[0]->mrk_pegawaipenguasa?>">
                  </div>
                  <label class="col-sm-1 col-form-label">Jawatan</label>
                  <div class="col-sm-3">
                  <input type="text" class="form-control" id="jawatan" name="jawatan" placeholder="Jawatan" readonly value="<?php echo $get_detail[0]->mrk_jawatanpp?>">
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="form-group row">
                  <label class="col-sm-1 col-form-label">Nama Pemborong</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control" id="namaborong" name="namaborong" placeholder="Nama Pemborong" readonly value="<?php echo $get_detail[0]->mrk_namakon?>">
                    <input type="hidden" name="noinden" placeholder="Nama Pemborong" readonly value="<?php echo $get_detail[0]->mrk_noinden?>">
                    <input type="hidden"  name="kodvot" placeholder="Nama Pemborong" readonly value="<?php echo $get_detail[0]->df_kodvot?>">
                    <input type="hidden"  name="hiddenid" placeholder="Nama Pemborong" readonly value="<?php echo $get_detail[0]->mrksatuid?>">
                  </div>
                </div>
              </div>
            </div>

                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group row">
                              <label class="col-sm-1 col-form-label">Alamat Pemborong</label>
                              <div class="col-sm-3">
                              <textarea type="text" class="form-control" readonly id="alamatborong" name="alamatborong" placeholder="Alamat Pemborong"><?php echo $get_detail[0]->mrk_alamatkon?></textarea>
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
                  <div class="col-sm-8">
                    <p>
                    <p>
                      <a href="<?php echo site_url('Report/Report_PJB/'.$get_detail[0]->projek_id) ?>" class="btn btn-success mr-2 btn-rounded" role="button">Print</a>
                    <a href="<?php echo site_url('mrk/MRK_PSMK/'.$get_detail[0]->projek_id) ?>" class="btn btn-warning mr-2 btn-rounded" role="button">PSMK</a>
                      <a href="<?php echo site_url('mrk/PP_WJP/'.$get_detail[0]->projek_id) ?>" class="btn btn-info mr-2 btn-rounded" role="button">Perakuan Pemulangan WJP</a>
                  </div>
                  <div class="col-sm-2">
                  <p>
                  <p>
                  <a href="<?php echo site_url('projek/view_data/'.$get_detail[0]->mrks_kodvot) ?>" class="btn btn-warning mr-2 btn-rounded" role="button">Close</a>
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
