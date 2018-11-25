<!-- Content Wrapper. Contains page content -->
<style>
  .error {color: #FF0000;}
</style>

<div class="content-wrapper b">
  <!-- Content Header (Page header) -->
  <section class="content-header">

      <h1 class="f">
        Kemaskini Sebut Harga
      </h1>


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

      <?php echo validation_errors(); ?>

      <?php echo form_open('projek/Update_Projek03'); ?>
      <div class="box box-info">
        <div class="box-header with-border">
          <a href="<?php echo site_url("projek/Update_Projek01/" . $get_detail[0]->projek_id); ?>" class="btn btn-warning" role="button">PAGE1</a>
          <a href="<?php echo site_url("projek/Update_Projek02/" . $get_detail[0]->projek_id); ?>" class="btn btn-warning" role="button">PAGE2</a>
          <a href="<?php echo site_url("projek/Update_Projek03/" . $get_detail[0]->projek_id); ?>" class="btn btn-warning" role="button" >PAGE3</a>
        </div><!-- end of box header-->

        <h5><span class="error" style="padding-left:5px;"> * Dikehendaki mengisi semua bahagian</span></h5>

        <div class="box-body">
          <div class="form-group">
            <label class="col-sm-3">Koordinat Lokasi Projek :</label>
            <label class="col-sm-2">Latitud (N)</label>

            <div class="col-sm-1">
              <input type="text" class="form-control" id="lata" name="lata" value="<?php echo $get_detail[0]->dp_lata?>">



            </div>
            <div class="col-sm-1">
              <input type="text" class="form-control" id="latb" name="latb" value="<?php echo $get_detail[0]->dp_latb?>">
            </div>
            <div class="col-sm-1">
              <input type="text" class="form-control" id="latc" name="latc" value="<?php echo $get_detail[0]->dp_latc?>">
            </div>
          </div>
        </div>

        <div class="box-body">
          <div class="form-group">
            <label class="col-sm-3">(Down Stream)</label>
            <label class="col-sm-2">Longitud (E)</label>

            <div class="col-sm-1">
              <input type="text" class="form-control" id="longa" name="longa" value="<?php echo $get_detail[0]->dp_longa?>">
            </div>
            <div class="col-sm-1">
              <input type="text" class="form-control" id="longb" name="longb" value="<?php echo $get_detail[0]->dp_longb?>">
            </div>
            <div class="col-sm-1">
              <input type="text" class="form-control" id="longc" name="longc" value="<?php echo $get_detail[0]->dp_longc?>">
            </div>
          </div>

          <label class="col-sm-2">Lembangan Sungai:</label>

          <div class="col-sm-2">
            <input type="text" class="form-control" id="sungai" name="sungai" placeholder="Sungai" value="<?php echo $get_detail[0]->dp_sungai?>">
          </div>
        </div>

        <div class="box-body">
          <div class="form-group">
            <label class="col-sm-1">Sistem:</label>

            <div class="col-sm-3">
              <input type="text" class="form-control" id="sistem" name="sistem" placeholder="Sistem" value="<?php echo $get_detail[0]->dp_sistem?>">
            </div>

            <label class="col-sm-1">Sub Sistem:</label>

            <div class="col-sm-3">
              <input type="text" class="form-control" id="subsistem" name="subsistem" placeholder="Sub Sistem" value="<?php echo $get_detail[0]->dp_subsistem?>">
            </div>
          </div>
        </div>

        <div class="box-body">
          <div class="form-group">
            <label class="col-sm-1">Komponen:</label>

            <div class="col-sm-3">
              <input type="text" class="form-control" id="komponen" name="komponen" placeholder="Komponen" value="<?php echo $get_detail[0]->dp_komponen?>">
            </div>

            <label class="col-sm-1">Dimensi:</label>

            <div class="col-sm-3">
              <input type="text" class="form-control" id="dimensi" name="dimensi" placeholder="Dimensi" value="<?php echo $get_detail[0]->dp_dimensi?>">
              <input type="text" class="form-control" name="dp_idpost" value="<?php echo $get_detail[0]->dp_id?>">
            </div>
          </div>
        </div>



        <div class="box-footer">
          <button type="submit" name="submit" class="btn btn-success">Simpan</button>

        </div>

      </div>
    </form>
  </div>
</div><!--end of row-->


</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
