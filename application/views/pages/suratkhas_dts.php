<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper b">
  <!-- Content Header (Page header)
  <section class="content-header">
    <center>
      <h2>
        Surat Kebenaran Khas
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
            <h3 class="box-title">Surat Kebenaran Khas</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Bil</th>
                  <th>Rujukan Tuan</th>
                  <th>Rujukan Kami</th>
                  <th>Nama Kontraktor</th>
                  <th>No Inden</th>
                  <th>Tajuk Kerja</th>
                  <th></th>
                </tr>
              </thead>

              <tbody>

                <?php
                $i = 1;

                foreach ($get_suratkhas as $row) {

                  ?>

                 <tr>
                  <td><?php echo $row->skhas_id?></td>
                  <td><a href="#" ><?php echo $row->skhas_rujuktuan?></a></td> <!--Show data in list view-->
                  <td><?php echo $row->df_nosebutharga?></td>
                  <td><?php echo $row->mrk_namakon?></td>
                  <td><?php echo $row->mrk_noinden?></td>
                  <td><?php echo $row->df_tajuk?></td>
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
