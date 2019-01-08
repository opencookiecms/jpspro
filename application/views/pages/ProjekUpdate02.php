<div class="main-panel">
<div class="content-wrapper cnt" style="background: #C9D6FF;background: -webkit-linear-gradient(to right, #E2E2E2, #C9D6FF);background: linear-gradient(to right, #E2E2E2, #C9D6FF);">
    <div class="row">
      <div class="col-md-12 grid-margin stretch-card">
        <div class="card" style="border-radius:10px;">
          <div class="card-body">
            <h4 class="card-title">  <h2 class="f"><?php echo $title; ?></h2>
            <p class="card-description"><h5><span class="error" style="color:#FF0000;"> * Dikehendaki mengisi semua bahagian</span></h5></p>
          </div>
        </div>
      </div>
      <!--start col-md-12 for form-->
      <div class="col-12 grid-margin">
        <?php echo validation_errors(); ?>
        <?php echo form_open('projek/Update_Projek02'); ?>

        <div class="card" style="border-radius:10px;">
          <div class="card-body">
            <a href="<?php echo site_url("projek/Update_Projek01/" . $get_detail[0]->projek_id); ?>" class="btn btn-warning mr-2 btn-rounded" role="button">PAGE1</a>
            <a href="<?php echo site_url("projek/Update_Projek02/" . $get_detail[0]->projek_id); ?>" class="btn btn-info mr-2 btn-rounded" role="button">PAGE2</a>
            <a href="<?php echo site_url("projek/Update_Projek03/" . $get_detail[0]->projek_id); ?>" class="btn btn-danger mr-2 btn-rounded" role="button" >PAGE3</a>
            <p></p>
            <p></p>
            <h4 class="card-title">Kategori Pendaftaran</h4>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-2">
                      <input type="hidden" name="hiddenid" value="<?php echo $get_detail[0]->dp_id?>">
                      <label>Gred :</label>
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
                    <div class="col-sm-2">
                      <label>Kategori :</label>
                      <select type="text" class="form-control" name="kategori" placeholder="Kategori">
                        <option value="<?php echo $get_detail[0]->df_kategori?>"><?php echo $get_detail[0]->df_kategori?></option>
                        <option value="CE | Pembinaan Kejuruteraan Awam">CE</option>
                        <option value="B | Pembinaan Bangunan">B</option>
                        <option value="ME | Mekanikal & Elektrikal">ME</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <h4 class="card-title">Pengkhususan</h4>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-2">
                      <label>K1</label>
                        <input type="text" class="form-control" name="khusus1" value="<?php echo $get_detail[0]->df_khusus1?>">
                    </div>
                    <div class="col-sm-2">
                      <label>K2</label>
                          <input type="text" class="form-control" name="khusus2" value="<?php echo $get_detail[0]->df_khusus2?>">
                    </div>
                    <div class="col-sm-2">
                      <label>K3</label>
                        <input type="text" class="form-control" name="khusus3" value="<?php echo $get_detail[0]->df_khusus3?>">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-2">
                      <label>Taraf:</label>
                      <select type="text" class="form-control"  name="taraf" placeholder="Taraf">
                        <option value="<?php echo $get_detail[0]->df_taraf?>"><?php echo $get_detail[0]->df_taraf?></option>
                        <option value="Bumiputera">Bumiputera</option>
                        <option value="Bukan Bumiputera">Bukan Bumiputera</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-2">
                      <label>Tempoh Siap Kerja:</label>
                      <input type="text" class="form-control"  name="tempoh" value="<?php echo $get_detail[0]->df_tempohsiap?>">
                    </div>
                    <div class="col-sm-2">
                      <label>Minggu/Bulan</label>
                      <select type="text" class="form-control" name="bulanming" placeholder="Minggu/Bulan">
                        <option value="<?php echo $get_detail[0]->dp_bulanmig?>"><?php echo $get_detail[0]->dp_bulanmig?></option>
                        <option value="Minggu">Minggu</option>
                        <option value="Bulan">Bulan</option>

                      </select>
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
        <div class="card" style="border-radius:10px;">
          <div class="card-body">
            <h4 class="card-title">Harga Dokumen & Tarikh</h4>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-3">
                      <label>Harga Dokumen Sebutharga (RM)</label>
                      <div class="input-group">
                        <div class="input-group-prepend bg-primary border-primary">
                          <span class="input-group-text bg-transparent text-white">RM</span>
                        </div>
                        <input type="text" class="form-control"name="doc" placeholder="Harga Dokumen" value="<?php echo number_format($get_detail[0]->df_hargadoc,2)?>">
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <label></label>
                      <div class="input-group">
                        <div class="input-group-append bg-success border-success">
                          <span class="input-group-text bg-transparent text-white">(Minimum RM10 | Maximum RM50)</span>
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
                      <label>Tarikh Notis Dikeluarkan</label>
                      <input type="date" class="form-control" name="notiskeluar" value="<?php echo $get_detail[0]->df_tarikhnotis?>" >
                      <?php $dates = $get_detail[0]->df_tarikhnotis ?>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-3">
                      <label>Tarikh Lawat Tapak/Taklimat</label>
                      <div class="input-group">
                        <input type="text" class="form-control"name="lawattapak" value="<?php echo $get_detail[0]->df_tarikhlawat?>">
                        <div class="input-group-append bg-primary border-primary">
                          <span class="input-group-text bg-transparent text-white">Hari</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <label></label>
                      <div class="input-group">
                        <div class="input-group-append bg-info border-info">
                          <span class="input-group-text bg-transparent text-white"><?php echo date('d/m/Y', strtotime($dates. " + {$get_detail[0]->df_tarikhlawat} days")); ?></span>
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
                      <label>Tarikh Dokumen Mula Dijual</label>
                      <div class="input-group">
                        <input type="text" class="form-control" name="docmula" value="<?php echo $get_detail[0]->df_tarikhdocmula?>">
                        <div class="input-group-append bg-primary border-primary">
                          <span class="input-group-text bg-transparent text-white">Hari</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <label></label>
                      <div class="input-group">
                        <div class="input-group-append bg-success border-success">
                          <span class="input-group-text bg-transparent text-white"><?php   echo date('d/m/Y', strtotime($dates. " + {$get_detail[0]->df_tarikhdocmula} days")); ?></span>
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
                      <label>Tarikh Akhir Dokumen Dijual</label>
                      <div class="input-group">
                        <input type="text" class="form-control" name="docakhir" value="<?php echo $get_detail[0]->df_tarikhdocakhir?>">
                        <div class="input-group-append bg-primary border-primary">
                          <span class="input-group-text bg-transparent text-white">Hari</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <label></label>
                      <div class="input-group">
                        <div class="input-group-append bg-warning border-warning">
                          <span class="input-group-text bg-transparent text-white"><?php   echo date('d/m/Y', strtotime($dates. " + {$get_detail[0]->df_tarikhdocakhir} days")); ?></span>
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
                      <label>Tarikh Sebutharga Ditutup</label>
                      <div class="input-group">
                        <input type="text" class="form-control"  name="sebuttutup" value="<?php echo $get_detail[0]->df_tarikhtutup?>">
                        <?php $tarikhtutup = $get_detail[0]->df_tarikhtutup?>
                        <div class="input-group-append bg-primary border-primary">
                          <span class="input-group-text bg-transparent text-white">Hari</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <label></label>
                      <div class="input-group">
                        <div class="input-group-append bg-danger border-danger">
                          <span class="input-group-text bg-transparent text-white"><?php   echo date('d/m/Y', strtotime($dates. " + {$get_detail[0]->df_tarikhtutup} days")); ?></span>
                        </div>
                      </div>
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
        <div class="card" style="border-radius:10px;">
          <div class="card-body">
            <h4 class="card-title">Pegesahan</h4>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-3">
                      <label>Jurutera Dearah</label>
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
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-3">
                      <label>Jurutera</label>
                        <input type="text" class="form-control"  name="jurutera" placeholder="Jurutera" value="<?php echo $get_detail[0]->df_jurutera?>">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-3">
                      <label>Penolong Jurutera Kanan JA36</label>
                      <input type="text" class="form-control"  name="penolongkanan" placeholder="Penolong Kanan JA36" value="<?php echo $get_detail[0]->df_penolongkanan?>">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-3">
                      <label>Penolong Jurutera JA29</label>
                        <input type="text" class="form-control" name="penolong" placeholder="Penolong Jurutera JA29" value="<?php echo $get_detail[0]->df_penolong?>">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-3">
                      <label>Kod Vot</label>
                        <input type="text" class="form-control"  name="vot" placeholder="Vot" value="<?php echo $get_detail[0]->df_kodvot?>">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-3">
                      <label>Peruntukan</label>
                      <select type="text" class="form-control"  name="peruntukan" placeholder="Negeri">
                        <option value="<?php echo $get_detail[0]->df_peruntukan?>"><?php echo $get_detail[0]->df_peruntukan?></option>
                        <option value="Negeri">Negeri</option>
                        <option value="Persekutuan">Persekutuan</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-3">
                      <label>Peruntukan Semasa (RM)</label>
                      <div class="input-group">
                        <div class="input-group-prepend bg-primary border-primary">
                          <span class="input-group-text bg-transparent text-white">RM</span>
                        </div>
                        <input type="text" class="form-control"  name="baki" placeholder="Peruntukan Semasa" value="<?php echo $get_detail[0]->df_bakiperuntukan?>">
                        <input type="hidden" class="form-control" name="dp_idpost" value="<?php echo $get_detail[0]->projek_id?>">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <p>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-3">
                      <button type="submit" name="submit" class="btn btn-success mr-2 btn-rounded ">Simpan</button>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
      <!--end here col-md-12-->
    </div>
  </form>
  </div>
