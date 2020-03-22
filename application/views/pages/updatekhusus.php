<div class="main-panel">
  <div class="content-wrapper cnt" style="background: #614385;  /* fallback for old browsers */
background: -webkit-linear-gradient(to bottom, #516395, #614385);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to bottom, #516395, #614385); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
">
    <div class="row">
      <!--start col-md-12 for form-->
      <div class="col-12 grid-margin">
        <?php echo validation_errors(); ?>

        <?php
        echo form_open('Setting_con/khususkodupdate');
        ?>

        <div class="card" style="border-radius:10px;">
          <div class="card-body">
            <p></p>
            <p></p>
            <h4 class="card-title">Konfigurasi maklumat sistem (Pengkhususan)</h4>
            <div class="row">
              <div class="col-md-4">
                <label>Khusus Kod</label>
                <input type="hidden" name="ksid" value="<?php echo $get_kodebyid[0]->ks_id ?>">
                <input class="form-control" name="kkode" id="people" placeholder="Kursus kod" value="<?php echo $get_kodebyid[0]->ks_kscode?>">
              </div>
              <div class="col-md-4">
                <label>Khusus</label>
                <input class="form-control" name="kname" id="people" placeholder="Nama Khusus" value="<?php echo $get_kodebyid[0]->ks_ksname?>">
              </div>

            </div>
            <p>
              <p>
                <div class="row">
                  <div class="col-md-6">
                    <label>Diskripsi</label>
                    <textarea rows="5" class="form-control" name="discrip" placeholder="Diskripsi"><?php echo $get_kodebyid[0]->ks_desc?></textarea>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-2">
                    <P>
                      <P>
                        <button type="submit" name="submit" class="btn btn-primary mr-2 btn-rounded form-control">Save</button>
                  </div>
                </div>
                <p>
                  <p>
          </div>
        </div>
      </div>
      <!--end here col-md-12-->


    </div>

    <div class="row">
      <div class="col-lg-12 grid-margin">
        <div class="card" style="border-radius:10px;">
          <div class="card-body">
         
            <p>
            

          </div>
        </div>
      </div>
    </div>

      <script type="text/javascript">
        $('#myModal').on('shown.bs.modal', function() {
          $('#myInput').trigger('focus')
        })
      </script>
      </form>
    </div>