
    <?php
      include("vendor/page/liens.php");
     ?>
  </head>
  <body>
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
                              <h3 style="text-transform: uppercase;"class="text-primary" style="text-align: center;"><center> ENREGISTREMENT D'une OPtion </center></h3>
                               <hr  size="2" width="100%" color="white">
                            </div>

                          </div>
                        </div>
                  </div>


                            <?php echo form_open('OptionController\ajouter'); ?>

                            <div class="row" id="in1">
                                <div class="col-md-6" >
                                  <label for="Code_Option"> Code_Option  </label>
                                  <input type="text" class="form-control"   name="Code_Option" value="<?php ?>">
                                    <?php echo form_error('Code_Option','<p  class="text-danger  text-center small">','</p>'); ?><br>
                                </div>
                                <div class="col-md-6">
                                  <label for="IntitulerOption">Intituler Option </label>
                                    <input type="text" class="form-control"   name="IntitulerOption" value="<?php ?>">
                                    <?php echo form_error('IntitulerOption','<p  class="text-danger  text-center small">','</p>'); ?><br>
                               </div>
                            </div>
                            <div class="row" id="in1">
                                <div class="col-md-3" >

                                </div>
                                <div class="col-md-6">
                                  <label for="Code_Pacour"> Parcours  </label>
                                  <select class="form-control" name="Code_Pacour" value="<?php echo set_value("Code_Pacour"); ?>">
                                  <?php
                                  foreach ($Parcour as $res) {
                                    ?>
                                                <option><?php echo $res['Code_Pacour']; ?></option>
                                      <?php
                                          }
                                       ?>

                              </select>
                              <?php echo form_error('Code_Pacour','<p  class="text-danger  text-center small">','</p>'); ?><br>

                                </div>
                                <div class="col-md-3">
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
