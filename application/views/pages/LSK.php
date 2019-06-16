<div class="main-panel">
      <div class="content-wrapper cnt" style="background: #606c88;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #3f4c6b, #606c88);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #3f4c6b, #606c88); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
">
    <div class="row">
      <div class="col-md-8 grid-margin stretch-card">
        <div class="card" style="border-radius:10px;">
          <div class="card-body" style="background-color:#786fa6; border-radius:10px;">
            <h4 class="card-title">  <h2 class="f ts">Laporan Siap Kerja</h2>
            <p class="card-description"><h5><span class="error ts" style="color:#ffda79">No Sebutharga :<?php echo $get_detail[0]->df_nosebutharga ?> </span></h5></p>
            <?php if(isset($_SESSION['lsk'])) { ?>
              <div class="alert alert-success"><?php echo $_SESSION['lsk'] ?></div>
            <?php
              } ?>
            <?php //echo validation_errors('<div class="alert alert-danger">', '</div'); ?>

          </div>
        </div>
      </div>
      <!--start col-md-12 for form-->
      <div class="col-8 grid-margin">

        <?php
            $pkkNo = $get_detail[0]->lsk_noinden;
              if($pkkNo == null){
                  echo form_open('mrk/LSK/'.$get_detail[0]->projek_id);
              }
              else {
                echo form_open('mrk/LSK_Update');
              }
        ?>

        <div class="card" style="border-radius:10px;">
            <div class="card-body" style="background-color:#dfe4ea; border-radius:10px;">
            <h4 class="card-title ts" style="color:#38ada9;font-weight:bold;">Maklumat Rekod Kerja - Laporan Siap Kerja</h4>
             <h5 class="text-danger"><?php echo validation_errors(); ?></h5>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-6">
                      <label class="tl">No Pendaftaran PKK</label>
                      <input type="hidden" value="<?php echo $get_detail[0]->df_kodvot ?>" name="kodvods">
                      <input type="hidden" value="<?php echo $get_detail[0]->mrksatuid?>" name="hiddenid">
                      <input type="hidden" value="<?php echo $get_detail[0]->projek_id?>" name="hiddensub">
                      <input type="text" class="form-control ts" style="font-weight:bold;" id="nopkk" name="nopkk" value="<?php echo $get_detail[0]->mrk_nopkk?>" placeholder="No Pendaftaran PKK" readonly>
                    </div>
                    <div class="col-sm-6">
                      <label class="tl">Nama Pemborong</label>
                      <input type="text" class="form-control ts" style="font-weight:bold;"id="namapem" name="namapem" value="<?php echo $get_detail[0]->mrk_namakon?>" placeholder="Nama Pemborong" readonly>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-6">
                      <label class="tl">Alamat</label>
                      <textarea type="text" class="form-control ts" style="font-weight:bold;" id="alamat" name="alamat" placeholder="Alamat" readonly><?php echo $get_detail[0]->mrk_alamatkon?></textarea>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-6">
                      <label class="tl">Butiran Kerja</label>
                      <textarea rows="5" type="text" class="form-control ts" style="font-weight:bold;"name="butiran" placeholder="Butiran Kerja" readonly><?php echo $get_detail[0]->mrk_tajukkerja?></textarea>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-6">
                      <label class="tl">No Sebutharga</label>
                      <input type="text" class="form-control ts" style="font-weight:bold;"name="nosebut" placeholder="No Sebutharga" value="<?php echo $get_detail[0]->df_nosebutharga?>" readonly>
                    </div>
                    <div class="col-sm-6">
                      <label class="tl">No Pesanan Kerja / No Inden</label>
                      <input type="text" class="form-control ts" style="font-weight:bold;" name="nopesanan" placeholder="No Pesanan Kerja" value="<?php echo $get_detail[0]->mrk_noinden?>" readonly>
                      <input type="hidden" name="kodvods" value="<?php echo $get_detail[0]->df_kodvot?>">
                      <input type="hidden" class="form-control" name="noinden" value="<?php echo $get_detail[0]->mrk_noinden?>"  placeholder="Inden No" readonly>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-6">
                      <label class="tl">Harga Pesanan RM:</label>
                      <div class="input-group">
                        <div class="input-group-prepend bg-success border-primary">
                          <span class="input-group-text bg-transparent text-white">RM</span>
                        </div>
                          <input type="text" class="form-control ts" style="font-weight:bold;" value="<?php echo $get_detail[0]->mrk_kosprojek ?>"  name="hargapesanan" placeholder="RM" readonly>

                      </div>
                    </div>
                    <div class="col-sm-6">
                      <label class="tl">Harga Sebenar RM:</label>
                      <div class="input-group">
                        <div class="input-group-prepend bg-success border-primary">
                          <span class="input-group-text bg-transparent text-white">RM</span>
                        </div>
                          <input type="text" class="form-control ts" style="font-weight:bold;"  name="hargasebenar" value="<?php echo $get_detail[0]->lks_hargasebenar ?>" placeholder="RM">

                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-3">
                      <label class="tl">Tarikh Permulaan Kerja:</label>
                      <input type="text" data-toggle="datepicker" class="form-control ts" style="font-weight:bold;" name="tarikhmula" value="<?php echo $get_detail[0]->mrk_tarikhmulakon?>" readonly>
                    </div>
                    <div class="col-sm-3">
                      <label class="tl">Tarikh Kerja Tamat:</label>
                      <input type="text" data-toggle="datepicker" class="form-control ts" style="font-weight:bold;"  name="tarikhtamat" value="<?php echo $get_detail[0]->mrk_tarikhjangkasiap?>" readonly>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-3">
                      <label class="tl">Tarikh Dilanjutkan Masa:</label>
                      <input type="text" data-toggle="datepicker" class="form-control ts" style="font-weight:bold;" name="tariklanjut" value="<?php echo $get_detail[0]->lsk_lanjutmasa?>">
                    </div>
                    <div class="col-sm-3">
                      <label class="tl">Tarikh Kerja Siap Sempurna:</label>
                      <input type="text" data-toggle="datepicker" class="form-control ts" style="font-weight:bold;"  name="tarikhkerjasempurna" value="<?php echo $get_detail[0]->lsk_tarikhkerjasiap?>">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-6">
                      <label class="tl">Peruntukan:</label>
                        <input type="text" class="form-control ts" style="font-weight:bold;" name="peruntukan" value="<?php echo $get_detail[0]->df_kodvot ?>">
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
      <!--start col-md-12 for form-->
      <div class="col-8 grid-margin">
        <div class="card" style="border-radius:10px;">
            <div class="card-body" style="background-color:#dfe4ea; border-radius:10px;">
            <h4 class="card-title ts" style="color:#38ada9;font-weight:bold;">Laporan Pegawai Penjaga</h4>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group row">
                  <div class="col-sm-8">
                    <label class="tl">Laporan:</label>
                    <textarea rows="5" type="text" class="form-control ts" style="font-weight:bold;"  name="laporanpegawai"><?php echo $get_detail[0]->lsk_laporanpegawai?></textarea>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group row">
                  <div class="col-sm-4">
                    <label class="tl">Pegawai Penyelia</label>
                    <select type="text" class="form-control"  name="pegawaiselia">
                      <option value="<?php echo $get_detail[0]->lsk_pegawaipenyelia?>"><?php echo $get_detail[0]->lsk_pegawaipenyelia?></option>
                      <option value="<?php echo $this->session->userdata("name")?>"><?php echo $this->session->userdata("name")?></option>
                    </select>
                  </div>
                  <div class="col-sm-4">
                    <label class="tl">Jawatan</label>
                    <select type="text" class="form-control" id="jawatan" name="jawatan">
                      <option value="<?php echo $get_detail[0]->lsk_jawatanpen?>"><?php echo $get_detail[0]->lsk_jawatanpen?></option>
                      <option value="<?php echo $this->session->userdata("jawatan")?>"><?php echo $this->session->userdata("jawatan")?></option>
                    </select>
                  </div>
                
                </div>
              </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-4">
                    <label class="tl">Tarikh Perakui</label>
                    <input type="text" data-toggle="datepicker" class="form-control ts" style="font-weight:bold;" id="tarikhperakui" name="tarikhperakui" value="<?php echo $get_detail[0]->lsk_tarikhperakui?>">
                  </div>
                  </div>
               </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="form-group row">
                  <div class="col-sm-4">
                    <label class="tl">Ketua Bahagian</label>
                    <select type="text" class="form-control ts" style="font-weight:bold;" id="ketua" name="ketua">
                      <option value="<?php echo $get_detail[0]->lsk_ketuabahagian?>"><?php echo $get_detail[0]->lsk_ketuabahagian?></option>
                      <?php foreach($get_keypeople as $users){ ?>
                        <option value="<?php echo $users->p_names?>"><?php echo $users->p_names?></option>';
                      <?php } ?>
                    </select>
                  </div>
                  <div class="col-sm-4">
                    <label class="tl">Jawatan</label>
                    <select type="text" class="form-control ts" style="font-weight:bold;" id="jawatan1" name="jawatan1">
                      <option value="<?php echo $get_detail[0]->lsk_jawatanketuab?>"><?php echo $get_detail[0]->lsk_jawatanketuab?></option>
                      <option value="Penolong Jurutera JA29">Penolong Jurutera JA29</option>
                      <option value="Penolong Jurutera Kanan JA36">Penolong Jurutera Kanan JA36</option>
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
                    <label class="tl">Jurutera J41/J44</label>
                    <select type="text" class="form-control ts" style="font-weight:bold;" id="juruj" name="juruj">
                      <option value="<?php echo $get_detail[0]->lsk_juruteraj?>"><?php echo $get_detail[0]->lsk_juruteraj?></option>
                      <?php foreach($get_keypeople as $users){ ?>
                        <option value="<?php echo $users->p_names?>"><?php echo $users->p_names?></option>';
                      <?php } ?>
                    </select>
                  </div>
                  <div class="col-sm-4">
                    <label class="tl">Jawatan</label>
                    <select type="text" class="form-control ts" style="font-weight:bold;" id="jawatan2" name="jawatan2">
                      <option value="<?php echo $get_detail[0]->lsk_jawatanjuruteraj?>"><?php echo $get_detail[0]->lsk_jawatanjuruteraj?></option>
                  
                      <option value="Jurutera ( Kuala Muda/Sik )">Jurutera ( Kuala Muda/Sik )</option>
                      <option value="Jurutera ( Baling )">Jurutera ( Baling )</option>
                      <option value="Jurutera Daerah">Jurutera Daerah</option>
                   
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group row">
                  <div class="col-sm-4">
                    <label class="tl">Jurutera Daerah</label>
                    <select type="text" class="form-control ts" style="font-weight:bold;" id="jurudaerah" name="jurudaerah">
                      <option value="<?php echo $get_detail[0]->lsk_juruterad?>"><?php echo $get_detail[0]->lsk_juruterad?></option>
                      <?php foreach($get_keypeople as $users){ ?>
                        <option value="<?php echo $users->p_names?>"><?php echo $users->p_names?></option>';
                      <?php } ?>
                    </select>
                  </div>
                  <div class="col-sm-4">
                    <label class="tl">Jawatan</label>
                    <select type="text" class="form-control ts" style="font-weight:bold;" id="jawatan3" name="jawatan3">
                      <option value="<?php echo $get_detail[0]->lsk_jawatanjuruterad?>"><?php echo $get_detail[0]->lsk_jawatanjuruterad?></option>
                      <option value="Jurutera Daerah">Jurutera Daerah</option>
                      <option value="Jurutera ( Kuala Muda/Sik )">Jurutera ( Kuala Muda/Sik )</option>
                      <option value="Jurutera ( Baling )">Jurutera ( Baling )</option>
                   
                     
                    </select>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="form-group row">
                  <div class="col-sm-6">
                    <label class="tl">Perkeso / Workmen's</label>
                      <input type="text" class="form-control ts" style="font-weight:bold;" id="perkeso" name="perkeso" value="<?php echo $get_detail[0]->lsk_perkeso?>">
                  </div>
                  <div class="col-sm-6">
                    <label class="tl">Public Liability</label>
                      <input type="text" class="form-control ts" style="font-weight:bold;" id="publiability" name="publiability" value="<?php echo $get_detail[0]->lsk_liability?>">
                  </div>
                </div>
              </div>
            </div>

             <div class="row">
              <div class="col-md-12">
                <div class="form-group row">
                  <div class="col-sm-6">
                    <label class="tl">Insuran Kerja</label>
                      <input type="text" class="form-control ts" style="font-weight:bold;" id="perkeso" name="insurankerja" value="<?php echo $get_detail[0]->lsk_perkeso?>">
                  </div>
                </div>
              </div>
            </div>

              <div class="row">
                <div class="col-md-12">

                 <p>
                <p>
                <p>
                <p>
                <br>

                               <nav class="navbar navbar-expand-lg navbar-light bg-light" style="border-radius:10px;">
                                      <button type="submit" name="submit" class="btn btn-primary mr-2 btn-rounded " data-toggle="tooltip" data-placement="bottom" title="Simpan Laporan Siap Kerja">Simpan</button>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active"style="margin-left:5px;">
                              <a href="<?php echo site_url('mrk/MRK_02/'.$get_detail[0]->projek_id) ?>" class="btn btn-warning mr-2 btn-rounded" role="button" data-toggle="tooltip" data-placement="bottom" title="Maklumat Rekod Kerja 02">MRK 02</a>
                         
      </li>
      <li class="nav-item" style="margin-left:5px;">
   <a href="<?php echo site_url('Report/Report_LSK/'.$get_detail[0]->projek_id) ?>" class="btn btn-success mr-2 btn-rounded" role="button" data-toggle="tooltip" data-placement="bottom" target="_blank" title="Muat Turun / Cetak">Lihat / Cetak</a>

      </li>
         <li class="nav-item" style="margin-left:5px;">
                        <a href="<?php echo site_url('mrk/MRK_03/'.$get_detail[0]->projek_id) ?>" class="btn btn-info mr-2 btn-rounded" role="button" data-toggle="tooltip" data-placement="bottom" title="Maklumat Rekod Kerja 03">MRK 03</a>
      </li>
      <li class="nav-item" style="margin-left:5px;">
                    <a href="<?php echo site_url('projek/view_data/'.$get_detail[0]->projek_id) ?>" class="btn btn-danger mr-2 btn-rounded" role="button" data-toggle="tooltip" data-placement="bottom" title="Kembali ke Senarai Maklumat">Close</a>
      </li>
     
    </ul>
  </div>
</nav>

                </div>
              </div>
          </div>
        </div>
      </div>
      <!--end here col-md-12-->
      <!--end here col-md-12-->

      <script>
            $('[data-toggle="datepicker"]').datepicker({
              dateFormat: 'dd-mm-yy'
            });
           </script>

    </div>
  </form>
  </div>
