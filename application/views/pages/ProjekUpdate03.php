<div class="main-panel">
<div class="content-wrapper cnt" style="background: #C9D6FF;background: -webkit-linear-gradient(to right, #E2E2E2, #C9D6FF);background: linear-gradient(to right, #E2E2E2, #C9D6FF);">
    <div class="row">
      <div class="col-md-12 grid-margin stretch-card">
        <div class="card" style="border-radius:10px;">
          <div class="card-body">
            <h4 class="card-title">  <h2 class="f"><?php echo $title; ?></h2>
            <p class="card-description"><h5><span class="error" style="color:#FF0000;"> * Dikehendaki mengisi semua bahagian</span></h5></p>


            <?php if (isset($_SESSION['success'])) { ?>
            <div class="alert alert-success"> <?php echo $_SESSION['success']; ?></div>
            <?php
          } ?>
          </div>
        </div>
      </div>
      <!--start col-md-12 for form-->
      <div class="col-12 grid-margin">

        <?php echo validation_errors(); ?>
        <?php echo form_open('projek/Update_Projek03'); ?>
        <div class="card" style="border-radius:10px;">
          <div class="card-body">
            <a href="<?php echo site_url("projek/Update_Projek01/" . $get_detail[0]->projek_id); ?>" class="btn btn-warning mr-2 btn-rounded" role="button">PAGE1</a>
            <a href="<?php echo site_url("projek/Update_Projek02/" . $get_detail[0]->projek_id); ?>" class="btn btn-info mr-2 btn-rounded" role="button">PAGE2</a>
            <a href="<?php echo site_url("projek/Update_Projek03/" . $get_detail[0]->projek_id); ?>" class="btn btn-danger mr-2 btn-rounded" role="button" >PAGE3</a>
            <p></p>
            <p></p>
            <h4 class="card-title">Lokasi & Sistem</h4>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">

                    <label class="col-sm-1 col-form-label">Latitud (N)</label>
                    <div class="col-sm-2">
                      <div class="input-group">
                        <input type="text" class="form-control" id="lata" name="lata" value="<?php echo $get_detail[0]->dp_lata?>">
                        <div class="input-group-append bg-dark border-primary">
                          <span class="input-group-text bg-transparent text-white">0</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-2">
                      <div class="input-group">
                        <input type="text" class="form-control" id="latb" name="latb" value="<?php echo $get_detail[0]->dp_latb?>">
                        <div class="input-group-append bg-dark border-primary">
                          <span class="input-group-text bg-transparent text-white">'</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-2">
                      <div class="input-group">
                        <input type="text" class="form-control" id="latc" name="latc" value="<?php echo $get_detail[0]->dp_latc?>">
                        <div class="input-group-append bg-dark border-primary">
                          <span class="input-group-text bg-transparent text-white">"</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">

                    <label class="col-sm-1 col-form-label">Longitud (E)</label>
                    <div class="col-sm-2">
                      <div class="input-group">
                        <input type="text" class="form-control" id="longa" name="longa" value="<?php echo $get_detail[0]->dp_longa?>">
                        <div class="input-group-append bg-primary border-primary">
                          <span class="input-group-text bg-transparent text-white">0</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-2">
                      <div class="input-group">
                       <input type="text" class="form-control" id="longb" name="longb" value="<?php echo $get_detail[0]->dp_longb?>">
                        <div class="input-group-append bg-primary border-primary">
                          <span class="input-group-text bg-transparent text-white">'</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-2">
                      <div class="input-group">
                        <input type="text" class="form-control" id="longc" name="longc" value="<?php echo $get_detail[0]->dp_longc?>">
                        <div class="input-group-append bg-primary border-primary">
                          <span class="input-group-text bg-transparent text-white">"</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <p>
              <p>
              <h4 class="card-title">Sungai</h4>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-2">
                      <label>Lembangan Sungai</label>
                      <input type="text" class="form-control" id="sungai" name="sungai" placeholder="Sungai" value="<?php echo $get_detail[0]->dp_sungai?>">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-2">
                      <label>Sistem</label>
                      <input type="text" class="form-control" id="sistem" name="sistem" placeholder="Sistem" value="<?php echo $get_detail[0]->dp_sistem?>">
                    </div>
                    <div class="col-sm-2">
                      <label>Sub Sistem</label>
                      <input type="text" class="form-control" id="subsistem" name="subsistem" placeholder="Sub Sistem" value="<?php echo $get_detail[0]->dp_subsistem?>">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-2">
                      <label>Komponen</label>
                      <input type="text" class="form-control" id="komponen" name="komponen" placeholder="Komponen" value="<?php echo $get_detail[0]->dp_komponen?>">
                    </div>
                    <div class="col-sm-2">
                      <label>Dimensi</label>
                      <input type="text" class="form-control" id="dimensi" name="dimensi" placeholder="Dimensi" value="<?php echo $get_detail[0]->dp_dimensi?>">
                      <input type="hidden" class="form-control" name="dp_idpost" value="<?php echo $get_detail[0]->dp_id?>">
                    </div>
                  </div>
                </div>
              </div>
              <p>
                <p>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-3">
                      <button type="submit" name="submit" class="btn btn-success mr-2 btn-rounded ">Simpan</button>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
      <!--end here col-md-12-->
    </div>
  </form>
  </div>
