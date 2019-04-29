<div class="main-panel">
<div class="content-wrapper cnt" style="background: #C9D6FF;background: -webkit-linear-gradient(to right, #E2E2E2, #C9D6FF);background: linear-gradient(to right, #E2E2E2, #C9D6FF);">
    <div class="row">
      <div class="col-md-12 grid-margin stretch-card">
        <div class="card" style="border-radius:10px;background-color:#4a69bd;">
          <div class="card-body">
            <h4 class="card-title">  <h2 class="f"><?php echo $title; ?></h2>
            <p class="card-description"><h5><span class="error" style="color:#FFFF;"> * Dikehendaki mengisi semua bahagian</span></h5></p>


            <?php if (isset($_SESSION['success'])) { ?>
            <div class="alert alert-success"> <?php echo $_SESSION['success']; ?></div>
            <?php
          } ?>
          </div>
        </div>
      </div>
      <!--start col-md-12 for form-->
      <div class="col-12 grid-margin">

        <?php echo validation_errors(); ?>
        <?php echo form_open('projek/Update_Projek03'); ?>
        <div class="card" style="border-radius:10px;background-color:#4b6584;">
          <div class="card-body">
            <a href="<?php echo site_url("projek/Update_Projek01/" . $get_detail[0]->projek_id); ?>" class="btn btn-primary mr-2 btn-rounded" role="button">PAGE1</a>
            <a href="<?php echo site_url("projek/Update_Projek02/" . $get_detail[0]->projek_id); ?>" class="btn btn-primary mr-2 btn-rounded" role="button">PAGE2</a>
            <a href="<?php echo site_url("projek/Update_Projek03/" . $get_detail[0]->projek_id); ?>" class="btn btn-success mr-2 btn-rounded" role="button" >PAGE3</a>
            <p></p>
            <p></p>
            <h4 class="card-title" style="color:#ffff">Lokasi & Sistem</h4>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">

                    <label class="col-sm-1 col-form-label tl">Latitud (N)</label>
                    <div class="col-sm-2">
                      <div class="input-group">
                        <input type="text" class="form-control" id="lata" name="lata" value="<?php echo $get_detail[0]->dp_lata?>">
                        <div class="input-group-append bg-dark border-primary">
                          <span class="input-group-text bg-transparent text-white">0</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-2">
                      <div class="input-group">
                        <input type="text" class="form-control" id="latb" name="latb" value="<?php echo $get_detail[0]->dp_latb?>">
                        <div class="input-group-append bg-dark border-primary">
                          <span class="input-group-text bg-transparent text-white">'</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-2">
                      <div class="input-group">
                        <input type="text" class="form-control" id="latc" name="latc" value="<?php echo $get_detail[0]->dp_latc?>">
                        <div class="input-group-append bg-dark border-primary">
                          <span class="input-group-text bg-transparent text-white">"</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">

                    <label class="col-sm-1 col-form-label tl">Longitud (E)</label>
                    <div class="col-sm-2">
                      <div class="input-group">
                        <input type="text" class="form-control" id="longa" name="longa" value="<?php echo $get_detail[0]->dp_longa?>">
                        <div class="input-group-append bg-primary border-primary">
                          <span class="input-group-text bg-transparent text-white">0</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-2">
                      <div class="input-group">
                       <input type="text" class="form-control" id="longb" name="longb" value="<?php echo $get_detail[0]->dp_longb?>">
                        <div class="input-group-append bg-primary border-primary">
                          <span class="input-group-text bg-transparent text-white">'</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-2">
                      <div class="input-group">
                        <input type="text" class="form-control" id="longc" name="longc" value="<?php echo $get_detail[0]->dp_longc?>">
                        <div class="input-group-append bg-primary border-primary">
                          <span class="input-group-text bg-transparent text-white">"</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <p>
              <p>
              <h4 class="card-title" style="color:#ffff">Sungai</h4>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-4">
                      <label class="tl">Lembangan Sungai</label>
                       <div class="input-group">
                              <input type="text" class="form-control" id="sungai" onkeyup="autofill()" value="<?php echo $get_detail[0]->dp_sungai?>" name="sungai" readonly>
                              <div class="input-group-append bg-success border-primary">
                                <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-inverse-* btn-success">Pilih</button>
                              </div>
                            </div>



                               <!-- Modal -->
                          <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document" style="margin-left:270px;">
                              <div class="modal-content" style="background-color:white; width:800px;">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel" >Senarai Sungai-sungai</h5>
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
                                                <th width:20>
                                                  Tindakan
                                                </th>
                                                <th>
                                                  Nama Sungai
                                                </th>
                                                <th>
                                                  Cabang Sungai
                                                </th>
                                                <th>
                                                  Daerah
                                                </th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                              <?php $bil=0;?>
                                              <?php foreach ($get_sungai as $row):$bil++ ?>
                                                <tr>
                                                  <td class="py-1"><?php echo $bil ?></td>
                                                  <td class="py-1"><span><button id="buttonselect"  value="<?php echo $row->sg_name?>" class="btn btn-info" data-dismiss="modal">Pilih</button></td> <!--Show data in list view-->
                                                  <td class="py-1"><span><?php echo $row->sg_name?><span></td> <!--Show data in list view-->
                                                  <td class="py-1"><span><?php echo $row->sg_cabang?><span></td> <!--Show data in list view-->
                                                  <td class="py-1"><span><?php echo $row->sg_daerah?><span></td> <!--Show data in list view-->
       
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
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-3">
                      <label class="tl">Sistem</label>
                         <select  class="form-control" id="sistem" name="sistem">
                          <option value="<?php echo $get_detail[0]->dp_sistem?>"><?php echo $get_detail[0]->sistem?></option>
                           <?php
                            foreach($get_sistem as $row)
                            {
                              echo '<option value="'.$row->sis_id.'">'.$row->sistem.'</option>';
                            } 
                            ?>   
                        </select>
                    </div>
                    <div class="col-sm-3">
                      <label class="tl">Sub Sistem</label>
                      <select class="form-control" id="subsistem" name="subsistem">
                        <option value="<?php echo $get_detail[0]->dp_subsistem?>"><?php echo $get_detail[0]->subsistem?></option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-3">
                      <label class="tl">Komponen</label>
                        <select class="form-control" id="komponen" name="komponen">
                        <option value="<?php echo $get_detail[0]->dp_komponen?>"><?php echo $get_detail[0]->component?></option>
                      </select>
                    </div>
                    <div class="col-sm-3">
                      <label class="tl">Dimensi</label>
                      <input type="text" class="form-control" id="dimensi" name="dimensi" placeholder="Dimensi" value="<?php echo $get_detail[0]->dp_dimensi?>">
                      <input type="hidden" class="form-control" name="dp_idpost" value="<?php echo $get_detail[0]->dp_id?>">
                    </div>
                  </div>
                </div>
              </div>
              <p>
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
    <script type="text/javascript">
                  $('#myModal').on('shown.bs.modal', function () {
                    $('#myInput').trigger('focus')
                  })
                  </script>

                  <script>
                    $('.table tbody').on('click','#buttonselect',function(){

                      var currow = $(this).closest('tr');
                      var sungai = currow.find('td:eq(2)').text();  
                      var result = sungai;
                      $("#sungai").val(result);
                     
                    })
         </script>

          <script>
      $(document).ready(function(){
        $('#sistem').change(function(){
          var sis_id = $('#sistem').val()
          if(sis_id != '')
          {
            $.ajax({
              url:"<?php echo base_url();?>daftar/isSubsistem",
              method:"POST",
              data:{sis_id:sis_id},
              success:function(data)
              {
                $('#subsistem').html(data);
                $('#komponen').html('<option value="">Pilih Komponen</option>');
              }
            });
          }
          else
          {
            $('#subsistem').html('<option value="">Pilih Subsistem</option>');
            $('#komponen').html('<option value="">Pilih Komponent</option>');
          }
        });

        $('#subsistem').change(function(){
          var sub_id = $('#subsistem').val();
          if(sub_id != '')
          {
            $.ajax({
              url:"<?php echo base_url();?>daftar/isComponent",
              method:"POST",
              data:{sub_id:sub_id},
              success:function(data)
              {
                $('#komponen').html(data);
              }
            });
          }
          else
          {
            $('#komponen').html('<option value="">Pilih Komponent</option>');
          }
        });
      });
    </script>
  </div>
