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
	<title>---- AJOUTER UN EQUIPIER !----</title>
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
				echo" Quels postulants voulez-vous ajouter à votre équipe ".$_SESSION['pseudo']." ? <br/><a href='Deconnexion.php'> Se déconnecter</a>";
			}else header('Location:PageAcceuil.php');
			?>
		</span>
		<br>
	</p>

<!-- FORMULAIRE avec la methode post -->
	
		<form method="post" name="equipe" action="PageAccepterUnPostulant.php">
	<div class="centrage">	
   <fieldset>
       <legend> Lesquels ? </legend>
		<br>
		<!-- NOM D'EQUIPE-->	
			<label for="nomEq">Nom du postulant </label><br>
			<input type="text" id="nomEq" name="nomEq" placeholder="  " required> <br>
		<!-- NOM -->	
			<label for="chefEqnom">Prenom du postulant</label><br>
			<input type="text" id="chefEqnom" name="chefEqnom" placeholder="  " required><br>
		<!-- VALIDATION -->
			<span class="marge2"><input type="submit" name="valider" value="OK"/><br></span>
			
		</form>
	</fieldset>
	</div>
<?php
	//On récupère les information du formulaire après validation
	if (isset ($_POST['valider'])){

		$nomEq=$_POST['nomEq'];
		$chefEqnom=$_POST['chefEqnom'];
		$chefEqprenom=$_POST['chefEqprenom'];
		
	//Tous les champs sont saisies
				
				//On insert les valeurs etrées
					$sql = 'INSERT INTO equipe VALUES("","'.$nomEq.'","'.$chefEqnom.'","'.$chefEqprenom.'")';
					$res = $conn->query($sql);
					
					$sql2 = 'INSERT INTO chefequipe VALUES("","'.$chefEqnom.'","'.$chefEqprenom.'","'.$nomEq.'")';
					$res = $conn->query($sql2);
				// on se déconnecte
					mysqli_close($conn);
				//retour page accueil
					header('location:PageChefEquipe.php');
					exit();
					
	}
?>

	<br><br><br><br><br><br>
<!-- "Tous droits réservés" centré et en gras -->
	<div class="centrage">Tous droits réservés </div>
 </body>
</html>