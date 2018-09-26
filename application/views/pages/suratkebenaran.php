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

          <?php echo form_open('surat/suratkebenaran'); ?>
            <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">Surat Kebenaran Khas</h3>
              </div><!-- end of box header-->

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">Rujukan Tuan</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="rujuktuan" name="rujuktuan" placeholder="Rujukan Tuan">
                  </div>

                  <label class="col-sm-2">Rujukan Kami</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="rujukkami" name="rujukkami" placeholder="Rujukan Kami">
                  </div>
                </div>

              </div>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">Nama Kontraktor</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="namakon" name="namakon" placeholder="Nama Kontraktor">
                  </div>

                  <label class="col-sm-2">No Sebutharga</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="nosebutharga" name="nosebutharga" placeholder="No Sebutharga">
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">

                  <label class="col-sm-2">Tajuk Projek</label>

                  <div class="col-sm-5">
                    <textarea type="text" class="form-control" id="tajukprojek" name="tajukprojek" placeholder="Tajuk Projek"></textarea>
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">

                  <label class="col-sm-2"></label>
                  <label class="col-sm-1">Gred</label>

                  <div class="col-sm-1">
                    <select type="text" class="form-control" id="gred" name="gred" placeholder="gred">
                      <option value="G1 | Sehingga RM200,000.00">G1</option>
                      <option value="G2 | RM200,001.00 Hingga RM500,000.00">G2</option>
                      <option value="G3 | RM500,001.00 Hingga RM1 000,000.00">G3</option>
                      <option value="G4 | RM1 000,001.00 Hingga RM3 000,000.00">G4</option>
                      <option value="G5 | RM300,001.00 Hingga RM5 000,000.00">G5</option>
                      <option value="G6 | RM5 000,001.00 Hingga RM10 000,000.00">G6</option>
                      <option value="G7 | RM 10 000,001.00 Ke Atas">G7</option>
                    </select>
                  </div>

                  <label class="col-sm-1">Kategori</label>

                  <div class="col-sm-1">
                    <select type="text" class="form-control" id="kategori" name="kategori" placeholder="kat">
                      <option value="CE | Pembinaan Kejuruteraan Awam">CE</option>
                      <option value="B | Pembinaan Bangunan">B</option>
                      <option value="ME | Mekanikal & Elektrikal">ME</option>
                    </select>
                  </div>

                  <label class="col-sm-2">Pengkhususan</label>

                  <div class="col-sm-4">
                    <select type="text" class="form-control" id="khusus" name="khusus" placeholder="kat">
                      <option value="CE 02 | Pembinaan Jambatan & Jeti">CE 02 | Pembinaan Jambatan & Jeti</option>
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
                      <option value="B 28 | Kerja-kerja ubahsuai">B 28 | Kerja-kerja ubahsuai</option>
                    </select>
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">

                  <label class="col-sm-2"></label>

                  <label class="col-sm-2">Pegawai Penguasa</label>

                  <div class="col-sm-3">
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
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">

                  <label class="col-sm-2"></label>


                  <label class="col-sm-1">Jawatan</label>

                  <div class="col-sm-3">
                    <select type="text" class="form-control" id="jawatan" name="jawatan">
                      <option value="Merinyu Taliair Kanan">Merinyu Taliair Kanan</option>
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
