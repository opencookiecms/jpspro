
      <div class="main-panel">
        <div class="content-wrapper cnt" style="background: #C9D6FF;background: -webkit-linear-gradient(to right, #E2E2E2, #C9D6FF);background: linear-gradient(to right, #E2E2E2, #C9D6FF);">
          <div class="row purchace-popup">
            <div class="col-12">
              <span class="d-block d-md-flex align-items-center">
                <p>Senarai Maklumat Projek Mengikut No Sebutharga</p>
              </span>
            </div>
          </div>


          <div class="row">
            <div class="col-lg-12 grid-margin">
              <div class="card" style="border-radius:10px;">
                <div class="card-body">
                  <h4 class="card-title">Senarai Projek</h4>
                  <div class="table-responsive dataTables_wrapper">
                    <table id="example" class="display table table-striped">
                       <thead>
                        <tr>
                          <th>
                            Bil
                          </th>
                          <th>
                            No Sebutharga
                          </th>
                          <th>
                            Tarikh
                          </th>
                          <th>
                            Pemilik
                          </th>
                          <th>
                            Tindakan
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $bil=0;?>
                        <?php foreach ($get_list as $row): $bil++?>

                         <tr>
                          <td class="py-1"><?php echo $bil?></td>
                          <td class="py-1"><?php echo $row->no_sebutharga?></td>
                          <td class="py-1"><?php echo $row->no_tarikh?></td>
                          <td class="py-1"><?php echo $row->no_pemilik?></td>

                          <td class="py-1">
                          <a href="<?php echo site_url("daftar/orderdelete/" . $row->no_id); ?>" class="btn btn-info" role="button" data-toggle="tooltip" data-placement="top" title="Delete" onclick="return confirm('Delete Data?')"><i class="menu-icon mdi mdi-content-cut"></i></a>
                          <a href="<?php echo site_url("daftar/orderupdate/" . $row->no_id); ?>" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Update" role="button" onclick="return confirm('Update Data?')"><i class="menu-icon mdi mdi-source-pull"></i></a>
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

