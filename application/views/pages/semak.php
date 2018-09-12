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
                <h3 class="box-title">Senarai Semakan</h3>
              </div><!-- end of box header-->
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">Surat Tuntutan</label>
                  <input type="checkbox" name="surat" value="suratl">
                </div>
  
                <div class="form-group">
                  <label class="col-sm-2">Inden/Nota Minta</label>
                  <input type="checkbox" name="inden" value="inden">
                </div>

                <div class="form-group">
                  <label class="col-sm-2">Laporan Siap Kerja</label>
                  <input type="checkbox" name="siap" value="siap">
                </div>

                <div class="form-group">
                  <label class="col-sm-2">Salinan Sijil PKK</label>
                  <input type="checkbox" name="sijil" value="sijil">
                </div>

                <div class="form-group">
                  <label class="col-sm-2">Salinan Sijil CIDB</label>
                  <input type="checkbox" name="cidb" value="cidb">
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">Disediakan Oleh :</label>
                  <div class="col-sm-3">
                    <select type="text" class="form-control" id="sedia">
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

                  <label class="col-sm-2">Tarikh Penyediaan</label>

                  <div class="col-sm-2">
                    <input type="date" class="form-control" id="tarikhsedia">
                  </div>
                </div>
              </div>

              

              <div class="box-footer">
                <button type="submit" name="submit" class="btn btn-default">Simpan</button>
                <a href="<?php echo site_url('mrk/siapbaiki') ?>" class="btn btn-info" role="button">Perakuan Siap Membaiki</a>
              </div>
            </div>
          </form>  
        </div>
      </div><!--end of row-->


    </section>
    <!-- /.content -->
    
  </div>
  <!-- /.content-wrapper -->
