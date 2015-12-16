<!DOCTYPE html>
<!-- FORMULAIRE INSCRIPTION -->
	
	<!-- APPEL DE LA PAGE OU IL Y A LA FONCTION -->
	<?php
		require_once('param.inc.php');
		session_start();
	?>
	
<!-- DEBUT CODE HTML -->
<html>
<head>
	<meta charset="utf-8">
	<title>----COMPTE RENDU !----</title>
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
				echo"Vous pouvez télécharger les comptes rendus suivant ".$_SESSION['pseudo']."!";
			}else header('Location:PageAcceuil.php');
			?>
		</span>
		<br>
	</p>
	<a href="<?php echo $_SERVER["HTTP_REFERER"]; ?>">RETOUR</a> 
<br><br><p class=p6>
	<?php	
		// On créé la requête
	$req = "SELECT * FROM files";
	 
	// on envoie la requête
	$res = $conn->query($req);
	 
	while ($data = mysqli_fetch_array($res)) {

		// on affiche les résultats
		echo 'Equipe   :   '.$data['nomequipe'].'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   Nom du fichier   :  '.$data['name'].'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Lien    : '.'<a href="'.$data['file_url'].'">'.$data['name'].'</a><br>';
	}

	mysqli_close($conn);	
?></p>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	
<!-- "Tous droits réservés" centré et en gras -->
	<div class="centrage">Tous droits réservés </div>
 </body>
</html>