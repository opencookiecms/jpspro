<div class="main-panel">
<div class="content-wrapper cnt" style="background: #614385;  /* fallback for old browsers */
background: -webkit-linear-gradient(to bottom, #516395, #614385);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to bottom, #516395, #614385); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
">
  <div class="row">

    <div class="col-12 grid-margin">


      <?php echo form_open('Setting_con/sungaiupdate'); ?>
      <div class="card" style="border-radius:10px;">
          <div class="card-body" style="background-color:#dfe4ea;border-radius:10px;">
    
          <a href="<?php echo site_url('Setting_con/usersreg') ?>" class="btn btn-primary mr-2 btn-rounded" role="button">Daftar</a>
          <a href="<?php echo site_url('Setting_con') ?>" class="btn btn-primary mr-2 btn-rounded" role="button">Pegawai & Jurutera</a>
          <a href="<?php echo site_url('Setting_con/getjawatan') ?>" class="btn btn-primary mr-2 btn-rounded" role="button">Senarai Jawatan</a>
          <a href="<?php echo site_url('Setting_con/SaveSettingPassandSlogan') ?>" class="btn btn-primary mr-2 btn-rounded" role="button">Slogan</a>
          <a href="<?php echo site_url('Setting_con/sungaireg') ?>" class="btn btn-dark mr-2 btn-rounded" role="button">Sungai</a>
          <p></p>
          <p></p>
          <h4 class="card-title">Daftar Sungai</h4>
          <a href="<?php echo site_url('Setting_con/senarai_sungai') ?>" class="btn btn-info mr-2 btn-rounded" role="button">Senarai Sungai</a>
          <P>
            <p>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group row">
                  <div class="col-sm-4">
                    <label>Sungai (Pastikan ia unique)</label>
                    <input type="hidden" name="hiddenid" value="<?php echo $get_sungai[0]->sg_id ?>">
                    <input type="text" class="form-control" value="<?php echo $get_sungai[0]->sg_name ?>" id="nama" name="sungainama">
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group row">
                  <div class="col-sm-4">
                    <label>Sungai Cabang</label>
                    <input type="text" class="form-control" value="<?php echo $get_sungai[0]->sg_cabang ?>" id="nama" name="sungaicabang">  
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group row">
                  <div class="col-sm-4">
                    <label>Sungai Panjang</label>
                    <input type="text" class="form-control" value="<?php echo $get_sungai[0]->sg_panjang ?>" name="sungaipanjang">
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group row">
                  <div class="col-sm-4">
                    <label>Sungai Daerah</label>
                    <input type="text" class="form-control" value="<?php echo $get_sungai[0]->sg_daerah ?>" name="sungaidaerah">
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group row">
                  <div class="col-sm-4">
                    <label>Sungai NoShet</label>
                    <input type="text" class="form-control" value="<?php echo $get_sungai[0]->sg_noshet ?>" name="sungainoshet">
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="form-group row">
                  <div class="col-sm-4">
                    <label>Sungai No Rujukan</label>
                    <input type="text" class="form-control" value="<?php echo $get_sungai[0]->sg_norujukan ?>" name="sungairujukan">
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
