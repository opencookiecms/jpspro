<div class="main-panel">
<div class="content-wrapper cnt" style="background: #606c88;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #3f4c6b, #606c88);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #3f4c6b, #606c88); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
">
    <div class="row">
      <div class="col-md-9 grid-margin stretch-card">
        <div class="card" style="border-radius:10px;background-color:#6a89cc;">
          <div class="card-body">
            <h4 class="card-title">  <h2 class="f"><?php echo $title; ?></h2>

          </div>
        </div>
      </div>
      <!--start col-md-12 for form-->
      <div class="col-9 grid-margin">
        <?php echo validation_errors(); ?>
        <?php echo form_open('projek/Update_Projek02'); ?>

        <div class="card" style="border-radius:10px;background-color:#dfe4ea;">
          <div class="card-body">
            <a href="<?php echo site_url("projek/Update_Projek01/" . $get_detail[0]->projek_id); ?>" class="btn btn-primary mr-2 btn-rounded" role="button">PAGE1</a>
            <a href="<?php echo site_url("projek/Update_Projek02/" . $get_detail[0]->projek_id); ?>" class="btn btn-success mr-2 btn-rounded" role="button">PAGE2</a>
            <a href="<?php echo site_url("projek/Update_Projek03/" . $get_detail[0]->projek_id); ?>" class="btn btn-primary mr-2 btn-rounded" role="button" >PAGE3</a>
            <p></p>
            <p></p>
            <h4 class="card-title" style="color:#38ada9">Kategori Pendaftaran</h4>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-3">
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
                         <option value=""></option>
                      </select>
                    </div>
                    <div class="col-sm-3">
                      <label class="tl">Kategori :</label>
                      <select type="text" class="form-control" name="kategori" placeholder="Kategori">
                        <option value="<?php echo $get_detail[0]->df_kategori?>"><?php echo $get_detail[0]->df_kategori?></option>
                        <option value="CE | Pembinaan Kejuruteraan Awam">CE</option>
                        <option value="B | Pembinaan Bangunan">B</option>
                        <option value="ME | Mekanikal & Elektrikal">ME</option>
                         <option value=""></option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <h4 class="card-title" style="color:#38ada9">Pengkhususan</h4>
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
                    <div class="col-sm-3">
                      <label class="tl">Tempoh Siap Kerja:</label>
                      <input type="text" class="form-control"  name="tempoh" value="<?php echo $get_detail[0]->df_tempohsiap?>">
                    </div>
                    <div class="col-sm-3">
                      <label class="tl">Minggu/Bulan</label>
                      <select type="text" class="form-control" name="bulanming" placeholder="Minggu/Bulan">
                        <option value="<?php echo $get_detail[0]->dp_bulanmig?>"><?php echo $get_detail[0]->dp_bulanmig?></option>
                        <option value="Minggu">Minggu</option>
                        <option value="Bulan">Bulan</option>
                         <option value=""></option>

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
        <div class="card" style="border-radius:10px;">
          <div class="card-body" style="background-color:#dfe4ea;border-radius:10px;">
            <h4 class="card-title" style="color:#38ada9;">Harga Dokumen & Tarikh</h4>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-3">
                      <label class="tl">Harga Dokumen Sebutharga (RM)</label>
                      <div class="input-group">
                        <div class="input-group-prepend bg-primary border-primary">
                          <span class="input-group-text bg-transparent text-white">RM</span>
                        </div>
                        <input type="text" class="form-control" name="doc"value="<?php echo $get_detail[0]->df_hargadoc?>" aria-label="Amount (to the nearest dollar)">
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <label></label>
                      <div class="input-group">
                        <div class="input-group-append bg-dark border-dark">
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
                      <label class="tl">Tarikh Notis Dikeluarkan</label>
                      <input type="date" class="form-control" value="<?php echo $get_detail[0]->df_tarikhnotis?>" name="notiskeluar" id="tarikhnotis" >
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-3">
                      <label class="tl">Tarikh Lawat Tapak/Taklimat</label>
                      <div class="input-group">
                        <input type="text" value="<?php echo $get_detail[0]->df_tarikhlawat?>" class="form-control"name="lawattapak" id="harilawat">
                        <div class="input-group-append bg-primary border-primary">
                          <span class="input-group-text bg-transparent text-white">Hari</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-2">
                        <label class="tl">:</label>
                        <input type="text" value="<?php echo $get_detail[0]->df_datelawat?>" name="tsum1" class="form-control" id="tsumone" >
                    </div>
                  </div>
                </div>
                
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-3">
                      <label class="tl">Tarikh Dokumen Mula Dijual</label>
                      <div class="input-group">
                        <input type="text" value="<?php echo $get_detail[0]->df_tarikhdocmula?>" class="form-control" name="docmula" id="harimulajual">
                        <div class="input-group-append bg-primary border-primary">
                          <span class="input-group-text bg-transparent text-white">Hari</span>
                        </div>
                      </div>
                    </div>
                         <div class="col-sm-2">
                        <label class="tl">:</label>
                        <input type="text" name="tsum2" value="<?php echo $get_detail[0]->df_datemulajualdoc?>"  class="form-control" id='tsumtwo'>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-3">
                      <label class="tl">Tarikh Akhir Dokumen Dijual</label>
                      <div class="input-group">
                        <input type="text" class="form-control" value="<?php echo $get_detail[0]->df_tarikhdocakhir?>" name="docakhir" id="hariakhirjual">
                        <div class="input-group-append bg-primary border-primary">
                          <span class="input-group-text bg-transparent text-white">Hari</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-2">
                        <label class="tl">:</label>
                        <input type="text" name="tsum3" value="<?php echo $get_detail[0]->df_dateakhirjualdoc?>"  class="form-control" id='tsumthree'>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-3">
                      <label class="tl">Tarikh Sebutharga Ditutup</label>
                      <div class="input-group">
                        <input type="text" class="form-control" value="<?php echo $get_detail[0]->df_tarikhtutup?>"  name="sebuttutup" id="haritutup">
                        <div class="input-group-append bg-primary border-primary">
                          <span class="input-group-text bg-transparent text-white">Hari</span>
                        </div>
                      </div>
                    </div>
                     <div class="col-sm-4">
                        <label class="tl">:</label>
                        <input type="text" data-toggle="datepicker" value="<?php echo $get_detail[0]->df_dateend?>" name="thisisdateend" class="form-control" id='tsumfour' >
                    </div>
                  </div>
                </div>
              </div>


          </div>
        </div>
      </div>
      <!--end here col-md-12-->

           <div class="col-3 grid-margin">
         <div class="card" style="border-radius:10px;">
          <div class="card-body" style="background-color:#dfe4ea;border-radius:10px;">
            <h1 class="card-title" style="color:#38ada9;">Kategori Pendaftaran</h1>
            <h5>*Tempoh Kenyataan Sebutharga(notis)-minima 7 hari (Pamer) dari tarikh dokumen mula jual atau tarikh lawatan tapak atau mana yang terkemudian.</h5>
            <br>
                <h5>*Sebutharga yang perlu lawatan tapak, Kenyataan sebutharga hendaklah dipamerkan~minima 3 hari-hari ke 4 lawatan tapak-minima 7 hari(Pamer) dari tarikh dokumen mula dijual atau tarikh lawatan tapak atau mana yang terkemudian.</h5>
          </div>
        
        
        </div>
      
      </div>

      <!--start col-md-12 for form-->
      <div class="col-9 grid-margin">
        <div class="card" style="border-radius:10px;background-color:#dfe4ea;">
          <div class="card-body">
            <h4 class="card-title" style="color:#38ada9">Pegesahan</h4>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-3">
                      <label class="tl">Jurutera Dearah</label>
                      <select  class="form-control"  name="juruterakanan" placeholder="Jurutera Daerah">
                        <option value="<?php echo $get_detail[0]->df_juruterad?>"><?php echo $get_detail[0]->df_juruterad?></option>
                          <?php foreach($get_keypeople as $users){ ?>
                            <option value="<?php echo $users->p_names?>"><?php echo $users->p_names?></option>
                            
                          <?php } ?>
                           <option value=""></option>
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
                        <select class="form-control"  name="jurutera" placeholder="Jurutera" value="">
                        <option value="<?php echo $get_detail[0]->df_jurutera?>"><?php echo $get_detail[0]->df_jurutera?></option>
                         <?php foreach($get_keypeoples as $userss){ ?>
                            <option value="<?php echo $userss->p_names?>"><?php echo $userss->p_names?></option>
                          <?php } ?>
                           <option value=""></option>
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
                          <option value="<?php echo $users->jps_name?>"><?php echo $users->jps_name?></option>
                        <?php } ?>
                         <option value=""></option>
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
                          <option value="<?php echo $users->jps_name?>"><?php echo $users->jps_name?></option>
                        <?php } ?>
                         <option value=""></option>
                        </select>


                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-3">
                      <label class="tl">Kod Vot (Tanpa Space)</label>
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
                         <option value=""></option>
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
 <script>
      $(document).ready(function(){ 
       
       // alert([day, month, year].join('/'));
        $("#harilawat").keyup(function(){
        var date = new Date($('#tarikhnotis').val());
        date.setDate(date.getDate() 
        + parseInt($("#harilawat").val())
        ); 

        day = date.getDate();  
        month = date.getMonth() + 1;
        year = date.getFullYear();
          $("#tsumone").val([year, month, day].join('-'));
        });

        $("#harimulajual").keyup(function(){

          var datemula = new Date($('#tarikhnotis').val());
          datemula.setDate(datemula.getDate() 
            + parseInt($("#harimulajual").val()) 
            + parseInt($("#harilawat").val())
            ); 

          days = datemula.getDate();
          months = datemula.getMonth() + 1;
          years = datemula.getFullYear();
           $("#tsumtwo").val([years, months, days].join('-'));
        
        });

          $("#hariakhirjual").keyup(function(){

          var dateakhir = new Date($('#tarikhnotis').val());
          dateakhir.setDate(dateakhir.getDate() 
            + parseInt($("#harimulajual").val()) 
            + parseInt($("#harilawat").val())
            + parseInt($("#hariakhirjual").val())
            
          ); 

          dayss = dateakhir.getDate();
          monthss = dateakhir.getMonth() + 1;
          yearss = dateakhir.getFullYear();
           $("#tsumthree").val([yearss, monthss, dayss].join('-'));
        
        });

          $("#haritutup").keyup(function(){

          var dateakhir = new Date($('#tarikhnotis').val());
          dateakhir.setDate(dateakhir.getDate() 
            + parseInt($("#harimulajual").val()) 
            + parseInt($("#harilawat").val())
            + parseInt($("#hariakhirjual").val())
            + parseInt($("#haritutup").val())
            
          ); 

          dayss = dateakhir.getDate();
          monthss = dateakhir.getMonth() + 1;
          yearss = dateakhir.getFullYear();
           $("#tsumfour").val([yearss, monthss, dayss].join('-'));
        
        });
      
      });
   </script>
    </div>
  </form>
  </div>
