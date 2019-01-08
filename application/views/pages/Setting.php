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
            <a href="<?php echo site_url('Setting_con') ?>" class="btn btn-info mr-2 btn-rounded" role="button">Users</a>
            <a href="<?php echo site_url('Setting_con/SaveSettingPassandSlogan') ?>" class="btn btn-success mr-2 btn-rounded" role="button">Slogan & Login</a>
            <p></p>
            <p></p>
            <h4 class="card-title">Konfigurasi maklumat sistem (USER)</h4>
              <div class="row">
                <div class="col-md-4">
                <label>Nama</label>
                  <input class="form-control" name="peoplename" id="people" value="Sila Masukkan nama">
                </div>
              </div>

              <div class="row">
                <div class="col-sm-12">
                  <table class="table table-striped" style="margin-top: 20px;margin-bottom: 20px;undefined;table-layout: fixed; width: 669px">
                  <colgroup>
                  <col style="width: 48px">
                  <col style="width: 621px">
                  <col style="width: 80px">
                  </colgroup>
                    <thead>
                      <th class="tg-amwm">Bil</th>
                      <th class="tg-hgcj">Nama</th>
                      <th class="tg-hgcj">Action</th>
                    </thead>
                    <?php $bil=0;?>
                <?php foreach ($get_usersetting as $row): $bil++ ?>

                    <tr>

                      <td class="tg-baqh"><?php echo $bil ?></td>
                      <td class="tg-baqh"><?php echo $row->p_names?></td>
                      <td class="tg-baqh">X<td>
                    </tr>

              <?php endforeach; ?>
                  </table>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-3">
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
