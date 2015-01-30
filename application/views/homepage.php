<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	
	<title>Le Kolatier 2015 Candidature Application Form</title>

	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/jquery.urlive/jquery.urlive.css">

	<style>
		body{
			padding-top: 30px;
			background: url('assets/images/bg.png');
			background-repeat: repeat;
			background-attachment: fixed;
		}

		.page-header h1{
			padding-left: 10px;
		}

		.page-header h5{
			padding-right: 20px;
		}

		.bg-top-right{
			background: url('assets/images/bg-top-right.png');
			background-repeat: no-repeat;
			background-position: top right;
			background-clip: 20px;
		}

		.bg-right{
			background: url('assets/images/bg-right.jpg');
			background-repeat: no-repeat;
			background-position: top right;
			background-attachment: fixed;
		}

		.bg-left{
			background: url('assets/images/bg-left.jpg');
			background-repeat: no-repeat;
			background-position: left;
			background-attachment: fixed;
		}

		.loading{
			display: none;
		}
	</style>

	<!-- Favicons -->
	<!-- <link rel="apple-touch-icon" href="../apple-touch-icon.png"> -->
	<link rel="icon" href="assets/images/icons/logo.ico">
</head>
<body>
	<!-- Main wrapper -->
	<div class="container">
		<div class="col-md-10 col-md-offset-1 panel panel-default">
			<div class="row bg-top-right">
				<div class="page-header">
					<h1> <span class=""><img src="assets/images/logo.png" style="width:100px" alt=""></span> Appel à canditature de groupe </h1>
					<div class="pull-right"><h5 class="text-danger">Date de Cloture: 15/05/2015</h5></div>
				</div>
			</div>

			<form action="<?php echo base_url(); ?>" method="POST">
				<div class="panel panel-default">
				  <div class="panel-heading">
				    <h3 class="panel-title">Informations sur le groupe</h3>
				  </div>
				  <div class="panel-body">
				    <div class="row form-inline">
				    	<div class="col-md-6 form-group">
				    		<label class="" for="nom_artiste">
				    			<i class="fa fa-users fa-stack text-primary"></i> Nom de l'Artiste: 
				    		</label>
					    	<input name="nom_artiste" type="text" class="form-control" id="nom_artiste" placeholder="Nom Artiste" value="<?php echo set_value('nom_artiste'); ?>">
				    	</div>
				    	<div class="col-md-6 form-group">
				    		<label class="" for="pays">
				    			<i class="fa fa-arrows-v fa-stack text-primary"></i> Pays de résidence: 
				    		</label>
						    <select name="pays" id="pays" class="form-control">
						    	<option value="">Choisir un pays</option>
						    </select>
				    	</div>
					</div>
					<hr>
					<div class="row form-inline">
					    <div class="col-md-6 form-group">
				    		<label class="" for="responsable">
				    			<i class="fa fa-user fa-stack text-primary"></i> Nom Responsable: 
			    			</label>
					    	<input type="text" class="form-control" id="responsable" placeholder="Responsable">
				    	</div>
				    	<div class="col-md-6 form-group">
				    		<label class="" for="pays">
				    			<i class="fa fa-envelope fa-stack text-primary"></i> Email: 
			    			</label>
						    <input name="email" type="email" class="form-control" id="email" placeholder="Email Artiste" value="<?php echo set_value('email'); ?>">
				    	</div>
					</div>
					<hr>
					<div class="row form-inline">
					    <div class="form-group col-md-6">
				    		<label class="" for="tel">
				    			<i class="fa fa-mobile fa-stack text-primary"></i> Telephone: 
			    			</label>
					    	<input name="telephone" type="telephone" class="form-control" id="responsable" placeholder="Tel" value="<?php echo set_value('telephone'); ?>">
					    	<button class="btn btn-primary">+</button>
					    	<!-- <input type="telephone" class="form-control" id="responsable" placeholder="Tel">
					    	<button class="btn btn-danger">-</button> -->
				    	</div>
				    	<div class="form-group col-md-6">
				    		<div class="row">
				    			<div class="col-md-9">
						    		<label class="" for="nbpers">
						    			<i class="fa fa-users fa-stack text-primary"></i> Nombre de personnes en tournée: 
					    			</label>
				    			</div>
					    		<div class="col-md-3">
					    			<input type="number" class="form-control" id="nbpers" style="width:60px;">
					    		</div>
				    		</div>
				    	</div>
					</div>
					<hr>
					<div class="row form-inline">
					    <div class="form-group col-md-12">
				    		<label class="" for="ti">
				    			<i class="fa fa-plane text-primary"></i> Transport international en charge du Groupe: 
			    			</label>
			    			<label class="radio-inline">
							  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Oui
							</label>
							<label class="radio-inline">
							  <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> Non
							</label>
					    	<!-- <input type="telephone" class="form-control" id="responsable" placeholder="Tel">
					    	<button class="btn btn-danger">-</button> -->
				    	</div>
					</div>
					<hr>
					<div class="row form-inline">
					    <div class="form-group col-md-6">
				    		<label class="" for="siteweb"><i class="fa fa-cloud fa-stack text-primary"></i> Site web: </label>
					    	<input type="telephone" class="form-control" id="siteweb" placeholder="Votre Site web">
				    	</div>
				    	<div class="form-group col-md-6">
				    		<label class="" for="youtube"><i class="fa fa-youtube text-primary"></i> Lien youtube: </label>
					    	<input type="telephone" class="form-control" id="youtube" placeholder="Votre chaîne youtube">
				    	</div>
					</div>
					<hr>
					<div class="row form-inline">
				    	<div class="urlive-container"> 
							<span class="loading">Loading...</span>
				    	</div>
					</div>
				  </div>
				</div>

				<div class="panel panel-default">
				  <div class="panel-heading">
				    <h3 class="panel-title">Contenu Média</h3>
				  </div>
				  <div class="panel-body">
					<div class="row form-inline">
					    <div class="form-group col-md-6">
				    		<label class="" for="titre1"><i class="fa fa-upload text-primary"></i> Tire no 1: <span class="small text-danger"></span></label>
					    	<input type="file" id="titre1">
				    	</div>
				    	<div class="form-group col-md-6">
				    		<label class="" for="titre2"><i class="fa fa-upload text-primary"></i> Tire no 2: <span class="small text-danger"></span></label>
					    	<input type="file" id="titre2">
				    	</div>
					</div>
				  </div>
				</div>

				<div class="text-center">
					<input type="reset" class="btn btn-danger" value="Annuler" />
					<input type="submit" class="btn btn-success" value="Envoyer" />
				</div>
				<p> </p>
			</form>
		</div>
	</div>

	<!-- Javascript libaries -->
	<script src="assets/jquery/jquery.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/jquery.urlive/jquery.urlive.min.js"></script>

	<!-- Scripts loader -->
	<script>
		(function(){

			$('#siteweb').on('input propertychange', function () {
			     $('#siteweb').urlive({
			        callbacks: {
			            onStart: function () {
			                $('.loading').show();
			                $('.urlive-container').urlive('remove');
			            },
			            onSuccess: function (data) {
			                $('.loading').hide();
			                $('.urlive-container').urlive('remove');
			            },
			            noData: function () {
			                $('.loading').hide();
			                $('.urlive-container').urlive('remove');
			            }
			        }
			    });
			}).trigger('input');
		})();

		$('#youtube').on('input propertychange', function () {
		     $('#youtube').urlive({
		        callbacks: {
		            onStart: function () {
		                $('.loading').show();
		                $('.urlive-container').urlive('remove');
		            },
		            onSuccess: function (data) {
		                $('.loading').hide();
		                $('.urlive-container').urlive('remove');
		            },
		            noData: function () {
		                $('.loading').hide();
		                $('.urlive-container').urlive('remove');
		            }
		        }
		    });
		}).trigger('input');
	</script>
</body>
</html>