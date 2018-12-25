  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper b">
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

        <?php if(isset($_SESSION['success'])) { ?>
          <div class="alert alert-success"><?php echo $_SESSION['success'] ?></div>
        <?php
          } ?>
        <?php //echo validation_errors('<div class="alert alert-danger">', '</div'); ?>

        <?php echo validation_errors(); ?>

          <?php

              $pkkNo = $get_detail[0]->mrk_nopkk;
                if($pkkNo == null){
                    echo form_open('mrk/MRK_01');
                }
                else {
                  echo form_open('mrk/MRK_01_Update');
                }

          ?>
            <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">Maklumat Rekod Kerja - MRK 01  No PKK : </h3>
              </div><!-- end of box header-->
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">No Pendaftaran PKK</label>
                  <input type="hidden" name="kodvods" value="<?php echo $get_detail[0]->df_kodvot?>">
                  <input type="hidden" name="hiddenid" value="<?php echo $get_detail[0]->projek_id?>">


                  <div class="col-sm-3">
                    <input type="text" class="form-control" id="nopkk" name="nopkk" value="<?php echo $get_detail[0]->mrk_nopkk ?>" placeholder="No Pendaftaran PKK">
                        <small id="nsebutharga" class="form-text text-muted">Sila Rujuk no. pedaftaran PKK di bahagian pendaftaran kontraktor.</small>
                  </div>
                </div>

              </div><!--end of body-->

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">Nama Kontraktor</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="namakon" onkeyup="autofill()" value="<?php echo $get_detail[0]->mrk_namakon ?>"name="namakon" placeholder="Nama Kontraktor">

                  </div>
                  </div>

                  <label class="col-sm-1">No Kontrak</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="nokon" readonly name="nokon" value="<?php echo $get_detail[0]->df_nosebutharga ?>" placeholder="No Kontrak">
                      <small id="nsebutharga" class="form-text text-muted">No sebutharga.</small>
                  </div>

                </div>


              <div class="box-body">
                <div class="form-group">

                  <label class="col-sm-2">Alamat</label>

                  <div class="col-sm-4">
                    <textarea type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat"><?php echo $get_detail[0]->mrk_alamatkon ?></textarea>
                  </div>

                </div>
              </div>
              <div class="box-body">
                <div class="form-group">

                                    <label class="col-sm-2">Daerah</label>

                                    <div class="col-sm-2">
                                      <select type="text" class="form-control" id="daerah" name="daerah">
                                        <option value="<?php echo $get_detail[0]->mrk_daerah ?>"><?php echo $get_detail[0]->mrk_daerah ?></option>
                                        <option value="kuala muda">Kuala Muda</option>
                                        <option value="sik">Sik</option>
                                        <option value="baling">Baling</option>
                                      </select>
                                    </div>

                                    <label class="col-sm-1">Negeri</label>

                                    <div class="col-sm-2">
                                      <select type="text" class="form-control" id="negeri" name="negeri">
                                        <option value="<?php echo $get_detail[0]->mrk_negeri ?>"><?php echo $get_detail[0]->mrk_negeri ?></option>
                                        <option value="kedah">Kedah</option>
                                        <option value="perlis">Perlis</option>
                                        <option value="pulau pinang">Pulau Pinang</option>
                                        <option value="perak">Perak</option>
                                      </select>
                                    </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">


                  <label class="col-sm-2">No Inden/Pesanan tempatan</label>

                  <div class="col-sm-5">
                    <input type="text" class="form-control" id="noinden" value="<?php echo $get_detail[0]->mrk_noinden ?>" name="noinden"  placeholder="No Inden">
                              <small id="nsebutharga" class="form-text text-muted">Sila isikan no Inden.</small>
                  </div>

                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">Tajuk Kerja</label>

                  <div class="col-sm-6">
                    <textarea type="text" readonly  class="form-control" id="tajukkerjamrk" name="tajukkerjamrk" placeholder="Tajuk Kerja"><?php echo $get_detail[0]->df_tajuk ?></textarea>
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">

                  <label class="col-sm-2">Kategori</label>

                  <div class="col-sm-2">
                    <select type="text" class="form-control" id="kategori" name="kategori" placeholder="kat">
                      <option value="<?php echo $get_detail[0]->mrk_kategori ?>"><?php echo $get_detail[0]->mrk_kategori ?></option>
                      <option value="CE | Pembinaan Kejuruteraan Awam">CE | Pembinaan Kejuruteraan Awam</option>
                      <option value="B | Pembinaan Bangunan">B | Pembinaan Bangunan</option>
                      <option value="ME | Mekanikal & Elektrikal">ME | Mekanikal & Elektrikal</option>
                    </select>
                  </div>

                  <label class="col-sm-1">Gred</label>

                  <div class="col-sm-2">
                    <select type="text" class="form-control" id="gred" name="gred" placeholder="gred">
                      <option value="<?php echo $get_detail[0]->mrk_gred ?>"><?php echo $get_detail[0]->mrk_gred ?></option>
                      <option value="G1 | Sehingga RM200,000.00">G1 | Sehingga RM200,000.00</option>
                      <option value="G2 | RM200,001.00 Hingga RM500,000.00">G2 | RM200,001.00 Hingga RM500,000.00</option>
                      <option value="G3 | RM500,001.00 Hingga RM1 000,000.00">G3 | RM500,001.00 Hingga RM1 000,000.00</option>
                      <option value="G4 | RM1 000,001.00 Hingga RM3 000,000.00">G4 | RM1 000,001.00 Hingga RM3 000,000.00</option>
                      <option value="G5 | RM300,001.00 Hingga RM5 000,000.00">G5 | RM300,001.00 Hingga RM5 000,000.00</option>
                      <option value="G6 | RM5 000,001.00 Hingga RM10 000,000.00">G6 | RM5 000,001.00 Hingga RM10 000,000.00</option>
                      <option value="G7 | RM 10 000,001.00 Ke Atas">G7 | RM 10 000,001.00 Ke Atas</option>
                    </select>
                  </div>

                  <label class="col-sm-2">Pengkhususan</label>

                  <div class="col-sm-2">
                    <select type="text" class="form-control" id="khusus" placeholder="khusus" name="khusus">
                          <option value="<?php echo $get_detail[0]->mrk_khusus ?>"><?php echo $get_detail[0]->mrk_khusus ?></option>
                      <option value="CE 02">CE 02 | Pembinaan Jambatan & Jeti</option>
                      <option value="CE 04">CE 04 | Empangan</option>
                      <option value="CE 06">CE 06 | Struktur saliran, pengairan dan kawalan banjir</option>
                      <option value="CE 12">CE 12 | Kerja penyiasatan tanah</option>
                      <option value="CE 13">CE 13 | Pemasangan papan iklan</option>
                      <option value="CE 14">CE 14 | Landskap di luar bangunan</option>
                      <option value="CE 21">CE 21 | Pembinaan kejuruteraan awam</option>
                      <option value="CE 26">CE 26 | Struktur berukir (Sculptured structures)</option>
                      <option value="CE 32">CE 32 | Kerja-kerja penyenggaraan kejuruteraan awam</option>
                      <option value="CE 33">CE 33 | Telaga tiub</option>
                      <option value="CE 36">CE 36 | Kerja-kerja tanah</option>
                      <option value="M 01">M 01 | Sistem hawa dingin dan pengedaran udara</option>
                      <option value="M 15">M 15 | Kelengkapan mekanikal pelbagai</option>
                      <option value="M 20">M 20 | Penyelengaraan am mekanikal</option>
                      <option value="M 22">M 22 | Sistem pam</option>
                      <option value="M 23">M 23 | Sistem SCADA dan telemetri</option>
                      <option value="E 02">E 02 | Sistem pengawasan dan keselamatan</option>
                      <option value="E 07">E 07 | Sistem telekomunikasi dalaman</option>
                      <option value="E 14">E 14 | Kabel rangkaian komputer</option>
                      <option value="B 04">B 04 | Kerja-kerja Pembinaan bangunan</option>
                      <option value="B 05">B 05 | Kerja cerucuk</option>
                      <option value="B 07">B 07 | Hiasan dalaman</option>
                      <option value="B 10">B 10 | Sistem paip air dalaman</option>
                    </select>
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">Tarikh Mula Kontrak</label>

                  <div class="col-sm-3">
                    <input type="date" class="form-control" id="tarikhmulakon" value="<?php echo $get_detail[0]->mrk_tarikhmulakon ?>"name="tarikhmulakon" placeholder="Tarikh Mula Kontrak">
                  </div>

                  <label class="col-sm-3">Tarikh Jangka Siap Kontrak</label>

                  <div class="col-sm-3">
                    <input type="date" class="form-control" id="tarikhjangka" value="<?php echo $get_detail[0]->mrk_tarikhjangkasiap ?>" name="tarikhjangka">
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">Pegawai</label>
                  <div class="col-sm-3">
                    <select type="text" class="form-control" id="pegawai" name="pegawai">
                      <option value="<?php echo $get_detail[0]->mrk_pegawai ?>"><?php echo $get_detail[0]->mrk_pegawai ?></option>
                      <option value="Mohamad Ridzam B. Jusoh">Mohamad Ridzam B. Jusoh</option>
                      <option value="Nazar Shah B. Awang">Nazar Shah B. Awang</option>
                      <option value="Shuhel B. Mohd Saad">Shuhel B. Mohd Saad</option>
                      <option value="Azhar B. Ahmad">Azhar B. Ahmad</option>
                      <option value="Shahriful Azhar B. Mohd. Hassan">Shahriful Azhar B. Mohd. Hassan</option>
                      <option value="Mohd. Tarmizi B. Taib">Mohd. Tarmizi B. Taib</option>
                      <option value="Ku Izham B. Ku Din">Ku Izham B. Ku Din</option>
                      <option value="Noorzita Bt. Mustaffa">Noorzita Bt. Mustaffa</option>
                      <option value="Haji Shukri B. Man">Haji Shukri B. Man</option>
                      <option value="Othman B. Shariff">Othman B. Shariff</option>
                      <option value="Intan Zahida Bt. Abu Bakar">Intan Zahida Bt. Abu Bakar</option>
                      <option value="Jamil B. Ahmad">Jamil B. Ahmad</option>
                      <option value="Rosli B. Shaari">Rosli B. Shaari</option>
                      <option value="Roshidi B. Ismail">Roshidi B. Ismail</option>
                      <option value="Shaari Bin Abdullah">Shaari Bin Abdullah</option>
                      <option value="Hafizah Binti Yahaya">Hafizah Binti Yahaya</option>
                      <option value="Mohamed Radzi Bin Ishak">Mohamed Radzi Bin Ishak</option>
                      <option value="Juhari Bin Md. Ali">Juhari Bin Md. Ali</option>
                      <option value="Johari Bin Ali">Johari Bin Ali</option>
                    </select>
                  </div>

                  <label class="col-sm-1">Jawatan</label>

                  <div class="col-sm-3">
                    <select type="text" class="form-control" id="jawatan" name="jawatan">
                          <option value="<?php echo $get_detail[0]->mrk_jawatan ?>"><?php echo $get_detail[0]->mrk_jawatan ?></option>
                      <option value="Penolong Jurutera JA29">Penolong Jurutera JA29</option>
                      <option value="Penolong Jurutera JA36">Penolong Jurutera JA36</option>
                      <option value="Jurutera ( Kuala Muda/Sik )">Jurutera ( Kuala Muda/Sik )</option>
                      <option value="Jurutera ( Baling )">Jurutera ( Baling )</option>
                      <option value="Jurutera Daerah">Jurutera Daerah</option>
                      <option value="Penolong Jurutera JA38">Penolong Jurutera JA38</option>
                    </select>
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">Kos Projek (RM)</label>

                  <div class="col-sm-2">
                    <input type="text" class="form-control" id="kosprojek" value="<?php echo number_format($get_detail[0]->mrk_kosprojek,2) ?>" name="kosprojek" placeholder="RM">
                          <small id="nsebutharga" class="form-text text-muted">Pastikan Kos Projek yang dinyatakan adalah tepat.</small>
                  </div>


                  <label class="col-sm-1">Tarikh</label>

                  <div class="col-sm-2">
                    <input type="date" class="form-control" value="<?php echo $get_detail[0]->mrk_tarikh ?>" id="tarikh" name="tarikh">
                  </div>
                </div>
              </div>

              <div class="box-footer">
                <div class="form-group">
                <div class="col-md-4">
                <button type="submit" name="submit" class="btn btn-primary">Save</button>

              </div>
              <div class="col-md-4">
                  <a href="<?php echo site_url('Report/Report_MRK_01/'.$get_detail[0]->projek_id) ?>" class="btn btn-success" role="button">Print</a>
                <a href="<?php echo site_url('mrk/MRK_02/'.$get_detail[0]->projek_id) ?>" class="btn btn-danger" role="button">MRK02</a>
              </div>

              <div class="col-md-4">
                  <a href="<?php echo site_url('projek/view_data/'.$get_detail[0]->mrks_kodvot) ?>" class="btn btn-warning" role="button">Close</a>

              </div>
            </div>
              </div>
            </div>
          </form>
        </div>
      </div><!--end of row-->

<?php echo base_url();?>
    </section>
    <!-- /.content -->


    <script>
      jQuery_1_12_4( function() {
        $( "#namakon" ).autocomplete({
          source:"<?php echo site_url('mrk/getKonSearch')?>"
        });
      } );
      </script>

    <script type="text/javascript">
      function autofill(){
        $.ajax({
          type: 'post',
          url: 'http://localhost/jpspro/mrk/getKontraktorName',
          data: { 'keyword' : $("#namakon").val()},
          //ataType: 'json',
          success: function(data)
          {
            var json = data,
            objs = JSON.parse(json)
            $("#alamat").val(objs.KonAlamat);
          }
      });

      }
    </script>




  </div>
  <!-- /.content-wrapper -->
