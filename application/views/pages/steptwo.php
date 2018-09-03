  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <center>
        <h1>
          Daftar Projek
        </h1>
      </center>
    </section>
    <br>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-lg-12">
        <form  method="post" action="<?php echo base_url('pages/steptwo'); ?>">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Daftar</h3>
            </div><!-- end of box header-->
            <div class="box-body">
              <div class="form-group">
                <label class="col-sm-2">Kategori Pendaftaran</label>
                <label class="col-sm-1">Gred</label>

                <div class="col-sm-2">
                  <input type="text" class="form-control" id="gred" placeholder="Gred">
                </div>
                <label class="col-sm-1">Kategori</label>

                <div class="col-sm-1">
                  <input type="date" class="form-control" id="kategori" placeholder="Kategori">
                </div>
                <label class="col-sm-2">Pengkhususan</label>

                <div class="col-sm-1">
                  <input type="text" class="form-control" id="khusus" placeholder="Pengkhususan">
                </div>

                <label class="col-sm-1">Taraf</label>

                <div class="col-sm-1">
                  <input type="text" class="form-control" id="taraf" placeholder="Taraf">
                </div>
              </div>

            </div><!--end of body-->
            
            <div class="box-body">
              <div class="form-group">
                <label class="col-sm-2">Tempoh Siap Kerja</label>

                <div class="col-sm-2">
                  <input type="text" class="form-control" id="tempoh" placeholder="Tempoh Siap Kerja">
                </div>
              </div>
            </div>

            <div class="box-body">
              <div class="form-group">
                <label class="col-sm-3">Harga Dokumen Sebutharga</label>

                <div class="col-sm-2">
                  <input type="text" class="form-control" id="tempoh" placeholder="Harga Dokumen">
                </div>
              </div>
            </div>

            <div class="box-body">
              <div class="form-group">
                <label class="col-sm-3">Tarikh Notis Dikeluarkan</label>

                <div class="col-sm-2">
                  <input type="date" class="form-control" id="notiskeluar">
                </div>
              </div>
            </div>

            <div class="box-body">
              <div class="form-group">
                <label class="col-sm-3">Tarikh Lawat Tapak/Taklimat</label>

                <div class="col-sm-2">
                  <input type="date" class="form-control" id="lawattapak">
                </div>
              </div>
            </div>

            <div class="box-body">
              <div class="form-group">
                <label class="col-sm-3">Tarikh Dokumen Mula Dijual</label>

                <div class="col-sm-2">
                  <input type="date" class="form-control" id="docmula">
                </div>
              </div>
            </div>

            <div class="box-body">
              <div class="form-group">
                <label class="col-sm-3">Tarikh Akhir Dokumen Dijual</label>

                <div class="col-sm-2">
                  <input type="date" class="form-control" id="docakhir">
                </div>
              </div>
            </div>

            <div class="box-body">
              <div class="form-group">
                <label class="col-sm-3">Tarikh Sebutharga Ditutup</label>

                <div class="col-sm-2">
                  <input type="date" class="form-control" id="sebuttutup">
                </div>
              </div>
            </div>

            <div class="box-body">
              <div class="form-group">
                <label class="col-sm-3">Jurutera Daerah</label>

                <div class="col-sm-4">
                  <input type="text" class="form-control" id="juruterakanan" placeholder="Jurutera Daerah">
                </div>
              </div>
            </div>

            <div class="box-body">
              <div class="form-group">
                <label class="col-sm-3">Jurutera</label>

                <div class="col-sm-4">
                  <input type="text" class="form-control" id="jurutera" placeholder="Jurutera">
                </div>
              </div>
            </div>

            <div class="box-body">
              <div class="form-group">
                <label class="col-sm-3">Penolong Jurutera Kanan J36</label>

                <div class="col-sm-4">
                  <input type="text" class="form-control" id="penolongkanan" placeholder="Penolong Kanan J36">
                </div>
              </div>
            </div>

            <div class="box-body">
              <div class="form-group">
                <label class="col-sm-3">Penolong Jurutera JA29</label>

                <div class="col-sm-4">
                  <input type="text" class="form-control" id="penolong" placeholder="Penolong Jurutera JA29">
                </div>
              </div>
            </div>

            <div class="box-body">
              <div class="form-group">
                <label class="col-sm-3">Vot</label>

                <div class="col-sm-4">
                  <input type="text" class="form-control" id="vot" placeholder="Vot" required>
                </div>

                <label class="col-sm-2">Peruntukan</label>

                <div class="col-sm-2">
                  <select type="text" class="form-control" id="peruntukan" placeholder="Negeri">
                    <option value="negeri">Negeri</option>
                    <option value="persekutuan">Persekutuan</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="box-body">
              <div class="form-group">
                <label class="col-sm-3">Baki Peruntukan Semasa</label>

                <div class="col-sm-4">
                  <input type="text" class="form-control" id="baki" placeholder="Baki Peruntukan Semasa">
                </div>
              </div>
            </div>

            <div class="box-footer">
            <button type="submit" name-"insert" class="btn btn-default">Simpan</button>
            <a href="<?php echo site_url('daftar/steptiga') ?>" class="btn btn-info" role="button">Seterusnya</a>

            </div>
          </div>
        </form>  
        </div>
      </div><!--end of row-->


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
