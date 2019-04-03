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
		<!-- Titre de l'onglet -->
		<title>Challenge semaine 4 - per programming</title>
		<!-- Encodage de caractères -->
		<meta charset="utf-8" />
		<!--intégrer la méta pour bootstrap -->
	</head>
	<body>
			<!-- Titre de la page affiché -->
		<h1>Les bières</h1>
		<section>
				<!--définition des articles de bière -->
			<article>
				<?php 
				/* boucle pour lire le tableau en php */
				for($i=0;$i<count($beerArray) ;$i++){ 
				?>
					<!-- HEADER -->
					<h2>
						<?php
						echo $beerArray[$i][0];
						?>
					</h2>

					<!-- Image -->

					<img src="<?= $beerArray[$i][1]?>" alt="photo de biere">
					<!-- Description limite de carractère 150 -->
					<div><p><?= substr($beerArray[$i][2],0,150) . "[...]" ?></p>	</div>	
					<!-- Prix -->
					<div><p><?= ttc($beerArray[$i][3]) ." €" ?></p></div>
	<!--fonction str à voir et mettre en place $rest = substr("abcdef", 0, -1); -->
				<?php
				}
				?>


			</article>
		</section>
		
	</body>
</html>