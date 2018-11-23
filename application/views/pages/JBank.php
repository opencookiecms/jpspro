<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <center>
      <h1>
        Maklumat Rekod Kerja
      </h1>
    </center>
  </section>
  <br>

  <!-- Main content -->
  <section class="content">

    <div class="row">
      <div class="col-lg-12">

        <?php if(isset($_SESSION['success'])) { ?>
          <div class="alert alert-success"><?php echo $_SESSION['success'] ?></div>
          <?php
        } ?>
        <?php //echo validation_errors('<div class="alert alert-danger">', '</div'); ?>


          <?php echo validation_errors(); ?>

          <?php

          $pkkNo = $get_detail[0]->js_inden;
          if($pkkNo == null){
            echo form_open('mrk/Jaminan_Bank');
          }
          else {
            echo form_open('mrk/JB_Update');
          }

          ?>
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Surat Pelepasan Jaminan Bank</h3>
            </div><!-- end of box header-->

            <div class="box-body">
              <div class="form-group">
                <label class="col-sm-2">Rujukan Bank</label>

                <div class="col-sm-3">
                  <input type="text" class="form-control" id="rujukbank" name="rujukbank" placeholder="Rujukan Bank" value="<?php echo $get_detail[0]->mrk_rujukanbank?>">
                </div>

                <label class="col-sm-3">Tarikh Mula Tanggungan</label>

                <div class="col-sm-2">
                  <input type="date" class="form-control" id="mulatanggung" name="mulatanggung" readonly value="<?php echo $get_detail[0]->mrk_tarikhmulatanggungcacat?>">
                </div>
              </div>

            </div>

            <div class="box-body">
              <div class="form-group">
                <label class="col-sm-2">Nama Bank</label>

                <div class="col-sm-3">
                  <input type="text" class="form-control" id="namabank" name="namabank" placeholder="Nama Bank" value="<?php echo $get_detail[0]->mrk_namabank?>" >
                </div>

                <label class="col-sm-3">Tarikh Luput Tanggungan</label>

                <div class="col-sm-2">
                  <input type="date" class="form-control" id="luputtanggung" name="luputtanggung" readonly value="<?php echo $get_detail[0]->mrk_tarikhtamattanggungcacat?>">
                </div>
              </div>
            </div>

            <div class="box-body">
              <div class="form-group">

                <label class="col-sm-1">Alamat Bank</label>

                <div class="col-sm-7">
                  <textarea type="text" class="form-control" id="alamatbank" name="alamatbank" placeholder="Alamat Bank"><?php echo $get_detail[0]->mrk_alamatbank?></textarea>
                </div>
              </div>
            </div><!--end of body-->

            <div class="box-body">
              <div class="form-group">

                <label class="col-sm-1">Nama Jurutera</label>

                <div class="col-sm-4">
                  <input type="text" class="form-control" id="namajuru" name="namajuru" placeholder="Nama Jurutera" readonly value="<?php echo $get_detail[0]->mrk_pegawaipenguasa?>">
                </div>

                <label class="col-sm-1">Jawatan</label>

                <div class="col-sm-4">
                  <input type="text" class="form-control" id="jawatan" name="jawatan" placeholder="Jawatan" readonly value="<?php echo $get_detail[0]->mrk_jawatanpp?>">
                </div>
              </div>
            </div>

            <div class="box-body">
              <div class="form-group">

                <label class="col-sm-1">Nama Pemborong</label>

                <div class="col-sm-4">
                  <input type="text" class="form-control" id="namaborong" name="namaborong" placeholder="Nama Pemborong" readonly value="<?php echo $get_detail[0]->mrk_namakon?>">
                  <input type="text" name="noinden" placeholder="Nama Pemborong" readonly value="<?php echo $get_detail[0]->mrk_noinden?>">
                  <input type="text"  name="kodvot" placeholder="Nama Pemborong" readonly value="<?php echo $get_detail[0]->df_kodvot?>">
                  <input type="text"  name="hiddenid" placeholder="Nama Pemborong" readonly value="<?php echo $get_detail[0]->mrksatuid?>">
                </div>

                <label class="col-sm-1">Alamat Pemborong</label>

                <div class="col-sm-6">
                  <textarea type="text" class="form-control" readonly id="alamatborong" name="alamatborong" placeholder="Alamat Pemborong"><?php echo $get_detail[0]->mrk_alamatkon?></textarea>
                </div>
              </div>
            </div>

            <div class="box-footer">
              <button type="submit" name="submit" class="btn btn-default">Simpan</button>
              <a href="<?php echo base_url('surat') ?>" class="btn btn-info" role="button">Surat</a>
            </div>
          </div>
        </form>
      </div>
    </div><!--end of row-->


  </section>
  <!-- /.content -->

</div>
<!-- /.content-wrapper -->