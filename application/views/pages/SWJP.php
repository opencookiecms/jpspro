<div class="main-panel">

    <div class="content-wrapper cnt" style="background: #606c88;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #3f4c6b, #606c88);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #3f4c6b, #606c88); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
">
    <div class="row">
      <div class="col-md-8 grid-margin stretch-card">
        <div class="card" style="border-radius:10px;">
          <div class="card-body" style="background-color:#778ca3;border-radius:10px;">
            <h4 class="card-title">  <h2 class="f ts">Surat Pelepasan Bon Jaminan Perlaksanaan</h2>
            <p class="card-description"><h5><span class="error" style="color:#ffda79;">No Sebutharga :<?php echo $get_detail[0]->df_nosebutharga ?> </span></h5></p>
            <?php if(isset($_SESSION['swjp'])) { ?>
              <div class="alert alert-success"><?php echo $_SESSION['swjp'] ?></div>
            <?php
              } ?>
            <?php //echo validation_errors('<div class="alert alert-danger">', '</div'); ?>

          </div>
        </div>
      </div>
      <!--start col-md-12 for form-->
      <div class="col-8 grid-margin">

          <?php
              $pkkNo = $get_detail[0]->swjp_kodvot;
                if($pkkNo == null){
                    echo form_open('surat/setspjwp/'.$get_detail[0]->projek_id);
                }
                else {
                  echo form_open('Surat/Surat_WJP_Update/'.$get_detail[0]->projek_id);
                }
          ?>
        <div class="card" style="border-radius:10px;">
          <div class="card-body" style="background-color:#dfe4ea;border-radius:10px;">
            <h4 class="card-title ts" style="color:#38ada9;font-weight:bold;">Surat Pelepasan WJP</h4>
             <h5 class="text-danger"><?php echo validation_errors(); ?></h5>
            <div class="row">
              <div class="col-md-12 tl">
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Kepada</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control ts" style="font-weight:bold;" id="kepada" name="kepada" placeholder="Kepada" value="<?php echo $get_detail[0]->swjp_kepada?>">
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 tl">
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Alamat</label>
                  <div class="col-sm-6">
                  <textarea  rows="5" type="text" class="form-control ts" style="font-weight:bold;" id="alamat" name="alamat" placeholder="Alamat"><?php echo $get_detail[0]->swjp_alamat?></textarea>
                  </div>

                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 tl">
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Rujukan Tuan</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control ts" style="font-weight:bold;" id="rujukkami" name="rujuktuan" placeholder="Rujukan Kami" readonly value="<?php echo $get_detail[0]->df_nosebutharga?>">
                    <input type="hidden" name="noinden" value="<?php echo $get_detail[0]->mrk_noinden?>" readonly>
                    <input type="hidden" name="kodvot" value="<?php echo $get_detail[0]->df_kodvot?>" readonly>
                    <input type="hidden" name="hiddenid" value="<?php echo $get_detail[0]->mrksatuid?>" readonly>
                    <input type="hidden" name="hiddenids" value="<?php echo $get_detail[0]->projek_id?>" readonly>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 tl">
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Rujukan Kami</label>
                  <div class="col-sm-6">
                  <input type="text" class="form-control ts" style="font-weight:bold;"  name="rujukankami" placeholder="No Kontraktor" readonly value="<?php echo $get_detail[0]->df_nosebutharga?>">
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12 tl">
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Nama Kontraktor</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control ts" style="font-weight:bold;" name="namakon" placeholder="Nama Kontraktor" readonly value="<?php echo $get_detail[0]->mrk_namakon?>">
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12 tl">
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">No. Kontraktor</label>
                  <div class="col-sm-6">
                      <input type="text" class="form-control ts" style="font-weight:bold;"  name="nokon" placeholder="No Kontraktor" readonly value="<?php echo $get_detail[0]->mrk_nopkk?>">
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12 tl">
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Melalui</label>
                  <div class="col-sm-6">
                  <input type="text" class="form-control ts" style="font-weight:bold;"  name="melalui" placeholder="Melalui" value="<?php echo $get_detail[0]->swjp_melalui?>">
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12 tl">
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Alamat</label>
                  <div class="col-sm-6">
                  <textarea rows="5" type="text" class="form-control ts" style="font-weight:bold;"  name="alamat1" placeholder="Alamat"><?php echo $get_detail[0]->swjp_alamatlalu?></textarea>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12 tl">
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Wang Jaminan Perlaksanaan</label>
                  <div class="col-sm-4">
                    <div class="input-group">
                      <div class="input-group-prepend bg-success border-primary">
                        <span class="input-group-text bg-transparent text-white">RM</span>
                      </div>
                      <input type="text" class="form-control ts" style="font-weight:bold;"  name="wangjaminan" placeholder="RM" value="<?php echo $get_detail[0]->swjp_wangjamin?>">
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12 tl">
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Pengawai Penguasa</label>
                  <div class="col-sm-3">
                      <select class="form-control ts" style="font-weight:bold;"  name="pegawaikuasa" value="">
                          <option value="<?php echo $this->session->userdata("name")?>"><?php echo $this->session->userdata("name")?></option>
                       <?php foreach($get_user as $users){ ?>
                          <option value="<?php echo $users->jps_name?>"><?php echo $users->jps_name?></option>';
                        <?php } ?>
                      </select>
                  </div>
                  <label class="col-sm-1 col-form-label">Jawatan</label>
                  <div class="col-sm-3">
                  <select class="form-control ts" style="font-weight:bold;"  name="jawatan" placeholder="Jawatan">
                        <option value="<?php echo $this->session->userdata("jawatan")?>"><?php echo $this->session->userdata("jawatan")?></option>
                           <option value="Jurutera Awan">Jurutera Awam</option>
                      <option value="Jurutera">Jurutera</option>
                      <option value="Penolong Jurutera">Penolong Jurutera</option>
                      <option value="Pegawai">Pegawai</option>
                      <option value="Penolong Pegawai">Penolong Pegawai</option>
                      <option value="Pembantu Tadbir">Pembantu Tadbir</option>
                      <option value="Pembantu Tadbir Kewangan">Pembantu Tadbir Kewangan</option>
                      <option value="Pembantu Awam">Pembantu Awam</option>
                      <option value="Pekerja AM">Pekerja AM</option>
                  </select>

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
                    <a href="<?php echo site_url('Report/Report_Cover_PWJP/'.$get_detail[0]->projek_id) ?>" class="btn btn-dark mr-2 btn-rounded" target="_blank" role="button" data-toggle="tooltip" data-placement="bottom" title="Surat Khas">Lihat / Cetak</a>
      </li>
      <li class="nav-item">
                    <a href="<?php echo site_url('surat/Surat_Khas/'.$get_detail[0]->projek_id) ?>" class="btn btn-warning mr-2 btn-rounded" role="button" data-toggle="tooltip" data-placement="bottom" title="Surat Khas">Surat Khas</a>
      </li>
      <li class="nav-item" style="margin-left:5px;" >
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
        <script>
            $('[data-toggle="datepicker"]').datepicker({
              dateFormat: 'dd-mm-yy'
            });
           </script>

      <!--end here col-md-12-->
    </div>
  </form>
  </div>
