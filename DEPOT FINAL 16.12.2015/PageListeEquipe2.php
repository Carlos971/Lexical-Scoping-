<!DOCTYPE html>

<!-- APPEL DE LA PAGE OU IL Y A LA FONCTION -->
	<?php
		require_once('param.inc.php');
		session_start();
	?>
	
<html>
 <head>
  <meta charset="utf-8">
 	<title>----MEMBRE TABLE----</title>
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
				echo"Voici la liste des équipes ".$_SESSION['pseudo']." ! ";
			}else header('Location:PageAcceuil.php');
			?>
		</span>
		<br>
	</p><br><a href="<?php echo $_SERVER["HTTP_REFERER"]; ?>">RETOUR</a>
	<br><br>
<?php	
		// On créé la requête
	$req = "SELECT * FROM equipe";
	 
	// on envoie la requête
	$res = $conn->query($req);
	 
	// on va scanner tous les tuples un par un
	echo "<table><tr> 
						<td class='td1'>ID</td>    <td class='td1'>NOM DE L'EQUIPE</td>   <td class='td1'>NOM DU CHEF D'EQUIPE</td>   <td class='td1'>PRENOM DU CHEF D'EQUIPE</td> 
				</tr>";
	while ($data = mysqli_fetch_array($res)) {
		
		// on affiche les résultats
		echo "	<tr>
					<td>".$data['ID']."</td><td>".$data['nomEquipe']."</td><td>".$data['nomChefEquipe']."</td><td>".$data['prenomChefEquipe']."</td>
				<tr>";
	}
	echo "</table>";
	mysqli_close($conn);
	
	
?>
<br><br><br><br><br><br><br><br><br><br><br>
<!-- "Tous droits réservés" centré et en gras -->

	<div class="centrage">Tous droits réservés </div>	
</body>
</html>

