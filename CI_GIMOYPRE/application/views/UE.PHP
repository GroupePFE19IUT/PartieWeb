
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
                              <h3 style="text-transform: uppercase;"class="text-primary" style="text-align: center;"><center> Unite D'Enseignement </center></h3>
                               <hr  size="2" width="100%" color="white">
                            </div>

                          </div>
                        </div>
                  </div>


                            <?php echo form_open('UEController\ajouter'); ?>

                            <div class="row" id="in1">
                                <div class="col-md-6" >
                                  <label for="Code_UE"> Code_UE  </label>
                                  <input type="text" class="form-control"   name="Code_UE" value="<?php ?>">
                                    <?php echo form_error('Code_UE','<p  class="text-danger  text-center small">','</p>'); ?><br>
                                </div>
                                <div class="col-md-6">
                                  <label for="IntitulerUE">Intituler  </label>
                                    <input type="text" class="form-control"   name="IntitulerUE" value="<?php ?>">
                                    <?php echo form_error('IntitulerUE','<p  class="text-danger  text-center small">','</p>'); ?><br>
                               </div>
                            </div>
                            <div class="row" id="in1">
                                <div class="col-md-6">
                                  <label for="Code_Option"> Option  </label>
                                  <select class="form-control" name="Code_Option" value="<?php echo set_value("Code_Option"); ?>">
                                  <?php

                                  foreach ($Option as $res) {
                                    ?>
                                                <option value="<?php echo $res['Code_Option']; ?>"><?php echo $res['Code_Option']; ?></option>
                                      <?php
                                          }
                                       ?>

                              </select>
                              <?php echo form_error('Code_Option','<p  class="text-danger  text-center small">','</p>'); ?><br>

                                </div>
                                <div class="col-md-6">
                                  <label for="TypeUE">Type  </label>
                                  <select class="form-control" name="TypeUE" value="<?php echo set_value('TypeUE'); ?>">
                                        <option value="libre">Libre</option>
                                        <option value="Obligtransv">Obligatoire Transversale</option>
                                        <option value="ObligSpéc">Obligatoire specialite</option>

                                  </select>
                                    <?php echo form_error('TypeUE','<p  class="text-danger  text-center small">','</p>'); ?><br>

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
