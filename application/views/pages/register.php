<div class="main-panel">
<div class="content-wrapper cnt" style="background: #C9D6FF;background: -webkit-linear-gradient(to right, #E2E2E2, #C9D6FF);background: linear-gradient(to right, #E2E2E2, #C9D6FF);">
  <div class="row">

    <div class="col-12 grid-margin">


      <?php echo form_open('setting_con/usersreg'); ?>
      <div class="card" style="border-radius:10px;">
        <div class="card-body">
          <p></p>
          <p></p>
          <a href="<?php echo site_url('Setting_con/usersreg') ?>" class="btn btn-primary mr-2 btn-rounded" role="button">Daftar</a>
          <a href="<?php echo site_url('Setting_con') ?>" class="btn btn-info mr-2 btn-rounded" role="button">Users</a>
          <a href="<?php echo site_url('Setting_con/SaveSettingPassandSlogan') ?>" class="btn btn-success mr-2 btn-rounded" role="button">Slogan & Login</a>
          <p></p>
          <p></p>
          <h4 class="card-title">Daftar Pengguna</h4>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group row">
                  <div class="col-sm-6">
                    <label>Nama</label>
                    <input type="text" class="form-control" name="nama"  placeholder="Nama">
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
                      <option value=""></option>
                      <option value="Jurutera">Jurutera</option>
                      <option value="Jurutera G34">Jurutera G34</option>
                      <option value="Penolong Jurutera">Penolong Jurutera</option>
                      <option value="Pegawai">Pegawai</option>
                    </select>
                    <small id="nsebutharga" class="form-text text-muted">Pilih jenis sebutharga.</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group row">
                  <div class="col-sm-4">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email">
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
                  <div class="col-sm-4">
                    <label>User Role</label>
                    <select type="text" class="form-control" id="roles" name="roles">
                      <option value=""></option>
                      <option value="admin">Admin</option>
                      <option value="user">User</option>
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
        </div>
      </div>
    </div>
  </div>
  </div>
