
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
                              <h3 style="text-transform: uppercase;"class="text-primary" style="text-align: center;"><center> Programmation D'un Cours</center></h3>
                               <hr  size="2" width="100%" color="white">
                            </div>

                          </div>
                        </div>
                      </div>
                            <?php echo form_open('ProgrammationController\ajouter'); ?>

      <div class="row" id="in1">
        <div class="col-md-6" >
          <label for="CODEM"> Code de la Matiere  </label>
          <select class="form-control" name="CODEM" value="<?php echo set_value("CODEM"); ?>">
            <?php
            foreach ($Matiere as $res) {
              ?>
                          <option value="<?php echo $res['CODEM']; ?>"><?php echo $res['CODEM']; ?></option>
                <?php
                    }
                 ?>
             </select><br>
          <label for="HeureDebut">Heure Debut</label>
             <input type="time" class="form-control"  name="HeureDebut" value="<?php ?>">
             <?php echo form_error('HeureDebut ','<p  class="text-danger  text-center small">','</p>'); ?><br>

        </div>
        <div class="col-md-6">
          <label for="Datecour"> Date  </label>
            <input type="Date" class="form-control"   name="Datecour" value="<?php ?>">
            <?php echo form_error('Datecour','<p  class="text-danger  text-center small">','</p>'); ?><br>
            <label for="HeureFin">Heure Fin</label>
               <input type="time" class="form-control"  name="HeureFin" value="<?php ?>">
               <?php echo form_error('HeureFin','<p  class="text-danger  text-center small">','</p>'); ?><br>
     </div>
      </div>
   <div class="row">
    <?php
      include('Buttons.php');
     ?>
  </div><br>
          </form>

              </div>

                     </div>

             </div>
