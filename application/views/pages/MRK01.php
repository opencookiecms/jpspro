<div class="main-panel">
  <div class="content-wrapper cnt" style="background: #606c88;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #3f4c6b, #606c88);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #3f4c6b, #606c88); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
">
    <div class="row">
      <div class="col-md-8 grid-margin stretch-card">
        <div class="card" style="border-radius:10px;">
              <div class="card-body" style="background-color:#0fb9b1;border-radius:10px;">
            <h4 class="card-title">  <h2 class="f ts">MRK 01</h2>
              <p class="card-description"><h5><span class="error ts" style="color:#ffda79;">No Sebutharga :<?php echo $get_detail[0]->df_nosebutharga ?> </span></h5></p>
              <?php if(isset($_SESSION['mrk01'])) { ?>
                <div class="alert alert-success"><?php echo $_SESSION['mrk01'] ?></div>
              <?php
                } ?>


              </div>
            </div>
          </div>
          <!--start col-md-12 for form-->
   
          <div class="col-8 grid-margin">

         

            <?php


            $pkkNo = $get_detail[0]->mrk_nopkk;
            if($pkkNo == null){
              echo form_open('mrk/MRK_01/'.$get_detail[0]->projek_id);
            }
            else {
              echo form_open('mrk/MRK_01_Update');
            }

            ?>
            <input type="hidden" name="kodvods" value="<?php echo $get_detail[0]->df_kodvot?>">
            <input type="hidden" name="kodvodss" value="<?php echo $get_detail[0]->df_kodvot?>">
             <input type="hidden" name="hiddenid" value="<?php echo $get_detail[0]->projek_id?>">
             <input type="hidden" name="mrkid" value="<?php echo $get_detail[0]->mrksatuid?>">
            <div class="card" style="border-radius:10px;">
              <div class="card-body" style="background-color:#dfe4ea;border-radius:10px;">
                <h4 class="card-title ts" style="color:#38ada9;font-weight:bold;">Kategori Pendaftaran</h4>
                   <h5 class="text-danger"><?php echo validation_errors(); ?></h5>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group row">
                              <div class="col-sm-8">
                          <label class="tl">**No Sebutharga</label>
                          <input type="text" class="form-control ts" style="font-weight:bold;" id="nokon" readonly name="nokon" value="<?php echo $get_detail[0]->df_nosebutharga ?>" placeholder="No Kontrak">
                        </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group row">
                      <div class="col-sm-8">
                        <label class="tl">**Nama Kontraktor</label>
                        <div class="input-group">
                          <input type="text" class="form-control ts" style="font-weight:bold;" id="namakon" onkeyup="autofill()" value="<?php echo $get_detail[0]->mrk_namakon ?>"name="namakon" placeholder="Nama Kontraktor">
                          <div class="input-group-append bg-success border-primary">
                            <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-inverse-* btn-success">select</button>
                          </div>
                        </div>
                      </div>
                      <!-- Modal -->
                      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document" style="margin-left:270px;">
                          <div class="modal-content" style="background-color:white; width:980px;">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Kontraktor</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <div class="container-fluid">
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="table-responsive dataTables_wrapper">
                                      <table id="example" class="table table-striped">
                                        <thead>
                                          <tr>
                                            <th>
                                              Bil
                                            </th>
                                              <th>
                                              Tindakan
                                            </th>
                                            <th width:20>
                                              Kontraktor
                                            </th>
                                            <th>
                                              Alamat
                                            </th>
                                            <th>
                                              No Pkk
                                            </th>
                                            <th>
                                              Daerah
                                            </th>
                                            <th>
                                              Negeri
                                            </th>
                                          
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <?php $bil=0;?>
                                          <?php foreach ($get_allkontraktor as $row):$bil++ ?>
                                            <tr>
                                              <td class="py-1"><?php echo $bil ?></td>
                                                  <td class="py-1"><button id="buttonselect"  value="<?php echo $row->konName?>"  class="btn btn-info" data-dismiss="modal">Pilih</button></td>
                                              <td class="py-1"><span><?php echo $row->konName?><span></td> <!--Show data in list view-->
                                              <td class="py-1"><span><?php echo $row->AddressCombine?><span></td> <!--Show data in list view-->
                                              <td class="py-1"><span><?php echo $row->sijilSPKKNo?><span></td> <!--Show data in list view-->
                                              <td class="py-1"><span><?php echo $row->konDaerah?><span></td> <!--Show data in list view-->
                                              <td class="py-1"><span><?php echo $row->konNegeri?><span></td> <!--Show data in list view-->
                                          
                                              </tr>

                                            <?php endforeach; ?>
                                          </tbody>
                                        </table>

                                        <script type="text/javascript">
                                        $(document).ready(function() {
                                          $('#example').DataTable( {
                                            "responsive":true,
                                          } );
                                        } );
                                        </script>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                              </div>

                            </div>
                          </div>
                        </div>
                        <!--end of modal-->
                    
                      </div>
                    </div>
                  </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group row">
                      <div class="col-sm-8">
                        <label class="tl">**No Pendaftaran PKK</label>
                        <input type="text" class="form-control ts" style="font-weight:bold;" id="nopkk" name="nopkk" value="<?php echo $get_detail[0]->mrk_nopkk ?>" placeholder="No Pendaftaran PKK">
                      </div>
                    </div>
                  </div>
                </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group row">
                        <div class="col-sm-8">
                          <label class="tl">Alamat:</label>
                          <textarea type="text" class="form-control ts" style="font-weight:bold;" id="alamat" name="alamat" placeholder="Alamat"><?php echo $get_detail[0]->mrk_alamatkon ?></textarea>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group row">
                        <div class="col-sm-4">
                          <label class="tl">Daerah</label>
                          <input type="text" value="<?php echo $get_detail[0]->mrk_daerah ?>" class="form-control ts" style="font-weight:bold;" id="daerah" name="daerah">


                        </div>
                        <div class="col-sm-4">
                          <label class="tl">Negeri</label>
                          <input value="<?php echo $get_detail[0]->mrk_negeri ?>" type="text" class="form-control ts" style="font-weight:bold;" id="negeri" name="negeri">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group row">
                        <div class="col-sm-8">
                          <label class="tl">Tajuk Kerja:</label>
                          <textarea rows="5" type="text" readonly  class="form-control ts" style="font-weight:bold;" id="tajukkerjamrk" name="tajukkerjamrk" placeholder="Tajuk Kerja"><?php echo $get_detail[0]->df_tajuk ?></textarea>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
                    <div class="col-4 grid-margin">
           </div>
            <!--end here col-md-12-->

            <!--start col-md-12 for form-->
           
            <div class="col-8 grid-margin">
              <div class="card" style="border-radius:10px;">
                <div class="card-body" style="background-color:#dfe4ea; border-radius:10px;">
                  <h4 class="card-title ts" style="color:#38ada9;font-weight:bold;">Inden & Maklumat Kontrak</h4>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group row">
                        <div class="col-sm-8">
                          <label class="tl">No Inden</label>
                          <input type="text" class="form-control ts" style="font-weight:bold;" id="noinden" value="<?php echo $get_detail[0]->mrk_noinden ?>" name="noinden"  placeholder="No Inden">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group row">
                         <div class="col-sm-4">
                          <label class="tl">Gred</label>
                          <select type="text" class="form-control ts" style="font-weight:bold;" id="gred" name="gred" placeholder="gred">
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
                        <div class="col-sm-4">
                          <label class="tl">Kategori</label>
                          <select type="text" class="form-control ts" style="font-weight:bold;" id="kategori" name="kategori" placeholder="kat">
                            <option value="<?php echo $get_detail[0]->mrk_kategori ?>"><?php echo $get_detail[0]->mrk_kategori ?></option>
                            <option value="CE">CE | Pembinaan Kejuruteraan Awam</option>
                            <option value="B">B | Pembinaan Bangunan</option>
                            <option value="ME">ME | Mekanikal & Elektrikal</option>
                          </select>
                        </div>
                     
                        <div class="col-sm-4">
                          <label class="tl">Pengkhususan</label>
                          <select type="text" class="form-control ts" style="font-weight:bold;" id="khusus" placeholder="khusus" name="khusus">
                            <option value="<?php echo $get_detail[0]->mrk_khusus ?>"><?php echo $get_detail[0]->mrk_khusus ?></option>
                               <?php foreach($getkhusus as $k){ ?>
                        <option value="<?php echo $k->ks_kscode ?>"><?php echo $k->ks_kscode.'-'.$k->ks_ksname?></option>';
                      <?php } ?>

                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group row">
                        <div class="col-sm-4">
                          <label class="tl">Tarikh Mula Kontrak</label>
                          <input type="text" data-toggle="datepicker" class="form-control ts" style="font-weight:bold;" id="tarikhmulakon" value="<?php echo $get_detail[0]->mrk_tarikhmulakon ?>"name="tarikhmulakon" placeholder="Tarikh Mula Kontrak">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group row">
                        <div class="col-sm-4">
                          <label class="tl">Tarikh Jangka Siap Kontrak</label>
                          <input type="text" data-toggle="datepicker" class="form-control ts" style="font-weight:bold;" id="tarikhjangka" value="<?php echo $get_detail[0]->mrk_tarikhjangkasiap ?>" name="tarikhjangka">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group row">
                        <div class="col-sm-4">
                          <?php
                             $ssroles = $this->session->userdata("roles");
                             if($ssroles == "admin")
                             {
                               $pegawais = "";
                               $jawatans = "";
                             }
                             else{
                               $pegawais = $this->session->userdata("name");
                               $jawatans = $this->session->userdata("jawatan");
                             }
                          ?>
                          <label class="tl">Pegawai</label>
                          <input type="text" class="form-control ts" style="font-weight:bold;" id="pegawai" value="<?php echo $pegawais  ?>" name="pegawai" readonly>

                        </div>
                        <div class="col-sm-4">
                          <label class="tl">Jawatan</label>
                          <input type="text" class="form-control ts" style="font-weight:bold;" value="<?php echo $jawatans  ?>" id="jawatan" name="jawatan" readonly>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group row">
                        <div class="col-sm-4">
                          <label class="tl">Kos Projek</label>
                          <div class="input-group">
                            <div class="input-group-prepend bg-primary border-primary">
                              <span class="input-group-text bg-transparent text-white">RM</span>
                            </div>
                            <input type="text" class="form-control ts" style="font-weight:bold;" id="kosprojek" value="<?php echo $get_detail[0]->mrk_kosprojek ?>" name="kosprojek" placeholder="RM">                         
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group row">
                        <div class="col-sm-4">
                          <label class="tl">Tarikh</label>
                          <input type="text" data-toggle="datepicker" class="form-control ts" style="font-weight:bold;" value="<?php echo $get_detail[0]->mrk_tarikh ?>" id="tarikh" name="tarikh">
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
                           <button type="submit" name="submit" data-toggle="tooltip" data-placement="bottom" title="Simpan Maklumat MRK01" class="btn btn-primary mr-2 btn-rounded ">Simpan</button>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active"style="margin-left:5px;">
        <a href="<?php echo site_url('Report/Report_MRK_01/'.$get_detail[0]->projek_id) ?>" data-toggle="tooltip" data-placement="bottom" title="Muat Turun / Cetak" class="btn btn-success mr-2 btn-rounded " role="button" target="_blank">Lihat / Cetak</a>
      </li>
      <li class="nav-item" style="margin-left:5px;">
        <a href="<?php echo site_url('mrk/MRK_02/'.$get_detail[0]->projek_id) ?>" class="btn btn-info mr-2 btn-rounded " data-toggle="tooltip" data-placement="bottom" title="Maklumat Rekod Kerja 02"role="button">MRK02</a>
      </li>
      <li class="nav-item" style="margin-left:5px;">
                                           <a href="<?php echo site_url('projek/view_data/'.$get_detail[0]->projek_id) ?>" class="btn btn-danger mr-2 btn-rounded" data-toggle="tooltip" data-placement="bottom" title="Kembali Ke Senarai Maklumat" role="button">Close</a>
      </li>
     
    </ul>
  </div>
</nav>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                         <div class="col-md-4 grid-margin">
            </div>
                        <!--end here col-md-12-->
                        <!--end here col-md-12-->



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

              <script>
                $('.table tbody').on('click','#buttonselect',function(){

                  var currow = $(this).closest('tr');
                  //var col1 = currow.find('td:eq(1)').text();
                  var col2 = currow.find('td:eq(2)').text();
                  var col4 = currow.find('td:eq(4)').text();
                  var col3 = currow.find('td:eq(3)').text();
                  var col5 = currow.find('td:eq(5)').text();
                  var col6 = currow.find('td:eq(6)').text();
                 
                  var kontraktor = col2;
                  var nopkk = col4;
                  var alamat = col3;
                  var daerah = col5;
                  var negeri = col6;
             
                  $("#namakon").val(kontraktor);
                  $("#nopkk").val(nopkk);
                  $('#alamat').val(alamat);
                  
                  $("#daerah").val(daerah);
                  $("#negeri").val(negeri);
                })
              </script>
              <!--
              <script>
              $(function() {
                $("#namakon").autocomplete({
                  source:"echo site_url('mrk/getKonSearch')?>",
                });
              } );
              </script>
            -->
              <script type="text/javascript">
              $('#myModal').on('shown.bs.modal', function () {
                $('#myInput').trigger('focus')
              })
              </script>

           <script>
            $('[data-toggle="datepicker"]').datepicker({
              dateFormat: 'dd-mm-yy'
            });
           </script>

            </div>
          </form>
        </div>
