<!DOCTYPE html>
<!-- APPEL DE LA PAGE OU IL Y A LA FONCTION -->
	<?php
		require_once('param.inc.php');
	?>
<html>
 <head>
  <meta charset="utf-8">
 	<title>----Page équipier----</title>
	<link rel="stylesheet" href="stylePageAccueil.css">
 </head>
 <body>
 <!-- BANNIERE STRUCTURE -->
  <header> </header>

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
<p class ="p4"> *<a href="PageListeReunion.php">AFFICHER LA LISTE DES REUNIONS </a> </p><br>
	<br><br>
	<!-- "Tous droits réservés" centré et en gras -->
<body>
</html>