<!DOCTYPE html>
<!-- APPEL DE LA PAGE OU IL Y A LA FONCTION -->
	<?php
		require_once('param.inc.php');
		session_start();
	?>
	<?php
	//On récupère les information du formulaire après validation
	if (isset ($_POST['valider'])){

		$nomPostulant=$_POST['nomPostulant'];
		$prenomPostulant=$_POST['prenomPostulant'];	
		$nomEquipe =$_SESSION['nomEquipe'];
		
	//TABLE POSTULANT ? VERIRIFIONS SI LA PERSONNE POSTULE POUR NOTRE EQUIPE
	
		$sql = "SELECT * FROM postulant WHERE prenom ='$prenomPostulant' && nom = '$nomPostulant' && nomEquipe= '$nomEquipe'";
				
		//On lance la commande 
		$res = $conn->query($sql);
					
		//si les valeurs sont identiques (qu'on a un résultat)
		if ($res->num_rows==1){
		
			//On insert les valeurs entrées
			$sql = 'INSERT INTO equipier VALUES("","'.$nomPostulant.'","'.$prenomPostulant.'","'.$nomEquipe.'")';
			$res = $conn->query($sql);
			
			//ON SUPPRIME DE LA TABLE POSTULANT LA PERSONNE DEVENANT EQUIPIER
			$req = "DELETE FROM postulant WHERE prenom ='$prenomPostulant' && nom = '$nomPostulant'";
			$res = $conn->query($req);
			
			// on se déconnecte
			mysqli_close($conn);
			echo "Ce postulant a été ajouté avec succès dans votre liste d'équipe";
						
		}else echo "Cette personne ne postule pas pour votre équipe !";
							
						
	
	}
?>
<html>
 <head>
  <meta charset="utf-8">
 	<title>----Page chef équipe----</title>
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
	BIENVENUE SUR LA PAGE CHEF D'EQUIPE.
</p>
<br><br><br>
<form class="p2" method="post" name="ajoutequipier" action="PageChefEquipe.php">
 
 Voulez-vous accepter un postulant ? 
 <br>
		<br>
		<!-- NOM POSTULANT-->	
			<label for="nomPostulant">Nom du postulant </label><br>
			<input type="text" id="nomPostulant" name="nomPostulant" placeholder="  " required> <br>
		<!-- NOM -->	
			<label for="prenomPostulant">Prenom du postulant</label><br>
			<input type="text" id="prenomPostulant" name="prenomPostulant" placeholder="  " required><br>
		<!-- VALIDATION -->
			<span class="marge2"><input type="submit" name="valider" value="OK"/><br></span>
</form>

<p class ="p33">
	
	><a href="PageListePostulant.php">AFFICHER LA LISTE DES POSTULANTS</a><br><br>
	><a href="PageListeReunion.php">AFFICHER LA LISTE DES REUNIONS </a> <br><br>
	><a href="PageCreerReunion.php">PROGRAMMER UNE REUNION</a> <br><br>
	><a href="upload.php">DEPOSER COMPTE RENDU</a> <br><br>
	><a href="PageCompteRendu.php">TELECHARGER UN COMPTE RENDU </a> <br><br>
	><a href="PageListeEquipier.php">AFFICHER LA LISTE DES EQUIPIERS</a><br><br>
	><a href="PageListeEquipe2.php">AFFICHER LA LISTE DES EQUIPES</a> </p><br>
	
	<br><br>
	
		
	<br><br>
	<!-- "Tous droits réservés" centré et en gras -->

<body>
</html>