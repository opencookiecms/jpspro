<div class="main-panel">
<div class="content-wrapper cnt" style="background: #C9D6FF;background: -webkit-linear-gradient(to right, #E2E2E2, #C9D6FF);background: linear-gradient(to right, #E2E2E2, #C9D6FF);">
  <div class="row">

    <div class="col-12 grid-margin">


      <?php echo form_open('setting_con/tukar'); ?>
      <div class="card" style="border-radius:10px;">
        <div class="card-body">
    
          <a href="<?php echo site_url('setting_con/myprofile/'.$this->session->userdata('userid')) ?>" class="btn btn-primary mr-2 btn-rounded" role="button">Profile Saya</a>
          <a href="<?php echo site_url('setting_con/tukar_kata_laluan/'.$this->session->userdata('userid')) ?>" class="btn btn-dark mr-2 btn-rounded" role="button">Tukar Kata Lalauan</a>
  
          <p></p>
          <p></p>
          <h4 class="card-title">Tukar Kata Laluan</h4>
  
          <P>
            <p>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group row">
                  <div class="col-sm-4">
                    <label>Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $get_user[0]->jps_name ?>" readonly>
                  </div>
                </div>
              </div>
            </div>
    
            <div class="row">
              <div class="col-md-12">
                <div class="form-group row">
                  <div class="col-sm-4">
                    <label>Kata Laluan</label>
                    <input type="password" class="form-control" name="pass">
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group row">
                  <div class="col-sm-4">
                    <label>Pengesahan Kata Laluan</label>
                    <input type="password" class="form-control" name="pass">
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group row">
                  <div class="col-sm-3">
                    <button type="submit" name="submit" class="btn btn-success mr-2 btn-rounded ">Kemaskini</button>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  </div>
