<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
 	<title>----Page inscrit----</title>
	<link rel="stylesheet" href="stylePageAccueil.css">
 </head>
 <body>
 <!-- BANNIERE STRUCTURE -->
  <header> </header>
 </body>
 <!-- BANDE BLEUE -->
	<p class ="p1">
		<img src="kaggle.jpg" alt="logo"> 
		<span class="marge">
		<!-- SESSION-->
			<?php
			session_start();
			if($_SESSION['pseudo']){
				echo"Bonjour ".$_SESSION['pseudo']." ! <br/><a href='Deconnexion.php'> Se déconnecter</a>";
			}else header('Location:PageAcceuil.php');
			?>
		</span>
		<br>
	</p>
</html>