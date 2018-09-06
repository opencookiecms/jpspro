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
                    <input type="text" class="form-control" id="nopkk" placeholder="No Pendaftaran PKK" required>
                  </div>

                  <label class="col-sm-1">Nama Pemborong</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="namapem" placeholder="Nama Pemborong">
                  </div>
                </div>

              </div><!--end of body-->

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-1">Alamat</label>

                  <div class="col-sm-7">
                    <textarea type="text" class="form-control" id="alamat" placeholder="Alamat"></textarea>
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-1">No Sebutharga</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="nosebut" placeholder="No Sebutharga">
                  </div>

                  <label class="col-sm-2">No Pesanan Kerja</label>

                  <div class="col-sm-5">
                    <input type="text" class="form-control" id="nopesanan" placeholder="No Pesanan Kerja">
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">Harga Pesanan RM</label>

                  <div class="col-sm-2">
                    <input type="text" class="form-control" id="hargapesanan" placeholder="RM">
                  </div>

                  <label class="col-sm-2">Harga Sebenar RM</label>

                  <div class="col-sm-2">
                    <input type="text" class="form-control" id="hargasebenar" placeholder="RM">
                  </div>
                </div>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">Tarikh Permulaan Kerja</label>

                  <div class="col-sm-2">
                    <input type="date" class="form-control" id="tarikhmula">
                  </div>

                  <label class="col-sm-2">Tarikh Kerja Tamat</label>

                  <div class="col-sm-2">
                    <input type="date" class="form-control" id="tarikhtamat">
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">Tarikh Dilanjutkan Masa</label>

                  <div class="col-sm-3">
                    <input type="date" class="form-control" id="tariklanjut">
                  </div>

                  <label class="col-sm-3">Tarikh Kerja Siap Sempurna</label>

                  <div class="col-sm-3">
                    <input type="date" class="form-control" id="tarikhkerjasempurna">
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">Peruntukan</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="peruntukan">
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <div class="box-header with-border">
                  <h3 class="box-title">Laporan Pegawai Penjaga</h3>
                  </div>
                  <div class="col-sm-11">
                    <textarea type="text" class="form-control" id="laporanpegawai"></textarea>
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-1">Pegawai</label>
                  <div class="col-sm-3">
                    <select type="text" class="form-control" id="pegawaiselia">
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
      
                  <label class="col-sm-2">Tarikh Diperakui</label>

                  <div class="col-sm-2">
                    <input type="date" class="form-control" id="tarikhperakui">
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-1">Ketua Bahagian</label>
                  <div class="col-sm-3">
                    <select type="text" class="form-control" id="ketua">
                      <option value="km">Mohd. Amin B. Ahmad</option>
                      <option value="s">Yahaya B. Shariff</option>
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
                  <label class="col-sm-1">Jurutera J41/J44</label>
                  <div class="col-sm-3">
                    <select type="text" class="form-control" id="juruj">
                      <option value="km">Khairul Anuar B. Abd. Rashid</option>
                      <option value="s">Mohd. Daud Hamid</option>
                      <option value="km">Hasan bin Abdul Majid</option>
                      <option value="s">Ir Siti Norazela binti Hasan</option>
                      <option value="s">Nur Syuhada Binti Ahmad</option>
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
                  <label class="col-sm-1">Jurutera Daerah</label>
                  <div class="col-sm-3">
                    <select type="text" class="form-control" id="jurudaerah">
                      <option value="km">Idris B. Yussof</option>
                      <option value="s">Zainuddin bin Yusoff, AMP., BCK</option>
                      <option value="km">KAMARUDIN BIN SALEH</option>
                      <option value="s">NOR ROZAINI BT. ABDULLAH</option>
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
                  <label class="col-sm-2">W.C/PERKESO</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="perkeso">
                  </div>

                  <label class="col-sm-2">Public Liability</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="publiability">
                  </div>
                </div>
              </div>

              <div class="box-footer">
                <button type="submit" name="submit" class="btn btn-default">Simpan</button>
                <a href="<?php echo site_url('daftar/rekodkerjatiga') ?>" class="btn btn-info" role="button">MRK - 03</a>
              </div>
            </div>
          </form>  
        </div>
      </div><!--end of row-->


    </section>
    <!-- /.content -->
    
  </div>
  <!-- /.content-wrapper -->
