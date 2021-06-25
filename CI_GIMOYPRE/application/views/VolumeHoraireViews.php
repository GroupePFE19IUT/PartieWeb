<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
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
                              <h3 style="text-transform: uppercase;"class="text-primary" style="text-align: center;"><center> Inscription </center></h3>
                               <hr  size="2" width="100%" color="white">
                            </div>

                          </div>
                            <div class="">

                            </div>
                            <?php //echo form_open('EtudiantController\ajouter'); ?>

           <div class="row" id="in1">

        <div class="col-md-6" >

          <label for="CM"> Cour Magistrale  </label>
            <input type="text" class="form-control"   name="CM" value="<?php ?>">
            <?php //echo form_error('CM','<p  class="text-danger  text-center small">','</p>'); ?><br>
          <label for="TD">Traveaux Diriger</label>
             <input type="text" class="form-control"  name="TD" value="<?php ?>">
             <?php //echo form_error('TD ','<p  class="text-danger  text-center small">','</p>'); ?><br>
           <label for="date_de_naissance">    DATE  de NAISSANCE </label>
              <input type="date" class="form-control"  name="date_de_naissance"  value="<?php //echo set_value('datedenaissance'); ?>">
              <?php//// echo form_error('date_de_naissance','<p  class="text-danger  text-center small">','</p>'); ?><br>

             </div>
        <div class="col-md-6">
          <label for="TP">Traveaux Pratique </label>
            <input type="text" class="form-control"   name="TP" value="<?php ?>">
            <?php ////echo form_error('TP','<p  class="text-danger  text-center small">','</p>'); ?><br>

             <label for="TI">Travaile Individuel</label>
               <input type="email" class="form-control" name="TI" value="<?php  ?>">
               <?php ////echo form_error('TI','<p  class="text-danger  text-center small">','</p>'); ?><br>
             <label for="lieu_de_naissance">LIEU DE NAISSANCE</label>
               <input type="text" class="form-control"   name="lieu_de_naissance" value="<?php //echo set_value('lieuxnaissance'); ?>">
               <?php ////echo form_error('lieu_de_naissance','<p  class="text-danger  text-center small">','</p>'); ?><br>

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
           </div>
    </div>



  <script type="text/javascript">

  </script>
<script type="text/javascript" src="https://fr.monetbil.com/widget/v2/monetbil.min.js"></script>


  </body>
</html>
