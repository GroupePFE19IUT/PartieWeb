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
                        <div class="container classwithpad" style="/*background-color:white; margin:10px; padding:70px;*/">
                          <div class="row ">
                            <div class="col-md-12">
                              <hr  size="2" width="100%" color="white">
                              <h3 style="text-transform: uppercase;"class="text-primary" style="text-align: center;"><center> Enregistrement D'un Derpartement </center></h3>
                               <hr  size="2" width="100%" color="white">
                            </div>

                          </div>
                        </div>
                  </div>

                    <div class="" style="background-color:white; text:white;">


                            <?php echo form_open('DepartementController\ajouter'); ?>

                            <div class="row" id="in1"   >
                                <div class="col-md-6" >
                                  <label for="Code_departement"> Code_departement  </label>
                                  <input type="text" class="form-control"   name="Code_departement" value="<?php ?>">
                                    <?php echo form_error('Code_departement','<p  class="text-danger  text-center small">','</p>'); ?><br>
                                </div>
                                <div class="col-md-6">
                                  <label for="Intituler">Intituler  </label>
                                    <input type="text" class="form-control"   name="Intituler" value="<?php ?>">
                                    <?php echo form_error('Intituler','<p  class="text-danger  text-center small">','</p>'); ?><br>
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

             </div>
