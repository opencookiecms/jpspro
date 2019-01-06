<div class="main-panel">
  <div class="content-wrapper">
    <div class="row purchace-popup">
      <div class="col-12">
        <span class="d-block d-md-flex align-items-center">
          <p>Senarai Maklumat Projek Mengikut No Sebutharga</p>
        </span>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Senarai Projek</h4>
            <div class="table-responsive">
              <table id="example" class="table table-striped " style="width:100%">
                <thead>
                  <tr>
                    <th>
                      #
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
                      Tindakan
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($get_projek as $row): ?>

                   <tr>
                    <td class="py-1"><?php echo $row->projek_id?></td>
                    <td class="py-1"><a href="<?php echo site_url('projek/view_data/'.$row->df_kodvot); ?>" ><?php echo $row->df_kodvot?></a></td> <!--Show data in list view-->
                    <td style="white-space: normal !important;word-wrap: break-word;min-width: 250px;max-width: 250px;"><?php echo $row->df_tajuk?></td>
                    <td class="py-1"><?php echo $row->df_nosebutharga?></td>
                    <td class="py-1"><?php echo $row->df_tarikmohon?></td>
                    <td class="py-1"><?php echo $row->df_jsebutharga?></td>

                    <td class="py-1"><a href="<?php echo site_url("projek/delete/" . $row->projek_id); ?>" class="btn btn-info" role="button" onclick="return confirm('Delete Data?')"> <i class="menu-icon mdi mdi-content-cut"></i></a>
                    <a href="<?php echo site_url("projek/Update_Projek01/" . $row->projek_id); ?>" class="btn btn-warning" role="button" onclick="return confirm('Update Data?')"><i class="menu-icon mdi mdi-source-pull"></i></a></td>
                  </tr>

                <?php endforeach; ?>
                </tbody>
              </table>
              <script type="text/javascript">
              $(document).ready(function() {
                $('#example').DataTable( {
                  "responsive":        true,

                } );
              } );
              </script>
            <div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- content-wrapper ends -->
  <!-- partial:partials/_footer.html -->
