<!DOCTYPE html>
<html>
	<head>
		<title> Bienvenue </title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style_Accueil.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	</head>
	<body>

		<header>
			<div class="row justify-content-center fixed-top bg-dark">
				<div class="col-4">S1-B2 CYBERSÉCURITÉ</div>
				<div class="col-4"></div>
			</div>
		</header>

		<content>
			<div class="row justify-content-center">
				<div class="col-3">
					<div class="btn-group" id="menu">
						<button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					    	Menu
						</button>
						<div class="dropdown-menu"  aria-labelledby="deroulant">		    
				        	<h3 class="dropdown-header">~ Pages ~</h3>
					     	<div class="dropdown-divider"></div>
					       	<a class="dropdown-item" href="">Page principale</a>
					    	<a class="dropdown-item" href="#">Économie et juridique</a>
					        <a class="dropdown-item" href="#">Sondage</a>
					        <a class="dropdown-item" href="#">Contacts</a>
						</div>
					</div>
				</div>
				<div class="col-9" id="sujet">La cybersécurité</div>
			</div>
		</content>

	<?php include("footer.php"); ?>
	</body>
</html>