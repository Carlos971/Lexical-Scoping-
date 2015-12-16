<!DOCTYPE html>

<!-- APPEL DE LA PAGE OU IL Y A LA FONCTION -->
	<?php
		require_once('param.inc.php');
	?>
	
<html>
 <head>
  <meta charset="utf-8">
 	<title>----MEMBRE TABLE----</title>
	<link rel="stylesheet" href="stylePageAccueil.css">
 </head>
 <body>
 <!-- BANNIERE STRUCTURE -->
  <header> </header>
 
 <!-- BANDE BLEUE -->
	<p class ="p1">
		<img src="kaggle.jpg" alt="logo"> 
		<span class="marge3">LISTE DES EQUIPES</span>
		<br>
	</p>
	<br><a href="<?php echo $_SERVER["HTTP_REFERER"]; ?>">RETOUR</a>
	<br><br>
<?php	
		// On créé la requête
	$req = "SELECT * FROM equipe";
	 
	// on envoie la requête
	$res = $conn->query($req);
	 
	// PREMIERE LIGNE TABLEAU
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

