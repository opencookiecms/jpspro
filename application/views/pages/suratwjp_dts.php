<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper b">
  <!-- Content Header (Page header)
  <section class="content-header">
    <center>
      <h2>
        Surat Pelepasan WJP
      </h2>
    </center>
  </section>
-->
  <br>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="table-responsive"></div>
      <div class="col-md-12">

        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Surat Pelepasan WJP</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Bil</th>
                  <th>Kepada</th>
                  <th>Rujukan Tuan</th>
                  <th>Alamat</th>
                  <th>Rujukan Kami</th>
                  <th>No Kontraktor</th>
                  <th></th>
                </tr>
              </thead>

              <tbody>

                <?php
                $i = 1;

                foreach ($get_suratwjp as $row) {

                  ?>

                 <tr>
                  <td><?php echo $row->skhas_id?></td>
                  <td><a href="#" ><?php echo $row->swjp_kepada?></a></td> <!--Show data in list view-->
                  <td><?php echo $row->swjp_rujuktuan?></td>
                  <td><?php echo $row->swjp_alamat?></td>
                  <td><?php echo $row->df_nosebutharga?></td>
                  <td><?php echo $row->mrk_namakon?></td>
                  <td><a href="<?php echo site_url('projek') ?>" class="btn btn-info">View</a>
                  <a href="#" class="btn btn-danger" role="button" onclick="return confirm('Delete Data?')">Delete</a></td>
                </tr>

              <?php } ?>


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
