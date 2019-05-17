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

          echo form_open('Setting_con/simpanpegawai');


        ?>

    <div class="card" style="border-radius:10px;">
          <div class="card-body">
   
            <a href="<?php echo site_url('Setting_con/usersreg') ?>" class="btn btn-primary mr-2 btn-rounded" role="button">Daftar</a>
            <a href="<?php echo site_url('Setting_con') ?>" class="btn btn-dark mr-2 btn-rounded" role="button">Pegawai & Jurutera</a>
            <a href="<?php echo site_url('Setting_con/SaveSettingPassandSlogan') ?>" class="btn btn-primary mr-2 btn-rounded" role="button">Slogan</a>
            <a href="<?php echo site_url('Setting_con/sungaireg') ?>" class="btn btn-primary mr-2 btn-rounded" role="button">Sungai</a>
            <p></p>
            <p></p>
            <h4 class="card-title">Konfigurasi maklumat sistem (USER)</h4>
              <div class="row">
                <div class="col-md-4">
                <label>Nama</label>
                  <input class="form-control" name="peoplename" id="people" placeholder="Sila masukkan nama pegawai">
                </div>
              </div>
              <p>
              <div class="row">
                <div class="col-sm-12">
                  <table class="table table-striped" style="margin-top: 20px;margin-bottom: 20px;undefined;table-layout: fixed; width: 669px;">
                  <colgroup>
                  <col style="width: 48px">
                  <col style="width: 500px">
                  <col style="width: 120px">
                  </colgroup>
                    <thead>
                      <th class="tg-amwm">Bil</th>
                      <th class="tg-hgcj">Nama</th>
                      <th class="tg-hgcj">Tindakan</th>
                    </thead>
                    <?php $bil=0;?>
                <?php foreach ($get_usersetting as $row): $bil++ ?>

                    <tr>

                      <td class="tg-baqh"><?php echo $bil ?></td>
                      <td class="tg-baqh"><?php echo $row->p_names?></td>
                      <td class="tg-baqh"> <a href="<?php echo site_url("Setting_con/deletepegawai/".$row->p_id); ?>" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Delete" role="button" onclick="return confirm('Anda pasti?')"><i class="menu-icon mdi mdi-delete-circle"></i></a></td>
                    </tr>

              <?php endforeach; ?>
                  </table>
                </div>
              </div>
              <p>
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
