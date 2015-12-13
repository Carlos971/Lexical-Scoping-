<!DOCTYPE html>
<!-- APPEL DE LA PAGE OU IL Y A LA FONCTION -->
	<?php
		require_once('param.inc.php');
	?>
<html>
 <head>
  <meta charset="utf-8">
 	<title>----Page chef équipe----</title>
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

<p class ="p4">><a href="PageListePostulant.php">AFFICHER LA LISTE DES POSTULANTS</a><br><br>
	><a href="PageListeReunion.php">AFFICHER LA LISTE DES REUNIONS </a> <br><br>
	><a href="PageCreerReunion.php">PROGRAMMER UNE REUNION</a> <br><br>
	><a href="upload.php">DEPOSER COMPTE RENDU</a> <br><br>
	><a href="PageCompteRendu.php">TELECHARGER UN COMPTE RENDU </a> <br><br>
	><a href="PageListeEquipe2.php">AFFICHER LA LISTE DES EQUIPES </a> </p><br>
	
<form method="post" name="ajoutequipier" action="PageChefEquipe.php">
		<fieldset class= "fieldset2">
		<legend> Voulez-vous ajouter un postulant à votre équipe ? </legend>
		<br>
		<!-- NOM POSTULANT-->	
			<label for="nomPostulant">Nom du postulant </label><br>
			<input type="text" id="nomPostulant" name="nomPostulant" placeholder="  " required> <br>
		<!-- NOM -->	
			<label for="prenomPostulant">Prenom du postulant</label><br>
			<input type="text" id="prenomPostulant" name="prenomPostulant" placeholder="  " required><br>
		<!-- NOM Equipe-->	
			<label for="nomEquipe">Nom de votre équipe</label><br>
			<input type="text" id="nomEquipe" name="nomEquipe" placeholder="  " required><br>
		<!-- VALIDATION -->
			<span class="marge2"><input type="submit" name="valider" value="OK"/><br></span>
			
		</fieldset>
		
		</form>
	
	<br><br>
	
		
	<br><br>
	<!-- "Tous droits réservés" centré et en gras -->

<?php
	//On récupère les information du formulaire après validation
	if (isset ($_POST['valider'])){

		$nomPostulant=$_POST['nomPostulant'];
		$prenomPostulant=$_POST['prenomPostulant'];	
		$nomEquipe=$_POST['nomEquipe'];
		
	//Tous les champs sont saisies
	
	if ($nomPostulant&&$prenomPostulant&&$nomEquipe){
						
		//On insert les valeurs entrées
			$sql = 'INSERT INTO equipier VALUES("","'.$nomPostulant.'","'.$prenomPostulant.'","'.$nomEquipe.'")';
		//On lance la commande en vérifiant s'il la requête passe sinon message d'erreur
			$res = $conn->query($sql);
		// on se déconnecte
			mysqli_close($conn);
		//retour page accueil
			header('location:PageChefEquipe.php');
			exit();
				
	} else echo " Veuillez saisir tous les champs ! ";
	
	}
?>
<body>
</html>