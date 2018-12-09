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

                $pkkNo = $get_detail[0]->psmk_kodvots;
                  if($pkkNo == null){
                      echo form_open('mrk/MRK_PSMK');
                  }
                  else {
                    echo form_open('mrk/PSMK_Update');
                  }

            ?>
            <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">Perakuan Siap Membaiki Kecacatan</h3>
              </div><!-- end of box header-->
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">Nama Pemborong</label>

                  <div class="col-sm-3">
                    <input type="text" class="form-control" id="namapem" name="namapem" value="<?php echo $get_detail[0]->mrk_namakon?>" readonly>
                  </div>

                  <label class="col-sm-1">Alamat Pemborong</label>

                  <div class="col-sm-6">
                    <textarea type="text" class="form-control" id="alamat" name="alamat" readonly><?php echo $get_detail[0]->mrk_alamatkon?></textarea>
                  </div>
                </div>

              </div><!--end of body-->

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">No Rujukan</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="norujuk" name="norujuk"value="<?php echo $get_detail[0]->df_nosebutharga?>" readonly>
                  </div>

                  <label class="col-sm-1">No Kontrak</label>

                  <div class="col-sm-5">
                    <input type="text" class="form-control" id="nokontrak" name="nokontrak" value="<?php echo $get_detail[0]->df_kodvot?>"readonly>
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">Tajuk Kerja</label>

                  <div class="col-sm-6">
                    <textarea type="text" class="form-control" id="tajukkerja" name="tajukkerja" readonly><?php echo $get_detail[0]->df_tajuk?></textarea>
                  </div>

                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">Tarikh Mula Tanggungan Kecacatan</label>

                  <div class="col-sm-2">
                    <input type="date" class="form-control" id="mulacacat" name="mulacacat" value="<?php echo $get_detail[0]->mrk_tarikhmulatanggungcacat?>" readonly>
                  </div>

                  <label class="col-sm-3">Tarikh Tamat Tanggungan Kecacatan</label>

                  <div class="col-sm-2">
                    <input type="date" class="form-control" id="cacattamat" name="cacattamat" value="<?php echo $get_detail[0]->mrk_tarikhtamattanggungcacat?>" readonly>
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">

                  <label class="col-sm-2">Gred</label>

                  <div class="col-sm-4">
                    <select type="text" class="form-control" id="gred" name="gred" placeholder="gred" readonly>
                      <option value="<?php echo $get_detail[0]->mrk_gred?>"><?php echo $get_detail[0]->mrk_gred?></option>
                      <!-- <option value="G1 | Sehingga RM200,000.00">G1 | Sehingga RM200,000.00</option>
                      <option value="G2 | RM200,001.00 Hingga RM500,000.00">G2 | RM200,001.00 Hingga RM500,000.00</option>
                      <option value="G3 | RM500,001.00 Hingga RM1 000,000.00">G3 | RM500,001.00 Hingga RM1 000,000.00</option>
                      <option value="G4 | RM1 000,001.00 Hingga RM3 000,000.00">G4 | RM1 000,001.00 Hingga RM3 000,000.00</option>
                      <option value="G5 | RM300,001.00 Hingga RM5 000,000.00">G5 | RM300,001.00 Hingga RM5 000,000.00</option>
                      <option value="G6 | RM5 000,001.00 Hingga RM10 000,000.00">G6 | RM5 000,001.00 Hingga RM10 000,000.00</option>
                      <option value="G7 | RM 10 000,001.00 Ke Atas">G7 | RM 10 000,001.00 Ke Atas</option> -->
                    </select>
                  </div>

                  <label class="col-sm-1">Kategori</label>

                  <div class="col-sm-4">
                    <select type="text" class="form-control" id="kategori" name="kategori" placeholder="kat" readonly>
                      <option value="<?php echo $get_detail[0]->mrk_kategori?>"><?php echo $get_detail[0]->mrk_kategori?></option>
                      <!-- <option value="CE | Pembinaan Kejuruteraan Awam">CE | Pembinaan Kejuruteraan Awam</option>
                      <option value="B | Pembinaan Bangunan">B | Pembinaan Bangunan</option>
                      <option value="ME | Mekanikal & Elektrikal">ME | Mekanikal & Elektrikal</option> -->
                    </select>
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">

              <label class="col-sm-2">Pengkhususan</label>

                  <div class="col-sm-4">
                    <select type="text" class="form-control" id="khusus" name="khusus" placeholder="kat" readonly>
                      <option value="<?php echo $get_detail[0]->mrk_khusus?>"><?php echo $get_detail[0]->mrk_khusus?></option>
                      <!-- <option value="CE 02 | Pembinaan Jambatan & Jeti">CE 02 | Pembinaan Jambatan & Jeti</option>
                      <option value="CE 04 | Empangan">CE 04 | Empangan</option>
                      <option value="CE 06 | Struktur saliran, pengairan dan kawalan banjir">CE 06 | Struktur saliran, pengairan dan kawalan banjir</option>
                      <option value="CE 12 | Kerja penyiasatan tanah">CE 12 | Kerja penyiasatan tanah</option>
                      <option value="CE 13 | Pemasangan papan iklan">CE 13 | Pemasangan papan iklan</option>
                      <option value="CE 14 | Landskap di luar bangunan">CE 14 | Landskap di luar bangunan</option>
                      <option value="CE 21 | Pembinaan kejuruteraan awam">CE 21 | Pembinaan kejuruteraan awam</option>
                      <option value="CE 26 | Struktur berukir (Sculptured structures)">CE 26 | Struktur berukir (Sculptured structures)</option>
                      <option value="CE 32 | Kerja-kerja penyenggaraan kejuruteraan awam">CE 32 | Kerja-kerja penyenggaraan kejuruteraan awam</option>
                      <option value="CE 33 | Telaga tiub">CE 33 | Telaga tiub</option>
                      <option value="CE 36 | Kerja-kerja tanah">CE 36 | Kerja-kerja tanah</option>
                      <option value="M 01 | Sistem hawa dingin dan pengedaran udara">M 01 | Sistem hawa dingin dan pengedaran udara</option>
                      <option value="M 15 | Kelengkapan mekanikal pelbagai">M 15 | Kelengkapan mekanikal pelbagai</option>
                      <option value="M 20 | Penyelengaraan am mekanikal">M 20 | Penyelengaraan am mekanikal</option>
                      <option value="M 22 | Sistem pam">M 22 | Sistem pam</option>
                      <option value="M 23 | Sistem SCADA dan telemetri">M 23 | Sistem SCADA dan telemetri</option>
                      <option value="E 02 | Sistem pengawasan dan keselamatan">E 02 | Sistem pengawasan dan keselamatan</option>
                      <option value="E 07 | Sistem telekomunikasi dalaman">E 07 | Sistem telekomunikasi dalaman</option>
                      <option value="E 14 | Kabel rangkaian komputer">E 14 | Kabel rangkaian komputer</option>
                      <option value="B 04 | Kerja-kerja Pembinaan bangunan">B 04 | Kerja-kerja Pembinaan bangunan</option>
                      <option value="B 05 | Kerja cerucuk">B 05 | Kerja cerucuk</option>
                      <option value="B 07 | Hiasan dalaman">B 07 | Hiasan dalaman</option>
                      <option value="B 10 | Sistem paip air dalaman">B 10 | Sistem paip air dalaman</option>
                      <option value="B 15 | Pemasangan bumbung">B 15 | Pemasangan bumbung</option>
                      <option value="B 18 | Kerja-kerja logam">B 18 | Kerja-kerja logam</option>
                      <option value="B 24 | Kerja penyenggaraan bangunan">B 24 | Kerja penyenggaraan bangunan</option>
                      <option value="B 28 | Kerja-kerja ubahsuai">B 28 | Kerja-kerja ubahsuai</option> -->
                    </select>
                  </div>
                </div>
              </div>

              <hr>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-1">(a) # :</label>
                  <label class="col-sm-4">(i) ** No Kewangan Jaminan Bank/Insuran</label>

                  <div class="col-sm-3">
                    <input type="text" class="form-control" id="nokewangan" name="nokewangan" value="<?php echo $get_detail[0]->mrk_nowangjaminansatu?>" placeholder="No Kewangan Jaminan Bank/Insuran">
                  </div>

                  <label class="col-sm-1">Harga</label>

                  <div class="col-sm-2">
                    <input type="text" class="form-control" id="harga" name="harga" value="<?php echo $get_detail[0]->mrk_hargasatu?>" placeholder="RM">
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-4">(ii) ** Baki Wang Jaminan Perlaksanaan</label>

                  <div class="col-sm-2">
                    <input type="text" class="form-control" id="bakiwangjaminan" name="bakiwangjaminan" value="<?php echo $get_detail[0]->mrk_bakiwangjamin?>" placeholder="RM">
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-1">(b) # :</label>
                  <label class="col-sm-4">(i) ** No Kewangan Jaminan Bank/Insuran</label>

                  <div class="col-sm-2">
                    <input type="text" class="form-control" id="nokewangan" name="nokewangan" value="<?php echo $get_detail[0]->mrk_nowangjaminandua?>" placeholder="No Kewangan Jaminan Bank/Insuran">
                  </div>

                  <label class="col-sm-1">Harga</label>

                  <div class="col-sm-2">
                    <input type="text" class="form-control" id="harga1" name="harga1" placeholder="RM" value="<?php echo $get_detail[0]->mrk_hargadua?>">
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-4">** Wang Jaminan Perlaksanaan</label>

                  <div class="col-sm-2">
                    <input type="text" class="form-control" id="wangjaminan" name="wangjaminan" value="<?php echo $get_detail[0]->mrk_wangjaminlaksana?>" placeholder="RM">
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-4">(ii) ** Tambahan Kos Bon Perlaksanaan</label>

                  <div class="col-sm-2">
                    <input type="text" class="form-control" id="kosbon" name="kosbon" value="<?php echo $get_detail[0]->mrk_tambahbonlaksana?>" placeholder="RM">
                  </div>

                  <label class="col-sm-2">Pegawai Penguasa</label>

                  <div class="col-sm-3">
                    <input type="text" class="form-control" id="pegawai" name="pegawai" value="<?php echo $get_detail[0]->mrk_pegawaipenguasa?>" placeholder="Pegawai Penguasa">
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-1"></label>
                  <label class="col-sm-4">** Baki Kos Bon Perlaksanaan</label>

                  <div class="col-sm-2">
                    <input type="text" class="form-control" id="bakibon" name="bakibon" placeholder="RM" value="<?php echo $get_detail[0]->mrk_bakibonlaksana?>">
                  </div>

                  <label class="col-sm-2">Jawatan</label>

                  <div class="col-sm-3">
                    <input type="text" class="form-control" id="jawatan" name="jawatan" value="<?php echo $get_detail[0]->mrk_jawatanpp?>" placeholder="Jawatan">
                    <input type="hidden" name="kodvods" value="<?php echo $get_detail[0]->df_kodvot?>">
                    <input type="hidden" name="indenno" value="<?php echo $get_detail[0]->mrk_noinden?>">
                    <input type="hidden" name="mrkid" value="<?php echo $get_detail[0]->mrksatu_id?>">
                  </div>
                </div>
              </div>

              <div class="box-footer">
                <div class="form-group">
                <div class="col-md-2">
                <button type="submit" name="submit" class="btn btn-primary">Save</button>

              </div>
              <div class="col-md-6">
                  <a href="<?php echo site_url('Report/Report_MRK/'.$get_detail[0]->projek_id) ?>" class="btn btn-success" role="button">Print</a>
                    <a href="<?php echo site_url('mrk/Senarai_Semak/'.$get_detail[0]->projek_id) ?>" class="btn btn-warning" role="button">Senarai Semakan</a>

                  <a href="<?php echo site_url('mrk/Jaminan_Bank/'.$get_detail[0]->projek_id) ?>" class="btn btn-info" role="button">Pelepasan Jaminan Bank</a>
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
