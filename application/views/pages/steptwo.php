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
        <!--<form  method="POST" action="?php echo site_url('Insert_steptwo/submit') ?>">-->
        <h2><?php echo $title; ?></h2>
        <?php echo $idval; ?>

        <?php echo validation_errors(); ?>

        <?php echo form_open('daftar/stepdua'); ?>
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Daftar</h3>
            </div>
            <div class="box-body">
              <div class="form-group">
                <label class="col-sm-2">Kategori Pendaftaran</label>
                <label class="col-sm-1">Gred</label>

                <div class="col-sm-2">
                  <input type="text" class="form-control" name="gred" placeholder="Gred">
                  <input type="hidden" class="form-control" name="dp_idpost" value="<?php echo $idval;?>">
                </div>
                <label class="col-sm-1">Kategori</label>

                <div class="col-sm-1">
                  <input type="text" class="form-control" name="kategori" placeholder="Kategori">
                </div>
                <label class="col-sm-2">Pengkhususan</label>

                <div class="col-sm-1">
                  <input type="text" class="form-control"name="khusus" placeholder="Pengkhususan">
                </div>

                <label class="col-sm-1">Taraf</label>

                <div class="col-sm-1">
                  <input type="text" class="form-control"  name="taraf" placeholder="Taraf">
                </div>
              </div>

            </div><!--end of body-->

            <div class="box-body">
              <div class="form-group">
                <label class="col-sm-2">Tempoh Siap Kerja</label>

                <div class="col-sm-2">
                  <input type="text" class="form-control"  name="tempoh" placeholder="Tempoh Siap Kerja">
                </div>
              </div>
            </div>

            <div class="box-body">
              <div class="form-group">
                <label class="col-sm-3">Harga Dokumen Sebutharga</label>

                <div class="col-sm-2">
                  <input type="text" class="form-control"name="doc" placeholder="Harga Dokumen">
                </div>
              </div>
            </div>

            <div class="box-body">
              <div class="form-group">
                <label class="col-sm-3">Tarikh Notis Dikeluarkan</label>

                <div class="col-sm-2">
                  <input type="date" class="form-control" name="notiskeluar" >
                </div>
              </div>
            </div>

            <div class="box-body">
              <div class="form-group">
                <label class="col-sm-3">Tarikh Lawat Tapak/Taklimat</label>

                <div class="col-sm-2">
                  <input type="date" class="form-control"name="lawattapak">
                </div>
              </div>
            </div>

            <div class="box-body">
              <div class="form-group">
                <label class="col-sm-3">Tarikh Dokumen Mula Dijual</label>

                <div class="col-sm-2">
                  <input type="date" class="form-control" name="docmula">
                </div>
              </div>
            </div>

            <div class="box-body">
              <div class="form-group">
                <label class="col-sm-3">Tarikh Akhir Dokumen Dijual</label>

                <div class="col-sm-2">
                  <input type="date" class="form-control" name="docakhir">
                </div>
              </div>
            </div>

            <div class="box-body">
              <div class="form-group">
                <label class="col-sm-3">Tarikh Sebutharga Ditutup</label>

                <div class="col-sm-2">
                  <input type="date" class="form-control"  name="sebuttutup">
                </div>
              </div>
            </div>

            <div class="box-body">
              <div class="form-group">
                <label class="col-sm-3">Jurutera Daerah</label>

                <div class="col-sm-4">
                  <input type="text" class="form-control"  name="juruterakanan" placeholder="Jurutera Daerah">
                </div>
              </div>
            </div>

            <div class="box-body">
              <div class="form-group">
                <label class="col-sm-3">Jurutera</label>

                <div class="col-sm-4">
                  <input type="text" class="form-control"  name="jurutera" placeholder="Jurutera">
                </div>
              </div>
            </div>

            <div class="box-body">
              <div class="form-group">
                <label class="col-sm-3">Penolong Jurutera Kanan J36</label>

                <div class="col-sm-4">
                  <input type="text" class="form-control"  name="penolongkanan" placeholder="Penolong Kanan J36">
                </div>
              </div>
            </div>

            <div class="box-body">
              <div class="form-group">
                <label class="col-sm-3">Penolong Jurutera JA29</label>

                <div class="col-sm-4">
                  <input type="text" class="form-control" name="penolong" placeholder="Penolong Jurutera JA29">
                </div>
              </div>
            </div>

            <div class="box-body">
              <div class="form-group">
                <label class="col-sm-3">Vot</label>

                <div class="col-sm-4">
                  <input type="text" class="form-control"  name="vot" placeholder="Vot">
                </div>

                <label class="col-sm-2">Peruntukan</label>

                <div class="col-sm-2">
                  <select type="text" class="form-control"  name="peruntukan" placeholder="Negeri">
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
                  <input type="text" class="form-control"  name="baki" placeholder="Baki Peruntukan Semasa">
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