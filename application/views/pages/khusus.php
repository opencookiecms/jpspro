<div class="main-panel">
  <div class="content-wrapper cnt" style="background: #614385;  /* fallback for old browsers */
background: -webkit-linear-gradient(to bottom, #516395, #614385);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to bottom, #516395, #614385); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
">
    <div class="row">
      <!--start col-md-12 for form-->
      <div class="col-12 grid-margin">
        <?php echo validation_errors(); ?>

        <?php
        echo form_open('Setting_con/khususkod');
        ?>

        <div class="card" style="border-radius:10px;">
          <div class="card-body">

            <a href="<?php echo site_url('Setting_con/usersreg') ?>" class="btn btn-primary mr-2 btn-rounded" role="button">Daftar</a>
            <a href="<?php echo site_url('Setting_con') ?>" class="btn btn-primary mr-2 btn-rounded" role="button">Pegawai & Jurutera</a>
            <a href="<?php echo site_url('Setting_con/getjawatan') ?>" class="btn btn-primary mr-2 btn-rounded" role="button">Senarai Jawatan</a>
            <a href="<?php echo site_url('Setting_con/SaveSettingPassandSlogan') ?>" class="btn btn-primary mr-2 btn-rounded" role="button">Slogan</a>
            <a href="<?php echo site_url('Setting_con/sungaireg') ?>" class="btn btn-primary mr-2 btn-rounded" role="button">Sungai</a>
            <a href="<?php echo site_url('Setting_con/khususkod') ?>" class="btn btn-dark mr-2 btn-rounded" role="button">Pengkhususan</a>
            <p></p>
            <p></p>
            <h4 class="card-title">Konfigurasi maklumat sistem (Pengkhususan)</h4>
            <div class="row">
              <div class="col-md-4">
                <label>Khusus Kod</label>
                <input class="form-control" name="kkode" id="people" placeholder="Kursus kod">
              </div>
              <div class="col-md-4">
                <label>Khusus</label>
                <input class="form-control" name="kname" id="people" placeholder="Nama Khusus">
              </div>

            </div>
            <p>
              <p>
                <div class="row">
                  <div class="col-md-6">
                    <label>Diskripsi</label>
                    <textarea rows="5" class="form-control" name="discrip" placeholder="Diskripsi"></textarea>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-2">
                    <P>
                      <P>
                        <button type="submit" name="submit" class="btn btn-primary mr-2 btn-rounded form-control">Save</button>
                  </div>
                </div>
                <p>
                  <p>
          </div>
        </div>
      </div>
      <!--end here col-md-12-->


    </div>

    <div class="row">
      <div class="col-lg-12 grid-margin">
        <div class="card" style="border-radius:10px;">
          <div class="card-body">
            <h4 class="card-title">Senarai Khusus</h4>
            <p>
              <div class="table-responsive dataTables_wrapper">
                <table id="example" class="table table-striped">

                  <thead>
                    <th>Bil</th>
                    <th>Kod Khusus</th>
                    <th>Nama Khusus</th>
                    <th>Diskripsi</th>

                    <th>Tindakan</th>
                  </thead>
                  <?php $bil = 0; ?>
                  <?php foreach ($get_kkod as $row) : $bil++ ?>

                    <tr>
                      <td><?php echo $bil ?></td>
                      <td><?php echo $row->ks_kscode ?></td>
                      <td><?php echo $row->ks_ksname ?></td>
                      <td><?php echo $row->ks_desc?></td>

                      <td>
                        <a href="<?php echo site_url("Setting_con/khususkodupdate/" . $row->ks_id); ?>" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Delete" role="button" onclick="return confirm('Anda pasti?')">Kemaskini</a>
                        <a href="<?php echo site_url("Setting_con/delkusus/" . $row->ks_id); ?>" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Delete" role="button" onclick="return confirm('Anda pasti?')"><i class="menu-icon mdi mdi-delete-circle"></i></a>
                      </td>
                    </tr>

                  <?php endforeach; ?>
                </table>

                <script type="text/javascript">
                  $(document).ready(function() {
                    $('#example').DataTable({
                      "responsive": true,
                      "autoWidth": true,
                    });
                  });
                </script>


              </div>

          </div>
        </div>
      </div>
    </div>

    <script type="text/javascript">
      $('#myModal').on('shown.bs.modal', function() {
        $('#myInput').trigger('focus')
      })
    </script>
    </form>
  </div>