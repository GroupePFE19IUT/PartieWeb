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
                        <div class="container classwithpad" >
                          <div class="row ">
                            <div class="col-md-12">
                              <hr  size="2" width="100%" color="white">
                              <h3 style="text-transform: uppercase;"class="text-primary" style="text-align: center;"><center> Enregistrement d'une Matiere</center></h3>
                               <hr  size="2" width="100%" color="white">
                            </div>

                          </div>
                        </div>
                      </div>
                            <?php echo form_open('MatiereController\ajouter'); ?>

      <div class="row" id="in1">
        <div class="col-md-6" >
          <label for="CODEM"> Code de la Matiere  </label>
            <input type="text" class="form-control"   name="CODEM" value="<?php ?>">
            <?php echo form_error('CODEM','<p  class="text-danger  text-center small">','</p>'); ?><br>
          <label for="IntitulerM">Intituler de la Matiere</label>
             <input type="text" class="form-control"  name="IntitulerM" value="<?php ?>">
             <?php echo form_error('IntitulerM ','<p  class="text-danger  text-center small">','</p>'); ?><br>
             <label for="TI">Travail de l'etudiant</label>
                <input type="number" class="form-control"  name="TI" value="<?php ?>">
                <?php echo form_error('TI ','<p  class="text-danger  text-center small">','</p>'); ?><br>
        </div>
        <div class="col-md-6">
          <label for="CMJ"> Cour Majistrale  </label>
            <input type="number" class="form-control"   name="CMJ" value="<?php ?>">
            <?php echo form_error('CMJ','<p  class="text-danger  text-center small">','</p>'); ?><br>
          <label for="TD">TD</label>
             <input type="number" class="form-control"  name="TD" value="<?php ?>">
             <?php echo form_error('TD ','<p  class="text-danger  text-center small">','</p>'); ?><br>
             <label for="TP">TP</label>
                <input type="number" class="form-control"  name="TP" value="<?php ?>">
                <?php echo form_error('TP ','<p  class="text-danger  text-center small">','</p>'); ?><br>

     </div>
      </div>
   <div class="row" id="in1">
       <div class="col-md-6">
         <label for="NBC">Nombre de credit</label>
            <input type="number" class="form-control"  name="NBC" value="<?php ?>">
            <?php echo form_error('NBC','<p  class="text-danger  text-center small">','</p>'); ?><br>
       </div>
       <div class="col-md-6">
         <label for="Code_UE">Unite D'ensiegnement</label>
         <select class="form-control" name="Code_UE" value="<?php echo set_value("Code_UE"); ?>">
         <?php
         foreach ($UE as $res) {
           ?>
                       <option value="<?php echo $res['Code_UE']; ?>"><?php echo $res['Code_UE']; ?></option>
             <?php
                 }
              ?>

     </select>
       </div>
   </div>
   <div class="row">
    <?php
      include('Buttons.php');
     ?>
  </div>
  <br>
          </form>

              </div>

                     </div>

             </div>
