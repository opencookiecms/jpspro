
      <div class="main-panel">
        <div class="content-wrapper cnt" style="background: #C9D6FF;background: -webkit-linear-gradient(to right, #E2E2E2, #C9D6FF);background: linear-gradient(to right, #E2E2E2, #C9D6FF);">
          <div class="row purchace-popup">
            <div class="col-12">
              <span class="d-block d-md-flex align-items-center">
                <p>Selamat Datang ke Dashboard Admin.</p>
              </span>
            </div>
          </div>
          <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 grid-margin stretch-card">
              <div class="card card-statistics" style="border-radius:10px;">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-cube text-danger icon-lg"></i>
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-right">Sebutharga</p>
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-right mb-0"><?php echo $get_count[0]->sb ?></h3>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3 mb-0">
                    <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"></i>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 grid-margin stretch-card">
              <div class="card card-statistics" style="border-radius:10px;">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-cube text-warning icon-lg"></i>
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-right">Lantikan Terus</p>
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-right mb-0"><?php echo $get_count[0]->lt ?></h3>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3 mb-0">
                    <i class="mdi mdi-bookmark-outline mr-1" aria-hidden="true"></i>
                  </p>
                </div>
              </div>
            </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 grid-margin stretch-card">
              <div class="card card-statistics" style="border-radius:10px;">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-cube text-primary icon-lg"></i>
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-right">Kerja Undi</p>
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-right mb-0"><?php echo $get_count[0]->undi ?></h3>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3 mb-0">
                    <i class="mdi mdi-bookmark-outline mr-1" aria-hidden="true"></i> 
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 grid-margin">
              
            </div>
          </div>
          <div class="row">
            <div class="col-12 grid-margin">
              <div class="card" style="border-radius:10px;">


             
                <div class="card-body">
                  <h5 class="card-title mb-4">Tempoh Tarikh Sebutharga Ditutup </h5>
                  <?php $dates = $get_projek[0]->df_tarikhnotis ?>
                  <?php $today = $today = date("d/m/Y"); ?>
                  <?php foreach ($get_projek as $row):?>

                  <div class="fluid-container">
                    <div class="row ticket-card mt-3 pb-2 border-bottom pb-3 mb-3">
                      <div class="col-md-1">
                        <img class="img-sm mb-4 mb-md-0" src="<?php base_url()?>assets/images/delivery.png" alt="profile image">
                      </div>
                      <div class="ticket-details col-md-9">
                        <div class="d-flex">
                          <p class="text-dark font-weight-semibold mr-2 mb-0 no-wrap">No Sebutharga :</p>
                          <p class="text-primary mr-1 mb-0"><?php echo $row->df_nosebutharga?> </p>
                         
                        </div>
                        <p class="text-gray ellipsis mb-2">Tajuk Projek 
                          <?php echo $row->df_tajuk?> 
                        </p>
                        <div class="row text-gray d-md-flex d-none">
                          <div class="col-4 d-flex">
                                  
                            <small class="mb-0 mr-2 text-muted text-muted">Tarik Mula :</small>
                            <small class="Last-responded mr-2 mb-0 text-muted text-muted"><?php echo date('d/m/Y', strtotime ($row->df_tarikhnotis))?> </small>
                          </div>
                          <div class="col-4 d-flex">
                            <small class="mb-0 mr-2 text-muted text-muted">Tarikh Akhir :</small>
                            <small class="Last-responded mr-2 mb-0 text-muted text-muted"><?php   echo date('d/m/Y', strtotime($dates. " + {$row->df_tarikhtutup} days + {$row->df_tarikhdocakhir} days + {$row->df_tarikhdocmula}days + {$row->df_tarikhlawat} days")); ?></small>
                          </div>
                        </div>
                      </div>
  
                    </div>
                  </div>
                   <?php endforeach; ?>
                </div>


             

                


                




              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
