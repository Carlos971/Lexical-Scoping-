<!DOCTYPE html>
<!-- APPEL DE LA PAGE OU IL Y A LA FONCTION -->
	<?php
		require_once('param.inc.php');
		session_start();
	?>
<html>
 <head>
  <meta charset="utf-8">
 	<title>----Page équipier----</title>
	<link rel="stylesheet" href="stylePageAccueil.css">
 </head>
 <body>
 <!-- BANNIERE STRUCTURE -->
	<header><p class ="p5"> 
	<!-- SESSION-->
			<?php
			if($_SESSION['pseudo']){
				echo"<a href='Deconnexion.php'> SE DECONNECTER</a>";
			}else header('Location:PageAcceuil.php');
			?><br><br>
			</p></header>

 <!-- BANDE BLEUE -->
	<p class ="p1">
		<img src="kaggle.jpg" alt="logo"> 
		<span class="marge">
		<!-- SESSION-->
			<?php
			if($_SESSION['pseudo']){
				echo"Bonjour ".$_SESSION['pseudo']." ! ";
			}else header('Location:PageAcceuil.php');
			?>
		</span>
		<br>
	</p>
	<br>
	
<p class ="p7">
	BIENVENUE SUR LA PAGE EQUIPIER.
</p>
<br><br><br>

<p class ="p4"> ><a href="PageListeReunion.php">AFFICHER LA LISTE DES REUNIONS </a> <br><br>
				><a href="PageCompteRendu.php">TELECHARGER UN COMPTE RENDU </a> <br><br>
				><a href="PageListeEquipier.php">AFFICHER LA LISTE DES EQUIPIERS</a><br><br>
				><a href="PageListeEquipe2.php">AFFICHER LA LISTE DES EQUIPES </a> </p><br>
	<br><br>
	<!-- "Tous droits réservés" centré et en gras -->
<body>
</html>