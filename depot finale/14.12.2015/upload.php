<!DOCTYPE html>
<!-- APPEL DE LA PAGE OU IL Y A LA FONCTION -->
	<?php
		require_once('param.inc.php');
	?>
<!-- code pour uploder -->
<?php 
	
	if(!empty($_FILES)){
		$file_name = $_FILES['fichier']['name'];
		$file_extension = strrchr($file_name,".");
		
		$file_tmp_name = $_FILES['fichier']['tmp_name'];
		$file_dest ='files/'.$file_name;
		
		$extensions_autorisees= array('.pdf','.PDF');
		if(in_array($file_extension, $extensions_autorisees)){
			if(move_uploaded_file($file_tmp_name, $file_dest)){
			
				//On insert les valeurs entrées
				    $nom=$_POST['nomEquipe'];
					$sql = 'INSERT INTO files VALUES("","'.$file_name.'","'.$file_dest.'","'.$nom.'")';
				//On lance la commande en vérifiant s'il la requête passe sinon message d'erreur
					$res = $conn->query($sql);
				// on se déconnecte
					mysqli_close($conn);
			
			
				echo 'Fichier envoyé avec succès';
			}else echo "Une erreur lors de l'envoie du fichier";
		
		}else echo "Seuls les fichiers pdf sont autorisés !";
	}
?>
<html>
 <head>
  <meta charset="utf-8">
  <title>----METTRE UN COMPTE RENDU EN LIGNE----</title>
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
				echo"Vous pouvez mettre votre compte rendu en ligne ".$_SESSION['pseudo']." ! <br/><a href='Deconnexion.php'> Se déconnecter</a>";
			}else header('Location:PageAcceuil.php');
			?>
		</span>
		<br>
		<br>
</p>

<form method="POST" action="upload.php" enctype="multipart/form-data">

<!-- NOM Equipe-->	
			<label for="nomEquipe">Nom de votre équipe</label><br>
			<input type="text" id="nomEquipe" name="nomEquipe" placeholder="  " required><br>
<!-- FICHIER-->	
			<label for="nomEquipe">votre compte rendu</label><br>
     Fichier : <input type="file" name="fichier" />
     <input type="submit" name="Envoyer le fichier" value="Envoyer le fichier">
</form>

</body>
</html>