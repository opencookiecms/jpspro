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


              <?php echo form_open('projek/maklumat_tahunan'); ?>
              <div class="card" style="border-radius:10px;background-color:#dfe4ea;">
                <div class="card-body">
                  <h4 class="card-title tl">Pilih Tahun dan Jenis Maklumat Perolehan</h4>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group row">
                          <div class="col-sm-3">
                            <label class="tl">Tahun* :</label>
                            <select type="text" class="form-control" name="tahun" placeholder="">
                              <option value="2019">2019</option>
                              <option value="2018">2018</option>
                              <option value="2017">2017</option>
                            </select>
                            <small id="" class="form-text text-muted">Sila pilih tahun.</small>
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="col-sm-3">
                            <label class="tl">Jenis Maklumat Perolehan* :</label>
                            <select type="text" class="form-control" name="maklumat" placeholder="">
                              <option value="Sebutharga">Sebutharga</option>
                              <option value="Undi">Undi</option>
                              <option value="Lantikan Terus">Lantikan Terus</option>
                            </select>
                            <small id="" class="form-text text-muted">Sila Pilih Jenis Maklumat Perolehan.</small>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group row">
                          <div class="col-sm-3">
                            <button type="submit" name="submit" class="btn btn-success mr-2 btn-rounded ">Proses Maklumat</button>
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
