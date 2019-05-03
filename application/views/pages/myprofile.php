<div class="main-panel">
<div class="content-wrapper cnt" style="background: #C9D6FF;background: -webkit-linear-gradient(to right, #E2E2E2, #C9D6FF);background: linear-gradient(to right, #E2E2E2, #C9D6FF);">
  <div class="row">


    <div class="col-12 grid-margin">


      <?php echo form_open_multipart('setting_con/updateprofile'); ?>
      <div class="card" style="border-radius:10px;">
        <div class="card-body">
           <a href="<?php echo site_url('setting_con/myprofile/'.$this->session->userdata('userid')) ?>" class="btn btn-dark mr-2 btn-rounded" role="button">Profile Saya</a>
          <a href="<?php echo site_url('setting_con/tukar_kata_laluan/'.$this->session->userdata('userid')) ?>" class="btn btn-primary mr-2 btn-rounded" role="button">Tukar Kata Lalauan</a>
  
          <p></p>
          <p></p>
          <h5 class="card-title">Profile Saya</h5>
          <P>
            <p>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group row">
                  <div class="col-sm-4">
                    <img class="img-xs rounded-circle" src="<?php echo base_url() ?>assets/images/profile/<?php echo $this->session->userdata('userpic') ?>" alt="Profile image">
                    <input type="file" name="file">
                   
                  </div>
                  
                </div>
              </div>
            </div>
              <div class="row">
              <div class="col-md-12">
                <div class="form-group row">
                  <div class="col-sm-12">
                   
                    Maklumat Pengguna
                  
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group row">
                  <div class="col-sm-4">
                    <label>Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $get_user[0]->jps_name ?>">
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group row">
                  <div class="col-sm-4">
                    <label>Jawatan</label>
                    <select type="text" class="form-control" id="jawatan" name="jawatan">
                      <option value="<?php echo $get_user[0]->jps_position ?>"><?php echo $get_user[0]->jps_position?></option>
                      <option value="Jurutera Awan">Jurutera Awam</option>
                      <option value="Jurutera">Jurutera</option>
                      <option value="Penolong Jurutera">Penolong Jurutera</option>
                      <option value="Pegawai">Pegawai</option>
                      <option value="Penolong Pegawai">Penolong Pegawai</option>
                      <option value="Pembantu Tadbir">Pembantu Tadbir</option>
                      <option value="Pembantu Tadbir Kewangan">Pembantu Tadbir Kewangan</option>
                      <option value="Pembantu Awam">Pembantu Awam</option>
                      <option value="Pekerja AM">Pekerja AM</option>
                   
                   
                    </select>
                    <small id="nsebutharga" class="form-text text-muted">Jawatan.</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group row">
                  <div class="col-sm-4">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" value="<?php echo $get_user[0]->jps_email?>">
                  </div>
                </div>
              </div>
            </div>
      
            <div class="row">
              <div class="col-md-12">
                <div class="form-group row">
                  <div class="col-sm-4">
                    <label>User Role</label>
                    <select type="text" class="form-control" id="roles" name="roles" readonly>
                      <option value="<?php echo $get_user[0]->jps_userroles?>"><?php echo $get_user[0]->jps_userroles?></option>
            
                    </select>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="form-group row">
                  <div class="col-sm-3">
                    <button type="submit" name="submit" class="btn btn-success mr-2 btn-rounded " onclick="return confirm('Anda dinasihatkan untuk log semula sistem ini selepas membuat sebarang kemaskini. Terima Kasih')">Kemaskini</button>
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
