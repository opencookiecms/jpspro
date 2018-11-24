  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header)
    <section class="content-header">
      <center>
        <h1>
          Maklumat Rekod Kerja
        </h1>
      </center>
    </section>
    -->
    <br>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-lg-12">

            <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">Senarai Semakan</h3>
              </div><!-- end of box header-->

                        <?php echo form_open('mrk/senaraisemak');?>
              <div class="box-body">
                <div class="form-group">
                  <div class="col-sm-3">
                    <label style="margin-right:20px;font-size:12px;">Surat Tuntutan</label>
                    <input type="checkbox" name="chk1" value="1">
                  </div>

                  <div class="col-sm-3">
                    <label style="margin-right:20px;font-size:12px;">Keputusan Panel</label>
                    <input type="checkbox" name="chk2" value="1">
                  </div>
                  <div class="col-sm-3">
                    <label style="margin-right:20px;font-size:12px;">Surat Tawaran Kerja</label>
                    <input type="checkbox" name="chk3" value="1">
                  </div>

                </div>


              </div>

              <div class="box-body">
                <div class="form-group">
                  <div class="col-sm-3">
                    <label style="margin-right:20px;font-size:12px;">Inden / No Minta</label>
                    <input type="checkbox" name="chk4" value="1">
                  </div>


                  <div class="col-sm-3">
                    <label style="margin-right:20px;font-size:12px;">Perakuan Siap Kerja</label>
                    <input type="checkbox" name="chk5" value="1">
                  </div>
                  <div class="col-sm-3">
                    <label style="margin-right:20px;font-size:12px;">Detail Butiran Tawaran Terus</label>
                    <input type="checkbox" name="chk6" value="1">
                  </div>

                </div>


              </div>

              <div class="box-body">
                <div class="form-group">
                  <div class="col-sm-3">
                    <label style="margin-right:20px;font-size:12px;">Laporan Siap Kerja</label>
                    <input type="checkbox" name="chk7" value="1">
                  </div>

                  <div class="col-sm-3">
                    <label style="margin-right:20px;font-size:12px;">Salinan Penyata Bank</label>
                    <input type="checkbox" name="chk8" value="1">
                  </div>
                  <div class="col-sm-3">
                    <label style="margin-right:20px;font-size:12px;">Perakuan Perubahan Kerja</label>
                    <input type="checkbox" name="chk9" value="1">
                  </div>

                </div>


              </div>

              <div class="box-body">
                <div class="form-group">
                  <div class="col-sm-3">
                    <label style="margin-right:20px;font-size:12px;">Salinan Sijil PKK</label>
                    <input type="checkbox" name="chk10" value="1">
                  </div>

                  <div class="col-sm-3">
                    <label style="margin-right:20px;font-size:12px;">Surat Akaun Sumpah</label>
                    <input type="checkbox" name="chk11" value="1">
                  </div>
                  <div class="col-sm-3">
                    <label style="margin-right:20px;font-size:12px;">Borang MRK03</label>
                    <input type="checkbox" name="chk12" value="1">
                  </div>

                </div>


              </div>

              <div class="box-body">
                <div class="form-group">
                  <div class="col-sm-3">
                    <label style="margin-right:20px;font-size:12px;">Salinan Sijil CIDB</label>
                    <input type="checkbox" name="chk13" value="1">
                  </div>

                  <div class="col-sm-3">
                    <label style="margin-right:20px;font-size:12px;">Gambar</label>
                    <input type="checkbox" name="chk14" value="1">
                  </div>


                </div>


              </div>

              <div class="box-body">
                <div class="col-md-12">
                  <span>Bon Perlaksaanan</span>
                </div>
                <div class="form-group">
                  <div class="col-sm-3">
                    <label style="margin-right:20px;font-size:12px;">Jaminan Bank/ Insurans</label>
                    <input type="checkbox" name="chk15" value="1">
                  </div>

                  <div class="col-sm-3">
                    <label style="margin-right:20px;font-size:12px;">Wang Jaminan Perlaksanaan</label>
                    <input type="checkbox" name="chk16" value="1">
                  </div>


                </div>


              </div>


                            <div class="box-body">
                              <div class="col-md-12">
                                <span>Polisi Insurans</span>
                              </div>
                              <div class="form-group">
                                <div class="col-sm-3">
                                  <label style="margin-right:20px;font-size:12px;">Publik Liabiliti</label>
                                  <input type="checkbox" name="chk17" value="1">
                                </div>

                                <div class="col-sm-3">
                                  <label style="margin-right:20px;font-size:12px;">Workman/Compasation/PERKESO</label>
                                  <input type="checkbox" name="chk18" value="1">
                                </div>


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
                <a href="<?php echo site_url('Report/Report_SS/20') ?>" class="btn btn-success" role="button" target="_blank">Cetak</a>

              </div>
            </div>
          </form>
        </div>
      </div><!--end of row-->


    </section>
    <!-- /.content -->

  </div>
  <!-- /.content-wrapper -->
