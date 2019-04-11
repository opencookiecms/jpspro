<div class="main-panel">
<div class="content-wrapper cnt" style="background: #C9D6FF;background: -webkit-linear-gradient(to right, #E2E2E2, #C9D6FF);background: linear-gradient(to right, #E2E2E2, #C9D6FF);">
    <div class="row">
      <div class="col-md-12 grid-margin stretch-card">

      </div>
      <!--start col-md-12 for form-->
      <div class="col-12 grid-margin">
        <?php echo validation_errors(); ?>

        <?php

          echo form_open('Setting_con/SaveSetting');


        ?>

        <div class="card" style="border-radius:10px;">
          <div class="card-body">
            <p></p>
            <p></p>
            <a href="<?php echo site_url('Setting_con/usersreg') ?>" class="btn btn-primary mr-2 btn-rounded" role="button">Daftar</a>
            <a href="<?php echo site_url('Setting_con') ?>" class="btn btn-primary mr-2 btn-rounded" role="button">Users</a>
            <a href="<?php echo site_url('Setting_con/SaveSettingPassandSlogan') ?>" class="btn btn-dark mr-2 btn-rounded" role="button">Slogan</a>
            <p></p>
            <p></p>
            <h4 class="card-title">Setting Slogan Surat / Username & Password</h4>
              <div class="row">
                <div class="col-md-4">
                <label>Slogan</label>
                  <input type="text" class="form-control" name="slogan" placeholder="Cintailah Sungai Kita">
                </div>
              </div>

              <div class="row">
                <div class="col-sm-4">
                  <p></p>
                  <p></p>
                  <label>Username</label>
                   <input type="text" class="form-control" name="username" placeholder="username">
                </div>
                <p></p>
                <p></p>
                <div class="col-sm-4">
                  <p></p>
                  <p></p>
                  <label>Password</label>
                  <input type="password" class="form-control" name="password" placeholder="password">
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
