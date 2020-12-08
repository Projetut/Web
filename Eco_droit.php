<!DOCTYPE html>
<html>
	<head>
		<title> ~ Projet tuteuré ~ </title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	</head>
	<body>
		<?php include("header.php"); ?>
		<div id="content">
			<div class="row justify-content-center">
				<div class="col-10">
					<h2>
						Sur cette page web vous pourrez avoir accès aux informations juridiques et économiques que nous avons trouvés sur le thème de la cybersécurité :
					</h2>
				</div>
			</div>
			<br>
			<div class="row justify-content-center">
		 		<div class="col-3" id="gauche"><a href="Eco_droit.php?article=1" id="juridique">Juridique</a></div>
		 		<div class="col-3"></div>
		  		<div class="col-3" id="droite"><a href="Eco_droit.php?article=2" id="economie">Economie</a></div>
			</div>
			<br>
			<br>
			<?php
				if (isset($_GET['article']) && $_GET['article']==1) {
					include("juridique.php");
				}
				elseif (isset($_GET['article']) && $_GET['article']==2) {
					include("economie.php");
				}
			?>
		</div>
		<?php include("footer.php"); ?>
	</body>
</html>