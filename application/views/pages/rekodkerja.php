<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <center>
      <h2>
        Maklumat Rekod Kerja
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
            <h3 class="box-title">Senarai Rekod Kerja</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No Pendaftaran PKK</th>
                  <th>No Kontrak</th>
                  <th>Nama Kontraktor</th>
                  <th>No Inden/Pesanan Tempatan</th>
                  <th>Tajuk Kerja</th>
                  <th>Tarikh Mula Kontrak</th>
                  <th></th>
                </tr>
              </thead>

              <tbody>
               <?php 
               $i = 1; 

               foreach ($get_rekod as $row){  

                 ?> 

                 <tr>
                  <td><?php echo $row->id?></td>
                  <td><a href="<?php echo site_url('rekod/view_data/'.$row->id); ?>" ><?php echo $row->mrk_nopkk?></a></td> <!--Show data in list view-->
                  <td><?php echo $row->mrk_nokontrak?></td>
                  <td><?php echo $row->mrk_namakon?></td>
                  <td><?php echo $row->mrk_noinden?></td>
                  <td><?php echo $row->mrk_tajukkerja?></td>
                  <td><?php echo $row->mrk_tarikhmulakon?></td>
                  <td><button type="edit" name="edit" class="btn btn-default">Edit</button>
                    <button type="delete" name="delete" class="btn btn-default">Delete</button>
                    <button type="print" name="print" class="btn btn-default">Print</button>
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
