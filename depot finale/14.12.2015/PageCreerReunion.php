<!DOCTYPE html>
<!-- FORMULAIRE EQUIPE -->
	
	<!-- APPEL DE LA PAGE OU IL Y A LA FONCTION -->
	<?php
		require_once('param.inc.php');
	?>
	
<!-- DEBUT CODE HTML -->
<html>
<head>
	<meta charset="utf-8">
	<title>----Programmer une réunion ! / DEPOSER COMPTE RENDU ----</title>
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
				echo"Veuillez remplir le formulaire ".$_SESSION['pseudo']." ! <br/><a href='Deconnexion.php'> Se déconnecter</a>";
			}else header('Location:PageAcceuil.php');
			?>
		</span>
		<br>
	</p>
<br><br><br>
<!-- FORMULAIRE avec la methode post -->
	
		<form method="post" name="reunion" action="PageCreerReunion.php">
	<div class="centrage">	
   <fieldset>
       <legend>Nouvelle Réunion</legend>
		<br>
		<!-- NOM D'EQUIPE-->	
			<label for="nomEq">Votre Nom D'équipe </label><br>
			<input type="text" id="nomEq" name="nomEq" placeholder="  " required> <br>
		<!-- TOPIC REUNION -->	
			<label for="topic">Topic de la réunion </label><br>
			<input type="text" id="topic" name="topic" placeholder="  " required><br>
		<!-- DATE REUNION -->	
			<label for="date">Date de la réunion</label><br>
			<input type="date" id="date" name="date" placeholder="  " required><br>
		<!-- HEURE REUNION -->	
			<label for="heure">Heure de la réunion</label><br>
			<input type="heure" id="heure" name="heure" placeholder="  " required><br>
		<!-- VALIDATION -->
			<span class="marge2"><input type="submit" name="valider" value="OK"/><br></span>
			
		</form>
	</fieldset>
	</div>
	
<br><br><br><br><br><br>
<!-- "Tous droits réservés" centré et en gras -->
	<div class="centrage">Tous droits réservés </div>
 </body>
</html>