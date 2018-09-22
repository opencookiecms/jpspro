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
                <h3 class="box-title">Laporan Siap Kerja</h3>
              </div><!-- end of box header-->
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">No Pendaftaran PKK</label>

                  <div class="col-sm-3">
                    <input type="text" class="form-control" id="nopkk" name="nopkk" placeholder="No Pendaftaran PKK">
                  </div>

                  <label class="col-sm-1">Nama Pemborong</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="namapem" name="namapem" placeholder="Nama Pemborong">
                  </div>
                </div>

              </div><!--end of body-->

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-1">Alamat</label>

                  <div class="col-sm-7">
                    <textarea type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat"></textarea>
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-1">No Sebutharga</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="nosebut" name="nosebut" placeholder="No Sebutharga">
                  </div>

                  <label class="col-sm-2">No Pesanan Kerja</label>

                  <div class="col-sm-5">
                    <input type="text" class="form-control" id="nopesanan" name="nopesanan" placeholder="No Pesanan Kerja">
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">Harga Pesanan RM</label>

                  <div class="col-sm-2">
                    <input type="text" class="form-control" id="hargapesanan" name="hargapesanan" placeholder="RM">
                  </div>

                  <label class="col-sm-2">Harga Sebenar RM</label>

                  <div class="col-sm-2">
                    <input type="text" class="form-control" id="hargasebenar" name="hargasebenar" placeholder="RM">
                  </div>
                </div>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">Tarikh Permulaan Kerja</label>

                  <div class="col-sm-2">
                    <input type="date" class="form-control" id="tarikhmula" name="tarikhmula">
                  </div>

                  <label class="col-sm-2">Tarikh Kerja Tamat</label>

                  <div class="col-sm-2">
                    <input type="date" class="form-control" id="tarikhtamat" name="tarikhtamat">
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">Tarikh Dilanjutkan Masa</label>

                  <div class="col-sm-3">
                    <input type="date" class="form-control" id="tariklanjut" name="tariklanjut">
                  </div>

                  <label class="col-sm-3">Tarikh Kerja Siap Sempurna</label>

                  <div class="col-sm-3">
                    <input type="date" class="form-control" id="tarikhkerjasempurna" name="tarikhkerjasempurna">
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">Peruntukan</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="peruntukan" name="peruntukan">
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <div class="box-header with-border">
                  <h3 class="box-title">Laporan Pegawai Penjaga</h3>
                  </div>
                  <div class="col-sm-11">
                    <textarea type="text" class="form-control" id="laporanpegawai" name="laporanpegawai"></textarea>
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-1">Pegawai</label>
                  <div class="col-sm-3">
                    <select type="text" class="form-control" id="pegawaiselia" name="pegawaiselia">
                      <option value="Mohamad Ridzam B. Jusoh">Mohamad Ridzam B. Jusoh</option>
                      <option value="Nazar Shah B. Awang">Nazar Shah B. Awang</option>
                      <option value="Shuhel B. Mohd Saad">Shuhel B. Mohd Saad</option>
                      <option value="Azhar B. Ahmad">Azhar B. Ahmad</option>
                      <option value="Shahriful Azhar B. Mohd. Hassan">Shahriful Azhar B. Mohd. Hassan</option>
                      <option value="Mohd. Tarmizi B. Taib">Mohd. Tarmizi B. Taib</option>
                      <option value="Ku Izham B. Ku Din">Ku Izham B. Ku Din</option>
                      <option value="Noorzita Bt. Mustaffa">Noorzita Bt. Mustaffa</option>
                      <option value="Haji Shukri B. Man">Haji Shukri B. Man</option>
                      <option value="Othman B. Shariff">Othman B. Shariff</option>
                      <option value="Intan Zahida Bt. Abu Bakar">Intan Zahida Bt. Abu Bakar</option>
                      <option value="Jamil B. Ahmad">Jamil B. Ahmad</option>
                      <option value="Rosli B. Shaari">Rosli B. Shaari</option>
                      <option value="Roshidi B. Ismail">Roshidi B. Ismail</option>
                      <option value="Shaari Bin Abdullah">Shaari Bin Abdullah</option>
                      <option value="Hafizah Binti Yahaya">Hafizah Binti Yahaya</option>
                      <option value="Mohamed Radzi Bin Ishak">Mohamed Radzi Bin Ishak</option>
                      <option value="Juhari Bin Md. Ali">Juhari Bin Md. Ali</option>
                      <option value="Johari Bin Ali">Johari Bin Ali</option>
                    </select>
                  </div>

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
      
                  <label class="col-sm-2">Tarikh Diperakui</label>

                  <div class="col-sm-2">
                    <input type="date" class="form-control" id="tarikhperakui" name="tarikhperakui">
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-1">Ketua Bahagian</label>
                  <div class="col-sm-3">
                    <select type="text" class="form-control" id="ketua" name="ketua">
                      <option value="Mohd. Amin B. Ahmad">Mohd. Amin B. Ahmad</option>
                      <option value="Yahaya B. Shariff">Yahaya B. Shariff</option>
                    </select>
                  </div>

                  <label class="col-sm-1">Jawatan</label>

                  <div class="col-sm-3">
                    <select type="text" class="form-control" id="jawatan1" name="jawatan1">
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

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-1">Jurutera J41/J44</label>
                  <div class="col-sm-3">
                    <select type="text" class="form-control" id="juruj" name="juruj">
                      <option value="Khairul Anuar B. Abd. Rashid">Khairul Anuar B. Abd. Rashid</option>
                      <option value="Mohd. Daud Hamid">Mohd. Daud Hamid</option>
                      <option value="Hasan bin Abdul Majid">Hasan bin Abdul Majid</option>
                      <option value="Ir Siti Norazela binti Hasan">Ir Siti Norazela binti Hasan</option>
                      <option value="Nur Syuhada Binti Ahmad">Nur Syuhada Binti Ahmad</option>
                    </select>
                  </div>

                  <label class="col-sm-1">Jawatan</label>

                  <div class="col-sm-3">
                    <select type="text" class="form-control" id="jawatan2" name="jawatan2">
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

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-1">Jurutera Daerah</label>
                  <div class="col-sm-3">
                    <select type="text" class="form-control" id="jurudaerah" name="jurudaerah">
                      <option value="Idris B. Yussof">Idris B. Yussof</option>
                      <option value="Zainuddin bin Yusoff, AMP., BCK">Zainuddin bin Yusoff, AMP., BCK</option>
                      <option value="Kamarudin Bin Saleh">Kamarudin Bin Saleh</option>
                      <option value="Nor Rozaini BT. Abdullah">Nor Rozaini BT. Abdullah</option>
                    </select>
                  </div>

                  <label class="col-sm-1">Jawatan</label>

                  <div class="col-sm-3">
                    <select type="text" class="form-control" id="jawatan3" name="jawatan3">
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

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">W.C/PERKESO</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="perkeso" name="perkeso">
                  </div>

                  <label class="col-sm-2">Public Liability</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="publiability" name="publiability">
                  </div>
                </div>
              </div>

              <div class="box-footer">
                <button type="submit" name="submit" class="btn btn-default">Simpan</button>
                <a href="<?php echo site_url('mrk/rekodkerjatiga') ?>" class="btn btn-info" role="button">MRK - 03</a>
              </div>
            </div>
          </form>  
        </div>
      </div><!--end of row-->


    </section>
    <!-- /.content -->
    
  </div>
  <!-- /.content-wrapper -->
