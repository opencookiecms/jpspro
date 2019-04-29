<div class="main-panel">
<div class="content-wrapper cnt" style="">
    <div class="row">
      <div class="col-md-12 grid-margin stretch-card">
        <div class="card" style="border-radius:10px;">
          <div class="card-body" style="background-color:#636e72;border-radius:10px;">
            <h4 class="card-title">  <h2 class="f"><?php echo $title; ?></h2>
            <p class="card-description"><h5><span class="error" style="color:#f5f6fa;"> * Dikehendaki mengisi semua bahagian</span></h5></p>
            <?php echo $idval; ?>

          </div>
        </div>
      </div>
      <!--start col-md-12 for form-->
      <div class="col-12 grid-margin">
        <?php echo validation_errors(); ?>

        <?php echo form_open('daftar/stepdua'); ?>
          <input type="hidden" class="form-control" name="dp_idpost" value="<?php echo $idval;?>">
        <div class="card" style="border-radius:10px;">
          <div class="card-body" style="background-color:#4a69bd;border-radius:10px;">
            <h4 class="card-title" style="color:white;">Kategori Pendaftaran</h4>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-2">
                      <label class="tl">Gred :</label>
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
                    <div class="col-sm-2">
                      <label class="tl">Kategori :</label>
                      <select type="text" class="form-control" name="kategori" placeholder="Kategori">
                        <option value="CE">CE</option>
                        <option value="B">B</option>
                        <option value="ME">ME</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <h4 class="card-title" style="color:white;">Pengkhususan</h4>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-2">
                      <label class="tl"></label>
                      <input type="text" class="form-control" name="khusus1">
                    </div>
                    <div class="col-sm-2">
                      <label class="tl"></label>
                        <input type="text" class="form-control" name="khusus2">
                    </div>
                    <div class="col-sm-2">
                      <label class="tl"></label>
                      <input type="text" class="form-control" name="khusus3">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-2">
                      <label class="tl">Taraf:</label>
                      <select type="text" class="form-control"  name="taraf" placeholder="Taraf">
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
                      <input type="text" class="form-control"  name="tempoh" placeholder="Hari">
                    </div>
                    <div class="col-sm-2">
                      <label class="tl">Minggu/Bulan</label>
                      <select type="text" class="form-control" name="bulanming" placeholder="Minggu/Bulan">
                        <option value=""></option>
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
          <div class="card-body" style="background-color:#34495e;border-radius:10px;">
            <h4 class="card-title" style="color:white;">Harga Dokumen & Tarikh</h4>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-3">
                      <label class="tl">Harga Dokumen Sebutharga (RM)</label>
                      <div class="input-group">
                        <div class="input-group-prepend bg-primary border-primary">
                          <span class="input-group-text bg-transparent text-white">RM</span>
                        </div>
                        <input type="text" class="form-control" name="doc" aria-label="Amount (to the nearest dollar)">
                        <div class="input-group-append bg-primary border-primary">
                          <span class="input-group-text bg-transparent text-white">.00</span>
                        </div>
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
                      <input type="date" class="form-control" name="notiskeluar" id="tarikhnotis" >
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
                        <input type="text" class="form-control"name="lawattapak" id="harilawat">
                        <div class="input-group-append bg-primary border-primary">
                          <span class="input-group-text bg-transparent text-white">Hari</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-2">
                        <label class="tl">:</label>
                        <input type="text" class="form-control" id="tsumone" disabled >
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
                        <input type="text" class="form-control" name="docmula" id="harimulajual">
                        <div class="input-group-append bg-primary border-primary">
                          <span class="input-group-text bg-transparent text-white">Hari</span>
                        </div>
                      </div>
                    </div>
                         <div class="col-sm-2">
                        <label class="tl">:</label>
                        <input type="text" class="form-control" id='tsumtwo' disabled >
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
                        <input type="text" class="form-control" name="docakhir" id="hariakhirjual">
                        <div class="input-group-append bg-primary border-primary">
                          <span class="input-group-text bg-transparent text-white">Hari</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-2">
                        <label class="tl">:</label>
                        <input type="text" class="form-control" id='tsumthree' disabled >
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
                        <input type="text" class="form-control"  name="sebuttutup" id="haritutup">
                        <div class="input-group-append bg-primary border-primary">
                          <span class="input-group-text bg-transparent text-white">Hari</span>
                        </div>
                      </div>
                    </div>
                     <div class="col-sm-2">
                        <label class="tl">:</label>
                        <input type="text" class="form-control" id='tsumfour' disabled >
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
          <div class="card-body" style="background-color:#40739e;border-radius:10px;">
            <h4 class="card-title" style="color:white;">Pegesahan</h4>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-3">
                      <label class="tl">Jurutera Dearah</label>

                      <select type="text" class="form-control" id="juruterakanan" name="juruterakanan">
                        <option value=""></option>
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
                        <select type="text" class="form-control" id="jurutera" name="jurutera">
                          <option value=""></option>
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
                      <label class="tl">Penolong Jurutera JA29 / JA36</label>

                      <select type="text" class="form-control" id="penolong" name="penolong">
                        <option value=""></option>
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
                      <input type="text" class="form-control"  name="vot" placeholder="Vot">
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
                        <option value="negeri">Negeri</option>
                        <option value="persekutuan">Persekutuan</option>
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
                        <input type="text" class="form-control" name="baki" aria-label="Amount (to the nearest dollar)">
                        <div class="input-group-append bg-primary border-primary">
                          <span class="input-group-text bg-transparent text-white">.00</span>
                        </div>
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
          $("#tsumone").val([day, month, year].join('/'));
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
           $("#tsumtwo").val([days, months, years].join('/'));
        
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
           $("#tsumthree").val([dayss, monthss, yearss].join('/'));
        
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
           $("#tsumfour").val([dayss, monthss, yearss].join('/'));
        
        });
      
      });
   </script>
  </div>
