<?php
include('donnes.php');

function ttc($prixht){
	$prixttc=$prixht*1.2;
	return $prixttc;
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
				<h3>
					<?php
					echo $beerArray[$i][0];
					?>
				</h3>

				<!-- Image -->

				<img src="<?= $beerArray[$i][1]?>" alt="photo de biere">
				<!-- Description -->
				<div><p><?= $beerArray[$i][2]?></p>	</div>	
				<!-- Prix -->
				<div><p><?= ttc($beerArray[$i][3])?></p></div>

			<?php
			}
			?>


		</article>
	</section>
	
</body>
</html>