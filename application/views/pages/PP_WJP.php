<div class="main-panel">
  <div class="content-wrapper cnt" style="background: #C9D6FF;background: -webkit-linear-gradient(to right, #E2E2E2, #C9D6FF);background: linear-gradient(to right, #E2E2E2, #C9D6FF);">
    <div class="row">
      <div class="col-md-12 grid-margin stretch-card">
        <div class="card" style="border-radius:10px;">
          <div class="card-body">
            <h4 class="card-title">  <h2 class="f">Perakuan Pemulangan Wang Jaminan Perlaksanaan</h2>
            <p class="card-description"><h5><span class="error" style="color:#FF0000;">No Sebutharga :<?php echo $get_detail[0]->df_nosebutharga ?> </span></h5></p>
            <?php if(isset($_SESSION['ppwjp'])) { ?>
              <div class="alert alert-success"><?php echo $_SESSION['ppwjp'] ?></div>
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
                   $pkkNo = $get_detail[0]->ppwjp_kodvot;
                     if($pkkNo == null){
                         echo form_open('mrk/PP_WJP');
                     }
                     else {
                       echo form_open('mrk/PPWJP_Update');
                     }
               ?>
        <div class="card" style="border-radius:10px;">
          <div class="card-body">
            <h4 class="card-title">Surat Pelepasan Jaminan Bank</h4>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group row">
                  <label class="col-sm-1 col-form-label">Rujukan Tuan</label>
                  <div class="col-sm-3">
                  <input type="text" class="form-control" id="rujuktuan" name="rujuktuan" placeholder="Rujukan Tuan" value="<?php echo $get_detail[0]->ppwjp_rt?>">
                  </div>
                  <label class="col-sm-2 col-form-label">Nama Pemborong</label>
                  <div class="col-sm-3">
                  <input type="text" class="form-control" id="namaborong" name="namaborong" readonly value="<?php echo $get_detail[0]->mrk_namakon?>">
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group row">
                  <label class="col-sm-1 col-form-label">Rujukan Kami</label>
                  <div class="col-sm-3">
                  <input type="text" class="form-control" id="rujukkami" name="rujukkami" placeholder="Rujukan Kami" value="<?php echo $get_detail[0]->ppwjp_rk?>">
                  </div>
                  <label class="col-sm-2 col-form-label">No Kontrak \ No Sebutharga</label>
                  <div class="col-sm-3">
                  <input type="text" class="form-control" id="nokon" name="nokon" readonly value="<?php echo $get_detail[0]->df_nosebutharga?>">
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group row">
                  <label class="col-sm-1 col-form-label">Kepada</label>
                  <div class="col-sm-3">
                  <input type="text" class="form-control" id="kepada" name="kepada" placeholder="Kepada" value="<?php echo $get_detail[0]->ppwjp_kepada?>">
                  </div>
                  <label class="col-sm-2 col-form-label">Kos WJP</label>
                  <div class="col-sm-3">
                    <div class="input-group">
                      <div class="input-group-prepend bg-success border-primary">
                        <span class="input-group-text bg-transparent text-white">RM</span>
                      </div>
                      <input type="text" class="form-control" id="koswjp" name="koswjp" placeholder="Kos WJP" value="<?php echo number_format($get_detail[0]->ppwjp_kos,2) ?>">
                      <input type="hidden" name="indenno" value="<?php echo $get_detail[0]->mrk_noinden?>">
                      <input type="hidden" name="kodvot" value="<?php echo $get_detail[0]->df_kodvot?>">
                      <input type="hidden" name="hiddenid" value="<?php echo $get_detail[0]->mrksatuid?>">
                      <input type="hidden" name="hiddenids" value="<?php echo $get_detail[0]->projek_id?>">
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="form-group row">
                  <label class="col-sm-1 col-form-label">Alamat</label>
                  <div class="col-sm-3">
                  <textarea type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat"><?php echo $get_detail[0]->ppwjp_alamat?></textarea>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                  <div class="form-group row">
                    <label class="col-sm-1 col-form-label">Pegawai Penguasa</label>
                      <div class="col-sm-3">
                        <select type="text" class="form-control" id="pegawaikuasa" name="pegawaikuasa">
                          <option value="Idris Bin Yussof">Idris Bin Yussof</option>
                          <option value="Khairul Anuar B. Abd. Rashid">Khairul Anuar B. Abd. Rashid</option>
                          <option value="Khairul Anuar B. Abd. Rashid">Khairul Anuar B. Abd. Rashid</option>
                          <option value="Mohd. Amin B. Ahmad">Mohd. Amin B. Ahmad</option>
                          <option value="Yahaya B. Shariff">Yahaya B. Shariff</option>
                          <option value="Mohd. Daud Bin Hamid">Mohd. Daud Bin Hamid</option>
                          <option value="Zainuddin Bin Yusoff,AMP.,BCK.">Zainuddin Bin Yusoff,AMP.,BCK.</option>
                          <option value="Hasan Bin Abdul Majid">Hasan Bin Abdul Majid</option>
                          <option value="Kamarudin Bin Saleh">Kamarudin Bin Saleh</option>
                          <option value="Ir Siti Norazela Binti Hasan">Ir Siti Norazela Binti Hasan</option>
                          <option value="Nur Syuhada Binti Ahmad">Nur Syuhada Binti Ahmad</option>
                          <option value="Nor Rozaini Bt. Abdullah">Nor Rozaini Bt. Abdullah</option>
                        </select>
                      </div>
                      <label class="col-sm-1 col-form-label">Jawatan</label>
                        <div class="col-sm-3">
                          <select type="text" class="form-control" id="jawatan" name="jawatan">
                            <option value="Penolong Jurutera JA29">Penolong Jurutera JA29</option>
                            <option value="Penolong Jurutera JA36">Penolong Jurutera JA36</option>
                            <option value="Jurutera ( Kuala Muda/Sik )">Jurutera ( Kuala Muda/Sik )</option>
                            <option value="Jurutera ( Baling )">Jurutera ( Baling )</option>
                            <option value="Jurutera Daerah">Jurutera Daerah</option>
                            <option value="Penolong Jurutera JA38">Penolong Jurutera JA38</option>
                          </select>
                        </div>
                    </div>
               </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="form-group row">
                  <label class="col-sm-1 col-form-label">Tajuk Kerja</label>
                  <div class="col-sm-3">
                  <textarea type="text" class="form-control"  placeholder="Alamat Pemborong" readonly><?php echo $get_detail[0]->df_tajuk?></textarea>
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
                    <a href="<?php echo site_url('mrk/Jaminan_Bank/'.$get_detail[0]->projek_id) ?>" class="btn btn-warning mr-2 btn-rounded" role="button">Jaminan Bank</a>
                      <a href="<?php echo site_url('surat/Surat_MRK/'.$get_detail[0]->projek_id) ?>" class="btn btn-info mr-2 btn-rounded" role="button">Surat MRK</a>
                  </div>
                  <div class="col-sm-2">
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
