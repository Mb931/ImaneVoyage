<!DOCTYPE html>
<html>
	<head>
		<title>Demande de devis</title>
		<link rel="stylesheet" href='style_op.css' type="text/css"/>
	</head>
<body background= "imanevoyage.png">
			<form form method='POST' action='traitement_devis_insert.php' name='annuaire1' enctype='application/x-www-form-urlencoded'>
<table>	
				<tr>
					<td>Nom: </td>
					<td><input type='text' name='nom_bateau' size='20'></td>
					<td>Prénom : </td>
					<td><input type='text' name='prenom_bateau' size='20'></td>
				</tr>
				<tr>
					<td>Tél: </td>
					<td><input type='text' name='numtel_bateau' size='20'></td>
					<td>E-mail : </td>
					<td><input type='text' name='email_bateau' size='20'></td>
				</tr>
				<tr>
					<td>Lieu de départ: </td>
					<td><input type='text' name='lieu_depart_bateau' size='20' ></td>
					<td>Lieu d'arrivé : </td>
					<td><input type='text' name='lieu_retour_bateau' size='20' ></td>
				</tr>
					<tr>
					<td>Date de départ: </td>
					<td><input type='text' name='date_depart_bateau' size='20' placeholder="AAAA/MM/JJ"></td>
					<td>Date de retour : </td>
					<td><input type='text' name='date_retour_bateau' size='20' placeholder="AAAA/MM/JJ"></td>
				</tr>
				<th colspan="4">Nombre de Personnes</th>
		        <tr>
					<td>Noms</td>
					<td>Prénoms</td>
					<td colspan="2">Date de Naissance</td>
				</tr>
				<tr>
					<td><input type='text' name='nom_un' size='20'></td>
					<td><input type='text' name='prenom_un' size='20'></td>
					<td colspan="2"><input type='text' name='datenaiss_un' size='20'placeholder="AAAA/MM/JJ"></td>
				</tr>
				<tr>
					<td><input type='text' name='nom_deux' size='20'></td>
					<td><input type='text' name='prenom_deux' size='20'></td>
					<td colspan="2"><input type='text' name='datenaiss_deux' size='20'placeholder="AAAA/MM/JJ"></td>
				</tr>
				<tr>
					<td><input type='text' name='nom_trois' size='20'></td>
					<td><input type='text' name='prenom_trois' size='20'></td>
					<td colspan="2"><input type='text' name='datenaiss_trois' size='20'placeholder="AAAA/MM/JJ"></td>
				</tr>
				</tr>
				<th colspan="4">Voiture</th>
				<tr>
					<td>Marque: </td>
					<td><input type='text' name='marque' size='20'></td>
					<td>Modèle : </td>
					<td><input type='text' name='modele' size='20'></td>
				</tr>
				<tr>
					<td>Caravane: </td>
					<td><input type='text' name='caravane' size='20'></td>
					<td>Remorque : </td>
					<td><input type='text' name='remorque' size='20'></td>
				</tr>
				<tr>
					<td colspan="4"><input type='submit' value='Validez'></td>
		        </tr>
			</table>
	</form>
	</head>
	</body>
</html>