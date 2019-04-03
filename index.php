<?php
include('donnes.php');
/*Fonction de calcul du prix TTC*/
function ttc($prixht){
	$prixttc=$prixht*1.2;
	 /* Elle remplace les points par la virgule et elle arrondit à 2 décimales. Elle retourne le prix TTC */
	return number_format($prixttc,2,",", ".");
}
?>
<!-- type de document = HTML -->
<! DOCTYPE html>
<html lang=fr>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<!-- Titre de l'onglet -->
		<title>Challenge semaine 4 - per programming</title>
		<!-- Encodage de caractères -->
		<meta charset="utf-8" />
		<!--intégrer la méta pour bootstrap -->
		<meta name="viewport" content="width=device-width, user-scalable=no">
	</head>
	<body class="container">
			<!-- Titre de la page affiché -->
		<h1 class="col-10 offset-1 text-center">Les bières</h1>
		<section class="row">
				<!--définition des articles de bière -->
			
				<?php 
				/* boucle pour lire le tableau en php */
				for($i=0;$i<count($beerArray) ;$i++){ 
				?>
					<article class="col-12 text-center">
					<h2 class="col-12 text-center">
						<?php
						echo $beerArray[$i][0];
						?>
					</h2>

					<!-- Image -->

					<img class ="col-6 offset-3"src="<?= $beerArray[$i][1]?>" alt="photo de biere">
					<!-- Description limite de carractère 150 -->
					<div class="text-justify"><p><?= substr($beerArray[$i][2],0,150) . "[...]" ?></p>	</div>	
					<!-- Prix -->
					<div class="text-center font-weight-bold"><p><?= ttc($beerArray[$i][3]) ." €" ?></p></div>
					</article>
	<!--fonction str à voir et mettre en place $rest = substr("abcdef", 0, -1); -->
				<?php
				}
				?>


			
		</section>
		
	</body>
</html>