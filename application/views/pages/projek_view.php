  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper b">
    <!-- Content Header (Page header) -->
    <section class="content-header">

        <h2 class="f">
          Maklumat Projek
        </h2>

    </section>
    <br>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="table-responsive"></div>
        <div class="col-md-12">
            <div class="box box-solid bg-red">
              <div class="box-header">
                  <h3 class="box-title">Kod Vot : <?php echo $get_detail[0]->df_kodvot ?></h3>
              </div>
              <div class="box-footer text-black">
                <table class="table table-bordered">
                    <thead>
                      <th scope="col">Bil</th>
                      <th scope="col" colspan="11">KERJA-KERJA</th>
                    </thead>

                    <tr>
                      <td>#</td>
                      <td>Projek</td>
                      <td>MRK 01</td>
                      <td>MRK 02</td>
                      <td>Laporan Siap <br>Kerja</td>
                      <td>MRK 03</td>
                      <td>Perakuan Siap <br>Kerja</td>
                      <td>Senarai <br>Semakan</td>
                      <td>Perakuan Siap Mebaiki<br>Kecatatan</td>
                      <td>Pelepasan Jaminan<br>Bank</td>
                      <td>Perakuan Pemulangan<br>Wajib</td>
                      <td>Surat - Menyurat</td>
                    </tr>
                    <tr>


                      <td>#</td>
                      <td>Progress</td>

                      <td style="padding-left: 30px;"><?php if($get_progress[0]->mrks_kodvot==null){echo "<img src='".base_url(). "/assets/images/error.png' alt='error'>";}else{  echo "<img src='".base_url(). "/assets/images/success.png' alt='error'>";}?></td>
                      <td style="padding-left: 30px;"><?php if($get_progress[0]->mrk2_kodvots==null){echo "<img src='".base_url(). "/assets/images/error.png' alt='error'>";}else{  echo "<img src='".base_url(). "/assets/images/success.png' alt='error'>";}?></td>
                      <td style="padding-left: 30px;"><?php if($get_progress[0]->lks_kodvots==null){echo "<img src='".base_url(). "/assets/images/error.png' alt='error'>";}else{  echo "<img src='".base_url(). "/assets/images/success.png' alt='error'>";}?></td>
                      <td style="padding-left: 30px;"><?php if($get_progress[0]->mrktiga_kodvots==null){echo "<img src='".base_url(). "/assets/images/error.png' alt='error'>";}else{  echo "<img src='".base_url(). "/assets/images/success.png' alt='error'>";}?></td>
                      <td style="padding-left: 30px;"><?php if($get_progress[0]->psk_kodvots==null){echo "<img src='".base_url(). "/assets/images/error.png' alt='error'>";}else{  echo "<img src='".base_url(). "/assets/images/success.png' alt='error'>";}?></td>

                      <td style="padding-left: 30px;"><?php if($get_progress[0]->ss_kodvot==null){echo "<img src='".base_url(). "/assets/images/error.png' alt='error'>";}else{  echo "<img src='".base_url(). "/assets/images/success.png' alt='error'>";}?></td>
                      <td style="padding-left: 30px;"><?php if($get_progress[0]->psmk_kodvots==null){echo "<img src='".base_url(). "/assets/images/error.png' alt='error'>";}else{  echo "<img src='".base_url(). "/assets/images/success.png' alt='error'>";}?></td>
                      <td style="padding-left: 30px;"><?php if($get_progress[0]->js_kodvot==null){echo "<img src='".base_url(). "/assets/images/error.png' alt='error'>";}else{  echo "<img src='".base_url(). "/assets/images/success.png' alt='error'>";}?></td>
                      <td style="padding-left: 30px;"><?php if($get_progress[0]->ppwjp_kodvot==null){echo "<img src='".base_url(). "/assets/images/error.png' alt='error'>";}else{  echo "<img src='".base_url(). "/assets/images/success.png' alt='error'>";}?></td>
                      <td></td>
                    </tr>
                    <tr>
                      <?php foreach ($get_detail as $rowdetail): ?>

                      <td>1</td>
                      <td width="300"><?php echo $rowdetail->df_tajuk?></td>

                      <td><a class="btn btn-success" href="<?php echo site_url('mrk/MRK_01/'. $rowdetail->dp_id); ?>">MRK - 01</a></td>
                      <td><a class="btn btn-primary" href="<?php echo site_url('mrk/MRK_02/'. $rowdetail->dp_id); ?>">MRK - 02</a></td>
                      <td><a class="btn btn-warning" href="<?php echo site_url('mrk/LSK/'. $rowdetail->dp_id); ?>">LSK</a></td>
                      <td><a class="btn btn-danger" href="<?php echo site_url('mrk/MRK_03/'. $rowdetail->dp_id); ?>">MRK - 03</a></td>
                      <td><a class="btn btn-success" href="<?php echo site_url('mrk/PSK/'. $rowdetail->dp_id); ?>">PSK</a></td>

                      <td><a class="btn btn-primary" href="<?php echo site_url('mrk/Senarai_Semak/'. $rowdetail->dp_id); ?>">SS</a></td>
                      <td><a class="btn btn-warning" href="<?php echo site_url('mrk/MRK_PSMK/'.$rowdetail->dp_id); ?>">PSMK</a></td>
                      <td><a class="btn btn-danger" href="<?php echo site_url('mrk/Jaminan_Bank/'.$rowdetail->dp_id); ?>">PJM</a></td>
                      <td><a class="btn btn-success" href="<?php echo site_url('mrk/PP_WJP/'.$rowdetail->dp_id); ?>">PPW</a></td>
                      <td><a class="btn btn-primary" href="<?php echo site_url('Surat/letter_board/'.$rowdetail->dp_id); ?>">Surat</a></td>
                    </tr>

                   <?php endforeach; ?>
                  </table>
              </div>
            </div>

        </div>
        <!-- /.col -->
      </div>




    </section>
    <!-- /.content -->

  </div>
  <!-- /.content-wrapper -->
