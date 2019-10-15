
      <div class="main-panel">
        <div class="content-wrapper cnt" style="background: #614385;  /* fallback for old browsers */
background: -webkit-linear-gradient(to bottom, #516395, #614385);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to bottom, #516395, #614385); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
">
          <div class="row purchace-popup">
            <div class="col-12">
              <span class="d-block d-md-flex align-items-center">
                <p class="tls text-white">Senarai Maklumat Perolehan</p>
              </span>
            </div>
          </div>


          <div class="row">
            <div class="col-lg-12 grid-margin">
              <div class="card" style="border-radius:10px;">
                <div class="card-body">
               
                  <h4 class="card-title">Senarai no perolehan bagi tahun <?php echo $y ?></h4>
                 <br>
                 <br>
                  <div class="table-responsive dataTables_wrapper">
                    <table id="example" class="display table table-striped">
                       <thead>
                        <tr>
                          <th>
                            Bil
                          </th>
                          <th>
                         
                          </th>
                          <th>
                            Tarikh
                          </th>
                            <th>
                            Kaedah Perolehan
                          </th>
                          <th>
                            Pengawai Penyelia
                          </th>
                          <th>Maklumat <br><br>(Lengkap/Tidak Lengkap)</th>
                          <th>
                            Tindakan
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $bil=0;?>

                        <?php foreach ($noperolehan as $row): $bil++?>
                       
                         <tr>
                          <td class="py-1"><?php echo $bil?></td>
                          <td class="py-1"><?php echo $row->no_sebutharga?></td>
                          <td class="py-1"><?php echo $row->no_tarikh?></td>
                           <td class="py-1"><?php echo $row->no_jenis?></td>
                          <td class="py-1"><?php echo $row->no_pemilik?></td>
                    
                          <td>
                        
                          <?php if($row->df_nosebutharga == $row->no_sebutharga):?>
                          <img src='<?php echo base_url() ?>/assets/images/success.png' alt='error'>
                          <?php else:?>
                          <img src='<?php echo base_url() ?>/assets/images/error.png' alt='error'>
                          <?php endif;?>
                        
                          </td>
                   
                          <td class="py-1">
                           <?php $ur = $this->session->userdata('roles');?>
                          <?php if($ur == "admin"): ?>
                          <a href="<?php echo site_url("daftar/orderdelete/" . $row->no_id); ?>" class="btn btn-danger" role="button" data-toggle="tooltip" data-placement="top" title="Delete" onclick="return confirm('Delete Data?')"><i class="menu-icon mdi mdi-content-cut"></i>delete</a>
                          <a href="<?php echo site_url("daftar/orderupdate/" . $row->no_id); ?>" class="btn btn-dark" data-toggle="tooltip" data-placement="top" title="Update" role="button" onclick="return confirm('Update Data?')"><i class="menu-icon mdi mdi-source-pull"></i>update</a>
                          <?php elseif($ur == "clerk"): ?>
                          <a href="<?php echo site_url("daftar/orderdelete/" . $row->no_id); ?>" class="btn btn-danger" role="button" data-toggle="tooltip" data-placement="top" title="Delete" onclick="return confirm('Delete Data?')"><i class="menu-icon mdi mdi-content-cut"></i>delete</a>
                          <a href="<?php echo site_url("daftar/orderupdate/" . $row->no_id); ?>" class="btn btn-dark" data-toggle="tooltip" data-placement="top" title="Update" role="button" onclick="return confirm('Update Data?')"><i class="menu-icon mdi mdi-source-pull"></i>update</a>

                          <?php else:?>
                          <a href="" class="btn btn-danger" role="button" data-toggle="tooltip" data-placement="top" title="Delete" onclick="return confirm('Delete Data?')"><i class="menu-icon mdi mdi-content-cut"></i>delete</a>
                          <a href="" class="btn btn-dark" data-toggle="tooltip" data-placement="top" title="Update" role="button" onclick="return confirm('Update Data?')"><i class="menu-icon mdi mdi-source-pull"></i>update</a>
                          <?php endif; ?>
                        
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

