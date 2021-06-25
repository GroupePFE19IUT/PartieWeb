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
    <br>
    <div class="container-fluid">
      <div class="container">
        <div class="row">
          <div class="col-md-3 bg-dark">
            <br>
                <p id="dask" class="text-center">
                  <span class="glyphicon glyphicon-th">
                   Dashboard
                 </span>
                 </p>
          </div>
          <div class="col-md-9 bg-primary">
sisuo
          </div>

        </div>


        <div class="row text-white" >
          <div class="col-md-3 text-center" style="background-color:rgb(33, 47, 61 ); height: auto;  weight:100%;" >
          <div id="accordion">
<br>
              <div class="accordion" >
                <h5 class="" id="lienc"><span class=" glyphicon glyphicon-book" id="22"> COURS </span>
                &nbsp;&nbsp;  <span class="glyphicon glyphicon-triangle-bottom" >
                    &nbsp;
                 </span>
               </h5>
                  <div class="" style="background-color:rgb(39, 55, 70);" id="2">
                    <p class="text-white">
                       <a href="<?php echo site_url('MatiereController\index'); ?>">
                            Enregistrements <span class="glyphicon glyphicon-cog text-white">  </span>
                       </a><br><br>
                       <a href="<?php echo site_url('CourController\listercour'); ?>">Liste Cours <span class="glyphicon glyphicon-cog text-white"> </span></a><br>
                    </p>
                  </div>
              </div>
              <br>

              <div class="accordion" >
                <h5 class="" id="lienc"> <span class="glyphicon glyphicon-blackboard"> </span>
                  Departement &nbsp;&nbsp;<span class="glyphicon glyphicon-triangle-bottom" id="66">
                </span>
              </h5>
                  <div class="" style="background-color:rgb(47,60,62);"id="6">
                    <p class="text-white">
                       <a href="<?php echo site_url('DepartementController\index'); ?>">
                       Enregistrements<span class="glyphicon glyphicon-cog text-white"> </span>
                       </a><br><br>
                       <a href="<?php echo site_url('DepartementController\listerDepartement'); ?>">Liste Departement<span class="glyphicon glyphicon-cog text-white"> </span></a>
                    </p>
                  </div>
              </div><br>
              <div class="accordion" >
                <h5 class="" id="lienc">
                  <span class="glyphicon glyphicon-user"> </span>
                    Etudiant &nbsp;&nbsp;
                <span class="glyphicon glyphicon-triangle-bottom text-bleu" id="11" >
                </span>
              </h5>
                  <div class="" id="1" style="background-color:rgb(  39, 55, 70);">
                    <p class="text-white">
                       <a href="<?php echo site_url('EtudiantController\index'); ?>">
                       Enregistrements <span class="glyphicon glyphicon-cog text-white"> </span>
                       </a><br><br>
                       <a href="<?php echo site_url('EtudiantController\listeretudiant'); ?>">Liste Etudiants<span class="glyphicon glyphicon-cog text-white"> </span></a>
                    </p>
                  </div>
              </div>
<br>
            <div class="accordion" >
              <h5 class="" id="lienc">
                <span class="glyphicon glyphicon-cog"> </span>
                OPtion &nbsp;&nbsp; <span class="glyphicon glyphicon-triangle-bottom text-white" id="44">
              </span></h5>
                <div class="" style="background-color:rgb(47,60,62);" id="4">
                  <p class="text-white">
                     <a href="<?php echo site_url('OptionController\index'); ?>">
                     Enregistrements <span class="glyphicon glyphicon-cog text-white">  </span>
                     </a><br><br>
                     <a href="<?php echo site_url('OptionController\listerOption'); ?>">Liste Options <span class="glyphicon glyphicon-cog text-white"> </span></a>
                  </p>
                </div>
            </div>
            <br>
            <div class="accordion" >
              <h5 class="" id="lienc"><span class="glyphicon glyphicon-road"> </span>
                Parcour &nbsp;&nbsp; <span class="glyphicon glyphicon-triangle-bottom text-white" id="55">&nbsp;
              </span></h5>
                <div class="" style="background-color:rgb(47,60,62);" id="5">
                  <p class="text-white">
                     <a href="<?php echo site_url('ParcourController\index'); ?>">
                     Enregistrements <span class="glyphicon glyphicon-cog text-white"> </span>
                     </a><br><br>
                     <a href="<?php echo site_url('ParcourController\listerParcour'); ?>">Liste Parcours<span class="glyphicon glyphicon-cog text-white">  </span></a>
                  </p>
                </div>
            </div><br>

              <div class="accordion">
                <h5 class="" id="lienc">
                  <span class="glyphicon glyphicon-tasks"> </span>
                  UE &nbsp;&nbsp;<span class="glyphicon glyphicon-triangle-bottom text-white" id="33">
                </span></h5>
                  <div class="" style="background-color:rgb(47,60,62);" id="3">
                    <p class="text-white">
                       <a href="<?php echo site_url('UEController\index'); ?>">
                       Enregistrements <span class="glyphicon glyphicon-cog text-white">  </span>
                       </a><br><br>
                       <a href="<?php echo site_url('UeController\listerUE'); ?>">Liste UE<span class="glyphicon glyphicon-cog text-white"> </span></a>
                    </p>
                  </div>
              </div>
              <br>
              <div class="accordion" >
                <h5 class="" id="lienc">
                  <span class="glyphicon glyphicon-user"> </span>
                  Users &nbsp;&nbsp;<span class="glyphicon glyphicon-triangle-bottom text-white" id="77">
                </span></h5>
                  <div class="" style="background-color:rgb(47,60,62);" id="7">
                    <p class="text-white">
                       <a href="<?php echo site_url('UsersController\index'); ?>">
                       Enregistrements <span class="glyphicon glyphicon-cog text-white"> </span>
                       </a><br><br>
                       <a href="<?php echo site_url('UsersController\listerUsers'); ?>">Liste Usera <span class="glyphicon glyphicon-cog text-white">  </span></a>
                    </p>
                  </div>
              </div>
              <br>
              <div class="accordion" >
                <h5 class="" id="lienc">
                  <span class="glyphicon glyphicon-th-list"> </span>
                  Programmation &nbsp;&nbsp; <span class="glyphicon glyphicon-triangle-bottom text-white" id="88">
                </span></h5>
                  <div class="" style="background-color:rgb(47,60,62);" id="8">
                    <p class="text-white">
                       <a href="<?php echo site_url('ProgrammationController\index'); ?>">
                       Enregistrements<span class="glyphicon glyphicon-cog text-white">  </span>
                       </a><br><br>
                       <a href="<?php echo site_url('UsersController\listerUsers'); ?>">Liste Usera<span class="glyphicon glyphicon-cog text-white">  </span></a>
                    </p>
                  </div>
              </div>
              <br>
          </div>

        </div>

      </div>
    </div>
  </div>





    <script>
    //  code pour les accordion
    $( function() {
       $( "#accordion" ).accordion({
         collapsible:true

       });
     } );

    // code pour cacher les accordion
     $('#1').hide();
     $('#2').hide();
     $('#3').hide();
     $('#4').hide();
     $('#5').hide();
     $('#6').hide();
     $('#7').hide();
     $('#8').hide();


     $('#11').click(function(){

       $('#1').toggle();
       $('#2').hide();
       $('#3').hide();
       $('#4').hide();
       $('#5').hide();
       $('#6').hide();
       $('#7').hide();
       $('#88').hide();


     });
      $('#22').click(function(){
        $('#1').hide();
        $('#2').toggle();
        $('#3').hide();
        $('#4').hide();
        $('#5').hide();
        $('#6').hide();
        $('#7').hide();
        $('#88').hide();


     });
     $('#33').click(function(){
       $('#1').hide();
       $('#2').hide();
       $('#3').toggle();
       $('#4').hide();
       $('#5').hide();
       $('#6').hide();
       $('#7').hide();
       $('#88').hide();


    });
    $('#44').click(function(){
      $('#1').hide();
      $('#2').hide();
      $('#3').hide();
      $('#4').toggle();
      $('#5').hide();
      $('#6').hide();
      $('#7').hide();
      $('#88').hide();


   });
   $('#55').click(function(){
     $('#1').hide();
     $('#2').hide();
     $('#3').hide();
     $('#4').hide();
     $('#5').toggle();
     $('#6').hide();
     $('#7').hide();
     $('#88').hide();


  });
  $('#66').click(function(){
    $('#1').hide();
    $('#2').hide();
    $('#3').hide();
    $('#4').hide();
    $('#5').hide();
    $('#6').toggle();
    $('#7').hide();
    $('#88').hide();


 });
 $('#77').click(function(){
   $('#1').hide();
   $('#2').hide();
   $('#3').hide();
   $('#4').hide();
   $('#5').hide();
   $('#6').hide();
   $('#7').toggle();
   $('#88').hide();


});
$('#88').click(function(){
  $('#1').hide();
  $('#2').hide();
  $('#3').hide();
  $('#4').hide();
  $('#5').hide();
  $('#6').hide();
  $('#7').hide();
  $('#8').toggle();


});

     $(document).ready(function() {
       $('#tab').DataTable();
    } );
    </script>
  </body>
</html>
