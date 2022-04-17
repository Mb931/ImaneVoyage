<!DOCTYPE html>
<?php
$modele=0;
if(isset($_GET["modele"])){
	$modele=$_GET["modele"];
}
 ?>
<html>
	<head>
		<title>Demande de devis</title>
		<link rel="stylesheet" href='style_op.css' type="text/css"/>
	</head>
<h1>Demande de devis</h1>
<body background= "imanevoyage.png">
			<form form method='POST' action='traitement_devis.php' name='annuaire1' enctype='application/x-www-form-urlencoded'>
			<table>	
				<tr>
				<td>
					<select name="modele">
						<option  selected="selected" value='1'>Devis avion</option>
						<option  value='2'>Devis bateau</option>
					</select>
				</td>
				<td colspan="2"><input type='submit' value='Ouvrir'></td>
				</tr>
			</table>
		</form>
	</body>
</html>
<?php
			
	switch ($modele) {
    case 1:
       include 'devis_avion.php';
		break;
    case 2:
         include 'devis_bateau.php';
		break;
		
		
}
?>
 <ul>