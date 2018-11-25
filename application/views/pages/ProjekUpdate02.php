<!-- Content Wrapper. Contains page content -->
<style>
  .error {color: #FF0000;}
</style>

<div class="content-wrapper b">
  <!-- Content Header (Page header) -->
  <section class="content-header">

      <h1 class="f">
        Kemaskini Sebut Harga
      </h1>


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


      <?php echo validation_errors(); ?>

      <?php echo form_open('projek/Update_Projek02'); ?>
      <div class="box box-info">
        <div class="box-header with-border">
          <a href="<?php echo site_url("projek/Update_Projek01/" . $get_detail[0]->projek_id); ?>" class="btn btn-warning" role="button">PAGE1</a>
          <a href="<?php echo site_url("projek/Update_Projek02/" . $get_detail[0]->projek_id); ?>" class="btn btn-warning" role="button">PAGE2</a>
          <a href="<?php echo site_url("projek/Update_Projek03/" . $get_detail[0]->projek_id); ?>" class="btn btn-warning" role="button" >PAGE3</a>
        </div>

        <h5><span class="error"> * Dikehendaki mengisi semua bahagian</span></h5>
        <input type="text" name="hiddenid" value="<?php echo $get_detail[0]->dp_id?>">
        <div class="box-body">
          <div class="form-group">

            <label class="col-sm-2">Kategori Pendaftaran</label>

            <label class="col-sm-1"></label>

            <label class="col-sm-1">Gred</label>

            <div class="col-sm-2">
              <select type="text" class="form-control" name="gred" placeholder="Gred">
                <option value="<?php echo $get_detail[0]->df_gred?>"><?php echo $get_detail[0]->df_gred?></option>

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
                  <option value="<?php echo $get_detail[0]->df_kategori?>"><?php echo $get_detail[0]->df_kategori?></option>
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
              <input type="text" class="form-control" name="khusus" value="<?php echo $get_detail[0]->df_khusus?>">
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
                <option value="<?php echo $get_detail[0]->df_taraf?>"><?php echo $get_detail[0]->df_taraf?></option>
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
              <input type="text" class="form-control"  name="tempoh" value="<?php echo $get_detail[0]->df_tempohsiap?>">
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
              <input type="text" class="form-control"name="doc" placeholder="Harga Dokumen" value="<?php echo $get_detail[0]->df_hargadoc?>">
            </div>
            <label class="col-sm-3">(Minimum RM10 | Maximum RM50)</label>
          </div>
        </div>

        <div class="box-body">
          <div class="form-group">
            <label class="col-sm-3">Tarikh Notis Dikeluarkan</label>

            <div class="col-sm-2">
              <input type="date" class="form-control" name="notiskeluar" value="<?php echo $get_detail[0]->df_tarikhnotis?>" >
            </div>
          </div>
        </div>

        <div class="box-body">
          <div class="form-group">
            <label class="col-sm-3">Tarikh Lawat Tapak/Taklimat</label>

            <div class="col-sm-2">
              <input type="date" class="form-control"name="lawattapak" value="<?php echo $get_detail[0]->df_tarikhlawat?>">
            </div>
          </div>
        </div>

        <div class="box-body">
          <div class="form-group">
            <label class="col-sm-3">Tarikh Dokumen Mula Dijual</label>

            <div class="col-sm-2">
              <input type="date" class="form-control" name="docmula" value="<?php echo $get_detail[0]->df_tarikhdocmula?>">
            </div>
          </div>
        </div>

        <div class="box-body">
          <div class="form-group">
            <label class="col-sm-3">Tarikh Akhir Dokumen Dijual</label>

            <div class="col-sm-2">
              <input type="date" class="form-control" name="docakhir" value="<?php echo $get_detail[0]->df_tarikhdocakhir?>">
            </div>
          </div>
        </div>

        <div class="box-body">
          <div class="form-group">
            <label class="col-sm-3">Tarikh Sebutharga Ditutup</label>

            <div class="col-sm-2">
              <input type="date" class="form-control"  name="sebuttutup" value="<?php echo $get_detail[0]->df_tarikhtutup?>">
            </div>
          </div>
        </div>

        <div class="box-body">
          <div class="form-group">
            <label class="col-sm-3">Jurutera Daerah</label>

            <div class="col-sm-4">
              <select type="text" class="form-control"  name="juruterakanan" placeholder="Jurutera Daerah">
                <option value="<?php echo $get_detail[0]->df_juruterad?>"><?php echo $get_detail[0]->df_juruterad?></option>
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
              <input type="text" class="form-control"  name="jurutera" placeholder="Jurutera" value="<?php echo $get_detail[0]->df_jurutera?>">
            </div>
          </div>
        </div>

        <div class="box-body">
          <div class="form-group">
            <label class="col-sm-3">Penolong Jurutera Kanan JA36</label>

            <div class="col-sm-4">
              <input type="text" class="form-control"  name="penolongkanan" placeholder="Penolong Kanan JA36" value="<?php echo $get_detail[0]->df_penolongkanan?>">
            </div>
          </div>
        </div>

        <div class="box-body">
          <div class="form-group">
            <label class="col-sm-3">Penolong Jurutera JA29</label>

            <div class="col-sm-4">
              <input type="text" class="form-control" name="penolong" placeholder="Penolong Jurutera JA29" value="<?php echo $get_detail[0]->df_penolong?>">
            </div>
          </div>
        </div>

        <div class="box-body">
          <div class="form-group">
            <label class="col-sm-3">Vot</label>

            <div class="col-sm-4">
              <input type="text" class="form-control"  name="vot" placeholder="Vot" value="<?php echo $get_detail[0]->df_kodvot?>">
            </div>

            <label class="col-sm-2">Peruntukan</label>

            <div class="col-sm-2">
              <select type="text" class="form-control"  name="peruntukan" placeholder="Negeri">
                <option value="<?php echo $get_detail[0]->df_peruntukan?>"><?php echo $get_detail[0]->df_peruntukan?></option>
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
              <input type="text" class="form-control"  name="baki" placeholder="Peruntukan Semasa" value="<?php echo $get_detail[0]->df_bakiperuntukan?>">
              <input type="text" class="form-control" name="dp_idpost" value="<?php echo $get_detail[0]->projek_id?>">
            </div>
          </div>
        </div>

        <div class="box-footer">
          <button type="submit" name="submit" class="btn btn-success">Simpan</button>


        </div>
      </div>
    </form>
  </div>
</div><!--end of row-->


</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
