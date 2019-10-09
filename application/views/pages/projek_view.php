<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper cnt" style="background: #614385;  /* fallback for old browsers */
background: -webkit-linear-gradient(to bottom, #516395, #614385);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to bottom, #516395, #614385); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
">
    <div class="row purchace-popup">
      <div class="col-12">
        <span class="d-block d-md-flex align-items-center">
          <p class="tls text-white">Senarai Dokument Berkaitan Sebutharga.</p>
        </span>
      </div>
    </div>
    <div class="row">
    
    </div>
    <div class="row">
      <div class="col-md-4 d-flex align-items-stretch grid-margin">
        <div class="row flex-grow">
          <div class="col-12">
            <div class="card" style="border-radius:10px;">
              <div class="card-body">
                <h2 class="card-title text-primary">Kod Vot : <?php echo $get_detail[0]->df_kodvot ?></h2>
                <p class="card-description">
                  <?php echo $get_detail[0]->df_tajuk?>
                </p>
                <p class="card-description">
                  <h2 class="card-title text-primary">No Sebutharga : <?php echo $get_detail[0]->df_nosebutharga ?></h2>
                </p>
                <br>
                 <h2 class="card-title text-primary">Peratusan Kerja :</h2>
                <p class="card-description">
                 <?php echo form_open('mrk/mrkp'); ?>
                     <div class="row">
                      <div class="col-md-12">
                        <div class="form-group row">
                          <div class="col-sm-5">
                            <label class="tl">Peratusan Kerja Semasa :</label>
                            <input type="hidden" name="hide" value="<?php echo $get_detail[0]->projek_id ?> ">
                            <input type="text" class="form-control ts" style="font-weight:bold;" value="" id="peratusan" name="peratusan" placeholder="%">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group row">
                          <div class="col-sm-4">
                            <button type="submit" name="submit" data-toggle="tooltip" data-placement="bottom" title="Kemaskini maklumat peratusan semasa" class="btn btn-primary mr-2 btn-rounded ">Simpan</button>
                          </div>
                        </div>
                      </div>
                    </div>
                 </form>
                </p>

              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="col-md-8 grid-margin stretch-card">
        <div class="card" style="border-radius:10px;">
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
                      MRK 01
                    </td>
                    <td class="py-1" style="padding-left: 30px; text-align:center;">
                      <?php if($get_progress[0]->mrks_kodvot==null){echo "<img src='".base_url(). "/assets/images/error.png' alt='error'>";}else{  echo "<img src='".base_url(). "/assets/images/success.png' alt='error'>";}?>
                    </td>
                    <td>
                      <a class="btn btn-success  mr-2 btn-rounded" href="<?php echo site_url('mrk/MRK_01/'. $get_detail[0]->dp_id); ?>">MRK 01</a>
                    </td>
                  </tr>
                  <tr>
                    <td class="font-weight-medium">
                      MRK 02
                    </td>
                    <td class="py-1" style="padding-left: 30px; text-align:center;">
                      <?php if($get_progress[0]->mrk2_kodvots==null){echo "<img src='".base_url(). "/assets/images/error.png' alt='error'>";}else{  echo "<img src='".base_url(). "/assets/images/success.png' alt='error'>";}?>
                    </td>
                    <td>
                      <a class="btn btn-primary  mr-2 btn-rounded" href="<?php echo site_url('mrk/MRK_02/'. $get_detail[0]->dp_id); ?>">MRK 02</a>
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
                      <a class="btn btn-warning  mr-2 btn-rounded" href="<?php echo site_url('mrk/LSK/'. $get_detail[0]->dp_id); ?>">LSK</a>
                    </td>
                  </tr>
                  <tr>
                    <td class="font-weight-medium">
                      MRK 03
                    </td>
                    <td class="py-1" style="padding-left: 30px; text-align:center;">
                      <?php if($get_progress[0]->mrktiga_kodvots==null){echo "<img src='".base_url(). "/assets/images/error.png' alt='error'>";}else{  echo "<img src='".base_url(). "/assets/images/success.png' alt='error'>";}?>
                    </td>
                    <td>
                      <a class="btn btn-danger  mr-2 btn-rounded" href="<?php echo site_url('mrk/MRK_03/'. $get_detail[0]->dp_id); ?>">MRK 03</a>
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
                      <a class="btn btn-success  mr-2 btn-rounded" href="<?php echo site_url('mrk/PSK/'. $get_detail[0]->dp_id); ?>">PSK</a>
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
                      <a class="btn btn-primary  mr-2 btn-rounded" href="<?php echo site_url('mrk/Senarai_Semak/'. $get_detail[0]->dp_id); ?>">SS</a>
                    </td>
                  </tr>
                  <tr>
                    <td class="font-weight-medium">
                      Perakuan Siap Membaiki <br>Kecacatan
                    </td>
                    <td class="py-1" style="padding-left: 30px; text-align:center;">
                      <?php if($get_progress[0]->psmk_kodvots==null){echo "<img src='".base_url(). "/assets/images/error.png' alt='error'>";}else{  echo "<img src='".base_url(). "/assets/images/success.png' alt='error'>";}?>
                    </td>
                    <td>
                      <a class="btn btn-warning  mr-2 btn-rounded" href="<?php echo site_url('mrk/MRK_PSMK/'.$get_detail[0]->dp_id); ?>">PSMK</a>
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
                      <a class="btn btn-danger  mr-2 btn-rounded" href="<?php echo site_url('mrk/Jaminan_Bank/'.$get_detail[0]->dp_id); ?>">PJM</a>
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
                      <a class="btn btn-success  mr-2 btn-rounded" href="<?php echo site_url('mrk/PP_WJP/'.$get_detail[0]->dp_id); ?>">PPW</a>
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
                      <a class="btn btn-primary  mr-2 btn-rounded" href="<?php echo site_url('Surat/letter_board/'.$get_detail[0]->dp_id); ?>">Surat</a>
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
