
      <div class="main-panel">
        <div class="content-wrapper cnt" style="background: #614385;  /* fallback for old browsers */
background: -webkit-linear-gradient(to bottom, #516395, #614385);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to bottom, #516395, #614385); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
">
          <div class="row purchace-popup">
            <div class="col-12">
              <span class="d-block d-md-flex align-items-center">
                <p>Senarai Maklumat Pengguna</p>
              </span>
            </div>
          </div>


          <div class="row">
            <div class="col-lg-12 grid-margin">
              <div class="card" style="border-radius:10px;">
                <div class="card-body">
                  <h4 class="card-title">Senarai Nama Pengguna</h4>

                  <a href="<?php echo site_url('setting_con/usersreg')?>" class="btn btn-primary mr-2 btn-rounded" role="button">Kembali</a>
                  <p>
                  <div class="table-responsive dataTables_wrapper">
                    <table id="example" class="display table table-striped">
                      <thead>
                        <tr>
                          <th>
                            Bil
                          </th>
                          <th>
                            Nama
                          </th>
                          <th>
                           Email
                          </th>
                          <th>
                            Jawatan
                          </th>
                          <th>
                            Roles
                          </th>
                          <th>
                            Tindakan
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $bil=0;?>
                        <?php foreach ($get_user as $row): $bil++?>

                         <tr>
                          <td class="py-1"><?php echo $bil?></td>
                          <td style="white-space: normal !important;word-wrap: break-word;min-width: 250px;max-width: 250px;"><?php echo $row->jps_name?></td>
                          <td class="py-1"><?php echo $row->jps_email?></td>
                          <td class="py-1"><?php echo $row->jps_position?></td>
                          <td class="py-1"><?php echo $row->jps_userroles?></td>
                        
                          <td class="py-1">
                          <a href="<?php echo site_url("setting_con/deluser/".$row->user_id)?>" class="btn btn-info" role="button" data-toggle="tooltip" data-placement="top" title="Delete" onclick="return confirm('Delete Data?')"><i class="menu-icon mdi mdi-content-cut"></i></a>
                        </td>
                        </tr>

                      <?php endforeach; ?>
                      </tbody>
                    </table>

                    <script type="text/javascript">
                    $(document).ready(function() {
                      $('#example').DataTable( {
                        "responsive":true,
                      } );
                    } );
                    </script>


                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
