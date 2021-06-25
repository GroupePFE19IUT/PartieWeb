
<!DOCTYPE html>
<html>
<head>
	<?php
		include("vendor/page/liens.php");
	 ?>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
	<!-- <link rel="stylesheet" href="modalcss/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="modalcss/bootstrap4-glyphicons-master\bootstrap4-glyphicons\css\bootstrap-glyphicons.css">

     <link rel="stylesheet" type="text/css" href="css/fontawesome/fontawesome.css">
    <script src="modalcss/jquery-3.4.1.min.js"></script>

<script type="text/javascript" src="modalcss/bootstrap/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/adminpanel.css" />
	<link rel="stylesheet" type="text/css" href="css/fontawesome/fontawesome.css" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap-4.4.1/bootstrap-4.4.1/dist/css/bootstrap.css">




	<title>
		<?php
			echo $titre;
		 ?>
	</title>
</head>
<body>
	<!--navbar-->
		<nav class="navbar navbar-expand-md navbar-light">
			<button class="navbar-toggler ml-auto mb-2" type="button" data-toggle="collapse" data-target="#myNavbar">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse pre-scrollable" id="myNavbar"  style="overflow: auto;">
				<div class="container-fluid">
					<div class="row">
						<!--sidebar-->
						<div class="col-xl-2 col-lg-3 col-md-4 sidebar fixed-top hidden-sm"   style="overflow: auto;">
							<a href="#" class="navbar-brand text-white d-block mx-auto text-center py-3 mb-4 bottom-border">TK Consultancy</a>

							<div class="bottom-border pb-3">
								<img src="img/9865.jpg" width="50" class="rounded-circle mr-3">
								<a href="#" class="text-white">Utilisateur</a>
							</div>

							<ul class="navbar-nav flex-column mt-4">
								<li class="nav-item">
									<a href="#" class="nav-link text-white p-3 mb-2 current">
										<i class="fas fa-home text-light fa-lg mr-3"></i>
										Menu
									</a>
								</li>

								<li class="nav-item">
									<a href="#" class="nav-link text-white p-3 mb-2 sidebar-link">
										<i class="fas fa-user text-light fa-lg mr-3"></i>
										Mon Profil
									</a>
								</li>

								<li class="nav-item">
									<a href="#" class="nav-link text-white p-3 mb-2 sidebar-link">
										<i class="fas fa-users text-light fa-lg mr-3"></i>
										Liste des clients
									</a>
								</li>

								<li class="nav-item">
									<a href="#" class="nav-link text-white p-3 mb-2 sidebar-link">
										<i class="fas fa-hotel text-light fa-lg mr-3"></i>
										Liste des produits
									</a>
								</li>

								<li class="nav-item">
									<a href="#" class="nav-link text-white p-3 mb-2 sidebar-link">
										<i class="fas fa-list text-light fa-lg mr-3"></i>
										Liste des reservations
									</a>
								</li>

								<li class="nav-item">
									<a href="#" class="nav-link text-white p-3 mb-2 sidebar-link">
										<i class="fas fa-desktop text-light fa-lg mr-3"></i>
										Utilisateurs
									</a>
								</li>

								<li class="nav-item">
									<a href="#" class="nav-link text-white p-3 mb-2 sidebar-link">
										<i class="fas fa-list-alt text-light fa-lg mr-3"></i>
										Categories
									</a>
								</li>

								<li class="nav-item">
									<a href="#" class="nav-link text-white p-3 mb-2 sidebar-link" data-toggle="modal" data-target=".modal">
										<i class="fas fa-sign-out-alt text-light fa-lg mr-3"></i>
										Deconnexion
									</a>
								</li>

								<li class="nav-item">
									<a href="#" class="nav-link text-white p-3 mb-2 sidebar-link">
										<i class="fas fa-file-alt text-light fa-lg mr-3"></i>
										Documentation
									</a>
								</li>
							</ul>
						</div>
						<!--sidebar-->


						<!--top-nav-->
						<nav class="navbar navbar-expand-lg navbar-dark bg-dark col-xl-10 col-lg-9 col-md-8 ml-auto bg-dark fixed-top py-2 top-navbar">
							<a href="#" class="navbar-brand" >navbar</a>
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggelerDemo02" aria-controls="navbarToggelerDemo02" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"></span>
							</button>

							<div class="collapse navbar-collapse" id="navbarToggelerDemo02"  style="overflow: auto;"v>
								<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
									<li class="nav-item active">
										<a href="#" class="nav-link">home<span class="sr-only">(current)</span></a>
									</li>
									<li class="nav-item">
										<a href="#" class="nav-link">jhd</a>
									</li>
									<li class="nav-item">
										<a href="#" class="nav-link disabled" tabindex="-1" aria-disabled="true">jhd</a>
									</li>
								</ul>

							</div>
						</navv>
						<!--top-nav-->


					</div>
				</div>
			</div>
		</nav>
	<!--navbar-->


	<!--modal-1-->
	<div class="modal fade" id="sign-out">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Confirmation</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
					Voulez-vous vraiment vous deconnecter ?
					</div>
					<div class="modal-footer">
						<a href="connexion.php">
							<button type="button" class="btn btn-danger btn-lg">Oui</button>
						</a>
						<button type="button" class="btn btn-success btn-lg " data-dismiss="modal">Non</button>
					</div>
			</div>
		</div>
	</div>
	<!--modal-1-->

	<!--corps-->
	<section>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-10 col-lg-9 col-md-8 ml-auto" style="overflow: auto;">
					<div class="row pt-5 mt-md-3 mb-5">
						<div class="col-xl-3 col-sm-6 p-2">
							<div class="card card-common">
								<div class="card-body">
									<div class="d-flex justfy-content-between">
										<i class="fas fa-users fa-3x  text-warning"></i>
										<div class="text-right text-secondary">
											<h5 >Patients </h5>
											<h3>15000</h3>
										</div>
									</div>
								</div>
								<div class="card-footer">
									<i class="fas fa-sync mr-3"></i>
									<span>Actualiser</span>
								</div>
							</div>
						</div>

						<div class="col-xl-3 col-sm-6 p-2">
							<div class="card card-common">
								<div class="card-body">
									<div class="d-flex justfy-content-between">
										<i class="fas fa-money-bill-alt fa-3x text-success"></i>
										<div class="text-right text-secondary">
											<h5 >Rendez-vous</h5>
											<h3>$15000</h3>
										</div>
									</div>
								</div>
								<div class="card-footer">
									<i class="fas fa-sync mr-3"></i>
									<span>Actualiser</span>
								</div>
							</div>
						</div>

						<div class="col-xl-3 col-sm-6 p-2">
							<div class="card card-common">
								<div class="card-body">
									<div class="d-flex justfy-content-between">
										<i class="fas fa-users fa-3x text-info"></i>
										<div class="text-right text-secondary">
											<h5 >Patients du jour</h5>
											<h3>50</h3>
										</div>
									</div>
								</div>
								<div class="card-footer">
									<i class="fa fas-sync mr-3"></i>
									<span>Actualiser</span>
								</div>
							</div>
						</div>

						<div class="col-xl-3 col-sm-6 p-2">
							<div class="card card-common">
								<div class="card-body">
									<div class="d-flex justfy-content-between">
										<i class="fas fa-chart-line fa-3x text-danger"></i>
										<div class="text-right text-secondary">
											<h5 >consultation</h5>
											<h3># FCFA</h3>
										</div>
									</div>
								</div>
								<div class="card-footer">
									<i class="fas fa-sync mr-3"></i>
									<span>Actualiser</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--corps

	<--tables-->
	<section>
		<div class="container-fluid">
			<div class="row mb-5" style="overflow: auto;">
				<div class="col-xl-10 col-ld-9 col-md-8 ml-auto">
					<div class="row align-items-center">
						<div class=" col-12 mb-5">
							<h3 class="text-muted text-center mb-3">Patients</h3>
							<!--<table class="table table-dark text-center">
								<thead>
									<tr class="text-muted">
										<th>Num</th>
										<th>Nom</th>
										<th>Sexe</th>
										<th>Telephone</th>
										<th></th>
										<th>Action</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<?php //for($i= 0; $i< sizeof($employers); $i++) { ?>
									<tr>
										<th><?php //echo $employers[$i]->id ?></th>
										<th><?php //echo $employers[$i]->nom ?></th>
										<th><?php //echo $employers[$i]->sexe ?></th>
										<th><?php //echo $employers[$i]->telephone ?></th>
										<th><button type="button" class="btn btn-success ">Afficher</button></th>
										<th><button data-toggle="modal" data-target="#supModal" type="button" class="btn btn-danger ">Supprimer</button></th>
									</tr>





									<tr>
										<th></th>
										<th></th>
										<th></th>
										<th></th>
										<th></th>
										<th><button type="button" class="btn btn-success" data-toggle="modal" data-target="#patientModal">Ajouter</button></th>
									</tr>
								</tbody>
							</table>-->
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</body>
	<script type="text/javascript" src="js/script.js"></script>
</html>
