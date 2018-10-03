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
               <?php 
               $i = 1; 

               foreach ($get_projek as $row){  

                 ?> 

                 <tr>
                  <td><?php echo $row->id?></td>
                  <td><a href="<?php echo site_url('projek/view_data/'.$row->id); ?>" ><?php echo $row->df_nosebutharga?></a></td> <!--Show data in list view-->
                  <td><?php echo $row->df_nosebutharga?></td>
                  <td><?php echo $row->df_tarikmohon?></td>
                  <td><?php echo $row->df_jsebutharga?></td>
                  <td><?php echo $row->df_tajuk?></td>
                  <td><button type="edit" name="edit" class="btn btn-default">Edit</button>
                    <button type="delete" name="delete" class="btn btn-default">Delete</button>
                    <a href="<?php echo site_url('projek/daftar_view') ?>" class="btn btn-info" role="button">CETAK</a>
                  </td>
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
