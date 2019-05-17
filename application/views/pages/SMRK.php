<div class="main-panel">
  <div class="content-wrapper cnt" style="background: #606c88;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #3f4c6b, #606c88);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #3f4c6b, #606c88); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
">
    <div class="row">
      <div class="col-md-8 grid-margin stretch-card">
        <div class="card" style="border-radius:10px;">
          <div class="card-body" style="background-color:#778ca3; border-radius:10px;">
            <h4 class="card-title">  <h2 class="f ts">Surat Maklumat Rekod Kerja</h2>
            <p class="card-description"><h5><span class="error ts" style="color:#ffda79;;">No Sebutharga :<?php echo $get_detail[0]->df_nosebutharga ?> </span></h5></p>
            <?php if(isset($_SESSION['smkr'])) { ?>
              <div class="alert alert-success"><?php echo $_SESSION['smrk'] ?></div>
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
              $pkkNo = $get_detail[0]->s_kodvot;
                if($pkkNo == null){
                    echo form_open('Surat/Surat_MRK');
                }
                else {
                  echo form_open('Surat/Surat_MRK_Update');
                }
          ?>
        <div class="card" style="border-radius:10px;">
          <div class="card-body" style="background-color:#dfe4ea; border-radius:10px;">
            <h4 class="card-title ts" style="color:#38ada9;font-weight:bold;">Surat MRK</h4>
            <div class="row">
              <div class="col-md-12 tl">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Rujukan Tuan</label>
                  <div class="col-sm-7">
                  <input type="text" class="form-control ts" style="font-weight:bold;" id="rujuktuan" name="rujuktuan" placeholder="Rujukan Tuan" value="<?php echo $get_detail[0]->s_rujuktuan?>">
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 tl">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Rujukan Kami</label>
                  <div class="col-sm-7">
                  <input type="text" class="form-control ts" style="font-weight:bold;" id="rujukkami" name="rujukkami" readonly placeholder="Rujukan Kami" value="<?php echo $get_detail[0]->df_nosebutharga?>">
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 tl">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Bertarikh</label>
                  <div class="col-sm-4">
                  <input type="date" class="form-control ts" style="font-weight:bold;" id="tarikhtuan" name="tarikhtuan" value="<?php echo $get_detail[0]->s_tarikhtuan?>">
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 tl">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Jenis Borang</label>
                  <div class="col-sm-4">
                    <select type="text" class="form-control ts" style="font-weight:bold;" id="mrk" name="mrk">
                    <option value="<?php echo $get_detail[0]->s_jenisborang?>"><?php echo $get_detail[0]->s_jenisborang?></option>
                      <option value="MRK 01">MRK 01</option>
                      <option value="MRK 02">MRK 02</option>
                      <option value="MRK 03">MRK 03</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 tl">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Nama Kontraktor</label>
                  <div class="col-sm-5">
                  <input type="text" class="form-control ts" style="font-weight:bold;" id="namakon" name="namakon" readonly value="<?php echo $get_detail[0]->mrk_namakon?>">
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 tl">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">No Kontraktor</label>
                  <div class="col-sm-5">
                  <input type="text" class="form-control ts" style="font-weight:bold;" id="nokon" name="nokon" readonly placeholder="No Kontraktor" value="<?php echo $get_detail[0]->mrk_nopkk?>">
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 tl">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">No Inden</label>
                  <div class="col-sm-5">
                  <input type="text" class="form-control ts" style="font-weight:bold;" id="noinden" name="noinden" readonly placeholder="No Inden" value="<?php echo $get_detail[0]->mrk_noinden?>">
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12 tl">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Pegawai Penguasa</label>
                  <div class="col-sm-3">
                    <select class="form-control ts" style="font-weight:bold;" id="pegawaikuasa" name="pegawaikuasa">
                          <option value="<?php echo $get_detail[0]->s_pegawaikuasa?>"><?php echo $get_detail[0]->s_pegawaikuasa?></option>
                         <?php foreach($get_keypeople as $users){ ?>
                            <option value="<?php echo $users->p_names?>"><?php echo $users->p_names?></option>';
                          <?php } ?>
                    </select>
                  </div>
                  <label class="col-sm-1 col-form-label">Jawatan</label>
                  <div class="col-sm-3">
                  <select class="form-control ts" style="font-weight:bold;"id="jawatan" name="jawatan" placeholder="Jawatan">
                       <option value="<?php echo $get_detail[0]->s_jawatanpp?>"><?php echo $get_detail[0]->s_jawatanpp?></option>
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
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">No Sebutharga</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control ts" style="font-weight:bold;" id="nosebutharga" readonly name="nosebutharga" placeholder="No Sebutharga" value="<?php echo $get_detail[0]->df_nosebutharga?>">
                    <input type="hidden"  name="kodvot" value="<?php echo $get_detail[0]->df_kodvot?>">
                    <input type="hidden"  name="hiddenid" value="<?php echo $get_detail[0]->mrksatuid?>">
                    <input type="hidden"  name="hiddenids" value="<?php echo $get_detail[0]->projek_id?>">
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
                    <button type="submit" name="submit" class="btn btn-primary mr-2 btn-rounded " data-toggle="tooltip" data-placement="bottom" title="Siap">Simpan</button>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" role="button" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown" >
    <ul class="navbar-nav" >
        <li class="nav-item dropdown">
        <a class="dropdown-toggle btn btn-dark mr-2 btn-rounded" style="margin-right:10px;" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Lihat / Cetak
        </a>
        <div class="dropdown-menu"  aria-labelledby="navbarDropdownMenuLink">
        <a class="dropdown-item" target="_blank" href="<?php echo site_url('Report/Report_PKK01/'.$get_detail[0]->projek_id)?>">Surat MRK 01</a>
        <a class="dropdown-item" target="_blank"  href="<?php echo site_url('Report/Report_PKK02/'.$get_detail[0]->projek_id)?>">Surat MRK 02</a>
        </div>
      </li>
    
      <li class="nav-item">
                        <a href="<?php echo site_url('mrk/PP_WJP/'.$get_detail[0]->projek_id) ?>" class="btn btn-warning mr-2 btn-rounded" role="button" data-toggle="tooltip" data-placement="bottom" title="Perakuan Pemulangan WJP">P.Pemulangan WJP</a>
      </li>
      <li class="nav-item" style="margin-left:5px;" >
                            <a href="<?php echo site_url('surat/Surat_Khas/'.$get_detail[0]->projek_id) ?>" class="btn btn-info mr-2 btn-rounded" role="button" data-toggle="tooltip" data-placement="bottom" title="Surat Kebenaran Khas">Surat Kebenaran Khas</a>
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
