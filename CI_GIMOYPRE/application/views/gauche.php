<!DOCTYPE html>
<html>
<head>
	<title>gauche</title>
</head>
<body>
	   		 <a href="index.php" class="btn btn-lg btn-dark" ><span class="glyphicon glyphicon-home text-white">Accueil
			  </span></a>

		  <div id="accordion">

			  <h3 class="bg-dark" ><span class="glyphicon glyphicon-user text-white">Personnel
			  </span></h3>
				  <div class="" style="background-color:rgb(47,60,62);">
				    <p class="text-white">
				       <a href="ajouter_personnel.php"><span class="glyphicon glyphicon-cog text-white">Ajouter du personnel
				       </span></a><br><br>
				       <span class="glyphicon glyphicon-cog text-white">Définir les Accès</span>
				       <br><br>
				       <a href="liste_personnel.php"><span class="glyphicon glyphicon-cog text-white">Liste personnel</span></a>
				    </p>
				  </div>
				  &nbsp;
			  <h3 class="bg-dark"><span class="glyphicon glyphicon-user text-white">Prestataire
			  </span></h3>
				  <div class="" style="background-color:rgb(47,60,62);">
				    <p class="text-white">
				    	<a href="prestataire.php"><span class="glyphicon glyphicon-user text-white">Prestataire</span></a><br><br>
				    	<a href="#"><span class="glyphicon glyphicon-user text-white">Prestataire2</span></a><br><br>
				    </p>
				  </div>
				  &nbsp;
			  <h3 class="bg-dark" ><span class="glyphicon glyphicon-cog text-white">Travaux
			  </span></h3>
				  <div class="" style="background-color:rgb(47,60,62);">
				    <p class="text-white">
				         <a href="ordonner_tache.php"><span class="glyphicon glyphicon-cog text-white">Ordonner nouvelle tache</span></a><br><br>
				          <span class="glyphicon glyphicon-cog text-white">listing
				          </span><br><br>

				    </p>
				  </div>
				  &nbsp;
			  <h3 class="bg-dark" ><span class="glyphicon glyphicon-cog text-white">Operation bancaire</span></h3>
				  <div class="" style="background-color:rgb(47,60,62);">
				    <p class="text-white">
				    	<a href="#"><span class="glyphicon glyphicon-cog text-white">Operation1</span></a><br><br>
				    	<a href="#"><span class="glyphicon glyphicon-cog text-white">Operation2</span></a><br><br>
				    </p>
				  </div>
				  &nbsp;
			  <h3 class="bg-dark"><span class="glyphicon glyphicon-user text-white">Prestation
			  </span></h3>
				  <div class="" style="background-color:rgb(47,60,62);">
				    <p class="text-white">
				    	<a href="mprestataire.php"><span class="glyphicon glyphicon-user text-white">Prestaire</span></a><br><br>
				    	<a href="#"><span class="glyphicon glyphicon-user text-white">Prestation2</span></a><br><br>
				    </p>
				  </div>
				  &nbsp;
			  <h3 class="bg-dark"><span class="glyphicon glyphicon-user text-white">Comptabilité</span></h3>
				  <div class="" style="background-color:rgb(47,60,62);">
				    <p class="text-white">
				   		<a href="#"><span class="glyphicon glyphicon-user text-white">Comptabilité1</span></a><br><br>
				   		<a href="#"><span class="glyphicon glyphicon-user text-white">Comptabilité2</span></a><br><br>
				    </p>
				  </div>
				  &nbsp;
			 <h3 class="bg-dark"><span class="glyphicon glyphicon-home text-white">Document
			 </span></h3>
				  <div class="bg-dark">
				    <p class="text-white">
				    	<a href="#"><span class="glyphicon glyphicon-home text-white">Document1</span></a><br><br>
				    	<a href="#"><span class="glyphicon glyphicon-home text-white">Document2</span></a><br><br>
				    </p>
				  </div>
				  <br><br>


	     </div>

		 <script>
  	 //  code pour les accordion
	  $( function() {
		    $( "#accordion" ).accordion({
		    	collapsible:true

		    });
		  } );

	  // code pour cacher les accordion
      $('#2').hide();
      $('#2').hide();

      $('#1').click(function(){

      	$('#2').toggle();
      	$('#4').hide();
      	$('#2').toggle();
      	$('#2').toggle("450");

      });
       $('#3').click(function(){

      	$('#4').toggle();
      	$('#2').hide();
      	$('#4').toggle();
      	$('#4').toggle("450");

      });


		  $(document).ready(function() {
		    $('#tab').DataTable();
		} );
  </script>
   	</body>
   	</html>
