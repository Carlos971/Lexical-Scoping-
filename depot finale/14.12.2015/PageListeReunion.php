<!DOCTYPE html>

<!-- APPEL DE LA PAGE OU IL Y A LA FONCTION -->
	<?php
		require_once('param.inc.php');
	?>
	
<html>
 <head>
  <meta charset="utf-8">
 	<title>----REUNION TABLE----</title>
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
				echo"Voici la liste des réunions ".$_SESSION['pseudo']." ! <br/><a href='Deconnexion.php'> Se déconnecter</a>";
			}else header('Location:PageAcceuil.php');
			?>
		</span>
		<br>
	</p>
	<br><br>
<?php	
		// On créé la requête
	$req = "SELECT * FROM reunion";
	 
	// on envoie la requête
	$res = $conn->query($req);
	 
	// on va scanner tous les tuples un par un
	echo "<table><tr> 
						<td class='td1'>ID</td>    <td class='td1'>NOM DE L'EQUIPE</td>   <td class='td1'>TOPIC</td>   <td class='td1'>DATE</td>    <td class='td1'>HEURE</td> 
				</tr>";
	while ($data = mysqli_fetch_array($res)) {
		
		// on affiche les résultats
		echo "	<tr>
					<td>".$data['ID']."</td><td>".$data['nomequipe']."</td><td>".$data['topic']."</td><td>".$data['date']."</td><td>".$data['heure']."</td>
				<tr>";
	}
	echo "</table>";
	mysqli_close($conn);
?>
<!-- "Tous droits réservés" centré et en gras -->
<br><br><br><br><br><br><br><br><br><br>
	<div class="centrage">Tous droits réservés </div>	
</body>
</html>

