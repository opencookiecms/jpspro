<!-- controller Projek sb undi lt -->
      <div class="main-panel">
        <div class="content-wrapper cnt" style="background: #614385;  /* fallback for old browsers */
background: -webkit-linear-gradient(to bottom, #516395, #614385);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to bottom, #516395, #614385); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
">
          <div class="row purchace-popup">
            <div class="col-12">
              <span class="d-block d-md-flex align-items-center text-white">
                <p class="tls text-white">Senarai Maklumat Projek Mengikut No Perolehan</p>
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
                           Tajuk & Penyelia
                          </th>
                          <th>
                            No Perolehan
                          </th>
                          <th>
                            Status
                          </th>
                          <th>
                            Tindakan mengikut tahap
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $bil=0;?>
                        <?php foreach ($semakdaftar as $row): $bil++?>
                         <tr>
                          <td class="py-1"><?php echo $bil?></td>
                          <td style="white-space: normal !important;word-wrap: break-word;min-width: 250px;max-width: 250px;"><?php echo $row->df_tajuk?><br><br><a class="text-primary"><?php echo $row->df_penolong?></a></td>
                          <td class="py-1"><?php echo $row->df_nosebutharga?></td>
                          <td>
                          <?php if($row->projek_id != null):?>
                           <img src="<?php echo base_url()?>assets/images/onegreen.png" alt="error"> --
                          <?php endif; ?>
                          <!--secode append-->
                          <?php if($row->dp_idinfo != $row->projek_id):?>
                          <img src="<?php echo base_url()?>assets/images/twored.png" alt="error"> --
                          <?php elseif($row->dp_idinfo == $row->projek_id): ?>
                          <img src="<?php echo base_url()?>assets/images/twogreen.png" alt="error"> --
                          <?php else: ?>
                          <a class="text-danger">Error</a>
                          <?php endif; ?>
                          <!--3rd append-->
                          <?php if($row->gps_dp_id != $row->projek_id):?>
                          <img src="<?php echo base_url()?>assets/images/threered.png" alt="error"> 
                          <?php elseif($row->gps_dp_id == $row->projek_id): ?>
                          <img src="<?php echo base_url()?>assets/images/threegreen.png" alt="error">
                          <?php else: ?>
                          <a class="text-danger">Error</a>
                          <?php endif; ?>

                          </td>
                          <td>
                          <?php if($row->dp_idinfo != $row->projek_id):?>
                          <a href="<?php echo site_url("daftar/stepdua_dua/" . $row->projek_id); ?>" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Update" role="button" onclick="return confirm('Update Data?')">Tahap 2</a> 
                          <?php elseif($row->dp_idinfo == $row->projek_id): ?>
                          <button type="button" class="btn btn-primary" disabled>Tahap 2</button>
                          <?php else: ?>
                          <a class="text-danger">Error</a>
                          <?php endif; ?>

                          <?php if($row->gps_dp_id != $row->projek_id):?>
                          <a href="<?php echo site_url("daftar/steptiga_tiga/" . $row->projek_id); ?>" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Update" role="button" onclick="return confirm('Update Data?')">Tahap 3</a>
                          <?php elseif($row->gps_dp_id == $row->projek_id): ?>
                         
                          <button type="button" class="btn btn-primary"disabled>Tahap 3</button>
                          <?php else: ?>
                          <a class="text-danger">Error</a>
                          <?php endif; ?>

                          <a href="<?php echo site_url("projek/deletedelete/" . $row->projek_id); ?>" class="btn btn-danger" role="button" data-toggle="tooltip" data-placement="top" title="Delete" onclick="return confirm('Delete Data?')"><i class="menu-icon mdi mdi-content-cut"></i>delete</a>

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
