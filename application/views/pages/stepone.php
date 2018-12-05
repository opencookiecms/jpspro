<!-- Content Wrapper. Contains page content -->
<style>
  .error {color: #FF0000;}
</style>
<div class="content-wrapper b">
  <!-- Content Header (Page header)
  <section class="content-header">
    <center>
      <h1>
        Daftar Projek
      </h1>
    </center>
  </section>
  -->
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
      <!--<form  method="POST" action="?php echo site_url('Projek/insert_stepone') ?>">-->

      <h2 class="f"><?php echo $title; ?></h2>

      <?php echo validation_errors(); ?>

      <?php echo form_open('daftar/stepsatu'); ?>
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Borang Daftar Sebut Harga</h3>
        </div><!-- end of box header-->
        <div class="box-body">
        <h5><span class="error"> * Dikehendaki mengisi semua bahagian</span></h5>
      </div>
        <div class="box-body">
          <div class="form-group">
            <label class="col-sm-2">No Sebutharga</label>

            <div class="col-sm-3">
              <input type="text" class="form-control" name="nosebut"  placeholder="No Fail Sebutharga">
            </div>
            <label class="col-sm-2">Tarikh Permohonan</label>

            <div class="col-sm-2">
              <input type="date" class="form-control" name="tarikhmohon"placeholder="Tarikh Permohonan">
            </div>

          </div>

        </div><!--end of body-->
        <div class="box-body">
          <div class="form-group">
            <label class="col-sm-2">Jenis Sebutharga</label>

            <div class="col-sm-2">
              <select type="text" class="form-control" id="jenissebut" name="jenissebut">
                <option value=""></option>
                <option value="Lantikan Terus">Lantikan Terus</option>
                <option value="Sebutharga">Sebutharga</option>
                <option value="Undi">Undi</option>
              </select>
            </div>
          </div>
        </div>

        <div class="box-body">
          <div class="form-group">
            <label class="col-sm-2">Tajuk Projek</label>

            <div class="col-sm-6">
              <textarea type="text" class="form-control"name="tajukprojek" placeholder="Tajuk Projek"></textarea>
            </div>

          </div>
        </div>

                <div class="box-body">
                  <div class="form-group">

                    <label class="col-sm-2">Daerah</label>

                    <div class="col-sm-2">
                      <select type="text" class="form-control" name="daerah">
                        <option value=""></option>
                        <option value="Sik">Sik</option>
                        <option value="Baling">Baling</option>
                        <option value="Kuala Muda">Kuala Muda</option>
                      </select>
                    </div>
                  </div>
                </div>



        <div class="box-footer">
          <button type="submit" name="submit" class="btn btn-primary">Seterusnya</button>
        </div>
      </div>
    </form>
  </div>
</div><!--end of row-->



</section>
<!-- /.content -->

</div>
<!-- /.content-wrapper -->
