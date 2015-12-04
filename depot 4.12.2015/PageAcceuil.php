<!DOCTYPE html>
<!-- PAGE D'ACCUEIL -->

<!-- APPEL DE LA PAGE OU IL Y A LA FONCTION -->
	<?php
		require_once('param.inc.php');
	?>

<html>
<head>
<meta charset="utf-8">
<title>Page d'Accueil</title>
<link rel="stylesheet" href="stylePageAccueil.css">
</head>
<body>
<!-- connexion -->
	<form method="post" name="connexion" action="PageAcceuil.php">
		<label for="connexion">----Connectez-Vous !----</label><br>
		<input type="text" id="pseudo" name="pseudo" placeholder="pseudo" required> <br>
		<input type="password" id="password" name="password" placeholder="*********" required><br>
		<span class="marge2"><input type="submit" name="valider" value="OK"/><br></span>
	</form>
<!-- inscription -->
	<a href="PageFormulaireInscription.php">Inscrivez-Vous !</a>
<!--  Kaggle | Accueil | listes des equipes |  A propos de nous  -->
	<p class ="p1">
		<img src="kaggle.jpg" alt="logo"> 
		<span class="marge"><img src="accueil.jpg" alt="logo"></span>
		<span class="marge2"><a href="PageInscription.html">Liste des équipes</a></span>
		<span class="marge2"><a href="PageInscription.html">A propos de nous</a></span>
		<br>
	</p>
<!-- Photo | Listes | côte à côte -->
	<!-- Photo -->
	<p class="p2">
		<span class="marge2"><img src="PhotoPageAccueil.jpg" alt="logo"></span>
	</p>
	<!-- Listes -->
	<p class="p3">
		<label for="mail">Actualités</label><br>
		<select name="choix">
			<option value="choix1">Actualité 1</option>
			<option value="choix2">Actualité 2</option>
			<option value="choix3">Actualité 3</option>
			<option value="choix4">Actualité 4</option>
			<option value="choix5">Actualité 5</option>
			<option value="choix6">....</option>
			<option value="choix7">....</option>
			<option value="choix8">....</option>
		</select>
	</p>
	<!-- Listes -->
	<p class="p3">
		<label for="mail">Evènements</label><br>
		<select name="choix">
			<option value="choix1">Evènement 1</option>
			<option value="choix2">Evènement 2</option>
			<option value="choix3">Evènement 3</option>
			<option value="choix4">Evènement 4</option>
			<option value="choix5">Evènement 5</option>
			<option value="choix6">....</option>
			<option value="choix7">....</option>
			<option value="choix8">....</option>
		</select>
	</p>
	<br>
	<br>
	<br>
	<br>
<!-- "Tous droits réservés" centré et en gras -->

	<div class="centrage">Tous droits réservés </div>	
<?php 
// DEBUT SESSION
session_start(); 
if (isset ($_POST['valider'])){

		$pseudo=$_POST['pseudo'];
		$password=$_POST['password'];

		//On vérifie les valeurs saisies et la base de données
			$password=md5($password);
			$sql = "SELECT * FROM membre WHERE pseudo='$pseudo'&&password='$password'";

		//On lance la commande 
			$res = $conn->query($sql);
			//si les valeurs sont identiques (qu'on a un résultat)
			if ($res->num_rows==1){
				$_SESSION['pseudo']=$pseudo;
				header('Location:PageInscrit.php');
			}else echo "Le mot de passe ou le pseudo est incorrecte.";
}
 ?>
 
</body>
</html>