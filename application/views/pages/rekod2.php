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

          <?php echo form_open('mrk/rekodkerjadua'); ?>
            <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">Maklumat Rekod Kerja - MRK 02</h3>
              </div><!-- end of box header-->
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">No Pendaftaran PKK</label>

                  <div class="col-sm-3">
                    <input type="text" class="form-control" id="nopkk" name="nopkk" placeholder="No Pendaftaran PKK">
                  </div>

                  <label class="col-sm-1">Nama Kontraktor</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="namakon" name="namakon" placeholder="Nama Kontraktor">
                  </div>
                </div>

              </div><!--end of body-->

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">No Inden/Pesanan tempatan</label>

                  <div class="col-sm-5">
                    <input type="text" class="form-control" id="noinden" name="noinden" placeholder="No Inden">
                  </div>

                  <label class="col-sm-2">Kos Projek (RM)</label>

                  <div class="col-sm-2">
                    <input type="text" class="form-control" id="kosprojek" name="kosprojek" placeholder="RM">
                  </div> 
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-1">No Kontrak</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="nokon" name="nokon" placeholder="No Kontrak">
                  </div>

                  <label class="col-sm-1">Tarikh Mula Kontrak</label>

                  <div class="col-sm-2">
                    <input type="date" class="form-control" id="tarikhmulakon" name="tarikhmulakon" placeholder="Tarikh Mula Kontrak">
                  </div>

                  <label class="col-sm-2">Tarikh Jangka Siap Kontrak</label>

                  <div class="col-sm-2">
                    <input type="date" class="form-control" id="tarikhjangka" name="tarikhjangka">
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-1">Tajuk Kerja</label>

                  <div class="col-sm-8">
                    <textarea type="text" class="form-control" id="tajukkerjamrk" name="tajukkerjamrk" placeholder="Tajuk Kerja"></textarea>
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
                    <input type="text" class="form-control" id="ikutjadual" name="ikutjadual">
                  </div>

                  <label class="col-sm-3">Kemajuan Kerja Sebenar(Semasa) Sehingga</label>

                  <div class="col-sm-2">
                    <input type="text" class="form-control" id="kerjasebenar" name="kerjasebenar">
                  </div>

                  <label class="col-sm-1">=</label>

                  <div class="col-sm-2">
                    <input type="text" class="form-control" id="kerjasebenarsatu" name="kerjasebenarsatu">
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">


                  <label class="col-sm-3">Bayaran Kemajuan Semasa  NO:</label>

                  <div class="col-sm-1">
                    <input type="text" class="form-control" id="bayarmaju" name="bayarmaju">
                  </div>

                  <label class="col-sm-3">Jumlah Bayaran Kemajuan (RM):</label>

                  <div class="col-sm-2">
                    <input type="text" class="form-control" id="jumlahbayarmaju" name="jumlahbayarmaju">
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
                  <input type="checkbox" name="modal" value="modal">
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">Disebabkan Oleh : </label>

                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="sebab" name="sebab">
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">Lain-Lain (Nyatakan) : </label>

                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="lainlain" name="lainlain">
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">Lanjutan Masa Ke : </label>

                  <div class="col-sm-1">
                    <input type="text" class="form-control" id="masa" name="masa">
                  </div>

                  <label class="col-sm-1">Dari: </label>

                  <div class="col-sm-3">
                    <input type="text" class="form-control" id="dari" name="dari">
                  </div>

                  <label class="col-sm-1">Sehingga </label>

                  <div class="col-sm-3">
                    <input type="text" class="form-control" id="sehingga" name="sehingga">
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">Disebabkan : </label>

                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="disebab" name="disebab">
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">L. A. D Dikenakan RM </label>

                  <div class="col-sm-2">
                    <input type="text" class="form-control" id="rm" name="rm" placeholder="RM/Sehari">
                  </div>

                  <label class="col-sm-1">Dari: </label>

                  <div class="col-sm-2">
                    <input type="date" class="form-control" id="dari2" name="dari2">
                  </div>

                  <label class="col-sm-1">Sehingga</label>

                  <div class="col-sm-2">
                    <input type="date" class="form-control" id="sehingga1" name="sehingga1">
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">Perakuan Kerja Tidak Siap Dikeluarkan Pada :</label>

                  <div class="col-sm-2">
                    <input type="date" class="form-control" id="tarikhperaku" name="tarikhperaku">
                  </div>

                  <label class="col-sm-2">Projek Mansuh/Ditamat:</label>

                  <div class="col-sm-2">
                    <input type="date" class="form-control" id="projekmansuh" name="projekmansuh">
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-1">Pegawai</label>

                  <div class="col-sm-3">
                    <input type="text" class="form-control" id="pegawai" name="pegawai">
                  </div>

                  <label class="col-sm-1">Jawatan</label>

                  <div class="col-sm-2">
                    <input type="text" class="form-control" id="jawatan" name="jawatan">
                  </div>

                  <label class="col-sm-2">Tarikh Laporan</label>

                  <div class="col-sm-2">
                    <input type="date" class="form-control" id="tarikhlaporan" name="tarikhlaporan">
                  </div>
                </div>
              </div>

              <div class="box-footer">
                <button type="submit" name="submit" class="btn btn-default">Simpan</button>
                <a href="<?php echo site_url('mrk/laporansiapkerja') ?>" class="btn btn-info" role="button">Laporan Siap Kerja</a>
              </div>
            </div>
          </form>  
        </div>
      </div><!--end of row-->


    </section>
    <!-- /.content -->
    
  </div>
  <!-- /.content-wrapper -->
