<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <center>
      <h2>
        Maklumat Projek
      </h2>
    </center>
  </section>
  <br>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="table-responsive"></div>
      <div class="col-md-12">

        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Senarai Projek</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Bil</th>
                  <th>Kod Vot</th>
                  <th>No Sebutharga</th>
                  <th>Tarikh Permohonan</th>
                  <th>Jenis Sebutharga</th>
                  <th>Tajuk Projek</th>
                  <th></th>
                </tr>
              </thead>

              <tbody>

                <?php foreach ($get_projek as $row): ?>

                 <tr>
                  <td><?php echo $row->projek_id?></td>
                  <td><a href="<?php echo site_url('projek/view_data/'.$row->df_kodvot); ?>" ><?php echo $row->df_kodvot?></a></td> <!--Show data in list view-->
                  <td><?php echo $row->df_nosebutharga?></td>
                  <td><?php echo $row->df_tarikmohon?></td>
                  <td><?php echo $row->df_jsebutharga?></td>
                  <td><?php echo $row->df_tajuk?></td>
                  <td><a href="<?php echo site_url("projek/delete/" . $row->projek_id); ?>" class="btn btn-info" role="button" onclick="return confirm('Delete Data?')">DELETE</a>
                  <a href="<?php echo site_url("projek/Update_Projek01/" . $row->projek_id); ?>" class="btn btn-warning" role="button" onclick="return confirm('Delete Data?')">UPDATE</a></td>
                </tr>

              <?php endforeach; ?>


              </tbody>

            </table>

          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->

      </div>
      <!-- /.col -->
    </div>




  </section>
  <!-- /.content -->

</div>
</div>
<!-- /.content-wrapper -->
