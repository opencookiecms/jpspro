  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper b">
    <!-- Content Header (Page header)
    <section class="content-header">
      <center>
        <h1>
          Maklumat Rekod Kerja
        </h1>
      </center>
    </section>
  -->
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

                $pkkNo = $get_detail[0]->ppwjp_kodvot;
                  if($pkkNo == null){
                      echo form_open('mrk/PP_WJP');
                  }
                  else {
                    echo form_open('mrk/PPWJP_Update');
                  }

            ?>
            <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">PERAKUAN PEMULANGAN WANG JAMINAN PERLAKSANAAN</h3>
              </div><!-- end of box header-->

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">Rujukan Tuan</label>

                  <div class="col-sm-3">
                    <input type="text" class="form-control" id="rujuktuan" name="rujuktuan" placeholder="Rujukan Tuan" value="<?php echo $get_detail[0]->ppwjp_rt?>">
                  </div>

                  <label class="col-sm-3">Nama Pemborong</label>

                  <div class="col-sm-2">
                    <input type="text" class="form-control" id="namaborong" name="namaborong" readonly value="<?php echo $get_detail[0]->mrk_namakon?>">
                  </div>
                </div>

              </div>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">Rujukan Kami</label>

                  <div class="col-sm-3">
                    <input type="text" class="form-control" id="rujukkami" name="rujukkami" placeholder="Rujukan Kami" value="<?php echo $get_detail[0]->ppwjp_rk?>">
                  </div>

                  <label class="col-sm-3">No Kontrak</label>

                  <div class="col-sm-2">
                    <input type="text" class="form-control" id="nokon" name="nokon" readonly value="<?php echo $get_detail[0]->df_nosebutharga?>">
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">

                  <label class="col-sm-1">Kepada</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="kepada" name="kepada" placeholder="Kepada" value="<?php echo $get_detail[0]->ppwjp_kepada?>">
                  </div>

                  <label class="col-sm-1">Kos WJP</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="koswjp" name="koswjp" placeholder="Kos WJP" value="<?php echo $get_detail[0]->ppwjp_kos?>">
                    <input type="hidden" name="indenno" value="<?php echo $get_detail[0]->mrk_noinden?>">
                      <input type="hidden" name="kodvot" value="<?php echo $get_detail[0]->df_kodvot?>">
                        <input type="hidden" name="hiddenid" value="<?php echo $get_detail[0]->mrksatuid?>">
                  </div>
                 </div>
              </div>


              <div class="box-body">
                <div class="form-group">

                  <label class="col-sm-1">Alamat</label>

                  <div class="col-sm-4">
                    <textarea type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat"><?php echo $get_detail[0]->ppwjp_alamat?></textarea>
                  </div>

                  <label class="col-sm-2">Pegawai Penguasa</label>

                  <div class="col-sm-2">
                    <select type="text" class="form-control" id="pegawaikuasa" name="pegawaikuasa">
                      <option value="Idris Bin Yussof">Idris Bin Yussof</option>
                      <option value="Khairul Anuar B. Abd. Rashid">Khairul Anuar B. Abd. Rashid</option>
                      <option value="Khairul Anuar B. Abd. Rashid">Khairul Anuar B. Abd. Rashid</option>
                      <option value="Mohd. Amin B. Ahmad">Mohd. Amin B. Ahmad</option>
                      <option value="Yahaya B. Shariff">Yahaya B. Shariff</option>
                      <option value="Mohd. Daud Bin Hamid">Mohd. Daud Bin Hamid</option>
                      <option value="Zainuddin Bin Yusoff,AMP.,BCK.">Zainuddin Bin Yusoff,AMP.,BCK.</option>
                      <option value="Hasan Bin Abdul Majid">Hasan Bin Abdul Majid</option>
                      <option value="Kamarudin Bin Saleh">Kamarudin Bin Saleh</option>
                      <option value="Ir Siti Norazela Binti Hasan">Ir Siti Norazela Binti Hasan</option>
                      <option value="Nur Syuhada Binti Ahmad">Nur Syuhada Binti Ahmad</option>
                      <option value="Nor Rozaini Bt. Abdullah">Nor Rozaini Bt. Abdullah</option>
                    </select>
                  </div>

                  <label class="col-sm-1">Jawatan</label>

                  <div class="col-sm-2">
                    <select type="text" class="form-control" id="jawatan" name="jawatan">
                      <option value="Penolong Jurutera JA29">Penolong Jurutera JA29</option>
                      <option value="Penolong Jurutera JA36">Penolong Jurutera JA36</option>
                      <option value="Jurutera ( Kuala Muda/Sik )">Jurutera ( Kuala Muda/Sik )</option>
                      <option value="Jurutera ( Baling )">Jurutera ( Baling )</option>
                      <option value="Jurutera Daerah">Jurutera Daerah</option>
                      <option value="Penolong Jurutera JA38">Penolong Jurutera JA38</option>
                    </select>
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">

                  <label class="col-sm-1">Tajuk Kerja</label>

                  <div class="col-sm-6">
                    <textarea type="text" class="form-control" id="alamatborong" name="alamatborong" placeholder="Alamat Pemborong" readonly><?php echo $get_detail[0]->df_tajuk?></textarea>
                  </div>
                </div>
              </div>

              <div class="box-footer">
                <div class="form-group">
                <div class="col-md-2">
                <button type="submit" name="submit" class="btn btn-primary">Save</button>

              </div>
              <div class="col-md-6">
                  <a href="<?php echo site_url('Report/Report_MRK_01/'.$get_detail[0]->projek_id) ?>" class="btn btn-success" role="button">Print</a>
                <a href="<?php echo site_url('mrk/Jaminan_Bank/'.$get_detail[0]->projek_id) ?>" class="btn btn-warning" role="button">Jaminan Bank</a>

                  <a href="<?php echo site_url('surat/Surat_MRK/'.$get_detail[0]->projek_id) ?>" class="btn btn-info" role="button">Surat MRK</a>
              </div>

              <div class="col-md-4">
                  <a href="<?php echo site_url('projek/view_data/'.$get_detail[0]->mrks_kodvot) ?>" class="btn btn-danger" role="button">Close</a>

              </div>
            </div>
              </div>
            </div>
          </form>
        </div>
      </div><!--end of row-->


    </section>
    <!-- /.content -->

  </div>
  <!-- /.content-wrapper -->
