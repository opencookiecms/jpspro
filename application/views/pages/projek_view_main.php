<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper cnt" style="background: #C9D6FF;background: -webkit-linear-gradient(to right, #E2E2E2, #C9D6FF);background: linear-gradient(to right, #E2E2E2, #C9D6FF);">
    <div class="row purchace-popup">
      <div class="col-12">
        <span class="d-block d-md-flex align-items-center">
          <p>Senarai Dokument Berkaitan Sebutharga.</p>
        </span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3 d-flex align-items-stretch grid-margin">
        <div class="row flex-grow">
          <div class="col-12">
            <div class="card" style="border-radius:10px;">
              <div class="card-body">
                <h2 class="card-title text-primary">Kod Vot : <?php echo $get_detail[0]->df_kodvot ?></h2>
                <p class="card-description">
                  Senarai Projek
                </p>

              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-9 grid-margin stretch-card">
        <div class="card" style="border-radius:10px;">
          <div class="card-body">
            <h4 class="card-title">Dokumen</h4>
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>
                      #
                    </th>
                    <th>
                      Nama Projek
                    </th>
                    <th>
                      No Sebutharga
                    </th>
                    <th>
                      Tindakan
                    </th>
                  </tr>
                </thead>
                <tbody>
                 <?php foreach ($get_detail as $row): ?>
                   <tr>
                     <td><?php echo $row->projek_id?></td>
                     <td style="white-space:inherit;"><?php echo $row->df_tajuk?></td>
                     <td><?php echo $row->df_nosebutharga?></td>
                     <td><a href="<?php echo site_url('projek/view_data/'.$row->projek_id); ?>" class="btn btn-primary">let's go</a></td>
                   </tr>
                 <?php endforeach; ?>

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- content-wrapper ends -->
  <!-- partial:../../partials/_footer.html -->
