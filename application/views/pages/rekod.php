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

          <?php echo form_open('mrk/rekodkerja'); ?>
            <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">Maklumat Rekod Kerja - MRK 01</h3>
              </div><!-- end of box header-->
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">No Pendaftaran PKK</label>

                  <div class="col-sm-3">
                    <input type="text" class="form-control" id="nopkk" name="nopkk" placeholder="No Pendaftaran PKK" required>
                  </div>
                  <label class="col-sm-1">Gred</label>

                  <div class="col-sm-4">
                    <select type="text" class="form-control" id="gred" name="gred" placeholder="gred">
                      <option value="g1">G1 | Sehingga RM200,000.00</option>
                      <option value="g2">G2 | RM200,001.00 Hingga RM500,000.00</option>
                      <option value="g3">G3 | RM500,001.00 Hingga RM1 000,000.00</option>
                      <option value="g4">G4 | RM1 000,001.00 Hingga RM3 000,000.00</option>
                      <option value="g5">G5 | RM300,001.00 Hingga RM5 000,000.00</option>
                      <option value="g6">G6 | RM5 000,001.00 Hingga RM10 000,000.00</option>
                      <option value="g7">G7 | RM 10 000,001.00 Ke Atas</option>
                    </select>
                  </div>
                </div>

              </div><!--end of body-->

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-1">Nama Kontraktor</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="namakon" name="namakon" placeholder="Nama Kontraktor">
                  </div>

                  <label class="col-sm-1">Alamat</label>

                  <div class="col-sm-5">
                    <textarea type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat"></textarea>
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-1">No Kontrak</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="nokon" name="nokon" placeholder="No Kontrak">
                  </div>

                  <label class="col-sm-2">No Inden/Pesanan tempatan</label>

                  <div class="col-sm-5">
                    <input type="text" class="form-control" id="noinden" name="noinden" placeholder="No Inden">
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-1">Tajuk Kerja</label>

                  <div class="col-sm-6">
                    <textarea type="text" class="form-control" id="tajukkerjamrk" name="tajukkerjamrk" placeholder="Tajuk Kerja"></textarea>
                  </div>

                  <label class="col-sm-1">Kategori</label>

                  <div class="col-sm-4">
                    <select type="text" class="form-control" id="kategori" name="kategori" placeholder="kat">
                      <option value="CE">CE | Pembinaan Kejuruteraan Awam</option>
                      <option value="B">B | Pembinaan Bangunan</option>
                      <option value="ME">ME | Mekanikal & Elektrikal</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-1">Daerah</label>

                  <div class="col-sm-2">
                    <select type="text" class="form-control" id="daerah" name="daerah">
                      <option value="kuala muda">Kuala Muda</option>
                      <option value="sik">Sik</option>
                      <option value="baling">Baling</option>
                    </select>
                  </div>

                  <label class="col-sm-1">Negeri</label>

                  <div class="col-sm-2">
                    <select type="text" class="form-control" id="negeri" name="negeri">
                      <option value="kedah">Kedah</option>
                      <option value="perlis">Perlis</option>
                      <option value="pulau pinang">Pulau Pinang</option>
                      <option value="perak">Perak</option>
                    </select>
                  </div>

                  <label class="col-sm-2">Pengkhususan</label>

                  <div class="col-sm-4">
                    <select type="text" class="form-control" id="khusus" placeholder="khusus" name="khusus">
                      <option value="CE 02">CE 02 | Pembinaan Jambatan & Jeti</option>
                      <option value="CE 04">CE 04 | Empangan</option>
                      <option value="CE 06">CE 06 | Struktur saliran, pengairan dan kawalan banjir</option>
                      <option value="CE 12">CE 12 | Kerja penyiasatan tanah</option>
                      <option value="CE 13">CE 13 | Pemasangan papan iklan</option>
                      <option value="CE 14">CE 14 | Landskap di luar bangunan</option>
                      <option value="CE 21">CE 21 | Pembinaan kejuruteraan awam</option>
                      <option value="CE 26">CE 26 | Struktur berukir (Sculptured structures)</option>
                      <option value="CE 32">CE 32 | Kerja-kerja penyenggaraan kejuruteraan awam</option>
                      <option value="CE 33">CE 33 | Telaga tiub</option>
                      <option value="CE 36">CE 36 | Kerja-kerja tanah</option>
                      <option value="M 01">M 01 | Sistem hawa dingin dan pengedaran udara</option>
                      <option value="M 15">M 15 | Kelengkapan mekanikal pelbagai</option>
                      <option value="M 20">M 20 | Penyelengaraan am mekanikal</option>
                      <option value="M 22">M 22 | Sistem pam</option>
                      <option value="M 23">M 23 | Sistem SCADA dan telemetri</option>
                      <option value="E 02">E 02 | Sistem pengawasan dan keselamatan</option>
                      <option value="E 07">E 07 | Sistem telekomunikasi dalaman</option>
                      <option value="E 14">E 14 | Kabel rangkaian komputer</option>
                      <option value="B 04">B 04 | Kerja-kerja Pembinaan bangunan</option>
                      <option value="B 05">B 05 | Kerja cerucuk</option>
                      <option value="B 07">B 07 | Hiasan dalaman</option>
                      <option value="B 10">B 10 | Sistem paip air dalaman</option>
                    </select>
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">Tarikh Mula Kontrak</label>

                  <div class="col-sm-2">
                    <input type="date" class="form-control" id="tarikhmulakon" name="tarikhmulakon" placeholder="Tarikh Mula Kontrak">
                  </div>

                  <label class="col-sm-3">Tarikh Jangka Siap Kontrak</label>

                  <div class="col-sm-2">
                    <input type="date" class="form-control" id="tarikhjangka" name="tarikhjangka">
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-1">Pegawai</label>
                  <div class="col-sm-3">
                    <select type="text" class="form-control" id="pegawai" name="pegawai">
                      <option value="mr">Mohamad Ridzam B. Jusoh</option>
                      <option value="ns">Nazar Shah B. Awang</option>
                      <option value="s">Shuhel B. Mohd Saad</option>
                      <option value="a">Azhar B. Ahmadd</option>
                      <option value="sa">Shahriful Azhar B. Mohd. Hassan</option>
                      <option value="mt">Mohd. Tarmizi B. Taib</option>
                      <option value="ki">Ku Izham B. Ku Din</option>
                      <option value="n">Noorzita Bt. Mustaffa</option>
                      <option value="hs">Haji Shukri B. Man</option>
                      <option value="o">Othman B. Shariff</option>
                      <option value="iz">Intan Zahida Bt. Abu Bakar</option>
                      <option value="j">Jamil B. Ahmad</option>
                      <option value="rs">Rosli B. Shaari</option>
                      <option value="ri">Roshidi B. Ismail</option>
                      <option value="sa">Shaari Bin Abdullah</option>
                      <option value="hy">Hafizah Binti Yahaya</option>
                      <option value="mr">Mohamed Radzi Bin Ishak</option>
                      <option value="jma">Juhari Bin Md. Ali</option>
                      <option value="ja">Johari Bin Ali</option>
                    </select>
                  </div>

                  <label class="col-sm-1">Jawatan</label>

                  <div class="col-sm-3">
                    <select type="text" class="form-control" id="jawatan" name="jawatan">
                      <option value="mtk">Merinyu Taliair Kanan</option>
                      <option value="pjj">Penolong Jurutera JA29</option>
                      <option value="pjja">Penolong Jurutera JA36</option>
                      <option value="jkms">Jurutera ( Kuala Muda/Sik )</option>
                      <option value="jb">Jurutera ( Baling )</option>
                      <option value="jd">Jurutera Daerah</option>
                      <option value="pja">Penolong Jurutera JA38</option>
                    </select>
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">Kos Projek (RM)</label>

                  <div class="col-sm-2">
                    <input type="text" class="form-control" id="kosprojek" name="kosprojek" placeholder="RM">
                  </div>

                  <label class="col-sm-1">Tarikh</label>

                  <div class="col-sm-3">
                    <input type="date" class="form-control" id="tarikh" name="tarikh">
                  </div>
                </div>
              </div>

              <div class="box-footer">
                <button type="submit" name="submit" class="btn btn-default">Simpan</button>
                <a href="<?php echo site_url('mrk/rekodkerjadua') ?>" class="btn btn-info" role="button">MRK - 02</a>
              </div>
            </div>
          </form>  
        </div>
      </div><!--end of row-->


    </section>
    <!-- /.content -->
    
  </div>
  <!-- /.content-wrapper -->
