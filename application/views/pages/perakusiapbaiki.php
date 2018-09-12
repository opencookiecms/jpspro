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

          <form  method="post" action="<?php echo site_url('daftar/rekodkerja'); ?>">
            <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">Perakuan Siap Membaiki Kecacatan</h3>
              </div><!-- end of box header-->
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">Nama Pemborong</label>

                  <div class="col-sm-3">
                    <input type="text" class="form-control" id="nokontr" placeholder="Nama Pemborong" required>
                  </div>

                  <label class="col-sm-1">Alamat Pemborong</label>

                  <div class="col-sm-6">
                    <textarea type="text" class="form-control" id="alamat" placeholder="Alamat"></textarea>
                  </div>
                </div>

              </div><!--end of body-->

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">No Rujukan</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="norujuk" placeholder="no Rujukan">
                  </div>

                  <label class="col-sm-1">No Kontrak</label>

                  <div class="col-sm-5">
                    <input type="text" class="form-control" id="nokontrak" placeholder="No Kontrak">
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">Tajuk Kerja</label>

                  <div class="col-sm-6">
                    <textarea type="text" class="form-control" id="tajukkerja" placeholder="Tajuk Kerja"></textarea>
                  </div>

                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">Tarikh Mula Tanggungan Kecacatan</label>

                  <div class="col-sm-2">
                    <input type="date" class="form-control" id="mula cacat">
                  </div>

                  <label class="col-sm-3">Tarikh Tamat Tanggungan Kecacatan</label>

                  <div class="col-sm-2">
                    <input type="date" class="form-control" id="cacattamat">
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">

                  <label class="col-sm-1">Gred</label>

                  <div class="col-sm-4">
                    <select type="text" class="form-control" id="peruntukan" placeholder="gred">
                      <option value="g1">G1 | Sehingga RM200,000.00</option>
                      <option value="g2">G2 | RM200,001.00 Hingga RM500,000.00</option>
                      <option value="g3">G3 | RM500,001.00 Hingga RM1 000,000.00</option>
                      <option value="g4">G4 | RM1 000,001.00 Hingga RM3 000,000.00</option>
                      <option value="g5">G5 | RM300,001.00 Hingga RM5 000,000.00</option>
                      <option value="g6">G6 | RM5 000,001.00 Hingga RM10 000,000.00</option>
                      <option value="g7">G7 | RM 10 000,001.00 Ke Atas</option>
                    </select>
                  </div>

                  <label class="col-sm-1">Kategori</label>

                  <div class="col-sm-4">
                    <select type="text" class="form-control" id="kategori" placeholder="kat">
                      <option value="g4">CE | Pembinaan Kejuruteraan Awam</option>
                      <option value="g5">B | Pembinaan Bangunan</option>
                      <option value="g6">ME | Mekanikal & Elektrikal</option>
                    </select>
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">

              <label class="col-sm-2">Pengkhususan</label>

                  <div class="col-sm-4">
                    <select type="text" class="form-control" id="kategori" placeholder="kat">
                      <option value="g4">CE 02 | Pembinaan Jambatan & Jeti</option>
                      <option value="g5">CE 04 | Empangan</option>
                      <option value="g6">CE 06 | Struktur saliran, pengairan dan kawalan banjir</option>
                      <option value="g4">CE 12 | Kerja penyiasatan tanah</option>
                      <option value="g5">CE 13 | Pemasangan papan iklan</option>
                      <option value="g6">CE 14 | Landskap di luar bangunan</option>
                      <option value="g4">CE 21 | Pembinaan kejuruteraan awam</option>
                      <option value="g5">CE 26 | Struktur berukir (Sculptured structures)</option>
                      <option value="g6">CE 32 | Kerja-kerja penyenggaraan kejuruteraan awam</option>
                      <option value="g4">CE 33 | Telaga tiub</option>
                      <option value="g5">CE 36 | Kerja-kerja tanah</option>
                      <option value="g6">M 01 | Sistem hawa dingin dan pengedaran udara</option>
                      <option value="g6">M 15 | Kelengkapan mekanikal pelbagai</option>
                      <option value="g6">M 20 | Penyelengaraan am mekanikal</option>
                      <option value="g6">M 22 | Sistem pam</option>
                      <option value="g6">M 23 | Sistem SCADA dan telemetri</option>
                      <option value="g6">E 02 | Sistem pengawasan dan keselamatan</option>
                      <option value="g6">E 07 | Sistem telekomunikasi dalaman</option>
                      <option value="g6">E 14 | Kabel rangkaian komputer</option>
                      <option value="g6">B 04 | Kerja-kerja Pembinaan bangunan</option>
                      <option value="g6">B 05 | Kerja cerucuk</option>
                      <option value="g6">B 07 | Hiasan dalaman</option>
                      <option value="g6">B 10 | Sistem paip air dalaman</option>
                    </select>
                  </div>
                </div>
              </div>

              <hr>

              <div class="box-footer">
                <button type="submit" name="submit" class="btn btn-default">Simpan</button>
                <a href="<?php echo site_url('mrk/jaminanbank') ?>" class="btn btn-info" role="button">Pelepasan Jaminan Bank</a>
              </div>
            </div>
          </form>  
        </div>
      </div><!--end of row-->


    </section>
    <!-- /.content -->
    
  </div>
  <!-- /.content-wrapper -->
