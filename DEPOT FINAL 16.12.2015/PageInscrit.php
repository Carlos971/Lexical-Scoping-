<!DOCTYPE html>
<!-- APPEL DE LA PAGE OU IL Y A LA FONCTION -->
	<?php
		require_once('param.inc.php');
		session_start();
	?>
<?php
	//On récupère les information du formulaire après validation
	if (isset ($_POST['valider'])){

		$nomEquipe=$_POST['nomEquipe'];
		$message=htmlentities(trim($_POST['message']));
		$nom=$_SESSION['nom'];
		$prenom=$_SESSION['prenom'];
 
	//Verifions que l'équipe existe déjà
		$sql = "SELECT * FROM equipe WHERE nomEquipe = '$nomEquipe'";
				
		//On lance la commande 
			$res = $conn->query($sql);
			
		//si elle existe
			if ($res->num_rows==1){
		
				//On insert les valeurs entrées
					$sql = 'INSERT INTO postulant VALUES("","'.$nom.'","'.$prenom.'","'.$message.'","'.$nomEquipe.'")';
				
				//On lance la commande
					$res = $conn->query($sql);
				// on se déconnecte
					mysqli_close($conn);
				//ok
				echo"Votre postulation a bien été prise en compte.";
					
					
						
			} else echo "Cette équipe n'existe pas! Vous pouvez la creer si vous désirez. ";
	
	}
?>
<html>
 <head>
  <meta charset="utf-8">
 	<title>----Page inscrit----</title>
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
	BIENVENUE SUR LA PAGE MEMBRE.
</p>
<br><br><br>

<form class="p2" method="post" name="postuler" action="PageInscrit.php">	
Voulez-vous postuler pour une équipe ?<br><br>		
	><label for="nomEquipe">Nom de l'équipe : </label><input type="text" id="nomEquipe" name="nomEquipe" placeholder="" required><br><br>		
	
	><label for="raison">Pourquoi le chef d'équipe devrait-il vous accepter ?</label><br>
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <textarea type="text" id="message" name="message" > </textarea> <br>
	<span class="marge2"><input type="submit" name="valider" value="OK"/></span>
</form>

<p class ="p33">
><a href="PageFormulaireCreerEquipe.php">CREER UNE EQUIPE</a><br><br>
><a href="PageListeEquipe2.php">AFFICHER LA LISTE DES EQUIPES </a> </p><br>
	
	
	<br><br>
	<!-- "Tous droits réservés" centré et en gras -->

	<div class="centrage">Tous droits réservés </div>	
<body>
</html>