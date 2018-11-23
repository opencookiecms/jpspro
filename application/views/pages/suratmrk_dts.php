<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <center>
      <h2>
        Surat Maklumat Rekod Kerja
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
            <h3 class="box-title">Surat Maklumat Rekod Kerja</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Bil</th>
                  <th>Rujukan Tuan</th>
                  <th>Tarikh</th>
                  <th>Rujukan Kami</th>
                  <th>Jenis Borang MRK</th>
                  <th>Nama Kontraktor</th>
                  <th>No Kontraktor</th>
                  <th></th>
                </tr>
              </thead>

              <tbody>

                <?php
                $i = 1; 

                foreach ($get_mrksurat as $row) {
                  
                  ?>

                 <tr>
                  <td><?php echo $row->id?></td>
                  <td><a href="#" ><?php echo $row->s_rujuktuan?></a></td> <!--Show data in list view-->
                  <td><?php echo $row->s_tarikhtuan?></td>
                  <td><?php echo $row->s_rujukkami?></td>
                  <td><?php echo $row->s_jenisborang?></td>
                  <td><?php echo $row->s_namakon?></td>
                  <td><?php echo $row->s_nokon?></td>
                  <td><button type="edit" name="view" class="btn btn-default">View</button>
                  <button type="delete" name="delete" class="btn btn-default">Delete</button></td>
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
