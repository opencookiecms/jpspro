  <!-- Content Wrapper. Contains page content -->
  <style>
    .error {color: #FF0000;}
  </style>
  
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <center>
        <h1>
          Daftar Projek
        </h1>
      </center>
    </section>
    <br>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-lg-12">
          <?php if (isset($_SESSION['success'])) { ?>
          <div class="alert alert-success"> <?php echo $_SESSION['success']; ?></div>
          <?php
        } ?>
        <?php //echo validation_errors('<div class="alert alert-danger">', '</div'); ?>
        <h2><?php echo $title; ?></h2>
        <?php echo $idval; ?>

        <?php echo validation_errors(); ?>

        <?php echo form_open('daftar/steptiga'); ?>
        <div class="box box-info">
          <div class="box-header with-border">
            <h3 class="box-title">Lokasi dan Sistem</h3>
          </div><!-- end of box header-->

          <h5><span class="error"> * Dikehendaki mengisi semua bahagian</span></h5>

          <div class="box-body">
            <div class="form-group">
              <label class="col-sm-3">Koordinat Lokasi Projek :</label>
              <label class="col-sm-2">Latitud (N)</label>

              <div class="col-sm-1">
                <input type="text" class="form-control" id="lata" name="lata">
                <input type="hidden" class="form-control" name="dp_idpost" value="<?php echo $idval;?>">

              </div>
              <div class="col-sm-1">
                <input type="text" class="form-control" id="latb" name="latb">
              </div>
              <div class="col-sm-1">
                <input type="text" class="form-control" id="latc" name="latc">
              </div>
            </div>
          </div>

          <div class="box-body">
            <div class="form-group">
              <label class="col-sm-3">(Down Stream)</label>
              <label class="col-sm-2">Longitud (E)</label>

              <div class="col-sm-1">
                <input type="text" class="form-control" id="longa" name="longa">
              </div>
              <div class="col-sm-1">
                <input type="text" class="form-control" id="longb" name="longb">
              </div>
              <div class="col-sm-1">
                <input type="text" class="form-control" id="longc" name="longc">
              </div>
            </div>

            <label class="col-sm-2">Lembangan Sungai:</label>

            <div class="col-sm-2">
              <input type="text" class="form-control" id="sungai" name="sungai" placeholder="Sungai">
            </div>
          </div>

          <div class="box-body">
            <div class="form-group">
              <label class="col-sm-1">Sistem:</label>

              <div class="col-sm-3">
                <input type="text" class="form-control" id="sistem" name="sistem" placeholder="Sistem">
              </div>

              <label class="col-sm-1">Sub Sistem:</label>

              <div class="col-sm-3">
                <input type="text" class="form-control" id="subsistem" name="subsistem" placeholder="Sub Sistem">
              </div>
            </div>
          </div>

          <div class="box-body">
            <div class="form-group">
              <label class="col-sm-1">Komponen:</label>

              <div class="col-sm-3">
                <input type="text" class="form-control" id="komponen" name="komponen" placeholder="Komponen">
              </div>

              <label class="col-sm-1">Dimensi:</label>

              <div class="col-sm-3">
                <input type="text" class="form-control" id="dimensi" name="dimensi" placeholder="Dimensi">
              </div>
            </div>
          </div>



          <div class="box-footer">
            <button type="submit" name="submit" class="btn btn-default">Seterusnya</button>

          </div>

        </div>
      </form>
    </div>
  </div><!--end of row-->


</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
