<!DOCTYPE html>
<!-- APPEL DE LA PAGE OU IL Y A LA FONCTION -->
	<?php
		require_once('param.inc.php');
		session_start();
	?>
<!-- code pour uploder -->
<?php 
$nomEquipe =$_SESSION['nomEquipe'];
	
	if(!empty($_FILES)){
		$file_name = $_FILES['fichier']['name'];
		$file_extension = strrchr($file_name,".");
		
		$file_tmp_name = $_FILES['fichier']['tmp_name'];
		$file_dest ='files/'.$file_name;
		
		$extensions_autorisees= array('.pdf','.PDF');
		if(in_array($file_extension, $extensions_autorisees)){
			if(move_uploaded_file($file_tmp_name, $file_dest)){
			
				//On insert les valeurs entrées
					$sql = 'INSERT INTO files VALUES("","'.$file_name.'","'.$file_dest.'","'.$nomEquipe.'")';
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
				echo"Vous pouvez mettre votre compte rendu en ligne ".$_SESSION['pseudo']." ! ";
			}else header('Location:PageAcceuil.php');
			?>
		</span>
		<br>
		<br>
</p>	<a href="<?php echo $_SERVER["HTTP_REFERER"]; ?>">RETOUR</a> 
<br><br><br><br>

<form method="POST" action="upload.php" enctype="multipart/form-data">
<!-- FICHIER-->	
<fieldset class = "fieldset2"><legend>CHOIX DU FICHIER</legend>
<br> ATTENTION ! Donnez à votre fichier un nom composé de lettres non accentuées !<br><br>	
     Fichier : <input type="file" name="fichier" /><br><br>
     <input type="submit" name="Envoyer le fichier" value="Envoyer le fichier">
<br>
</fieldset>
</form>

</body>
</html>