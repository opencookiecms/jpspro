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
              <div class="box-body">
                <div class="form-group">
                  <div class="box-header with-border">
                  <h3 class="box-title">User</h3>
                  </div>
                </div>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <div class="col-md-2">
                      <a href="" class="btn btn-success" role="button">Add User</a>
                  </div>
                </div>
              </div>
              <div class="box-body">
                <div class="form-group">
                <div id="hiddeandseek">
                <div class="col-md-1">
                  <h4>Nama</h4>
                </div>
                <div class="col-md-4">
                  <input class="form-control" name="peoplename" id="people" value="Sila Masukkan nama">
                </div>
              </div>
                </div>
              </div>
              <div class="box-body">

                <div class="form-group">
                  <div class="col-md-12">
                    <table class="table table-bordered" style="undefined;table-layout: fixed; width: 669px">
                    <colgroup>
                    <col style="width: 48px">
                    <col style="width: 621px">
                    <col style="width: 80px">
                    </colgroup>
                      <thead style="background-color:#0099ff;color:#fff;">
                        <th class="tg-amwm">Bil</th>
                        <th class="tg-hgcj">Nama</th>
                        <th class="tg-hgcj">Action</th>
                      </thead>
                      <tr>
                        <td class="tg-baqh">1</td>
                        <td class="tg-baqh">testing</td>
                        <td class="tg-baqh">X<td>
                      </tr>
                    </table>
                  </div>
                  </div>

              </div>

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
                    <h4>Tukar username / password jika perlu</h4>
                  </div>
                </div>

              </div>
              <div class="box-body">

                                <div class="form-group">
                                  <div class="col-md-2">
                                    <h5>Username</h5>
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
