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

            <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">Senarai Semakan</h3>
              </div><!-- end of box header-->


                      <?php echo validation_errors(); ?>


                      <?php

                          $pkkNo = $get_detail[0]->ss_kodvot;
                            if($pkkNo == null){
                                echo form_open('mrk/Senarai_Semak');
                            }
                            else {
                              echo form_open('mrk/SS_Update');
                            }

                      ?>

              <div class="box-body">
                <div class="form-group">
                  <div class="col-sm-3">
                    <label style="margin-right:20px;font-size:12px;">Surat Tuntutan</label>
                    <?php $check=$get_detail[0]->cb1; if($check==1){$ch1='checked';}else{$ch1='null';}?>
                    <input type="checkbox" name="chk1" value="1" <?php echo $ch1?> >

                  </div>

                  <div class="col-sm-3">
                    <label style="margin-right:20px;font-size:12px;">Keputusan Panel</label>
                    <?php $check=$get_detail[0]->cb2; if($check==1){$ch2='checked';}else{$ch2='null';}?>
                    <input type="checkbox" name="chk2" value="1" <?php echo $ch2 ?>>

                  </div>
                  <div class="col-sm-3">
                    <label style="margin-right:20px;font-size:12px;">Surat Tawaran Kerja</label>
                    <?php $check=$get_detail[0]->cb3; if($check==1){$ch3='checked';}else{$ch3='null';}?>
                    <input type="checkbox" name="chk3" value="1" <?php echo $ch3?>>

                  </div>

                </div>


              </div>

              <div class="box-body">
                <div class="form-group">
                  <div class="col-sm-3">
                    <label style="margin-right:20px;font-size:12px;">Inden / No Minta</label>
                    <?php $check=$get_detail[0]->cb4; if($check==1){$ch4='checked';}else{$ch4='null';}?>
                    <input type="checkbox" name="chk4" value="1" <?php echo $ch4?>>

                  </div>


                  <div class="col-sm-3">
                    <label style="margin-right:20px;font-size:12px;">Perakuan Siap Kerja</label>
                    <?php $check=$get_detail[0]->cb5; if($check==1){$ch5='checked';}else{$ch5='null';}?>
                    <input type="checkbox" name="chk5" value="1" <?php echo $ch5?>>

                  </div>
                  <div class="col-sm-3">
                    <label style="margin-right:20px;font-size:12px;">Detail Butiran Tawaran Terus</label>
                    <?php $check=$get_detail[0]->cb6; if($check==1){$ch6='checked';}else{$ch6='null';}?>
                    <input type="checkbox" name="chk6" value="1" <?php echo $ch6?>>

                  </div>

                </div>


              </div>

              <div class="box-body">
                <div class="form-group">
                  <div class="col-sm-3">
                    <label style="margin-right:20px;font-size:12px;">Laporan Siap Kerja</label>
                    <?php $check=$get_detail[0]->cb7; if($check==1){$ch7='checked';}else{$ch7='null';}?>
                    <input type="checkbox" name="chk7" value="1" <?php echo $ch7?>>

                  </div>

                  <div class="col-sm-3">
                    <label style="margin-right:20px;font-size:12px;">Salinan Penyata Bank</label>
                    <?php $check=$get_detail[0]->cb8; if($check==1){$ch8='checked';}else{$ch8='null';}?>
                    <input type="checkbox" name="chk8" value="1" <?php echo $ch8?>>

                  </div>
                  <div class="col-sm-3">
                    <?php $check=$get_detail[0]->cb9; if($check==1){$ch9='checked';}else{$ch9='null';}?>
                    <label style="margin-right:20px;font-size:12px;">Perakuan Perubahan Kerja</label>
                    <input type="checkbox" name="chk9" value="1" <?php echo $ch9?>>

                  </div>

                </div>


              </div>

              <div class="box-body">
                <div class="form-group">
                  <div class="col-sm-3">
                    <label style="margin-right:20px;font-size:12px;">Salinan Sijil PKK</label>
                    <?php $check=$get_detail[0]->cb10; if($check==1){$ch10='checked';}else{$ch10='null';}?>
                    <input type="checkbox" name="chk10" value="1" <?php echo $ch10;?>>


                  </div>

                  <div class="col-sm-3">
                    <label style="margin-right:20px;font-size:12px;">Surat Akaun Sumpah</label>
                    <?php $check=$get_detail[0]->cb11; if($check==1){$ch11='checked';}else{$ch11='null';}?>
                    <input type="checkbox" name="chk11" value="1" <?php echo $ch11?>>

                  </div>
                  <div class="col-sm-3">
                    <label style="margin-right:20px;font-size:12px;">Borang MRK03</label>
                    <?php $check=$get_detail[0]->cb12; if($check==1){$ch12='checked';}else{$ch12='null';}?>
                    <input type="checkbox" name="chk12" value="1" <?php echo $ch12?>>

                  </div>

                </div>


              </div>

              <div class="box-body">
                <div class="form-group">
                  <div class="col-sm-3">
                    <label style="margin-right:20px;font-size:12px;">Salinan Sijil CIDB</label>
                    <?php $check=$get_detail[0]->cb13; if($check==1){$ch13='checked';}else{$ch13='null';}?>
                    <input type="checkbox" name="chk13" value="1" <?php echo $ch13?>>

                  </div>

                  <div class="col-sm-3">
                    <label style="margin-right:20px;font-size:12px;">Gambar</label>
                    <?php $check=$get_detail[0]->cb14; if($check==1){$ch14='checked';}else{$ch14='null';}?>
                    <input type="checkbox" name="chk14" value="1" <?php echo $ch14?>>

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
                    <?php $check=$get_detail[0]->cb15; if($check==1){$ch15='checked';}else{$ch15='null';}?>
                    <input type="checkbox" name="chk15" value="1" <?php echo $ch15?>>

                  </div>

                  <div class="col-sm-3">
                    <label style="margin-right:20px;font-size:12px;">Wang Jaminan Perlaksanaan</label>
                      <?php $check=$get_detail[0]->cb16; if($check==1){$ch16='checked';}else{$ch16='null';}?>
                    <input type="checkbox" name="chk16" value="1" <?php echo $ch16?>>

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
                                  <?php $check=$get_detail[0]->cb17; if($check==1){$ch17='checked';}else{$ch17='null';}?>
                                  <input type="checkbox" name="chk17" value="1" <?php echo $ch17?>>

                                </div>

                                <div class="col-sm-3">
                                  <label style="margin-right:20px;font-size:12px;">Workman/Compasation/PERKESO</label>
                                  <?php $check=$get_detail[0]->cb18; if($check==1){$ch18='checked';}else{$ch18='null';}?>
                                  <input type="checkbox" name="chk18" value="1" <?php echo $ch18?>>

                                </div>


                              </div>


                            </div>





              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">Disediakan Oleh :</label>
                  <div class="col-sm-3">
                    <select type="text" class="form-control" id="sedia" name="sedia">
                      <option value="<?php echo $get_detail[0]->ss_disediakan?>"><?php echo $get_detail[0]->ss_disediakan?></option>
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
                    <input type="date" class="form-control" id="tarikhsedia" name="tarikhsedia" value="<?php echo $get_detail[0]->ss_date?>">
                  </div>
                </div>
              </div>


              <input type="hidden" readonly name="hiddenid"  value="<?php echo $get_detail[0]->mrksatuid?>">
              <input type="hidden" readonly  name="kodvot"  value="<?php echo $get_detail[0]->df_kodvot?>">
              <input type="hidden" readonly  name="noinden"  value="<?php echo $get_detail[0]->mrk_noinden?>">
              <div class="box-footer">
                <div class="form-group">
                <div class="col-md-2">
                <button type="submit" name="submit" class="btn btn-primary">Save</button>

              </div>
              <div class="col-md-6">
                  <a href="<?php echo site_url('Report/Report_MRK_01/'.$get_detail[0]->projek_id) ?>" class="btn btn-success" role="button">Print</a>
                    <a href="<?php echo site_url('mrk/PSK/'.$get_detail[0]->projek_id) ?>" class="btn btn-warning" role="button">Perakuan Siap Kerja</a>

                  <a href="<?php echo site_url('mrk/MRK_PSMK/'.$get_detail[0]->projek_id) ?>" class="btn btn-info" role="button">PSMK</a>
              </div>

              <div class="col-md-4">
                  <a href="<?php echo site_url('projek/view_data/'.$get_detail[0]->mrks_kodvot) ?>" class="btn btn-danger" role="button">Close</a>

              </div>
            </div>
              </div>
            </div>
          </form>
        </div>
      </div><!--end of row-->


    </section>
    <!-- /.content -->

  </div>
  <!-- /.content-wrapper -->
