<div class="main-panel">
<div class="content-wrapper cnt" style="background: #C9D6FF;background: -webkit-linear-gradient(to right, #E2E2E2, #C9D6FF);background: linear-gradient(to right, #E2E2E2, #C9D6FF);">
    <div class="row">
      <div class="col-md-12 grid-margin stretch-card">
        <div class="card" style="border-radius:10px;background-color:#6a89cc;">
          <div class="card-body">
            <h4 class="card-title">  <h2 class="f"><?php echo $title; ?></h2>

          </div>
        </div>
      </div>
      <!--start col-md-12 for form-->
      <div class="col-12 grid-margin">
        <?php echo validation_errors(); ?>
        <?php echo form_open('projek/Update_Projek02'); ?>

        <div class="card" style="border-radius:10px;background-color:#778ca3;">
          <div class="card-body">
            <a href="<?php echo site_url("projek/Update_Projek01/" . $get_detail[0]->projek_id); ?>" class="btn btn-primary mr-2 btn-rounded" role="button">PAGE1</a>
            <a href="<?php echo site_url("projek/Update_Projek02/" . $get_detail[0]->projek_id); ?>" class="btn btn-success mr-2 btn-rounded" role="button">PAGE2</a>
            <a href="<?php echo site_url("projek/Update_Projek03/" . $get_detail[0]->projek_id); ?>" class="btn btn-primary mr-2 btn-rounded" role="button" >PAGE3</a>
            <p></p>
            <p></p>
            <h4 class="card-title" style="color:#FFFF">Kategori Pendaftaran</h4>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-2">
                      <input type="hidden" name="hiddenid" value="<?php echo $get_detail[0]->dp_id?>">
                      <label class="tl">Gred :</label>
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
                      <label class="tl">Kategori :</label>
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
              <h4 class="card-title" style="color:#ffff">Pengkhususan</h4>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-2">
                   
                        <input type="text" class="form-control" name="khusus1" value="<?php echo $get_detail[0]->df_khusus1?>">
                    </div>
                    <div class="col-sm-2">
                 
                          <input type="text" class="form-control" name="khusus2" value="<?php echo $get_detail[0]->df_khusus2?>">
                    </div>
                    <div class="col-sm-2">
                   
                        <input type="text" class="form-control" name="khusus3" value="<?php echo $get_detail[0]->df_khusus3?>">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-3">
                      <label class="tl">Taraf:</label>
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
                      <label class="tl">Tempoh Siap Kerja:</label>
                      <input type="text" class="form-control"  name="tempoh" value="<?php echo $get_detail[0]->df_tempohsiap?>">
                    </div>
                    <div class="col-sm-2">
                      <label class="tl">Minggu/Bulan</label>
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
      <div class="col-9 grid-margin">
        <div class="card" style="border-radius:10px;background-color:#596275;">
          <div class="card-body">
            <h4 class="card-title" style="color:#ffff">Harga Dokumen & Tarikh</h4>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-3">
                      <label class="tl">Harga Dokumen Sebutharga (RM)</label>
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
                    <div class="col-sm-2">
                      <label class="tl">Tarikh Notis Dikeluarkan</label>
                      <input type="date" class="form-control" name="notiskeluar" value="<?php echo $get_detail[0]->df_tarikhnotis?>" >
                      <?php $dates = $get_detail[0]->df_tarikhnotis ?>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-2">
                      <label class="tl">Tarikh Lawat Tapak/Taklimat</label>
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
                    <div class="col-sm-2">
                      <label class="tl">Tarikh Dokumen Mula Dijual</label>
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
                          <span class="input-group-text bg-transparent text-white"><?php   echo date('d/m/Y', strtotime($dates. " + {$get_detail[0]->df_tarikhdocmula} days + {$get_detail[0]->df_tarikhlawat} days")); ?></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-2">
                      <label class="tl">Tarikh Akhir Dokumen Dijual</label>
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
                          <span class="input-group-text bg-transparent text-white"><?php   echo date('d/m/Y', strtotime($dates. " + {$get_detail[0]->df_tarikhdocakhir} days + {$get_detail[0]->df_tarikhdocmula}days + {$get_detail[0]->df_tarikhlawat} days")); ?></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-2">
                      <label class="tl">Tarikh Sebutharga Ditutup</label>
                      <div class="input-group">
                        <input type="text" class="form-control"  name="sebuttutup" value="<?php echo $get_detail[0]->df_tarikhtutup?>">
                        <?php $tarikhtutup = $get_detail[0]->df_tarikhtutup?>
                        <div class="input-group-append bg-primary border-primary">
                          <span class="input-group-text bg-transparent text-white">Hari</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4">
                    
                      <label class="tl"></label>
                      <div class="input-group">
                        <div class="input-group-append bg-danger border-danger">
                          <span class="input-group-text bg-transparent text-white"><?php   echo date('d/m/Y', strtotime($dates. " + {$get_detail[0]->df_tarikhtutup} days + {$get_detail[0]->df_tarikhdocakhir} days + {$get_detail[0]->df_tarikhdocmula}days + {$get_detail[0]->df_tarikhlawat} days")); ?></span>
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
        <div class="card" style="border-radius:10px;background-color:#786fa6;">
          <div class="card-body">
            <h4 class="card-title" style="color:#ffff">Pegesahan</h4>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-3">
                      <label class="tl">Jurutera Dearah</label>
                      <select  class="form-control"  name="juruterakanan" placeholder="Jurutera Daerah">
                        <option value="<?php echo $get_detail[0]->df_juruterad?>"><?php echo $get_detail[0]->df_juruterad?></option>
                          <?php foreach($get_keypeople as $users){ ?>
                            <option value="<?php echo $users->p_names?>"><?php echo $users->p_names?></option>';
                          <?php } ?>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-3">
                      <label class="tl">Jurutera</label>
                        <select class="form-control"  name="jurutera" placeholder="Jurutera" value="<?php echo $get_detail[0]->df_jurutera?>">
                              <?php foreach($get_keypeople as $users){ ?>
                            <option value="<?php echo $users->p_names?>"><?php echo $users->p_names?></option>';
                          <?php } ?>
                        </select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-3">
                      <label class="tl">Penolong Jurutera Kanan JA36</label>
                      <select  class="form-control"  name="penolongkanan">
                          <option value="<?php echo $get_detail[0]->df_penolongkanan?>"><?php echo $get_detail[0]->df_penolongkanan?></option>
                          <?php foreach($get_user as $users){ ?>
                          <option value="<?php echo $users->jps_name?>"><?php echo $users->jps_name?></option>';
                        <?php } ?>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-3">
                      <label class="tl">Penolong Jurutera JA29</label>
                        <select class="form-control" name="penolong" value="<?php echo $get_detail[0]->df_penolong?>">
                         <option value="<?php echo $get_detail[0]->df_penolong?>"><?php echo $get_detail[0]->df_penolong?></option>
                          <?php foreach($get_user as $users){ ?>
                          <option value="<?php echo $users->jps_name?>"><?php echo $users->jps_name?></option>';
                        <?php } ?>
                        </select>


                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-3">
                      <label class="tl">Kod Vot</label>
                        <input type="text" class="form-control"  name="vot" placeholder="Vot" value="<?php echo $get_detail[0]->df_kodvot?>">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-3">
                      <label class="tl">Peruntukan</label>
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
                      <label class="tl">Peruntukan Semasa (RM)</label>
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
