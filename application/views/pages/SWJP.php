<div class="main-panel">

    <div class="content-wrapper cnt" style="background: #757F9A;background: -webkit-linear-gradient(to right, #D7DDE8, #757F9A);background: linear-gradient(to right, #D7DDE8, #757F9A);">
    <div class="row">
      <div class="col-md-12 grid-margin stretch-card">
        <div class="card" style="border-radius:10px;">
          <div class="card-body" style="background-color:#575fcf;border-radius:10px;">
            <h4 class="card-title">  <h2 class="f ts">Surat Pelepasan Wang Jaminan Perlaksanaan</h2>
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
      <div class="col-12 grid-margin">
        <?php echo validation_errors(); ?>
          <?php
              $pkkNo = $get_detail[0]->swjp_kodvot;
                if($pkkNo == null){
                    echo form_open('Surat/Surat_WJP');
                }
                else {
                  echo form_open('Surat/Surat_WJP_Update');
                }
          ?>
        <div class="card" style="border-radius:10px;">
          <div class="card-body" style="background-color:#575fcf;border-radius:10px;">
            <h4 class="card-title ts" style="color:#ffda79;font-weight:bold;">Surat Pelepasan WJP</h4>
            <div class="row">
              <div class="col-md-12 tl">
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Kepada</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control ts" style="font-weight:bold;" id="kepada" name="kepada" placeholder="Kepada" value="<?php echo $get_detail[0]->swjp_kepada?>">
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 tl">
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Alamat</label>
                  <div class="col-sm-5">
                  <textarea  rows="5" type="text" class="form-control ts" style="font-weight:bold;" id="alamat" name="alamat" placeholder="Alamat"><?php echo $get_detail[0]->swjp_alamat?></textarea>
                  </div>

                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 tl">
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Rujukan Tuan</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control ts" style="font-weight:bold;" id="rujukkami" name="rujukkami" placeholder="Rujukan Kami" readonly value="<?php echo $get_detail[0]->df_nosebutharga?>">
                    <input type="hidden" name="noinden" value="<?php echo $get_detail[0]->mrk_noinden?>" readonly>
                    <input type="hidden" name="kodvot" value="<?php echo $get_detail[0]->df_kodvot?>" readonly>
                    <input type="hidden" name="hiddenid"value="<?php echo $get_detail[0]->mrksatuid?>" readonly>
                    <input type="hidden" name="hiddenids"value="<?php echo $get_detail[0]->projek_id?>" readonly>
                  </div>
                  <label class="col-sm-2 col-form-label">Rujukan Kami</label>
                  <div class="col-sm-4">
                  <input type="text" class="form-control ts" style="font-weight:bold;" id="nokon" name="nokon" placeholder="No Kontraktor" readonly value="<?php echo $get_detail[0]->df_nosebutharga?>">
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12 tl">
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Nama Kontraktor</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control ts" style="font-weight:bold;" id="namakon" name="namakon" placeholder="Nama Kontraktor" readonly value="<?php echo $get_detail[0]->mrk_namakon?>">
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12 tl">
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">No. Kontraktor</label>
                  <div class="col-sm-4">
                      <input type="text" class="form-control ts" style="font-weight:bold;" id="nokon" name="nokon" placeholder="No Kontraktor" readonly value="<?php echo $get_detail[0]->df_nosebutharga?>">
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12 tl">
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Melalui</label>
                  <div class="col-sm-4">
                  <input type="text" class="form-control ts" style="font-weight:bold;" id="melalui" name="melalui" placeholder="Melalui" value="<?php echo $get_detail[0]->swjp_melalui?>">
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12 tl">
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Alamat</label>
                  <div class="col-sm-5">
                  <textarea rows="5" type="text" class="form-control ts" style="font-weight:bold;" id="alamat1" name="alamat1" placeholder="Alamat"><?php echo $get_detail[0]->swjp_alamatlalu?></textarea>
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
                      <input type="text" class="form-control ts" style="font-weight:bold;"id="wangjamin" name="wangjaminan" placeholder="RM" value="<?php echo $get_detail[0]->swjp_wangjamin?>">
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
                      <input type="text" class="form-control ts" style="font-weight:bold;" id="pegawaikuasa" name="pegawaikuasa" placeholder="Pegawai Penguasa" value="<?php echo $this->session->userdata("name")?>">
                  </div>
                  <label class="col-sm-2 col-form-label">Jawatan</label>
                  <div class="col-sm-3">
                  <input type="text" class="form-control ts" style="font-weight:bold;" id="jawatan" name="jawatan" placeholder="Jawatan" value="<?php echo $this->session->userdata("jawatan")?>">
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12 tl">
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
                        <li><a href="#">Surat Khas 01</a></li>
                        <li><a href="#">Surat Khas 02</a></li>

                      </ul>
                    </div>
                  </div>
                  <div class="col-sm-2">
                    <p>
                    <p>
                    <a href="<?php echo site_url('surat/Surat_Khas/'.$get_detail[0]->projek_id) ?>" class="btn btn-warning mr-2 btn-rounded" role="button" data-toggle="tooltip" data-placement="bottom" title="Surat Khas">Surat Khas</a>
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
