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
	<title>----COMPTE RENDU !----</title>
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
				echo"Vous pouvez télécharger les comptes rendus suivant ".$_SESSION['pseudo']." ! <br/><a href='Deconnexion.php'> Se déconnecter</a>";
			}else header('Location:PageAcceuil.php');
			?>
		</span>
		<br>
	</p>
	<?php	
		// On créé la requête
	$req = "SELECT * FROM files";
	 
	// on envoie la requête
	$res = $conn->query($req);
	 
	while ($data = mysqli_fetch_array($res)) {
		
		// on affiche les résultats
		echo 'Equipe   :'.$data['nomequipe'].'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nom du fichier   :'.$data['name'].'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lien    : '.'<a href="'.$data['file_url'].'">'.$data['name'].'</a>';
	}

	mysqli_close($conn);	
?>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	
<!-- "Tous droits réservés" centré et en gras -->
	<div class="centrage">Tous droits réservés </div>
 </body>
</html>