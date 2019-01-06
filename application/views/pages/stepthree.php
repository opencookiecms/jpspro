<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">  <h2 class="f"><?php echo $title; ?></h2>
            <p class="card-description"><h5><span class="error" style="color:#FF0000;"> * Dikehendaki mengisi semua bahagian</span></h5></p>
            <?php echo $idval; ?>

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

        <?php echo form_open('daftar/steptiga'); ?>
          <input type="hidden" class="form-control" name="dp_idpost" value="<?php echo $idval;?>">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Lokasi & Sistem</h4>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">

                    <label class="col-sm-1 col-form-label">Latitud (N)</label>
                    <div class="col-sm-2">
                      <div class="input-group">
                        <input type="text" class="form-control" name="lata" id="lata">
                        <div class="input-group-append bg-dark border-primary">
                          <span class="input-group-text bg-transparent text-white">0</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-2">
                      <div class="input-group">
                        <input type="text" class="form-control" name="latb" id="latb">
                        <div class="input-group-append bg-dark border-primary">
                          <span class="input-group-text bg-transparent text-white">'</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-2">
                      <div class="input-group">
                        <input type="text" class="form-control" name="latc" id="latc">
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
                        <input type="text" class="form-control" name="longa" id="longa">
                        <div class="input-group-append bg-primary border-primary">
                          <span class="input-group-text bg-transparent text-white">0</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-2">
                      <div class="input-group">
                        <input type="text" class="form-control" name="longb" id="longb">
                        <div class="input-group-append bg-primary border-primary">
                          <span class="input-group-text bg-transparent text-white">'</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-2">
                      <div class="input-group">
                        <input type="text" class="form-control" name="longc" id="longc">
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
                      <input type="text" class="form-control" id="sungai" name="sungai" placeholder="Sungai">

                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-2">
                          <label>Sistem</label>
                        <input type="text" class="form-control" id="sistem" name="sistem" placeholder="Sistem">

                    </div>
                    <div class="col-sm-2">
                          <label>Sub Sistem</label>
                      <input type="text" class="form-control" id="subsistem" name="subsistem" placeholder="Sub Sistem">

                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-2">
                          <label>Komponen</label>
                        <input type="text" class="form-control" id="komponen" name="komponen" placeholder="Komponen">

                    </div>
                    <div class="col-sm-2">
                          <label>Dimensi</label>
                      <input type="text" class="form-control" id="dimensi" name="dimensi" placeholder="Dimensi">

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
