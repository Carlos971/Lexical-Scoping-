<!DOCTYPE html>
<!-- FORMULAIRE INSCRIPTION -->
	
	<!-- APPEL DE LA PAGE OU IL Y A LA FONCTION -->
	<?php
		require_once('param.inc.php');
	?>
	
<!-- DEBUT CODE HTML -->
<html>
<head>
	<meta charset="utf-8">
	<title>----Formulaire Inscription !----</title>
	<link rel="stylesheet" href="stylePageAccueil.css">
 </head>
 
  <body>
  
  <!-- BANNIERE STRUCTURE -->
	<header> </header>
 
	<!-- BANDE BLEUE -->
	<p class ="p1">
		<img src="kaggle.jpg" alt="logo"> 
		<span class="marge">Veuillez remplir le formulaire.</span>
		<br>
	</p>

<!-- FORMULAIRE avec la methode post -->
	
		<form method="post" name="inscription" action="PageFormulaireInscription.php">
	<div class="centrage">	
   <fieldset>
       <legend>Formulaire Inscription</legend>
		<br>
		<!-- NOM -->	
			<label for="nom">Votre Nom</label><br>
			<input type="text" id="nom" name="nom" placeholder="  " required> <br>
		<!-- PRENOM -->	
			<label for="prenom">Votre Prénom</label><br>
			<input type="text" id="prenom" name="prenom" placeholder="  " required><br>
		<!-- PSEUDO -->	
			<label for="pseudo">Votre Pseudo</label><br>
			<input type="text" id="pseudo" name="pseudo" placeholder="  " required><br>
		<!-- PASSWORD -->	
			<label for="password">Votre Password</label><br>
			<input type="password" id="password" name="password" placeholder="**********" required><br>
		<!-- REPETER PASSWORD -->	
			<label for="password">Répétez votre Password</label><br>
			<input type="password" id="repeatpassword" name="repeatpassword" placeholder="**********" required><br>
		<!-- EMAIL -->	
			<label for="email"> Votre email</label><br>
			<input type="email" id="email" name="email" placeholder="" required> <br>
			<br>
		<!-- VALIDATION -->
			<span class="marge2"><input type="submit" name="valider" value="OK"/><br></span>
			
		</form>
	</fieldset>
	</div>
<?php
	//On récupère les information du formulaire après validation
	if (isset ($_POST['valider'])){

		$nom=$_POST['nom'];
		$prenom=$_POST['prenom'];
		$pseudo=$_POST['pseudo'];
		$password=$_POST['password'];
		$repeatpassword=$_POST['repeatpassword'];
		$email=$_POST['email'];
 
	//Tous les champs sont saisies
	
	if ($nom&&$prenom&&$pseudo&&$password&&$repeatpassword&&$email){
		
			//password et repeat password identique
			if ($password==$repeatpassword){
				
				//PASSWORD CODE
				
				
				//Verification du pseudo
					$reg = "SELECT * FROM membre WHERE pseudo = '$pseudo'";
					$res = $conn->query($reg);
					
					if ($res->num_rows==0){
					
					
				//On insert les valeurs entrées
					$sql = 'INSERT INTO membre VALUES("","'.$nom.'","'.$prenom.'","'.$pseudo.'","'.$password.'","'.$email.'")';
				//On lance la commande en vérifiant s'il la requête passe sinon message d'erreur
					$res = $conn->query($sql);
				// on se déconnecte
					mysqli_close($conn);
				//retour page accueil
					header('location:PageAcceuil.php');
					exit();
					
					}else echo "Le pseudo n'est pas disponible ! Veuillez choisir un autre pseudo.";
					
			}else echo "Les deux passwords doivent être identiques !";
			
	} else echo " Veuillez saisir tous les champs ! ";
	
	}
?>

	<br>
	<br>
<!-- "Tous droits réservés" centré et en gras -->
	<div class="centrage">Tous droits réservés </div>
 </body>
</html>