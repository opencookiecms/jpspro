      <div class="main-panel">
      <div class="content-wrapper cnt" style="background: #606c88;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #3f4c6b, #606c88);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #3f4c6b, #606c88); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
">
          <div class="row">
            <div class="col-md-9 grid-margin stretch-card">
              <div class="card" style="border-radius:10px;background-color:#57606f;">
                <div class="card-body">
                  <h4 class="card-title">  <h2 class="f"><?php echo $title; ?></h2>
                  <p class="card-description"><h5><span class="error" style="color:#FFFF;"> * Dikehendaki mengisi semua bahagian</span></h5></p>
                  <?php echo validation_errors(); ?>
                </div>
              </div>
            </div>
            <div class="col-9 grid-margin">


              <?php echo form_open('daftar/orderSebutharga'); ?>
              <div class="card" style="border-radius:10px;background-color:#dfe4ea;">
                <div class="card-body">
                  <h4 class="card-title tl">Pendaftaran No Perolehan</h4>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group row">
                          <div class="col-sm-6">
                            <label class="tl">No Perolehan* :</label>
                            <input type="text" class="form-control" name="nosebutharga"  placeholder="No Fail Sebutharga">
                            <small id="nsebutharga" class="form-text text-muted">Sila isi no sebutharga mengikut spefikasi yang telah diberikan.</small>
                          </div>
                          <div class="col-sm-4">
                            <label class="tl">Tarikh :</label>
                            <input type="date" class="form-control" name="tarikhmohon"placeholder="Tarikh Permohonan">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group row">
                          <div class="col-sm-4">
                            <label class="tl">Kaedah Perolehan :</label>
                            <select type="text" class="form-control" id="jenissebutharga" name="jenissebut">
                              <option value=""></option>
                              <option value="Lantikan Terus">Lantikan Terus</option>
                              <option value="Sebutharga">Sebutharga</option>
                              <option value="Undi">Undi</option>
                            </select>
                            <small id="nsebutharga" class="form-text text-muted">Pilih jenis sebutharga.</small>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group row">
                          <div class="col-sm-4">
                            <label class="tl">Pegawai Penyelia</label>        
                            <select type="text" class="form-control" id="pemilik" name="pemilik">
                              <option value=""></option>
                              <?php foreach($get_user as $users){ ?>
                                <option value="<?php echo $users->jps_name?>"><?php echo $users->jps_name?></option>';
                              <?php } ?>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group row">
                          <div class="col-sm-3">
                            <button type="submit" name="submit" class="btn btn-success mr-2 btn-rounded ">Simpan</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
