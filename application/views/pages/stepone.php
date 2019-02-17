      <div class="main-panel">
      <div class="content-wrapper cnt" style="background: #C9D6FF;background: -webkit-linear-gradient(to right, #E2E2E2, #C9D6FF);background: linear-gradient(to right, #E2E2E2, #C9D6FF);">
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card" style="border-radius:10px;">
                <div class="card-body">
                  <h4 class="card-title">  <h2 class="f"><?php echo $title; ?></h2>
                  <p class="card-description"><h5><span class="error" style="color:#FF0000;"> * Dikehendaki mengisi semua bahagian</span></h5></p>
                  <?php echo validation_errors(); ?>
                </div>
              </div>
            </div>
            <div class="col-12 grid-margin">


              <?php echo form_open('daftar/stepsatu'); ?>
              <div class="card" style="border-radius:10px;">
                <div class="card-body">
                  <h4 class="card-title">Borang Daftar Sebut Harga</h4>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group row">
                          <div class="col-sm-6">
                            <label>No Sebutharga :</label>
                            <div class="input-group">
                              <input type="text" class="form-control" id="nosebuts" onkeyup="autofill()" value=""name="nosebut" readonly>
                              <div class="input-group-append bg-success border-primary">
                                <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-inverse-* btn-success">select</button>
                              </div>
                            </div>

                            <small id="nsebutharga" class="form-text text-muted">Sila isi no sebutharga mengikut spefikasi yang telah diberikan.</small>
                          </div>
                          <!-- Modal -->
                          <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document" style="margin-left:270px;">
                              <div class="modal-content" style="background-color:white; width:800px;">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Senarai Tempahan No Sebutharga</h5>
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
                                                  #
                                                </th>
                                                <th width:20>
                                                  No Sebutharga
                                                </th>
                                                <th>
                                                  Pemilik
                                                </th>
                                                <th>
                                                  Tarikh
                                                </th>
                                                <th>
                                                  Jenis
                                                </th>
                                                <th>
                                                  Tindakan
                                                </th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                              <?php $bil=0;?>
                                              <?php foreach ($get_nosebutharga as $row):$bil++ ?>
                                                <tr>
                                                  <td class="py-1"><?php echo $bil ?></td>
                                                  <td class="py-1"><span><?php echo $row->no_sebutharga?><span></td> <!--Show data in list view-->
                                                  <td class="py-1"><span><?php echo $row->no_pemilik?><span></td> <!--Show data in list view-->
                                                  <td class="py-1"><span><?php echo $row->no_pemilik?><span></td> <!--Show data in list view-->
                                                  <td class="py-1"><span><?php echo $row->no_jenis?><span></td> <!--Show data in list view-->
                                                  <td class="py-1"><button id="buttonselect"  value="<?php echo $row->no_sebutharga?>" class="btn btn-info" data-dismiss="modal">Select</button></td>
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
                          <div class="col-sm-3">
                            <label>Tarikh :</label>
                            <input type="date" class="form-control" name="tarikhmohon"placeholder="Tarikh Permohonan">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group row">
                          <div class="col-sm-4">
                            <label>Jenis Sebutharga :</label>
                            <input type="text" class="form-control" id="jenissebut" name="jenissebut" readonly>
                            <small id="nsebutharga" class="form-text text-muted">Pilih jenis sebutharga.</small>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group row">
                          <div class="col-sm-7">
                            <label>Tajuk Projek :</label>
                            <textarea type="text" class="form-control"name="tajukprojek" placeholder="Tajuk Projek"></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group row">
                          <div class="col-sm-3">
                            <label>Daerah:</label>
                            <select type="text" class="form-control" name="daerah">
                              <option value=""></option>
                              <option value="Sik">Sik</option>
                              <option value="Baling">Baling</option>
                              <option value="Kuala Muda">Kuala Muda</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group row">
                          <div class="col-sm-3">
                            <button type="submit" name="submit" class="btn btn-success mr-2 btn-rounded ">Simpan</button>
                          </div>
                        </div>
                      </div>
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
                      var col1 = currow.find('td:eq(1)').text();
                      var jenis = currow.find('td:eq(4)').text();

                      var result = col1;
                      //var result2 = col2;
                      $("#nosebuts").val(result);
                      $('#jenissebut').val(jenis);
                    })
                  </script>

                </div>
              </div>
            </div>
          </div>
        </div>
