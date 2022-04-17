<!DOCTYPE html>
<html>
	<head>
		<title>Demande de devis</title>
		<link rel="stylesheet" href='style_op.css' type="text/css"/>
	</head>
<body background= "imanevoyage.png">
			<form form method='POST' action='traitement_devis_avion.php' name='annuaire1' enctype='application/x-www-form-urlencoded'>
<table>	
				<tr>
					<td>Nom: </td>
					<td><input type='text' name='nom_avion' size='20'></td>
					<td>Prénom : </td>
					<td><input type='text' name='prenom_avion' size='20'></td>
				</tr>
				<tr>
					<td>Tél: </td>
					<td><input type='text' name='numtel_avion' size='20'></td>
					<td>E-mail : </td>
					<td><input type='text' name='email_avion' size='20'></td>
				</tr>
				<tr>
					<td>Lieu de départ: </td>
					<td><input type='text' name='lieu_depart_avion' size='20'></td>
					<td>Lieu d'arrivé : </td>
					<td><input type='text' name='lieu_retour_avion' size='20'></td>
				</tr>
					<tr>
					<td>Date de départ: </td>
					<td><input type='text' name='date_depart_avion' size='20' placeholder="AAAA/MM/JJ"></td>
					<td>Date de retour : </td>
					<td><input type='text' name='date_retour_avion' size='20' placeholder="AAAA/MM/JJ"></td>
				</tr>
				<th colspan="4">Nombre de Personnes</th>
		        <tr>
					<td>Noms</td>
					<td>Prénoms</td>
					<td colspan="2">Date de Naissance</td>
				</tr>
								<tr>
					<td><input type='text' name='nom_una' size='20'></td>
					<td><input type='text' name='prenom_una' size='20'></td>
					<td colspan="2"><input type='text' name='datenaiss_una' size='20'placeholder="AAAA/MM/JJ"></td>
				</tr>
				<tr>
					<td><input type='text' name='nom_deuxa' size='20'></td>
					<td><input type='text' name='prenom_deuxa' size='20'></td>
					<td colspan="2"><input type='text' name='datenaiss_deuxa' size='20'placeholder="AAAA/MM/JJ"></td>
				</tr>
				<tr>
					<td><input type='text' name='nom_troisa' size='20'></td>
					<td><input type='text' name='prenom_troisa' size='20'></td>
					<td colspan="2"><input type='text' name='datenaiss_troisa' size='20'placeholder="AAAA/MM/JJ"></td>
				</tr>
		        <tr>
					<td colspan="4"><input type='submit' value='Validez'></td>
		        </tr>
			</table>
	</form>
	</head>
	</body>
</html>