<div class="main-panel">
  <div class="content-wrapper cnt" style="background: #C9D6FF;background: -webkit-linear-gradient(to right, #E2E2E2, #C9D6FF);background: linear-gradient(to right, #E2E2E2, #C9D6FF);">
    <div class="row">
      <div class="col-md-12 grid-margin stretch-card">
        <div class="card" style="border-radius:10px;">
          <div class="card-body" style="background-color:#4b4b4b;border-radius:10px;">
            <h4 class="card-title">  <h2 class="f ts">Surat Kebenaran Khas</h2>
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
      <div class="col-12 grid-margin">
        <?php echo validation_errors(); ?>
          <?php
              $pkkNo = $get_detail[0]->skhas_kodvot;
                if($pkkNo == null){
                    echo form_open('Surat/Surat_Khas');
                }
                else {
                  echo form_open('Surat/Surat_Khas_Update');
                }
          ?>
        <div class="card" style="border-radius:10px;">
          <div class="card-body" style="background-color:#4b4b4b;border-radius:10px;">
            <h4 class="card-title ts" style="color:#ffda79;font-weight:bold;">Surat Khas</h4>
            <div class="row">
              <div class="col-md-12 tl">
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Rujukan Tuan</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control ts" style="font-weight:bold;" id="rujuktuan" name="rujuktuan" placeholder="Rujukan Tuan" value="<?php echo $get_detail[0]->skhas_rujuktuan?>">
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 tl">
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Rujukan Kami</label>
                  <div class="col-sm-4">
                  <input type="text" class="form-control ts" style="font-weight:bold;" id="rujukkami" name="rujukkami" placeholder="Rujukan Kami" readonly value="<?php echo $get_detail[0]->df_nosebutharga?>">
                  </div>
                  <label class="col-sm-2 col-form-label">No Sebutharga</label>
                  <div class="col-sm-4">
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
                  <label class="col-sm-2 col-form-label">Nama Kontraktor</label>
                  <div class="col-sm-4">
                  <input type="text" class="form-control ts" style="font-weight:bold;" id="namakon" name="namakon" placeholder="Nama Kontraktor" readonly value="<?php echo $get_detail[0]->mrk_namakon?>">
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 tl">
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Tajuk Projek</label>
                  <div class="col-sm-6">
                  <textarea rows="5" type="text" class="form-control ts" style="font-weight:bold;" id="tajukprojek" name="tajukprojek" placeholder="Tajuk Projek" readonly><?php echo $get_detail[0]->df_tajuk?></textarea>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 tl">
                <div class="form-group row">

                  <label class="col-sm-2 col-form-label">Gred</label>
                  <div class="col-sm-2">
                    <input type="text" value="<?php echo $get_detail[0]->mrk_gred?>" class="form-control ts" style="font-weight:bold;" id="gred" name="gred" placeholder="gred" readonly>
                  
                  </div>
                  <label class="col-sm-2 col-form-label">Kategori</label>
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

                  <label class="col-sm-2 col-form-label">Pegawai Penguasa</label>
                  <div class="col-sm-3">
                    <select type="text" class="form-control ts" style="font-weight:bold;" id="pegawaikuasa" name="pegawaikuasa">
                    <option value="<?php echo $get_detail[0]->skhas_pegawaikuasa?>"><?php echo $get_detail[0]->skhas_pegawaikuasa?></option>
                          <?php foreach($get_user as $users){ ?>
                          <option value="<?php echo $users->jps_name?>"><?php echo $users->jps_name?></option>';
                        <?php } ?>
                    </select>
                  </div>
                  <label class="col-sm-2 col-form-label">Jawatan</label>
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
                  <div class="col-sm-2">
                    <p>
                    <p>
                    <button type="submit" name="submit" class="btn btn-primary mr-2 btn-rounded " data-toggle="tooltip" data-placement="bottom" title="Simpan">Simpan</button>
                  </div>
                  <div class="col-md-2">
                    <p>
                    <p>
                  <div class="dropdown">
                    <button class="btn btn-success mr-2 btn-rounded dropdown-toggle" type="button" data-toggle="dropdown">Print
                      <span class="caret"></span></button>
                      <ul class="dropdown-menu">
                        <li><a href="<?php echo site_url('report/Report_Khas01')?>">Surat Khas 01</a></li>
                        <li><a href="<?php echo site_url('report/report_khas02')?>">Surat Khas 02</a></li>

                      </ul>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <p>
                    <p>
                      <a href="<?php echo site_url('surat/Surat_MRK/'.$get_detail[0]->projek_id) ?>" class="btn btn-warning mr-2 btn-rounded" role="button" data-toggle="tooltip" data-placement="bottom"  title="Surat Maklumat Rekod Kerja">Surat MRK</a>
                      <a href="<?php echo site_url('surat/Surat_WJP/'.$get_detail[0]->projek_id) ?>" class="btn btn-info mr-2 btn-rounded" role="button" data-toggle="tooltip" data-placement="bottom" title="Surat Pelepas WJP">Surat Pelepasan WJP</a>
                  </div>
                  <div class="col-sm-1">
                  <p>
                  <p>
                  <a href="<?php echo site_url('projek/view_data/'.$get_detail[0]->projek_id) ?>" class="btn btn-danger mr-2 btn-rounded" role="button" data-toggle="tooltip" data-placement="bottom" title="Kembali ke Senarai Maklumat">Close</a>
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
