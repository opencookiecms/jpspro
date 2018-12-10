<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <center>
      <h2>
        Maklumat Rekod Kerja - 03
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
            <h3 class="box-title">Maklumat Rekod Kerja - 03</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Bil</th>
                  <th>No Pendaftaran PKK</th>
                  <th>Nama Kontraktor</th>
                  <th>No Inden/Pesanan Tempatan</th>
                  <th>Tajuk Projek</th>
                  <th></th>
                </tr>
              </thead>

              <tbody>

                <?php foreach ($get_projek as $row): ?>

                 <tr>
                  <td><?php echo $row->mrksatuid?></td>
                  <td><a href="#" ><?php echo $row->mrk_nopkk?></a></td> <!--Show data in list view-->
                  <td><?php echo $row->mrk_namakon?></td>
                  <td><?php echo $row->mrk_noinden?></td>
                  <td><?php echo $row->mrk_tajukkerja?></td>
                  <td><a href="<?php echo site_url('projek') ?>" class="btn btn-info">View</a>
                  <a href="#" class="btn btn-danger" role="button" onclick="return confirm('Delete Data?')">Delete</a></td>
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
