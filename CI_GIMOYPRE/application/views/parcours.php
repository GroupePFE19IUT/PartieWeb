
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
                        <div class="container classwithpad"  style="background-color:white; margin:10px; padding:70px;">
                          <div class="row ">
                            <div class="col-md-12">
                              <hr  size="2" width="100%" color="white">
                              <h3 style="text-transform: uppercase;"class="text-primary" style="text-align: center;"><center> Enregistrement D'un Parcours </center></h3>
                               <hr  size="2" width="100%" color="white">
                            </div>
                          </div>
                        </div>
                  </div>


                            <?php echo form_open('ParcourController\ajouter');
                             ?>

                            <div class="row" id="in1">
                                <div class="col-md-6" >
                                  <label for="Code_parcour"> Code_parcour  </label>
                                  <input type="text" class="form-control"   name="Code_parcour" value="<?php echo set_value("Code_parcour");?>">
                                    <?php echo form_error('Code_parcour','<p  class="text-danger  text-center small">','</p>'); ?><br>
                                    <label for="Code_Departement"> Code du departement  </label>
                                    <select class="form-control" name="Code_Departement" value="<?php echo set_value("Code_Departement"); ?>">
                                    <?php
                                    foreach ($Departement as $res) {
                                      ?>
                                                  <option value="<?php echo $res['Code_Derpartement']; ?>"><?php echo $res['Code_Derpartement']; ?></option>
                                        <?php
                                            }
                                         ?>

                                </select>
                                </div>
                                <div class="col-md-6">
                                  <label for="Intituler_parcour">Intituler Parcour </label>
                                  <input type="text" class="form-control"   name="Intituler_parcour" value="<?php echo set_value('Intituler_parcour');?>">
                                    <?php echo form_error('Intituler_parcour','<p  class="text-danger  text-center small">','</p>'); ?><br>
                                    <label for="niveau_parcour">Niveau Parcour  </label>
                                      <select class="form-control" name="niveau_parcour" value="<?php echo set_value('niveau_parcour'); ?>">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                      </select>
                                      <?php echo form_error('niveau_parcour','<p  class="text-danger  text-center small">','</p>'); ?><br>

                                      <br>
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
