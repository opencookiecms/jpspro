<div class="main-panel">
<div class="content-wrapper cnt" style="background: #614385;  /* fallback for old browsers */
background: -webkit-linear-gradient(to bottom, #516395, #614385);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to bottom, #516395, #614385); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
">
  <div class="row">

    <div class="col-12 grid-margin">

            
      <?php echo form_open('setting_con/userupdate/'.$get_user[0]->user_id); ?>
      <div class="card" style="border-radius:10px;">
          <div class="card-body" style="background-color:#dfe4ea;border-radius:10px;">
    
          <a href="<?php echo site_url('Setting_con/usersreg') ?>" class="btn btn-dark mr-2 btn-rounded" role="button">Daftar</a>
          <a href="<?php echo site_url('Setting_con') ?>" class="btn btn-primary mr-2 btn-rounded" role="button">Pegawai & Jurutera</a>
          <a href="<?php echo site_url('Setting_con/SaveSettingPassandSlogan') ?>" class="btn btn-primary mr-2 btn-rounded" role="button">Slogan</a>
          <a href="<?php echo site_url('Setting_con/sungailist') ?>" class="btn btn-primary mr-2 btn-rounded" role="button">Sungai</a>
          <p></p>
          <p></p>
          <h4 class="card-title">Daftar Pengguna</h4>
            <?php echo validation_errors(); ?>
          <a href="<?php echo site_url('Setting_con/senarai_nama_pengguna') ?>" class="btn btn-info mr-2 btn-rounded" role="button">Senarai Nama Pengguna</a>
          <P>
            <p>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group row">
                  <div class="col-sm-6">
                    <label>Nama</label>
                    
                    <input type="text" value="<?php echo $get_user[0]->jps_name?>" class="form-control" id="nama" name="nama">
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
                      <option value="<?php echo $get_user[0]->jps_position?>"><?php echo $get_user[0]->jps_position?></option>
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
                  
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group row">
                  <div class="col-sm-4">
                    <label>Email(Mestilah Unique)</label>
                    <input type="email" class="form-control" value="<?php echo $get_user[0]->jps_email?>" name="email">
                  </div>
                    <div class="col-sm-4">
                    <label>Pastikan ia check sebelum membuat sebarang kemaskini</label>
                    <input class="form-control" type="checkbox" value="1" name="check" checked style="width:40px;height:40px;"/>
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
                    <label>User Role</label>
                    <select type="text" class="form-control" id="roles" name="roles">
                      <option value="<?php echo $get_user[0]->jps_userroles?>"><?php echo $get_user[0]->jps_userroles?></option>
                      <option value="admin">Admin</option>
                      <option value="special">Special</option>
                      <option value="user">User</option>
                      <option value="clerk">Clerk</option>
                    </select>
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
