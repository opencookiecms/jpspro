<div class="main-panel">
<div class="content-wrapper cnt" style="background: #614385;  /* fallback for old browsers */
background: -webkit-linear-gradient(to bottom, #516395, #614385);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to bottom, #516395, #614385); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
">
    <div class="row">
      <div class="col-md-12 grid-margin stretch-card">

      </div>
      <!--start col-md-12 for form-->
      <div class="col-12 grid-margin">
        <?php echo validation_errors(); ?>

        <?php

          echo form_open('Setting_con/updatecogan');


        ?>

        <div class="card" style="border-radius:10px;">
          <div class="card-body">
            <p></p>
            <p></p>
            <a href="<?php echo site_url('Setting_con/usersreg') ?>" class="btn btn-primary mr-2 btn-rounded" role="button">Daftar</a>
            <a href="<?php echo site_url('Setting_con') ?>" class="btn btn-primary mr-2 btn-rounded" role="button">Pegawai & Jurutera</a>
                      <a href="<?php echo site_url('Setting_con/getjawatan') ?>" class="btn btn-primary mr-2 btn-rounded" role="button">Senarai Jawatan</a>
            <a href="<?php echo site_url('Setting_con/SaveSettingPassandSlogan') ?>" class="btn btn-dark mr-2 btn-rounded" role="button">Slogan</a>
            <a href="<?php echo site_url('Setting_con/sungaireg') ?>" class="btn btn-primary mr-2 btn-rounded" role="button">Sungai</a>
            <p></p>
            <p></p>
            <h4 class="card-title">Slogan</h4>
              <div class="row">
                <div class="col-md-4">
                <label>Slogan JPS</label>
                  <input type="hidden" name="hiddenid" value="<?php echo $get_slogan[0]->set_id ?>"/>
                  <input type="text" class="form-control" value="<?php echo $get_slogan[0]->set_slogan?> " name="slogan" placeholder="Cintailah Sungai Kita">
                </div>
                 <div class="col-md-4">
                <label>Slogan Kedah</label>
                  <input type="text" class="form-control" value="<?php echo $get_slogan[0]->cogankata?> " name="cogan" placeholder="Cintailah Sungai Kita">
                </div>
              </div>
               <div class="row">
                <div class="col-sm-12">
           
                </div>
              </div>
              <div class="row">
                <div class="col-sm-3">
                  <p></p>
                  <p></p>
                      <button type="submit" name="submit" class="btn btn-primary mr-2 btn-rounded">Save</button>
                </div>
              </div>
          </div>
        </div>
      </div>
      <!--end here col-md-12-->
    </div>
  </form>
  </div>
