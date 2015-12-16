<!DOCTYPE html>
<!-- FORMULAIRE EQUIPE -->
	
	<!-- APPEL DE LA PAGE OU IL Y A LA FONCTION -->
	<?php
		require_once('param.inc.php');
		session_start();
	?>
	<?php
	//On récupère les information du formulaire après validation
	if (isset ($_POST['valider'])){

		$nomEq=$_POST['nomEq'];
		$nom=$_SESSION['nom'];
		$prenom=$_SESSION['prenom'];
		
	//Tous les champs sont saisies
				
				//On insert les valeurs etrées
					$sql = 'INSERT INTO equipe VALUES("","'.$nomEq.'","'.$nom.'","'.$prenom.'")';
					$res = $conn->query($sql);
					
					$sql2 = 'INSERT INTO chefequipe VALUES("","'.$nom.'","'.$prenom.'","'.$nomEq.'")';
					$res = $conn->query($sql2);
					
					
							//ON SUPPRIME LA PERSONNE DEVENANT CHEF EQUIPE DANS POSTULANT CAR ELLE NE PEUX PLUS ETRE EQUIPIER
							$req = "DELETE FROM postulant WHERE prenom ='$prenom' && nom = '$nom'";
							$res = $conn->query($req);
								
				// on se déconnecte
					mysqli_close($conn);
				//retour page accueil
					header('location:PageChefEquipe.php');
					exit();
					
	}
?>
	
<!-- DEBUT CODE HTML -->
<html>
<head>
	<meta charset="utf-8">
	<title>----Formulaire EQUIPE !----</title>
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
				echo"Veuillez remplir le formulaire ".$_SESSION['pseudo']." ! ";
			}else header('Location:PageAcceuil.php');
			?>
		</span>
		<br>
	</p><br><a href="<?php echo $_SERVER["HTTP_REFERER"]; ?>">RETOUR</a>

<!-- FORMULAIRE avec la methode post -->
	
		<form method="post" name="equipe" action="PageFormulaireCreerEquipe.php">
	<div class="centrage">	
   <fieldset>
       <legend>Formulaire Nouvelle Equipe</legend>
		<br>
		<!-- NOM D'EQUIPE-->	
			<label for="nomEq">Votre Nom D'équipe </label><br><br>
			<input type="text" id="nomEq" name="nomEq" placeholder="  " required> <br><br>
		
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