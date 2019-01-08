<div class="main-panel">
  <div class="content-wrapper" style="background: #114357;background: -webkit-linear-gradient(to right, #F29492, #114357);background: linear-gradient(to right, #F29492, #114357);">
    <div class="row">
      <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">  <h2 class="f">MRK_01</h2>
            <p class="card-description"><h5><span class="error" style="color:#FF0000;">No Sebutharga :<?php echo $get_detail[0]->df_nosebutharga ?> </span></h5></p>
            <?php if(isset($_SESSION['success'])) { ?>
              <div class="alert alert-success"><?php echo $_SESSION['success'] ?></div>
            <?php
              } ?>
            <?php //echo validation_errors('<div class="alert alert-danger">', '</div'); ?>

          </div>
        </div>
      </div>
      <!--start col-md-12 for form-->
      <div class="col-12 grid-margin">
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
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Kategori Pendaftaran</h4>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-5">
                      <label>No Pendaftaran PKK</label>
                      <input type="hidden" name="kodvods" value="<?php echo $get_detail[0]->df_kodvot?>">
                      <input type="hidden" name="hiddenid" value="<?php echo $get_detail[0]->projek_id?>">
                    <input type="text" class="form-control" id="nopkk" name="nopkk" value="<?php echo $get_detail[0]->mrk_nopkk ?>" placeholder="No Pendaftaran PKK">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-5">
                      <label>Nama Kontraktor</label>
                        <input type="text" class="form-control" id="namakon" onkeyup="autofill()" value="<?php echo $get_detail[0]->mrk_namakon ?>"name="namakon" placeholder="Nama Kontraktor">
                    </div>
                    <div class="col-sm-5">
                      <label>No Sebutharga</label>
                          <input type="text" class="form-control" id="nokon" readonly name="nokon" value="<?php echo $get_detail[0]->df_nosebutharga ?>" placeholder="No Kontrak">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-5">
                      <label>Alamat:</label>
                    <textarea type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat"><?php echo $get_detail[0]->mrk_alamatkon ?></textarea>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-3">
                      <label>Daerah</label>
                      <select type="text" class="form-control" id="daerah" name="daerah">
                        <option value="<?php echo $get_detail[0]->mrk_daerah ?>"><?php echo $get_detail[0]->mrk_daerah ?></option>
                        <option value="kuala muda">Kuala Muda</option>
                        <option value="sik">Sik</option>
                        <option value="baling">Baling</option>
                      </select>
                    </div>
                    <div class="col-sm-3">
                      <label>Negeri</label>
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
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-5">
                      <label>Tajuk Kerja:</label>
                        <textarea type="text" readonly  class="form-control" id="tajukkerjamrk" name="tajukkerjamrk" placeholder="Tajuk Kerja"><?php echo $get_detail[0]->df_tajuk ?></textarea>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
      <!--end here col-md-12-->

      <!--start col-md-12 for form-->
      <div class="col-12 grid-margin">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Inden & Maklumat Kontrak</h4>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-6">
                      <label>No Inden</label>
                      <input type="text" class="form-control" id="noinden" value="<?php echo $get_detail[0]->mrk_noinden ?>" name="noinden"  placeholder="No Inden">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-3">
                      <label>Kategori</label>
                      <select type="text" class="form-control" id="kategori" name="kategori" placeholder="kat">
                        <option value="<?php echo $get_detail[0]->mrk_kategori ?>"><?php echo $get_detail[0]->mrk_kategori ?></option>
                        <option value="CE">CE | Pembinaan Kejuruteraan Awam</option>
                        <option value="B">B | Pembinaan Bangunan</option>
                        <option value="ME">ME | Mekanikal & Elektrikal</option>
                      </select>
                    </div>
                    <div class="col-sm-3">
                      <label>Gred</label>
                      <select type="text" class="form-control" id="gred" name="gred" placeholder="gred">
                        <option value="<?php echo $get_detail[0]->mrk_gred ?>"><?php echo $get_detail[0]->mrk_gred ?></option>
                        <option value="G1">G1 | Sehingga RM200,000.00</option>
                        <option value="G2">G2 | RM200,001.00 Hingga RM500,000.00</option>
                        <option value="G3">G3 | RM500,001.00 Hingga RM1 000,000.00</option>
                        <option value="G4">G4 | RM1 000,001.00 Hingga RM3 000,000.00</option>
                        <option value="G5">G5 | RM300,001.00 Hingga RM5 000,000.00</option>
                        <option value="G6">G6 | RM5 000,001.00 Hingga RM10 000,000.00</option>
                        <option value="G7">G7 | RM 10 000,001.00 Ke Atas</option>
                      </select>
                    </div>
                    <div class="col-sm-3">
                      <label>Pengkhususan</label>
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
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-3">
                      <label>Tarikh Mula Kontrak</label>
                    <input type="date" class="form-control" id="tarikhmulakon" value="<?php echo $get_detail[0]->mrk_tarikhmulakon ?>"name="tarikhmulakon" placeholder="Tarikh Mula Kontrak">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-3">
                      <label>Tarikh Jangka Siap Kontrak</label>
                    <input type="date" class="form-control" id="tarikhjangka" value="<?php echo $get_detail[0]->mrk_tarikhjangkasiap ?>" name="tarikhjangka">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-3">
                      <label>Pegawai</label>
                      <select type="text" class="form-control" id="pegawai" name="pegawai">
                        <option value="<?php echo $get_detail[0]->mrk_pegawai ?>"><?php echo $get_detail[0]->mrk_pegawai ?></option>
                        <?php foreach($get_usersetting as $users){ ?>
                          <option value="<?php echo $users->p_names?>"><?php echo $users->p_names?></option>';
                        <?php } ?>
                      </select>
                    </div>
                    <div class="col-sm-3">
                      <label>Jawatan</label>
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
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-4">
                      <label>Kos Projek</label>
                      <div class="input-group">
                        <div class="input-group-prepend bg-primary border-primary">
                          <span class="input-group-text bg-transparent text-white">RM</span>
                        </div>
                          <input type="text" class="form-control" id="kosprojek" value="<?php echo number_format($get_detail[0]->mrk_kosprojek,2) ?>" name="kosprojek" placeholder="RM">
                        <div class="input-group-append bg-primary border-primary">
                          <span class="input-group-text bg-transparent text-white">.00</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-3">
                      <label>Tarikh</label>
                        <input type="date" class="form-control" value="<?php echo $get_detail[0]->mrk_tarikh ?>" id="tarikh" name="tarikh">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-3">
                      <p>
                      <p>
                      <button type="submit" name="submit" class="btn btn-primary mr-2 btn-rounded ">Simpan</button>
                    </div>
                    <div class="col-sm-4">
                      <p>
                      <p>
                      <a href="<?php echo site_url('Report/Report_MRK_01/'.$get_detail[0]->projek_id) ?>" class="btn btn-success mr-2 btn-rounded " role="button">Print</a>
                      <a href="<?php echo site_url('mrk/MRK_02/'.$get_detail[0]->projek_id) ?>" class="btn btn-info mr-2 btn-rounded " role="button">MRK02</a>
                    </div>
                    <div class="col-sm-4">
                    <p>
                    <p>
                    <a href="<?php echo site_url('projek/view_data/'.$get_detail[0]->mrks_kodvot) ?>" class="btn btn-danger mr-2 btn-rounded" role="button">Close</a>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
      <!--end here col-md-12-->
      <!--end here col-md-12-->

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
  </form>
  </div>
