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
                        <div class="container classwithpad"  style="/*background-color:rgb(210,210,210); margin:10px; padding:70px;*/">
                          <div class="row">
                            <div class="col-md-12">
                              <hr  size="2" width="100%" color="white">
                                <h3 style="text-transform: uppercase;"class="text-primary" style="text-align: center;"><center> Inscription </center></h3>
                               <hr  size="2" width="100%" color="white">
                            </div>
                          </div>
                        </div>
                      </div>

                            <?php echo form_open('EtudiantController\ajouter'); ?>

           <div class="row" id="in1" >

              <div class="col-md-6" >
                    <label for="nom"> NOM  </label>
                      <input type="text" class="form-control"   name="nom" value="<?php //echo set_value('nom'); ?>">
                      <?php echo form_error('nom','<p  class="text-danger  text-center small">','</p>'); ?><br>
                    <label for="telephone">Teléphone</label>
                       <input type="text" class="form-control"  name="telephone" value="<?php //echo set_value('telephone'); ?>">
                       <?php echo form_error('telephone ','<p  class="text-danger  text-center small">','</p>'); ?><br>
                     <label for="date_de_naissance">DATE de NAISSANCE </label>
                        <input type="date" class="form-control"  name="date_de_naissance"  value="<?php //echo set_value('date_de_naissance'); ?>">
                        <?php echo form_error('date_de_naissance','<p  class="text-danger  text-center small">','</p>'); ?><br>
              </div>
              <div class="col-md-6">
                   <label for="Prenom">Prenom</label>
                        <input type="text" class="form-control"   name="prenom" value="<?php //echo set_value('prenom'); ?>">
                        <?php echo form_error('prenom','<p  class="text-danger  text-center small">','</p>'); ?><br>
                   <label for="EMAIL">EMAIL</label>
                        <input type="text" class="form-control" name="email" value="<?php //echo set_value('email'); ?>">
                        <?php echo form_error('email','<p  class="text-danger  text-center small">','</p>'); ?><br>
                   <label for="lieu_de_naissance">LIEU DE NAISSANCE</label>
                         <input type="text" class="form-control"   name="lieu_de_naissance" value="<?php //echo set_value('lieu_de_naissance'); ?>">
                         <?php echo form_error('lieu_de_naissance','<p  class="text-danger  text-center small">','</p>'); ?><br>
              </div>
        </div>

       <div class="row" id="in2">
            <div class="col-md-6" >
              <label for="">Sexe</label>
                  <select class="form-control" name="sexe" value="<?php echo set_value('sexe'); ?>">
                    <option value="masculin">Masculin</option>
                    <option value="feminin">Féminin</option>
                  </select> <br>
            </div>
            <div class="col-md-6">
                <label for="photo">Photo</label>
                    <input type="file" class="form-control" name="photo" id="photo" value="<?php echo set_value('photo'); ?>"/>
                    <?php echo form_error('photo','<p  class="text-danger  text-center small">','</p>'); ?><br>
            </div>
      </div>

      <div class="row">

            <div class="col-md-4">
              <input type="reset" name="annuler" value="Annuler" class="btn btn-danger">
            </div>
<div class="col-md-2"></div>
                     <div class="col-md-4">
                              <button type="button" class="btn btn-primary" name="envoyé" id="int0">Suivant</button>
                               <button type="button" class="btn btn-primary" name="envoyé" id="precedent1">precedent</button>
                      </div>
                      <div class="col-md-2">
                        <button type="submit" class="btn btn-primary" name="envoyé" id="int1">Inscription</button>

                      </div>
      </div>
          </form>
              </div>
              </div>
             </div>
  <script type="text/javascript">

  $('#in2').hide();
  $('#in3').hide();
  $('#precedent1').hide();

  $('#int1').hide();





  $('#int0').click(function(){
  $('#in2').toggle();
    $('#in1').hide();
    $('#in3').hide();
    $('#int0').hide();
    $('#int1').toggle();
    $('#precedent1').toggle();


 });
$('#precedent1').click(function(){
$('#in1').toggle();
  $('#in2').hide();
  $('#in3').hide();
  $('#precedent').hide();
  $('#precedent1').hide();

  $('#int1').hide();


  $('#precedent2').hide();
$('#int0').toggle();

});

  </script>
