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
                <h3 class="box-title">Maklumat Rekod Kerja - MRK 02</h3>
              </div><!-- end of box header-->
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">No Pendaftaran PKK</label>

                  <div class="col-sm-3">
                    <input type="text" class="form-control" id="nopkk" placeholder="No Pendaftaran PKK" required>
                  </div>

                  <label class="col-sm-1">Nama Kontraktor</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="namakon" placeholder="Nama Kontraktor">
                  </div>
                </div>

              </div><!--end of body-->

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">No Inden/Pesanan tempatan</label>

                  <div class="col-sm-5">
                    <input type="text" class="form-control" id="noinden" placeholder="No Inden">
                  </div>

                  <label class="col-sm-2">Kos Projek (RM)</label>

                  <div class="col-sm-2">
                    <input type="text" class="form-control" id="kosprojek" placeholder="RM">
                  </div> 
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-1">No Kontrak</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="nokon" placeholder="No Kontrak">
                  </div>

                  <label class="col-sm-1">Tarikh Mula Kontrak</label>

                  <div class="col-sm-2">
                    <input type="date" class="form-control" id="tarikhmulakon" placeholder="Tarikh Mula Kontrak">
                  </div>

                  <label class="col-sm-2">Tarikh Jangka Siap Kontrak</label>

                  <div class="col-sm-2">
                    <input type="date" class="form-control" id="tarikhjangka">
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-1">Tajuk Kerja</label>

                  <div class="col-sm-8">
                    <textarea type="text" class="form-control" id="tajukkerjamrk" placeholder="Tajuk Kerja"></textarea>
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <div class="box-header with-border">
                  <h3 class="box-title">Laporan Kemajuan Kerja Fizikal</h3>
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-3">Kemajuan Kerja Mengikut Jadual:</label>

                  <div class="col-sm-1">
                    <input type="text" class="form-control" id="ikutjadual">
                  </div>

                  <label class="col-sm-3">Kemajuan Kerja Sebenar(Semasa) Sehingga</label>

                  <div class="col-sm-2">
                    <input type="text" class="form-control" id="kerjasebenar">
                  </div>

                  <label class="col-sm-1">=</label>

                  <div class="col-sm-2">
                    <input type="text" class="form-control" id="kerjasebenarsatu">
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">


                  <label class="col-sm-3">Bayaran Kemajuan Semasa  NO:</label>

                  <div class="col-sm-1">
                    <input type="text" class="form-control" id="bayarmaju">
                  </div>

                  <label class="col-sm-3">Jumlah Bayaran Kemajuan (RM):</label>

                  <div class="col-sm-2">
                    <input type="text" class="form-control" id="jumlahbayarmaju">
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <div class="box-header with-border">
                  <h3 class="box-title">Kerja Tergendala Kerana Masalah: Tandakan ( / ) Pada Ruang Berkenaan.</h3>
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-1">Modal</label>
                  <input type="checkbox" name="vehicle1" value="modal">
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">Disebabkan Oleh : </label>

                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="sebab">
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">Lain-Lain )Nyatakan) : </label>

                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="lainlain">
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">Lanjutan Masa Ke : </label>

                  <div class="col-sm-1">
                    <input type="text" class="form-control" id="masa">
                  </div>

                  <label class="col-sm-1">Dari: </label>

                  <div class="col-sm-3">
                    <input type="text" class="form-control" id="dari">
                  </div>

                  <label class="col-sm-1">Sehingga </label>

                  <div class="col-sm-3">
                    <input type="text" class="form-control" id="sehingga">
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">Disebabkan : </label>

                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="disebab">
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">L. A. D Dikenakan RM </label>

                  <div class="col-sm-2">
                    <input type="text" class="form-control" id="rm" placeholder="RM/Sehari">
                  </div>

                  <label class="col-sm-1">Dari: </label>

                  <div class="col-sm-2">
                    <input type="date" class="form-control" id="dari">
                  </div>

                  <label class="col-sm-1">Sehingga</label>

                  <div class="col-sm-2">
                    <input type="date" class="form-control" id="disebab">
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">Perakuan Kerja Tidak Siap Dikeluarkan Pada :</label>

                  <div class="col-sm-2">
                    <input type="date" class="form-control" id="tarikhperaku">
                  </div>

                  <label class="col-sm-2">Projek Mansuh/Ditamat:</label>

                  <div class="col-sm-2">
                    <input type="date" class="form-control" id="projekmansuh">
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-1">Pegawai</label>

                  <div class="col-sm-3">
                    <input type="text" class="form-control" id="pegawai">
                  </div>

                  <label class="col-sm-1">Jawatan</label>

                  <div class="col-sm-2">
                    <input type="text" class="form-control" id="jawatan">
                  </div>

                  <label class="col-sm-2">Tarikh Laporan</label>

                  <div class="col-sm-2">
                    <input type="date" class="form-control" id="tarikhlaporan">
                  </div>
                </div>
              </div>

              <div class="box-footer">
                <button type="submit" name="submit" class="btn btn-default">Simpan</button>
                <a href="<?php echo site_url('daftar/laporansiapkerja') ?>" class="btn btn-info" role="button">Laporan Siap Kerja</a>
              </div>
            </div>
          </form>  
        </div>
      </div><!--end of row-->


    </section>
    <!-- /.content -->
    
  </div>
  <!-- /.content-wrapper -->
