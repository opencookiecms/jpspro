      <div class="main-panel">
      <div class="content-wrapper cnt" style="background: #C9D6FF;background: -webkit-linear-gradient(to right, #E2E2E2, #C9D6FF);background: linear-gradient(to right, #E2E2E2, #C9D6FF);">
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card" style="border-radius:10px;">
                <div class="card-body">
                  <h4 class="card-title">  <h2 class="f"><?php echo $title; ?></h2>
                  <p class="card-description"><h5><span class="error" style="color:#FF0000;"> * Dikehendaki mengisi semua bahagian</span></h5></p>
                  <?php echo validation_errors(); ?>
                </div>
              </div>
            </div>
            <div class="col-12 grid-margin">


              <?php echo form_open('daftar/orderSebutharga'); ?>
              <div class="card" style="border-radius:10px;">
                <div class="card-body">
                  <h4 class="card-title">Borang Tempahan No Sebutharga</h4>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group row">
                          <div class="col-sm-6">
                            <label>No Sebutharga :</label>
                            <input type="text" class="form-control" name="nosebutharga"  placeholder="No Fail Sebutharga">
                            <small id="nsebutharga" class="form-text text-muted">Sila isi no sebutharga mengikut spefikasi yang telah diberikan.</small>
                          </div>
                          <div class="col-sm-3">
                            <label>Tarikh :</label>
                            <input type="date" class="form-control" name="tarikhmohon"placeholder="Tarikh Permohonan">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group row">
                          <div class="col-sm-4">
                            <label>Jenis Sebutharga :</label>
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
                            <label>Pemilik</label>
                            <select type="text" class="form-control" name="pemilik">
                              <option value=""></option>
                              <option value="Sik">Sik</option>
                              <option value="Baling">Baling</option>
                              <option value="Kuala Muda">Kuala Muda</option>
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
