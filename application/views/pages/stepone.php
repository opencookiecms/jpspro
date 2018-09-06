<!-- Content Wrapper. Contains page content -->
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
        <form  method="POST" action="<?php echo site_url('Insert_stepone/submit') ?>">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Daftar</h3>
            </div><!-- end of box header-->
            <div class="box-body">
              <div class="form-group">
                <label class="col-sm-1">No Sebutharga</label>

                <div class="col-sm-3">
                  <input type="text" class="form-control" id="nosebut" name="nosebut" required="required" placeholder="No Fail Sebutharga">
                </div>
                <label class="col-sm-1">Tarikh Permohonan</label>

                <div class="col-sm-2">
                  <input type="date" class="form-control" id="tarikhmohon" name="tarikhmohon"  required="required"  placeholder="Tarikh Permohonan">
                </div>
                <label class="col-sm-1">Jenis Sebutharga</label>

                <div class="col-sm-2">
                  <input type="text" class="form-control" id="jenissebut"  name="jenissebut"   required="required"  placeholder="Jenis Sebutharga">
                </div>
              </div>

            </div><!--end of body-->
            
            <div class="box-body">
              <div class="form-group">
                <label class="col-sm-1">Tajuk Projek</label>

                <div class="col-sm-6">
                  <textarea type="text" class="form-control" id="tajukprojek"  name="tajukprojek" placeholder="Tajuk Projek"></textarea>
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