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

        <?php if (isset($_SESSION['success'])) { ?>
          <div class="alert alert-success"> <?php echo $_SESSION['success']; ?></div>
        <?php
          } ?>
        <?php //echo validation_errors('<div class="alert alert-danger">', '</div'); ?>  
        <form  method="POST" action="<?php echo site_url('Insert_steptwo/submit') ?>">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Daftar</h3>
            </div>
            <div class="box-body">
              <div class="form-group">
                <label class="col-sm-2">Kategori Pendaftaran</label>
                <label class="col-sm-1">Gred</label>

                <div class="col-sm-2">
                  <input type="text" class="form-control" id="gred" name="gred" placeholder="Gred" required="required">
                </div>
                <label class="col-sm-1">Kategori</label>

                <div class="col-sm-1">
                  <input type="text" class="form-control" id="kategori" name="kategori" placeholder="Kategori" required="required">
                </div>
                <label class="col-sm-2">Pengkhususan</label>

                <div class="col-sm-1">
                  <input type="text" class="form-control" id="khusus" name="khusus" placeholder="Pengkhususan" required="required">
                </div>

                <label class="col-sm-1">Taraf</label>

                <div class="col-sm-1">
                  <input type="text" class="form-control" id="taraf" name="taraf" placeholder="Taraf" required="required">
                </div>
              </div>

            </div><!--end of body-->
            
            <div class="box-body">
              <div class="form-group">
                <label class="col-sm-2">Tempoh Siap Kerja</label>

                <div class="col-sm-2">
                  <input type="text" class="form-control" id="tempoh" name="tempoh" placeholder="Tempoh Siap Kerja" required="required">
                </div>
              </div>
            </div>

            <div class="box-body">
              <div class="form-group">
                <label class="col-sm-3">Harga Dokumen Sebutharga</label>

                <div class="col-sm-2">
                  <input type="text" class="form-control" id="doc" name="doc" placeholder="Harga Dokumen" required="required">
                </div>
              </div>
            </div>

            <div class="box-body">
              <div class="form-group">
                <label class="col-sm-3">Tarikh Notis Dikeluarkan</label>

                <div class="col-sm-2">
                  <input type="date" class="form-control" id="notiskeluar" name="notiskeluar" required="required">
                </div>
              </div>
            </div>

            <div class="box-body">
              <div class="form-group">
                <label class="col-sm-3">Tarikh Lawat Tapak/Taklimat</label>

                <div class="col-sm-2">
                  <input type="date" class="form-control" id="lawattapak" name="lawattapak" required="required">
                </div>
              </div>
            </div>

            <div class="box-body">
              <div class="form-group">
                <label class="col-sm-3">Tarikh Dokumen Mula Dijual</label>

                <div class="col-sm-2">
                  <input type="date" class="form-control" id="docmula" name="docmula" required="required">
                </div>
              </div>
            </div>

            <div class="box-body">
              <div class="form-group">
                <label class="col-sm-3">Tarikh Akhir Dokumen Dijual</label>

                <div class="col-sm-2">
                  <input type="date" class="form-control" id="docakhir" name="docakhir" required="required">
                </div>
              </div>
            </div>

            <div class="box-body">
              <div class="form-group">
                <label class="col-sm-3">Tarikh Sebutharga Ditutup</label>

                <div class="col-sm-2">
                  <input type="date" class="form-control" id="sebuttutup" name="sebuttutup" required="required">
                </div>
              </div>
            </div>

            <div class="box-body">
              <div class="form-group">
                <label class="col-sm-3">Jurutera Daerah</label>

                <div class="col-sm-4">
                  <input type="text" class="form-control" id="juruterakanan" name="juruterakanan" placeholder="Jurutera Daerah" required="required">
                </div>
              </div>
            </div>

            <div class="box-body">
              <div class="form-group">
                <label class="col-sm-3">Jurutera</label>

                <div class="col-sm-4">
                  <input type="text" class="form-control" id="jurutera" name="jurutera" placeholder="Jurutera" required="required">
                </div>
              </div>
            </div>

            <div class="box-body">
              <div class="form-group">
                <label class="col-sm-3">Penolong Jurutera Kanan J36</label>

                <div class="col-sm-4">
                  <input type="text" class="form-control" id="penolongkanan" name="penolongkanan" placeholder="Penolong Kanan J36" required="required">
                </div>
              </div>
            </div>

            <div class="box-body">
              <div class="form-group">
                <label class="col-sm-3">Penolong Jurutera JA29</label>

                <div class="col-sm-4">
                  <input type="text" class="form-control" id="penolong" name="penolong" placeholder="Penolong Jurutera JA29" required="required">
                </div>
              </div>
            </div>

            <div class="box-body">
              <div class="form-group">
                <label class="col-sm-3">Vot</label>

                <div class="col-sm-4">
                  <input type="text" class="form-control" id="vot" name="vot" placeholder="Vot" required="required">
                </div>

                <label class="col-sm-2">Peruntukan</label>

                <div class="col-sm-2">
                  <select type="text" class="form-control" id="peruntukan" name="peruntukan" placeholder="Negeri" required="required">
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
                  <input type="text" class="form-control" id="baki" name="baki" placeholder="Baki Peruntukan Semasa" required="required">
                </div>
              </div>
            </div>

            <div class="box-footer">
            <button type="submit" name-"insert" class="btn btn-default">Seterusnya</button>

            </div>
          </div>
        </form>  
        </div>
      </div><!--end of row-->


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
