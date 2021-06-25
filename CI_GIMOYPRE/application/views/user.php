
    <?php
      include("vendor/page/liens.php");
     ?>
    <div class="container">
      <div class="row">

          <div class="col-md-2" >
            <?php
            // include("vendor/page/gauche.php");//on include les page depluis le dossier vendor
             ?>
          </div>
          <div class="col-md-9">



                  <div class="row">
                        <div class="container classwithpad"  style="/*background-color:white; margin:10px; padding:70px;*/">
                          <div class="row ">
                            <div class="col-md-12">
                              <hr  size="2" width="100%" color="white">
                              <h3 style="text-transform: uppercase;"class="text-primary" style="text-align: center;"><center> Nouvel Utilisateur</center></h3>
                               <hr  size="2" width="100%" color="white">
                            </div>

                          </div>
                        </div>
                  </div>


                            <?php echo form_open('UsersController\ajouter'); ?>

                            <div class="row" id="in1">
                                <div class="col-md-6" >
                                  <label for="TitreUsers">Titre de utilisateur</label>
                                    <input type="text" class="form-control"   name="TitreUsers" value="<?php //echo set_value('TitreUsers'); ?>">
                                    <?php echo form_error('TitreUsers','<p  class="text-danger  text-center small">','</p>'); ?><br>
                                    <label for="loginUSER">Login  </label>
                                      <input type="text" class="form-control"   name="loginUSER" value="<?php //echo set_value('loginUSER'); ?>">
                                      <?php echo form_error('loginUSER','<p  class="text-danger  text-center small">','</p>'); ?><br>
                                </div>
                                <div class="col-md-6">
                                  <label for=""> Password  </label>
                                    <input type="password" class="form-control"   name="passwordUser" value="<?php //echo set_value('passwordUser'); ?>">
                                    <?php echo form_error('passwordUser','<p  class="text-danger  text-center small">','</p>'); ?><br>
                                    <label for="verifpassword"> verifier le Password </label>
                                      <input type="password" class="form-control"   name="verifpassword" value="<?php //echo set_value('verifpassword'); ?>">
                                      <?php echo form_error('verifpassword','<p  class="text-danger  text-center small">','</p>'); ?><br>
                               </div>
                            </div>

                            <div class="row">
                             <?php
                               include('Buttons.php');
                              ?>
                              </div>
          </form>

              </div>

                     </div>

             </div>
