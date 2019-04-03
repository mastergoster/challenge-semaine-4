<?php
include('donnes.php');

function ttc($prixht){
	$prixttc=$prixht*1.2;
	 /* Elle remplace les points par la virgule et elle arrondie à 2 décimales */
	return number_format($prixttc,2,",", ".");
}
?>

<! DOCTYPE html>
<html>
<head>
	<title>Challenge semaine 4 - per programming</title>
	<meta charset="utf-8" />
</head>
<body>
	<h1>Les bières</h1>
	<section>
		<article>
			<?php 
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
				<!-- Description -->
				<div><p><?= substr($beerArray[$i][2],0,150) . "[...]" ?></p>	</div>	
				<!-- Prix -->
				<div><p><?= ttc($beerArray[$i][3]) ." €" ?></p></div>
<!--fonction str à voir et mettre en place $rest = substr("abcdef", 0, -1);
			<?php
			}
			?>


		</article>
	</section>
	
</body>
</html>