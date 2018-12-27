<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper b">
  <!-- Content Header (Page header) -->
  <section class="content-header">

      <h2 class="f">
        Setting
      </h2>

  </section>
  <br>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="table-responsive"></div>
      <div class="col-md-12">
        <?php if(isset($_SESSION['success'])) { ?>
          <div class="alert alert-success"><?php echo $_SESSION['success'] ?></div>
          <?php
        } ?>
        <?php //echo validation_errors('<div class="alert alert-danger">', '</div'); ?>


          <?php echo validation_errors(); ?>

          <?php

            echo form_open('Setting_con/SaveSetting');


          ?>
          <div class="box box-solid bg-blue">
            <div class="box-header">
                <h3 class="box-title">Konfigurasi maklumat sistem</h3>
            </div>
            <div class="box-footer text-black">
              <a href="<?php echo site_url('Setting_con') ?>" class="btn btn-warning" role="button">Users</a>
              <div class="box-body">
                <div class="form-group">
                  <div class="box-header with-border">
                  <h3 class="box-title">Slogan Surat</h3>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-2">
                    <h4>Slogan</h4>
                  </div>
                  <div class="col-md-4">
                      <input type="text" class="form-control" name="slogan" placeholder="Cintailah Sungai Kita">
                  </div>
                </div>
              </div>


              <div class="box-body">

                <div class="form-group">
                  <div class="box-header with-border">
                  <h3 class="box-title">Username & Password</h3>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-6">
                    <h5>Tukar username / password jika perlu</h5>
                  </div>
                </div>

              </div>
              <div class="box-body">

                                <div class="form-group">
                                  <div class="col-md-2">
                                    <h4>Username</h4>
                                  </div>
                                  <div class="col-md-3">
                                      <input type="text" class="form-control" name="username" placeholder="username">
                                  </div>

                                  <div class="col-md-2">
                                    <h4>Password</h4>
                                  </div>
                                  <div class="col-md-3">
                                      <input type="password" class="form-control" name="password" placeholder="password">
                                  </div>
                                </div>
              </div>


              <div class="box-body">
                <div class="form-group">
                  <div class="col-md-2">
                  <button type="submit" name="submit" class="btn btn-primary">Save</button>
                  </div>
                </div>
              </div>
            </form>

            </div>

          </div>



      </div>
      <!-- /.col -->

    </div>




  </section>
  <!-- /.content -->

</div>
<!-- /.content-wrapper -->
