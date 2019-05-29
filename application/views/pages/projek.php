
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
                            Kod Vot
                          </th>
                          <th>
                          Tajuk Projek
                          </th>
                          <th>
                            No Sebutharga
                          </th>
                          <th>
                            Tarikh
                          </th>
                          <th>
                            Jenis Sebutharga
                          </th>
                          <th>
                            Penyelia
                          </th>

                          <th>
                            Tindakan
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $bil=0;?>
                        <?php foreach ($get_projek as $row): $bil++?>

                         <tr>
                          <td class="py-1"><?php echo $bil?></td>
                          <td class="py-1"><a href="
                          <?php 
                          if($this->session->userdata('roles')=="clerk")
                          {

                          }
                          else{
                            echo site_url('projek/main_projek_view/'.$row->df_kodvot); 
                          }
                          ?>" >
                          
                          <?php echo $row->df_kodvot?></a></td> <!--Show data in list view-->
                          <td style="white-space: normal !important;word-wrap: break-word;min-width: 250px;max-width: 250px;"><?php echo $row->df_tajuk?></td>
                          <td class="py-1"><?php echo $row->df_nosebutharga?></td>
                          <td class="py-1"><?php echo $row->df_tarikmohon?></td>
                          <td class="py-1"><?php echo $row->df_jsebutharga?></td>
                          <td class="py-1"><?php echo $row->df_penolong?></td>

                          <td class="py-1">
                          <?php $ur = $this->session->userdata('roles');?>
                          <?php if($ur == "admin"): ?>
                          <a href="<?php echo site_url("projek/delete/" . $row->projek_id); ?>" class="btn btn-danger" role="button" data-toggle="tooltip" data-placement="top" title="Delete" onclick="return confirm('Delete Data?')"><i class="menu-icon mdi mdi-content-cut"></i>delete</a>
                          <a href="<?php echo site_url("projek/Update_Projek01/" . $row->projek_id); ?>" class="btn btn-dark" data-toggle="tooltip" data-placement="top" title="Update" role="button" onclick="return confirm('Update Data?')"><i class="menu-icon mdi mdi-source-pull"></i>update</a>

                          <?php else: ?>
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
