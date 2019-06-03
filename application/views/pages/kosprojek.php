<div class="main-panel">
  <div class="content-wrapper cnt" style="background: #606c88;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #3f4c6b, #606c88);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #3f4c6b, #606c88); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
">
    <div class="row">
      <div class="col-md-8 grid-margin stretch-card">
        <div class="card" style="border-radius:10px;">
              <div class="card-body" style="background-color:#0fb9b1;border-radius:10px;">
            <h4 class="card-title">  <h2 class="f ts">MRK 01</h2>
              <p class="card-description"><h5><span class="error ts" style="color:#ffda79;">No Sebutharga :<?php echo $get_detail[0]->df_nosebutharga ?> </span></h5></p>
              <?php if(isset($_SESSION['mrk01'])) { ?>
                <div class="alert alert-success"><?php echo $_SESSION['mrk01'] ?></div>
              <?php
                } ?>


              </div>
            </div>
          </div>
          <!--start col-md-12 for form-->
   
          <div class="col-8 grid-margin">

         

            <?php


            $pkkNo = $get_detail[0]->mrk_nopkk;
            if($pkkNo == null){
              echo form_open('mrk/MRK_01/'.$get_detail[0]->projek_id);
            }
            else {
              echo form_open('mrk/MRK_01_Update');
            }

            ?>
            <input type="hidden" name="kodvods" value="<?php echo $get_detail[0]->df_kodvot?>">
             <input type="hidden" name="hiddenid" value="<?php echo $get_detail[0]->projek_id?>">
             <input type="text" name="mrkid" value="<?php echo $get_detail[0]->mrksatuid?>">
            <div class="card" style="border-radius:10px;">
              <div class="card-body" style="background-color:#dfe4ea;border-radius:10px;">
                <h4 class="card-title ts" style="color:#38ada9;font-weight:bold;">Kategori Pendaftaran</h4>
                   <h5 class="text-danger"><?php echo validation_errors(); ?></h5>
             
      
        
               </div>
              </div>
            </div>
    

            </div>
          </form>
        </div>
