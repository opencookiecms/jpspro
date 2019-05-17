<div class="main-panel">
  <div class="content-wrapper cnt" style="background: #606c88;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #3f4c6b, #606c88);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #3f4c6b, #606c88); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
">
    <div class="row">
      <div class="col-md-8 grid-margin stretch-card">
        <div class="card" style="border-radius:10px;">
          <div class="card-body" style="background-color:#82589F; border-radius:10px;">
            <h4 class="card-title">  <h2 class="f ts">Perakuan Pemulangan Wang Jaminan Perlaksanaan</h2>
            <p class="card-description"><h5><span class="error" style="color:#ffda79;">No Sebutharga :<?php echo $get_detail[0]->df_nosebutharga ?> </span></h5></p>
            <?php if(isset($_SESSION['ppwjp'])) { ?>
              <div class="alert alert-success"><?php echo $_SESSION['ppwjp'] ?></div>
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
                   $pkkNo = $get_detail[0]->ppwjp_kodvot;
                     if($pkkNo == null){
                         echo form_open('mrk/PP_WJP');
                     }
                     else {
                       echo form_open('mrk/PPWJP_Update');
                     }
               ?>
        <div class="card" style="border-radius:10px;">
        <div class="card-body" style="background-color:#dfe4ea; border-radius:10px;">
            <h4 class="card-title ts" style="color:#38ada9;font-weight:bold;">Surat Pelepasan Jaminan Bank</h4>
              <div class="row">
              <div class="col-md-12 tl">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Nama Pemborong</label>
                  <div class="col-sm-7">
                  <input type="text" class="form-control ts" style="font-weight:bold;" id="namaborong" name="namaborong" readonly value="<?php echo $get_detail[0]->mrk_namakon?>">
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 tl">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">No Kontrak \ No Sebutharga</label>
                  <div class="col-sm-7">
                  <input type="text" class="form-control ts" style="font-weight:bold;" id="nokon" name="nokon" readonly value="<?php echo $get_detail[0]->df_nosebutharga?>">
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 tl">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Rujukan Tuan</label>
                  <div class="col-sm-7">
                  <input type="text" class="form-control ts" style="font-weight:bold;" id="rujuktuan" name="rujuktuan" placeholder="Rujukan Tuan" value="<?php echo $get_detail[0]->ppwjp_rt?>">
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 tl">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Rujukan Kami</label>
                  <div class="col-sm-7">
                  <input type="text" class="form-control ts" style="font-weight:bold;" id="rujukkami" name="rujukkami" placeholder="Rujukan Kami" value="<?php echo $get_detail[0]->ppwjp_rk?>">
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 tl">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Kepada</label>
                  <div class="col-sm-7">
                  <input type="text" class="form-control ts" readonly style="font-weight:bold;" id="kepada" name="kepada" placeholder="Kepada" value="<?php echo $get_detail[0]->mrk_namakon?>">
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12 tl">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Alamat</label>
                  <div class="col-sm-7">
                  <textarea rows="5" type="text" readonly class="form-control ts" style="font-weight:bold;" id="alamat" name="alamat" placeholder="Alamat"><?php echo $get_detail[0]->mrk_alamatkon?></textarea>
                  </div>
                </div>
              </div>
            </div>
                  <div class="row">
              <div class="col-md-12 tl">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Kos WJP</label>
                  <div class="col-sm-5">
                    <div class="input-group">
                      <div class="input-group-prepend bg-success border-primary">
                        <span class="input-group-text bg-transparent text-white">RM</span>
                      </div>
                      <input type="text" class="form-control ts" style="font-weight:bold;" id="koswjp" name="koswjp" placeholder="Kos WJP" value="<?php echo number_format($get_detail[0]->ppwjp_kos,2) ?>">
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
              <div class="col-md-12 tl">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Pegawai Penguasa</label>
                      <div class="col-sm-3">
                        <select type="text" class="form-control ts" style="font-weight:bold;" id="pegawaikuasa" name="pegawaikuasa">
                            <option value="<?php echo $get_detail[0]->ppwjp_pegawai?>"><?php echo $get_detail[0]->ppwjp_pegawai?></option>
                           <?php foreach($get_keypeople as $users){ ?>
                            <option value="<?php echo $users->p_names?>"><?php echo $users->p_names?></option>';
                          <?php } ?>
                        </select>
                      </div>
                      <label class="col-sm-1 col-form-label">Jawatan</label>
                        <div class="col-sm-3">
                          <select type="text" class="form-control ts" style="font-weight:bold;" id="jawatan" name="jawatan">
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
              <div class="col-md-12 tl">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Tajuk Kerja</label>
                  <div class="col-sm-7">
                  <textarea rows="5" type="text" class="form-control ts" style="font-weight:bold;" placeholder="Alamat Pemborong" readonly><?php echo $get_detail[0]->df_tajuk?></textarea>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12 tl">



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
                          <a href="<?php echo site_url('Report/Report_Pemulangan_WJP/'.$get_detail[0]->projek_id) ?>" class="btn btn-success mr-2 btn-rounded" role="button" data-toggle="tooltip" data-placement="bottom" target="_blank" title="Muat Turun / Cetak">Cetak</a>
      </li>
      <li class="nav-item" style="margin-left:5px;" >
                    <a href="<?php echo site_url('mrk/Jaminan_Bank/'.$get_detail[0]->projek_id) ?>" class="btn btn-warning mr-2 btn-rounded" role="button" data-toggle="tooltip" data-placement="bottom" title="Jaminan Bank">Jaminan Bank</a>
      </li>

          <li class="nav-item" style="margin-left:5px;">
        <a href="<?php echo site_url('surat/Surat_MRK/'.$get_detail[0]->projek_id) ?>" class="btn btn-info mr-2 btn-rounded" role="button" data-toggle="tooltip" data-placement="bottom" title="Surat Maklumat Rekod Kerja">Surat MRK</a>
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
