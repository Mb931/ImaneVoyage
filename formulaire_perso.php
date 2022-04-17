<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"  "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<title>Inscription espace personnel:</title>
		<meta NAME="Author" CONTENT="Thierry Blavin">
		<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1">
		<!-- appel feuille de style -->
		<link href="style_op.css" type="text/css" rel="stylesheet" media="all">
	</head>
	<body background="imanevoyage.png">
		<h1>Inscription espace personnel: </h1>
		<form method='POST' action='traitemen_insertion_persot.php' name='annuaire' enctype='application/x-www-form-urlencoded'>
			<table>	
				<tr>
					<td>Nom: </td>
					<td><input type='text' name='nom' size='20' placeholder='Votre nom'></td>
				</tr>
				<tr>
					<td>Prénom : </td>
					<td><input type='text' name='prenom' size='20' placeholder='Votre prénom'></td>
				</tr>
				<tr>
					<td>Mot de passe : </td>
					<td><input type='password' name='motdepasse' size='20' placeholder='Saisir votre mot de passe'></td>
				</tr>
				<tr>
					<td>Ressaisir votre de passe : </td>
					<td><input type='password' name='rmotdepasse' size='20' placeholder='Confirmer votre mot de passe'></td>
				</tr>
				<tr>
					<td>E-mail : </td>
					<td><input type='text' name='email' size='20' placeholder='Votre adresse mail'></td>
				</tr>
				<tr>
					<td colspan="2"><input type='submit' value='Ajouter utilisateur'></td>
				</tr>
			</table>
		</form>
		<div>
</div>
	</body>
</html>