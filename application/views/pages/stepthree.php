<div class="main-panel">
<div class="content-wrapper cnt" style="background: #606c88;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #3f4c6b, #606c88);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #3f4c6b, #606c88); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
">
    <div class="row">
      <div class="col-md-9 grid-margin stretch-card">
        <div class="card" style="border-radius:10px;background-color:#40739e">
          <div class="card-body" >
            <h4 class="card-title">  <h2 class="f"><?php echo $title; ?></h2>
            <p class="card-description"><h5><span class="error" style="color:#f5f6fa;"> * Dikehendaki mengisi semua bahagian</span></h5></p>
            <?php echo $idval; ?>

            <?php if (isset($_SESSION['success'])) { ?>
            <div class="alert alert-success"> <?php echo $_SESSION['success']; ?></div>
            <?php
          } ?>
          </div>
        </div>
      </div>
      <!--start col-md-12 for form-->
      <div class="col-9 grid-margin">
        <?php echo validation_errors(); ?>

        <?php echo form_open('daftar/steptiga'); ?>
          <input type="hidden" class="form-control" name="dp_idpost" value="<?php echo $idval;?>">
        <div class="card" style="border-radius:10px;">
           <div class="card-body" style="background-color:#dfe4ea;border-radius:10px;">
            <h4 class="card-title" style="color:#38ada9;">Lokasi & Sistem</h4>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">

                    <label class="col-sm-2 col-form-label tl">Latitud (N)</label>
                    <div class="col-sm-3">
                      <div class="input-group">
                        <input type="text" class="form-control" name="lata" id="lata">
                        <div class="input-group-append bg-dark border-primary">
                          <span class="input-group-text bg-transparent text-white">0</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="input-group">
                        <input type="text" class="form-control" name="latb" id="latb">
                        <div class="input-group-append bg-dark border-primary">
                          <span class="input-group-text bg-transparent text-white">'</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="input-group">
                        <input type="text" class="form-control" name="latc" id="latc">
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

                    <label class="col-sm-2 col-form-label tl">Longitud (E)</label>
                    <div class="col-sm-3">
                      <div class="input-group">
                        <input type="text" class="form-control" name="longa" id="longa">
                        <div class="input-group-append bg-primary border-primary">
                          <span class="input-group-text bg-transparent text-white">0</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="input-group">
                        <input type="text" class="form-control" name="longb" id="longb">
                        <div class="input-group-append bg-primary border-primary">
                          <span class="input-group-text bg-transparent text-white">'</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="input-group">
                        <input type="text" class="form-control" name="longc" id="longc">
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
              <h4 class="card-title" style="color:#38ada9;">Sungai</h4>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-5">
                     
                            <div class="input-group">
                              <input type="text" class="form-control" id="sungai" onkeyup="autofill()" name="sungai" readonly>
                              <div class="input-group-append bg-success border-primary">
                                <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-inverse-* btn-success">Pilih</button>
                              </div>
                            </div>
                    </div>

                               <!-- Modal -->
                          <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document" style="margin-left:270px;">
                              <div class="modal-content" style="background-color:white; width:800px;">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Senarai Sungai-sungai</h5>
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
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-4">
                        <label class="tl">Sistem</label>
                        <select  class="form-control" id="sistem" name="sistem">
                          <option value>---Pilih Sistem---</option>
                           <?php
                            foreach($get_sistem as $row)
                            {
                              echo '<option value="'.$row->sis_id.'">'.$row->sistem.'</option>';
                            } 
                            ?>   
                        </select>

                    </div>
                    <div class="col-sm-4">
                      <label class="tl">Sub Sistem</label>
                      <select class="form-control" id="subsistem" name="subsistem">
                      <option value="">--Pilih Sub Sistem--</option>
                      </select>
          
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <div class="col-sm-4">
                        <label class="tl">Komponen</label>
                        <select class="form-control" id="komponen" name="komponen" placeholder="Komponen">
                          <option value="">--Pilih Komponen--</option>
                        </select>

                    </div>
                    <div class="col-sm-4">
                          <label class="tl">Dimensi</label>
                      <input type="text" class="form-control" id="dimensi" name="dimensi" placeholder="Dimensi">

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
                      <button type="submit" name="submit" class="btn btn-primary mr-2 btn-rounded ">Simpan</button>
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
              data:{sis_id:sis_id},//sis_id(the data want to post):sis_id(var declaration)
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
