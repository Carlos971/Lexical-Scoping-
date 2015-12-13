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
		<span class="marge2"><a href="PageListeEquipe.php">Liste des équipes</a></span>
		<span class="marge2"><a href="https://www.kaggle.com/">A propos de nous</a></span>
		<br>
	</p>
<!-- Photo | Listes | côte à côte -->
	<!-- Photo -->
	<p class="p2">
	<br>
	<br>
		<span class="marge2"><img src="PhotoPageAccueil.jpg" alt="logo"></span>
	</p>
	<!-- Listes -->
	<p class="p3">
	<br>
	<br>
		Consciente de l’impact massif d’une participation à une compétition kaggle sur un CV, 
		l’Esigelec souhaite favoriser la création d’équipes d’étudiants intéressés par le challenge. 
		Notre rôle est donc de créer un site web permettant à un chef d’équipe de créer une  équipe 
		et à des équipiers de rejoindre l’équipe. Le site permet de planifier des réunions d’équipe 
		et de mettre en ligne des comptes rendus.
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
		
		//ON COMMENCE PAR REGARDER SI LA PERSONNE EST INSCRITE
		
		//On vérifie si la personne est dans la table MEMBRE
			$sql = "SELECT prenom FROM membre WHERE pseudo = '$pseudo'&& password ='$password'";
				
		//On lance la commande 
			$res = $conn->query($sql);
			
		//si les valeurs sont identiques (qu'on a un résultat)
			if ($res->num_rows==1){
				$_SESSION['pseudo']=$pseudo;
				
                $row=$res->fetch_assoc();
				$prenom = $row['prenom'];
				
				//TABLE CHEF EQUIPE ?
					$sql2 = "SELECT * FROM chefequipe WHERE prenom ='$prenom'";
				
				//On lance la commande 
					$res2 = $conn->query($sql2);
				
				//si les valeurs sont identiques (qu'on a un résultat)
					if ($res2->num_rows==1){
						header('Location:PageChefEquipe.php');
						
					}else 	{ 	//TABLE CHEF EQUIPE ?
									$sql3 = "SELECT * FROM equipier WHERE prenom ='$prenom'";
								//On lance la commande 
									$res3 = $conn->query($sql3);
								
								//si les valeurs sont identiques (qu'on a un résultat)
									if ($res3->num_rows==1){
										header('Location:PageEquipier.php');
					
									}else header('Location:PageInscrit.php');
							}			
			}else echo "Le mot de passe ou le pseudo est incorrecte.";
							
	}
 ?>
 
</body>
</html>