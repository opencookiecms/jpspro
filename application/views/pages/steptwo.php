  <!-- Content Wrapper. Contains page content -->
  <style>
    .error {color: #FF0000;}
  </style>

  <div class="content-wrapper b">
    <!-- Content Header (Page header)
    <section class="content-header">
      <center>
        <h1>
          Daftar Projek
        </h1>
      </center>
    </section>
    -->
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
        <h2 class="f"><?php echo $title; ?></h2>
        <?php echo $idval; ?>

        <?php echo validation_errors(); ?>

        <?php echo form_open('daftar/stepdua'); ?>
        <div class="box box-info">
          <div class="box-header with-border">
            <h3 class="box-title">Daftar</h3>
          </div>

          <h5><span class="error"> * Dikehendaki mengisi semua bahagian</span></h5>

          <div class="box-body">
            <div class="form-group">
              <input type="hidden" class="form-control" name="dp_idpost" value="<?php echo $idval;?>">
              <label class="col-sm-2">Kategori Pendaftaran</label>

              <label class="col-sm-1"></label>

              <label class="col-sm-1">Gred</label>

              <div class="col-sm-2">
                <select type="text" class="form-control" name="gred" placeholder="Gred">

                  <option value="G1">G1</option>
                  <option value="G2">G2</option>
                  <option value="G3">G3</option>
                  <option value="G4">G4</option>
                  <option value="G5">G5</option>
                  <option value="G6">G6</option>
                  <option value="G7">G7</option>
                </select>
              </div>

              <label class="col-sm-1"></label>
              <label class="col-sm-1">Kategori</label>

              <div class="col-sm-2">
                <select type="text" class="form-control" name="kategori" placeholder="Kategori">
                  <option value="CE | Pembinaan Kejuruteraan Awam">CE</option>
                  <option value="B | Pembinaan Bangunan">B</option>
                  <option value="ME | Mekanikal & Elektrikal">ME</option>
                </select>
              </div>
            </div>

          </div><!--end of body-->

          <div class="box-body">
            <div class="form-group">

              <label class="col-sm-2">Pengkhususan</label>

              <div class="col-sm-1">
                <input type="text" class="form-control" name="khusus">
              </div>
              <div class="col-sm-1">
                <input type="text" class="form-control" name="khusus">
              </div>
              <div class="col-sm-1">
                <input type="text" class="form-control" name="khusus">
              </div>

              <label class="col-sm-2"></label>
              <label class="col-sm-1">Taraf</label>

              <div class="col-sm-2">
                <select type="text" class="form-control"  name="taraf" placeholder="Taraf">
                  <option value="Bumiputera">Bumiputera</option>
                  <option value="Bukan Bumiputera">Bukan Bumiputera</option>
                </select>
              </div>
            </div>
          </div>

          <div class="box-body">
            <div class="form-group">

              <label class="col-sm-2">Tempoh Siap Kerja</label>

              <div class="col-sm-1">
                <input type="text" class="form-control"  name="tempoh" placeholder="Minggu">
              </div>
              <label class="col-sm-1">Minggu</label>
              <div class="col-sm-1">
                <input type="text" class="form-control"  name="tempoh" placeholder="Bulan">
              </div>
              <label class="col-sm-1">Bulan</label>
            </div>
          </div>

          <div class="box-body">
            <div class="form-group">
              <label class="col-sm-3">Harga Dokumen Sebutharga (RM)</label>

              <div class="col-sm-2">
                <input type="text" class="form-control"name="doc" placeholder="Harga Dokumen">
              </div>
              <label class="col-sm-3">(Minimum RM10 | Maximum RM50)</label>
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
                <select type="text" class="form-control"  name="juruterakanan" placeholder="Jurutera Daerah">
                  <option value="Idris B. Yussof">Idris B. Yussof</option>
                  <option value="Zainuddin bin Yusoff, AMP., BCK">Zainuddin bin Yusoff, AMP., BCK</option>
                  <option value="Kamarudin Bin Saleh">Kamarudin Bin Saleh</option>
                  <option value="Nor Rozaini BT. Abdullah">Nor Rozaini BT. Abdullah</option>
                </select>
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
              <label class="col-sm-3">Penolong Jurutera Kanan JA36</label>

              <div class="col-sm-4">
                <input type="text" class="form-control"  name="penolongkanan" placeholder="Penolong Kanan JA36">
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
              <label class="col-sm-3">Peruntukan Semasa (RM)</label>

              <div class="col-sm-4">
                <input type="text" class="form-control"  name="baki" placeholder="Peruntukan Semasa">
              </div>
            </div>
          </div>

          <div class="box-footer">
            <button type="submit" name="submit" class="btn btn-default">Seterusnya</button>


          </div>
        </div>
      </form>
    </div>
  </div><!--end of row-->


</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
