<div class="main-panel">
<div class="content-wrapper cnt" style="background: #C9D6FF;background: -webkit-linear-gradient(to right, #E2E2E2, #C9D6FF);background: linear-gradient(to right, #E2E2E2, #C9D6FF);">
    <div class="row">
      <div class="col-md-12 grid-margin stretch-card">
        <div class="card" style="border-radius:10px;">
          <div class="card-body">
            <h4 class="card-title">  <h2 class="f">Surat Maklumat Rekod Kerja</h2>
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
              $pkkNo = $get_detail[0]->s_kodvot;
                if($pkkNo == null){
                    echo form_open('Surat/Surat_MRK');
                }
                else {
                  echo form_open('Surat/Surat_MRK_Update');
                }
          ?>
        <div class="card" style="border-radius:10px;">
          <div class="card-body">
            <h4 class="card-title">Surat MRK</h4>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Rujukan Tuan</label>
                  <div class="col-sm-3">
                  <input type="text" class="form-control" id="rujuktuan" name="rujuktuan" placeholder="Rujukan Bank" value="<?php echo $get_detail[0]->s_rujuktuan?>">
                  </div>
                  <label class="col-sm-2 col-form-label">Bertarikh</label>
                  <div class="col-sm-3">
                  <input type="date" class="form-control" id="tarikhtuan" name="tarikhtuan" value="<?php echo $get_detail[0]->s_tarikhtuan?>">
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Rujukan Kami</label>
                  <div class="col-sm-3">
                  <input type="text" class="form-control" id="rujukkami" name="rujukkami" readonly placeholder="Rujukan Kami" value="<?php echo $get_detail[0]->df_nosebutharga?>">
                  </div>
                  <label class="col-sm-2 col-form-label">Jenis Borang</label>
                  <div class="col-sm-3">
                    <select type="text" class="form-control" id="mrk" name="mrk">
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
              <div class="col-md-12">
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Nama Kontraktor</label>
                  <div class="col-sm-3">
                  <input type="text" class="form-control" id="namakon" name="namakon" readonly value="<?php echo $get_detail[0]->mrk_namakon?>">
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">No Kontraktor</label>
                  <div class="col-sm-3">
                  <input type="text" class="form-control" id="nokon" name="nokon" readonly placeholder="No Kontraktor" value="<?php echo $get_detail[0]->mrk_nopkk?>">
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">No Inden</label>
                  <div class="col-sm-3">
                  <input type="text" class="form-control" id="noinden" name="noinden" readonly placeholder="No Inden" value="<?php echo $get_detail[0]->mrk_noinden?>">
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Pegawai Penguasa</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control" id="pegawaikuasa" name="pegawaikuasa" placeholder="Pegawai Penguasa" value="<?php echo $get_detail[0]->s_pegawaikuasa?>">
                  </div>
                  <label class="col-sm-2 col-form-label">Jawatan</label>
                  <div class="col-sm-3">
                  <input type="text" class="form-control" id="jawatan" name="jawatan" placeholder="Jawatan" value="<?php echo $get_detail[0]->s_jawatanpp?>">
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">No Sebutharga</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control" id="nosebutharga" readonly name="nosebutharga" placeholder="No Sebutharga" value="<?php echo $get_detail[0]->df_nosebutharga?>">
                    <input type="hidden"  name="kodvot" value="<?php echo $get_detail[0]->df_kodvot?>">
                    <input type="hidden"  name="hiddenid" value="<?php echo $get_detail[0]->mrksatuid?>">
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
                        <li><a href="">Surat MRK 01</a></li>
                        <li><a href="">Surat MRK 02</a></li>

                      </ul>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <p>
                    <p>
                      <a href="<?php echo site_url('mrk/PP_WJP/'.$get_detail[0]->projek_id) ?>" class="btn btn-warning mr-2 btn-rounded" role="button">P.Pemulangan WJP</a>
                      <a href="<?php echo site_url('surat/Surat_Khas/'.$get_detail[0]->projek_id) ?>" class="btn btn-info mr-2 btn-rounded" role="button">Surat Kebenaran Khas</a>
                  </div>
                  <div class="col-sm-1">
                  <p>
                  <p>
                  <a href="<?php echo site_url('projek/view_data/'.$get_detail[0]->mrks_kodvot) ?>" class="btn btn-danger mr-2 btn-rounded" role="button">Close</a>
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
