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
          <!--<form  method="POST" action="?php echo site_url('Projek/insert_stepone') ?>">-->


          <?php echo validation_errors(); ?>


          <?php


            echo form_open('projek/Update_Projek01');


          ?>
          <div class="box box-info">
            <div class="box-header with-border">

          <a href="<?php echo site_url("projek/Update_Projek01/" . $get_detail[0]->projek_id); ?>" class="btn btn-warning" role="button">PAGE1</a>
          <a href="<?php echo site_url("projek/Update_Projek02/" . $get_detail[0]->projek_id); ?>" class="btn btn-warning" role="button">PAGE2</a>
          <a href="<?php echo site_url("projek/Update_Projek03/" . $get_detail[0]->projek_id); ?>" class="btn btn-warning" role="button" >PAGE3</a>

            </div><!-- end of box header-->

            <h5><span class="error" style="padding-left:10px;"> * Dikehendaki mengisi semua bahagian</span></h5>
            <div class="box-body">
              <div class="form-group">
                <label class="col-sm-1">No Sebutharga</label>

                <div class="col-sm-3">
                  <input type="text" class="form-control" name="nosebut"  placeholder="No Fail Sebutharga" value="<?php echo $get_detail[0]->df_nosebutharga?>">
                  <input type="hidden" readonly class="form-control" name="hiddenid"  value="<?php echo $get_detail[0]->projek_id?>">
                </div>
                <label class="col-sm-2">Tarikh Permohonan</label>

                <div class="col-sm-2">
                  <input type="date" class="form-control" name="tarikhmohon"placeholder="Tarikh Permohonan" value="<?php echo $get_detail[0]->df_tarikmohon?>">
                </div>
                <label class="col-sm-2">Jenis Sebutharga</label>

                <div class="col-sm-2">
                  <select type="text" class="form-control" id="jenissebut" name="jenissebut" value="">
                    <option value="<?php echo $get_detail[0]->df_jsebutharga?>"><?php echo $get_detail[0]->df_jsebutharga?></option>
                    <option value="Lantikan Terus">Lantikan Terus</option>
                    <option value="Sebutharga">Sebutharga</option>
                    <option value="Undi">Undi</option>
                  </select>
                </div>
              </div>

            </div><!--end of body-->

            <div class="box-body">
              <div class="form-group">
                <label class="col-sm-1">Tajuk Projek</label>

                <div class="col-sm-6">
                  <textarea type="text" class="form-control"name="tajukprojek" placeholder="Tajuk Projek"><?php echo $get_detail[0]->df_tajuk?></textarea>
                </div>

                <label class="col-sm-1">Daerah</label>

                <div class="col-sm-2">
                  <select type="text" class="form-control" name="daerah">
                    <option value="<?php echo $get_detail[0]->df_daerah?>"><?php echo $get_detail[0]->df_daerah?></option>
                    <option value="Sik">Sik</option>
                    <option value="Baling">Baling</option>
                    <option value="Kuala Muda">Kuala Muda</option>
                  </select>
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
