      <div class="main-panel">
      <div class="content-wrapper cnt" style="background: #C9D6FF;background: -webkit-linear-gradient(to right, #E2E2E2, #C9D6FF);background: linear-gradient(to right, #E2E2E2, #C9D6FF);">
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card" style="border-radius:10px;background-color:#4a69bd;">
                <div class="card-body">
                  <h4 class="card-title">  <h2 class="f"><?php echo $title; ?></h2>
                  <p class="card-description"><h5><span class="error" style="color:#FFFF;"> * Dikehendaki mengisi semua bahagian</span></h5></p>
                       <?php if(isset($_SESSION['orderupdate'])) { ?>
                <div class="alert alert-success"><?php echo $_SESSION['orderupdate'] ?></div>
              <?php
                } ?>
                  <?php echo validation_errors(); ?>
                </div>
              </div>
            </div>
            <div class="col-12 grid-margin">


              <?php echo form_open('daftar/orderupdate'); ?>
              <div class="card" style="border-radius:10px;background-color:#487eb0;">
                <div class="card-body">
                  <h4 class="card-title tl">Borang Tempahan No Sebutharga</h4>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group row">
                          <div class="col-sm-6">
                            <label class="tl">No Sebutharga :</label>
                            <input type="hidden" value="<?php echo $get_list[0]->no_id?>" name="hiddenid">
                            <input type="text" class="form-control" name="nosebutharga" value="<?php echo $get_list[0]->no_sebutharga?>"  placeholder="No Fail Sebutharga">
                            <small id="nsebutharga" class="form-text text-muted">Sila isi no sebutharga mengikut spefikasi yang telah diberikan.</small>
                          </div>
                          <div class="col-sm-3">
                            <label class="tl">Tarikh :</label>
                            <input type="date" value="<?php echo $get_list[0]->no_tarikh?>" class="form-control" name="tarikhmohon"placeholder="Tarikh Permohonan">
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
                              <option value="<?php echo $get_list[0]->no_jenis?>"><?php echo $get_list[0]->no_jenis?></option>
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
                              <option value="<?php echo $get_list[0]->no_pemilik?>"><?php echo $get_list[0]->no_pemilik?></option>
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
