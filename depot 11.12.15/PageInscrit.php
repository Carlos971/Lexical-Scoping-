<!DOCTYPE html>
<!-- APPEL DE LA PAGE OU IL Y A LA FONCTION -->
	<?php
		require_once('param.inc.php');
	?>
<html>
 <head>
  <meta charset="utf-8">
 	<title>----Page inscrit----</title>
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
	
	<p class ="p4">*<a href="PageFormulaireCreerEquipe.php">CREER UNE EQUIPE</a><br><br>
	*<a href="PageListeEquipe.php">AFFICHER LA LISTE DES EQUIPES </a> </p><br>
	
		<form method="post" name="postuler" action="PageInscrit.php">
		<fieldset class= "fieldset2">
			<legend>POSTULER POUR UNE EQUIPE</legend><br>
			
			<label for="nomEquipe">Nom de l'équipe : </label><input type="text" id="nomEquipe" name="nomEquipe" placeholder="" required><br>
			
			<label for="nom">Votre Nom : </label><input type="text" id="nom" name="nom" placeholder="" required> <br>
			
			<label  for="prenom">Votre Prénom : </label><input type="text" id="prenom" name="prenom" placeholder="" required><br><br><br>
			
			<label for="raison">Pourquoi le chef d'équipe devrait-il vous accepter ?</label><br>
			<textarea type="text" id="message" name="message" > </textarea> <br>
			
			<span class="marge2"><input type="submit" name="valider" value="OK"/></span>
		</fieldset>
		
		</form>
	
	<br><br>
	<!-- "Tous droits réservés" centré et en gras -->

	<div class="centrage">Tous droits réservés </div>
<?php
	//On récupère les information du formulaire après validation
	if (isset ($_POST['valider'])){

		$nomEquipe=$_POST['nomEquipe'];
		$nom=$_POST['nom'];
		$prenom=$_POST['prenom'];
		$message=htmlentities(trim($_POST['message']));
		
 
	//Tous les champs sont saisies
	
	if ($nomEquipe&&$nom&&$prenom&&$message){
		
					
					
		//On insert les valeurs entrées
			$sql = 'INSERT INTO postulant VALUES("","'.$nom.'","'.$prenom.'","'.$message.'","'.$nomEquipe.'")';
		//On lance la commande en vérifiant s'il la requête passe sinon message d'erreur
			$res = $conn->query($sql);
		// on se déconnecte
			mysqli_close($conn);
		//retour page accueil
			header('location:PageInscrit.php');
			exit();
		
					

			
			
	} else echo " Veuillez saisir tous les champs ! ";
	
	}
?>	
<body>
</html>