<div class="main-panel">
  <div class="content-wrapper cnt" style="background: #606c88;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #3f4c6b, #606c88);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #3f4c6b, #606c88); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
">
    <div class="row">
      <div class="col-md-9 grid-margin stretch-card">
        <div class="card" style="border-radius:10px;">
          <div class="card-body" style="background-color:#4b4b4b;border-radius:10px;">
            <h4 class="card-title">  <h2 class="f ts">Surat Kebenaran Khas (Permohonan Pengkhususan)</h2>
            <p class="card-description"><h5><span class="error ts" style="color:#ffda79;">No Sebutharga :<?php echo $get_detail[0]->df_nosebutharga ?> </span></h5></p>
            <?php if(isset($_SESSION['success'])) { ?>
              <div class="alert alert-success"><?php echo $_SESSION['success'] ?></div>
            <?php
              } ?>
            <?php //echo validation_errors('<div class="alert alert-danger">', '</div'); ?>

          </div>
        </div>
      </div>
      <!--start col-md-12 for form-->
      <div class="col-9 grid-margin">
        <?php echo validation_errors(); ?>
          <?php
              $pkkNo = $get_detail[0]->skhas_kodvot;
                if($pkkNo == null){
                    echo form_open('Surat/Surat_Khas/'.$get_detail[0]->projek_id);
                }
                else {
                  echo form_open('Surat/Surat_Khas_Update');
                }
          ?>
        <div class="card" style="border-radius:10px;">
          <div class="card-body" style="background-color:#dfe4ea;border-radius:10px;">
            <h4 class="card-title ts" style="color:#38ada9;font-weight:bold;">Surat Khas</h4>
             <h5 class="text-danger"><?php echo validation_errors(); ?></h5>
            <div class="row">
              <div class="col-md-12 tl">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Rujukan Tuan</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control ts" style="font-weight:bold;" id="rujuktuan" name="rujuktuan" placeholder="Rujukan Tuan" value="<?php echo $get_detail[0]->skhas_rujuktuan?>">
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 tl">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Rujukan Kami</label>
                  <div class="col-sm-6">
                  <input type="text" class="form-control ts" style="font-weight:bold;" id="rujukkami" name="rujukkami" placeholder="Rujukan Kami" readonly value="<?php echo $get_detail[0]->df_nosebutharga?>">
                  </div>
                </div>
              </div>
            </div>
                    <div class="row">
              <div class="col-md-12 tl">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">No Sebutharga</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control ts" style="font-weight:bold;" id="nosebutharga" name="nosebutharga" placeholder="No Sebutharga" readonly value="<?php echo $get_detail[0]->df_nosebutharga?>">
                    <input type="hidden"  name="noinden" value="<?php echo $get_detail[0]->mrk_noinden?>">
                    <input type="hidden"  name="hiddenid" value="<?php echo $get_detail[0]->mrksatuid?>">
                    <input type="hidden"  name="hiddenids" value="<?php echo $get_detail[0]->projek_id?>">
                    <input type="hidden"  name="kodvot" value="<?php echo $get_detail[0]->df_kodvot?>">
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 tl">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Nama Kontraktor</label>
                  <div class="col-sm-6">
                  <input type="text" class="form-control ts" style="font-weight:bold;" id="namakon" name="namakon" placeholder="Nama Kontraktor" readonly value="<?php echo $get_detail[0]->mrk_namakon?>">
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 tl">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Tajuk Projek</label>
                  <div class="col-sm-6">
                  <textarea rows="5" type="text" class="form-control ts" style="font-weight:bold;" id="tajukprojek" name="tajukprojek" placeholder="Tajuk Projek" readonly><?php echo $get_detail[0]->df_tajuk?></textarea>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 tl">
                <div class="form-group row">

                  <label class="col-sm-3 col-form-label">Gred</label>
                  <div class="col-sm-2">
                    <input type="text" value="<?php echo $get_detail[0]->mrk_gred?>" class="form-control ts" style="font-weight:bold;" id="gred" name="gred" placeholder="gred" readonly>
                  
                  </div>
                  <label class="col-sm-1 col-form-label">Kategori</label>
                  <div class="col-sm-2">
                    <input value="<?php echo $get_detail[0]->mrk_kategori?>" type="text" class="form-control ts" style="font-weight:bold;" id="kategori" name="kategori" placeholder="kat" readonly>
                   
                  </div>
                  <label class="col-sm-2 col-form-label">Pengkhususan</label>
                  <div class="col-sm-2">
                    <input value="<?php echo $get_detail[0]->mrk_khusus?>" type="text" class="form-control ts" style="font-weight:bold;" id="khusus" name="khusus" placeholder="kat" readonly> 
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
                    <option value="<?php echo $get_detail[0]->skhas_pegawaikuasa?>"><?php echo $get_detail[0]->skhas_pegawaikuasa?></option>
                          <?php foreach($get_user as $users){ ?>
                          <option value="<?php echo $users->jps_name?>"><?php echo $users->jps_name?></option>';
                        <?php } ?>
                    </select>
                  </div>
                  <label class="col-sm-1 col-form-label">Jawatan</label>
                  <div class="col-sm-3">
                    <select type="text" class="form-control ts" style="font-weight:bold;" id="jawatan" name="jawatan">
                        <option value="<?php echo $get_detail[0]->skhas_jawatanpp?>"><?php echo $get_detail[0]->skhas_jawatanpp?></option>
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
                      <div class="col-sm-3">
                              <a class="btn btn-dark mr-2 btn-rounded" target="_blank" href="<?php echo site_url('report/Report_Khas01/'.$get_detail[0]->projek_id)?>">Surat Khas 01</a>
                      </div>
                       <div class="col-sm-5">
                            <h5>bagiagagakgagjajgjjajgjahgjkagjkhagkjg</h5>
                      </div>
                  </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                  <div class="form-group row">
                      <div class="col-sm-3">
                             <a class="btn btn-dark mr-2 btn-rounded" target="_blank" href="<?php echo site_url('report/report_khas02/'.$get_detail[0]->projek_id)?>">Surat Khas 02</a>
                      </div>
                       <div class="col-sm-5">
                            <h5>bagiagagakgagjajgjjajgjahgjkagjkhagkjg</h5>
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
            <a href="<?php echo site_url('surat/Surat_MRK/'.$get_detail[0]->projek_id) ?>" class="btn btn-warning mr-2 btn-rounded" role="button" data-toggle="tooltip" data-placement="bottom"  title="Surat Maklumat Rekod Kerja">Surat MRK</a>
      </li>
   
    
    
      <li class="nav-item" style="margin-left:5px;" >
          <a href="<?php echo site_url('surat/setspjwp/'.$get_detail[0]->projek_id) ?>" class="btn btn-info mr-2 btn-rounded" role="button" data-toggle="tooltip" data-placement="bottom" title="Surat Pelepas WJP">Surat Pelepasan WJP</a>
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
