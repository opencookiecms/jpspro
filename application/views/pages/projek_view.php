<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row purchace-popup">
      <div class="col-12">
        <span class="d-block d-md-flex align-items-center">
          <p>Senarai Dokument Berkaitan Sebutharga.</p>
        </span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 d-flex align-items-stretch grid-margin">
        <div class="row flex-grow">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <h2 class="card-title text-primary">Kod Vot : <?php echo $get_detail[0]->df_kodvot ?></h2>
                <p class="card-description">
                  <?php echo $get_detail[0]->df_tajuk?>
                </p>

              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-8 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Dokumen</h4>
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>
                      Dokumen
                    </th>
                    <th style="text-align:center;">
                      Status
                    </th>
                    <th>
                      Tindakkan
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="font-weight-medium">
                      MRK_01
                    </td>
                    <td class="py-1" style="padding-left: 30px; text-align:center;">
                      <?php if($get_progress[0]->mrks_kodvot==null){echo "<img src='".base_url(). "/assets/images/error.png' alt='error'>";}else{  echo "<img src='".base_url(). "/assets/images/success.png' alt='error'>";}?>
                    </td>
                    <td>
                      <a class="btn btn-success" href="<?php echo site_url('mrk/MRK_01/'. $get_detail[0]->dp_id); ?>">MRK - 01</a>
                    </td>
                  </tr>
                  <tr>
                    <td class="font-weight-medium">
                      MRK_02
                    </td>
                    <td class="py-1" style="padding-left: 30px; text-align:center;">
                      <?php if($get_progress[0]->mrk2_kodvots==null){echo "<img src='".base_url(). "/assets/images/error.png' alt='error'>";}else{  echo "<img src='".base_url(). "/assets/images/success.png' alt='error'>";}?>
                    </td>
                    <td>
                      <a class="btn btn-primary" href="<?php echo site_url('mrk/MRK_02/'. $get_detail[0]->dp_id); ?>">MRK - 02</a>
                    </td>
                  </tr>
                  <tr>
                    <td class="font-weight-medium">
                      Laporan Siap Kerja
                    </td>
                    <td class="py-1" style="padding-left: 30px; text-align:center;">
                      <?php if($get_progress[0]->lks_kodvots==null){echo "<img src='".base_url(). "/assets/images/error.png' alt='error'>";}else{  echo "<img src='".base_url(). "/assets/images/success.png' alt='error'>";}?>
                    </td>
                    <td>
                      <a class="btn btn-warning" href="<?php echo site_url('mrk/LSK/'. $get_detail[0]->dp_id); ?>">LSK</a>
                    </td>
                  </tr>
                  <tr>
                    <td class="font-weight-medium">
                      MRK_03
                    </td>
                    <td class="py-1" style="padding-left: 30px; text-align:center;">
                      <?php if($get_progress[0]->mrktiga_kodvots==null){echo "<img src='".base_url(). "/assets/images/error.png' alt='error'>";}else{  echo "<img src='".base_url(). "/assets/images/success.png' alt='error'>";}?>
                    </td>
                    <td>
                      <a class="btn btn-danger" href="<?php echo site_url('mrk/MRK_03/'. $get_detail[0]->dp_id); ?>">MRK - 03</a>
                    </td>
                  </tr>
                  <tr>
                    <td class="font-weight-medium">
                      Perakuan Siap Kerja
                    </td>
                    <td class="py-1" style="padding-left: 30px; text-align:center;">
                      <?php if($get_progress[0]->psk_kodvots==null){echo "<img src='".base_url(). "/assets/images/error.png' alt='error'>";}else{  echo "<img src='".base_url(). "/assets/images/success.png' alt='error'>";}?>
                    </td>
                    <td>
                      <a class="btn btn-success" href="<?php echo site_url('mrk/PSK/'. $get_detail[0]->dp_id); ?>">PSK</a>
                    </td>
                  </tr>
                  <tr>
                    <td class="font-weight-medium">
                      Senarai Semakan
                    </td>
                    <td class="py-1" style="padding-left: 30px; text-align:center;">
                      <?php if($get_progress[0]->ss_kodvot==null){echo "<img src='".base_url(). "/assets/images/error.png' alt='error'>";}else{  echo "<img src='".base_url(). "/assets/images/success.png' alt='error'>";}?>
                    </td>
                    <td>
                      <a class="btn btn-primary" href="<?php echo site_url('mrk/Senarai_Semak/'. $get_detail[0]->dp_id); ?>">SS</a>
                    </td>
                  </tr>
                  <tr>
                    <td class="font-weight-medium">
                      Perakuan Siap Membaiki <br>Kecatatan
                    </td>
                    <td class="py-1" style="padding-left: 30px; text-align:center;">
                      <?php if($get_progress[0]->psmk_kodvots==null){echo "<img src='".base_url(). "/assets/images/error.png' alt='error'>";}else{  echo "<img src='".base_url(). "/assets/images/success.png' alt='error'>";}?>
                    </td>
                    <td>
                      <a class="btn btn-warning" href="<?php echo site_url('mrk/MRK_PSMK/'.$get_detail[0]->dp_id); ?>">PSMK</a>
                    </td>
                  </tr>
                  <tr>
                    <td class="font-weight-medium">
                      Pelepasan Jaminan Bank
                    </td>
                    <td class="py-1" style="padding-left: 30px; text-align:center;">
                      <?php if($get_progress[0]->js_kodvot==null){echo "<img src='".base_url(). "/assets/images/error.png' alt='error'>";}else{  echo "<img src='".base_url(). "/assets/images/success.png' alt='error'>";}?>
                    </td>
                    <td>
                      <a class="btn btn-danger" href="<?php echo site_url('mrk/Jaminan_Bank/'.$get_detail[0]->dp_id); ?>">PJM</a>
                    </td>
                  </tr>
                  <tr>
                    <td class="font-weight-medium">
                      Perakuan Pemulangan WJP
                    </td>
                    <td class="py-1" style="padding-left: 30px; text-align:center;">
                      <?php if($get_progress[0]->ppwjp_kodvot==null){echo "<img src='".base_url(). "/assets/images/error.png' alt='error'>";}else{  echo "<img src='".base_url(). "/assets/images/success.png' alt='error'>";}?>
                    </td>
                    <td>
                      <a class="btn btn-success" href="<?php echo site_url('mrk/PP_WJP/'.$get_detail[0]->dp_id); ?>">PPW</a>
                    </td>
                  </tr>
                  <tr>
                    <td class="font-weight-medium">
                      Surat Menyurat
                    </td>
                    <td class="py-1" style="padding-left: 30px; text-align:center;">
                      status dokument
                    </td>
                    <td>
                      <a class="btn btn-primary" href="<?php echo site_url('Surat/letter_board/'.$get_detail[0]->dp_id); ?>">Surat</a>
                    </td>
                  </tr>

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- content-wrapper ends -->
  <!-- partial:../../partials/_footer.html -->
