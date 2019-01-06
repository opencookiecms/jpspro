<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">  <h2 class="f">Laporan Siap Kerja</h2>
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
            $pkkNo = $get_detail[0]->lsk_noinden;
              if($pkkNo == null){
                  echo form_open('mrk/LSK');
              }
              else {
                echo form_open('mrk/LSK_Update');
              }
        ?>

        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Maklumat Rekod Kerja - Laporan Siap Kerja</h4>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-3">
                      <label>No Pendaftaran PKK</label>
                      <input type="hidden" value="<?php echo $get_detail[0]->df_kodvot ?>" name="kodvods">
                      <input type="hidden" value="<?php echo $get_detail[0]->mrksatuid?>" name="hiddenid">
                      <input type="text" class="form-control" id="nopkk" name="nopkk" value="<?php echo $get_detail[0]->mrk_nopkk?>" placeholder="No Pendaftaran PKK" readonly>
                    </div>
                    <div class="col-sm-3">
                      <label>Nama Pemborong</label>
                      <input type="text" class="form-control" id="namapem" name="namapem" value="<?php echo $get_detail[0]->mrk_namakon?>" placeholder="Nama Pemborong" readonly>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-6">
                      <label>Alamat</label>
                      <textarea type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" readonly><?php echo $get_detail[0]->mrk_alamatkon?></textarea>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-6">
                      <label>Butiran Kerja</label>
                      <textarea type="text" class="form-control"  name="butiran" placeholder="Butiran Kerja" readonly><?php echo $get_detail[0]->mrk_tajukkerja?></textarea>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-6">
                      <label>No Sebutharga</label>
                      <input type="text" class="form-control"  name="nosebut" placeholder="No Sebutharga" value="<?php echo $get_detail[0]->df_nosebutharga?>" readonly>
                    </div>
                    <div class="col-sm-6">
                      <label>No Pesanan Kerja / No Inden</label>
                      <input type="text" class="form-control" name="nopesanan" placeholder="No Pesanan Kerja" value="<?php echo $get_detail[0]->mrk_noinden?>" readonly>
                      <input type="hidden" name="kodvods" value="<?php echo $get_detail[0]->df_kodvot?>">
                      <input type="hidden" class="form-control" name="noinden" value="<?php echo $get_detail[0]->mrk_noinden?>"  placeholder="Inden No" readonly>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-4">
                      <label>Harga Pesanan RM:</label>
                      <div class="input-group">
                        <div class="input-group-prepend bg-success border-primary">
                          <span class="input-group-text bg-transparent text-white">RM</span>
                        </div>
                          <input type="text" class="form-control" value="<?php echo number_format($get_detail[0]->mrk_kosprojek,2)?>"  name="hargapesanan" placeholder="RM" readonly>

                      </div>
                    </div>
                    <div class="col-sm-4">
                      <label>Harga Pesanan RM:</label>
                      <div class="input-group">
                        <div class="input-group-prepend bg-success border-primary">
                          <span class="input-group-text bg-transparent text-white">RM</span>
                        </div>
                          <input type="text" class="form-control"  name="hargasebenar" value="<?php echo number_format($get_detail[0]->lks_hargasebenar,2) ?>" placeholder="RM">

                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-3">
                      <label>Tarikh Permulaan Kerja:</label>
                      <input type="date" class="form-control" name="tarikhmula" value="<?php echo $get_detail[0]->mrk_tarikhmulakon?>" readonly>
                    </div>
                    <div class="col-sm-3">
                      <label>Tarikh Kerja Tamat:</label>
                      <input type="date" class="form-control"  name="tarikhtamat" value="<?php echo $get_detail[0]->mrk_tarikhjangkasiap?>" readonly>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-3">
                      <label>Tarikh Permulaan Kerja:</label>
                      <input type="date" class="form-control" name="tariklanjut" value="<?php echo $get_detail[0]->lsk_lanjutmasa?>">
                    </div>
                    <div class="col-sm-3">
                      <label>Tarikh Kerja Tamat:</label>
                      <input type="date" class="form-control"  name="tarikhkerjasempurna" value="<?php echo $get_detail[0]->lsk_tarikhkerjasiap?>">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-6">
                      <label>Peruntukan:</label>
                        <input type="text" class="form-control"  name="peruntukan" value="<?php echo $get_detail[0]->lsk_peruntukan?>">
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
      <!--start col-md-12 for form-->
      <div class="col-12 grid-margin">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Laporan Pegawai Penjaga</h4>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group row">
                  <div class="col-sm-6">
                    <label>Laporan:</label>
                    <textarea type="text" class="form-control"  name="laporanpegawai"><?php echo $get_detail[0]->lsk_laporanpegawai?></textarea>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group row">
                  <div class="col-sm-3">
                    <label>Pegawai</label>
                    <select type="text" class="form-control"  name="pegawaiselia">
                      <option value="<?php echo $get_detail[0]->lsk_pegawaipenyelia?>"><?php echo $get_detail[0]->lsk_pegawaipenyelia?></option>
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
                  <div class="col-sm-3">
                    <label>Jawatan</label>
                    <select type="text" class="form-control" id="jawatan" name="jawatan">
                      <option value="<?php echo $get_detail[0]->lsk_jawatanpen?>"><?php echo $get_detail[0]->lsk_jawatanpen?></option>
                      <option value="Penolong Jurutera JA29">Penolong Jurutera JA29</option>
                      <option value="Penolong Jurutera JA36">Penolong Jurutera JA36</option>
                      <option value="Jurutera ( Kuala Muda/Sik )">Jurutera ( Kuala Muda/Sik )</option>
                      <option value="Jurutera ( Baling )">Jurutera ( Baling )</option>
                      <option value="Jurutera Daerah">Jurutera Daerah</option>
                      <option value="Penolong Jurutera JA38">Penolong Jurutera JA38</option>
                    </select>
                  </div>
                  <div class="col-sm-3">
                    <label>Tarikh Perakui</label>
                    <input type="date" class="form-control" id="tarikhperakui" name="tarikhperakui" value="<?php echo $get_detail[0]->lsk_tarikhperakui?>">
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="form-group row">
                  <div class="col-sm-3">
                    <label>Ketua Bahagian</label>
                    <select type="text" class="form-control" id="ketua" name="ketua">
                        <option value="<?php echo $get_detail[0]->lsk_ketuabahagian?>"><?php echo $get_detail[0]->lsk_ketuabahagian?></option>
                      <option value="Mohd. Amin B. Ahmad">Mohd. Amin B. Ahmad</option>
                      <option value="Yahaya B. Shariff">Yahaya B. Shariff</option>
                    </select>
                  </div>
                  <div class="col-sm-3">
                    <label>Jawatan</label>
                    <select type="text" class="form-control" id="jawatan1" name="jawatan1">
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
                  <div class="col-sm-3">
                    <label>Jurutera J41/J44</label>
                    <select type="text" class="form-control" id="juruj" name="juruj">
                      <option value="<?php echo $get_detail[0]->lsk_juruteraj?>"><?php echo $get_detail[0]->lsk_juruteraj?></option>
                      <option value="Khairul Anuar B. Abd. Rashid">Khairul Anuar B. Abd. Rashid</option>
                      <option value="Mohd. Daud Hamid">Mohd. Daud Hamid</option>
                      <option value="Hasan bin Abdul Majid">Hasan bin Abdul Majid</option>
                      <option value="Ir Siti Norazela binti Hasan">Ir Siti Norazela binti Hasan</option>
                      <option value="Nur Syuhada Binti Ahmad">Nur Syuhada Binti Ahmad</option>
                    </select>
                  </div>
                  <div class="col-sm-3">
                    <label>Jawatan</label>
                    <select type="text" class="form-control" id="jawatan2" name="jawatan2">
                      <option value="<?php echo $get_detail[0]->lsk_jawatanjuruteraj?>"><?php echo $get_detail[0]->lsk_jawatanjuruteraj?></option>
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
                  <div class="col-sm-3">
                    <label>Jurutera Daerah</label>
                    <select type="text" class="form-control" id="jurudaerah" name="jurudaerah">
                      <option value="<?php echo $get_detail[0]->lsk_juruterad?>"><?php echo $get_detail[0]->lsk_juruterad?></option>
                      <option value="Idris B. Yussof">Idris B. Yussof</option>
                      <option value="Zainuddin bin Yusoff, AMP., BCK">Zainuddin bin Yusoff, AMP., BCK</option>
                      <option value="Kamarudin Bin Saleh">Kamarudin Bin Saleh</option>
                      <option value="Nor Rozaini BT. Abdullah">Nor Rozaini BT. Abdullah</option>
                    </select>
                  </div>
                  <div class="col-sm-3">
                    <label>Jawatan</label>
                    <select type="text" class="form-control" id="jawatan3" name="jawatan3">
                      <option value="<?php echo $get_detail[0]->lsk_jawatanjuruterad?>"><?php echo $get_detail[0]->lsk_jawatanjuruterad?></option>
                      <option value="Merinyu Taliair Kanan">Merinyu Taliair Kanan</option>
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
                  <div class="col-sm-3">
                    <label>W/C Perkeso</label>
                      <input type="text" class="form-control" id="perkeso" name="perkeso" value="<?php echo $get_detail[0]->lsk_perkeso?>">
                  </div>
                  <div class="col-sm-3">
                    <label>Public Liability</label>
                      <input type="text" class="form-control" id="publiability" name="publiability" value="<?php echo $get_detail[0]->lsk_liability?>">
                  </div>
                </div>
              </div>
            </div>

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-2">
                      <p>
                      <p>
                      <button type="submit" name="submit" class="btn btn-primary mr-2 btn-rounded ">Simpan</button>
                    </div>
                    <div class="col-sm-6">
                      <p>
                      <p>
                        <a href="<?php echo site_url('Report/Report_LSK/'.$get_detail[0]->projek_id) ?>" class="btn btn-success mr-2 btn-rounded" role="button">Print</a>
                        <a href="<?php echo site_url('mrk/MRK_02/'.$get_detail[0]->projek_id) ?>" class="btn btn-warning mr-2 btn-rounded" role="button">MRK02</a>
                        <a href="<?php echo site_url('mrk/MRK_03/'.$get_detail[0]->projek_id) ?>" class="btn btn-info mr-2 btn-rounded" role="button">MRK03</a>
                    </div>
                    <div class="col-sm-4">
                    <p>
                    <p>
                    <a href="<?php echo site_url('projek/view_data/'.$get_detail[0]->mrks_kodvot) ?>" class="btn btn-warning mr-2 btn-rounded" role="button">Close</a>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
      <!--end here col-md-12-->
      <!--end here col-md-12-->
    </div>
  </form>
  </div>
