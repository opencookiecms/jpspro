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


        <?php echo validation_errors(); ?>
        <?php
          echo form_open('projek/Update_Projek01');
        ?>
        <div class="card" style="border-radius:10px;">
          <div class="card-body">
            <a href="<?php echo site_url("projek/Update_Projek01/" . $get_detail[0]->projek_id); ?>" class="btn btn-dark mr-2 btn-rounded" role="button">PAGE1</a>
            <a href="<?php echo site_url("projek/Update_Projek02/" . $get_detail[0]->projek_id); ?>" class="btn btn-primary mr-2 btn-rounded" role="button">PAGE2</a>
            <a href="<?php echo site_url("projek/Update_Projek03/" . $get_detail[0]->projek_id); ?>" class="btn btn-primary mr-2 btn-rounded" role="button" >PAGE3</a>
            <p></p>
            <p></p>
            <h4 class="card-title">Borang Daftar Sebut Harga</h4>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-6">
                      <label>No Sebutharga :</label>
                      <input type="text" class="form-control" name="nosebut"  placeholder="No Fail Sebutharga" value="<?php echo $get_detail[0]->df_nosebutharga?>">
                      <input type="hidden" readonly class="form-control" name="hiddenid"  value="<?php echo $get_detail[0]->projek_id?>">
                      <small id="nsebutharga" class="form-text text-muted">Sila isi no sebutharga mengikut spefikasi yang telah diberikan.</small>
                    </div>
                    <div class="col-sm-3">
                      <label>Tarikh :</label>
                      <input type="date" class="form-control" name="tarikhmohon"placeholder="Tarikh Permohonan" value="<?php echo $get_detail[0]->df_tarikmohon?>">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-4">
                      <label>Jenis Sebutharga :</label>
                      <select type="text" class="form-control" id="jenissebut" name="jenissebut" value="">
                        <option value="<?php echo $get_detail[0]->df_jsebutharga?>"><?php echo $get_detail[0]->df_jsebutharga?></option>
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
                    <div class="col-sm-7">
                      <label>Tajuk Projek :</label>
                      <textarea rows="5"  type="text" class="form-control"name="tajukprojek" placeholder="Tajuk Projek"><?php echo $get_detail[0]->df_tajuk?></textarea>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-3">
                      <label>Daerah:</label>
                      <select type="text" class="form-control" name="daerah">
                        <option value="<?php echo $get_detail[0]->df_daerah?>"><?php echo $get_detail[0]->df_daerah?></option>
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
