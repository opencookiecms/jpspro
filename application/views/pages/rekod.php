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
                <h3 class="box-title">Maklumat Rekod Kerja - MRK 01</h3>
              </div><!-- end of box header-->
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">No Pendaftaran PKK</label>

                  <div class="col-sm-3">
                    <input type="text" class="form-control" id="nopkk" placeholder="No Pendaftaran PKK" required>
                  </div>
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
                </div>

              </div><!--end of body-->

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-1">Nama Kontraktor</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="namakon" placeholder="Nama Kontraktor">
                  </div>

                  <label class="col-sm-1">Alamat</label>

                  <div class="col-sm-5">
                    <textarea type="text" class="form-control" id="alamat" placeholder="Alamat"></textarea>
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-1">No Kontrak</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="nokon" placeholder="No Kontrak">
                  </div>

                  <label class="col-sm-2">No Inden/Pesanan tempatan</label>

                  <div class="col-sm-5">
                    <input type="text" class="form-control" id="noinden" placeholder="No Inden">
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-1">Tajuk Kerja</label>

                  <div class="col-sm-6">
                    <textarea type="text" class="form-control" id="tajukkerjamrk" placeholder="Tajuk Kerja"></textarea>
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
                  <label class="col-sm-1">Daerah</label>

                  <div class="col-sm-2">
                    <select type="text" class="form-control" id="daerah">
                      <option value="km">Kuala Muda</option>
                      <option value="s">Sik</option>
                      <option value="b">Baling</option>
                    </select>
                  </div>

                  <label class="col-sm-1">Negeri</label>

                  <div class="col-sm-2">
                    <select type="text" class="form-control" id="negeri">
                      <option value="km">Kedah</option>
                      <option value="s">Perlis</option>
                      <option value="b">Pulau Pinang</option>
                      <option value="b">Perak</option>
                    </select>
                  </div>

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

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">Tarikh Mula Kontrak</label>

                  <div class="col-sm-3">
                    <input type="date" class="form-control" id="tarikhmulakon" placeholder="Tarikh Mula Kontrak">
                  </div>

                  <label class="col-sm-3">Tarikh Jangka Siap Kontrak</label>

                  <div class="col-sm-3">
                    <input type="date" class="form-control" id="tarikhjangka">
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-1">Pegawai</label>
                  <div class="col-sm-3">
                    <select type="text" class="form-control" id="negeri">
                      <option value="km">Mohamad Ridzam B. Jusoh</option>
                      <option value="s">Nazar Shah B. Awang</option>
                      <option value="b">Shuhel B. Mohd Saad</option>
                      <option value="b">Azhar B. Ahmadd</option>
                      <option value="km">Shahriful Azhar B. Mohd. Hassan</option>
                      <option value="s">Mohd. Tarmizi B. Taib</option>
                      <option value="b">Ku Izham B. Ku Din</option>
                      <option value="b">Noorzita Bt. Mustaffa</option>
                      <option value="km">Haji Shukri B. Man</option>
                      <option value="s">Othman B. Shariff</option>
                      <option value="b">Intan Zahida Bt. Abu Bakar</option>
                      <option value="b">Jamil B. Ahmad</option>
                      <option value="b">Rosli B. Shaari</option>
                      <option value="km">Roshidi B. Ismail</option>
                      <option value="s">Shaari Bin Abdullah</option>
                      <option value="b">Hafizah Binti Yahaya</option>
                      <option value="b">Mohamed Radzi Bin Ishak</option>
                      <option value="b">Juhari Bin Md. Ali</option>
                      <option value="b">Johari Bin Ali</option>
                    </select>
                  </div>

                  <label class="col-sm-1">Jawatan</label>

                  <div class="col-sm-3">
                    <select type="text" class="form-control" id="jawatan">
                      <option value="km">Merinyu Taliair Kanan</option>
                      <option value="s">Penolong Jurutera JA29</option>
                      <option value="b">Penolong Jurutera JA36</option>
                      <option value="b">Jurutera ( Kuala Muda/Sik )</option>
                      <option value="s">Jurutera ( Baling )</option>
                      <option value="b">Jurutera Daerah</option>
                      <option value="b">Penolong Jurutera JA38</option>
                    </select>
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">Kos Projek (RM)</label>

                  <div class="col-sm-2">
                    <input type="text" class="form-control" id="kosprojek" placeholder="RM">
                  </div>

                  <label class="col-sm-1">Tarikh</label>

                  <div class="col-sm-3">
                    <input type="date" class="form-control" id="tarikh">
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
