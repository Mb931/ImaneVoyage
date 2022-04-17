<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"  "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<title>Mon annuaire en PHP</title>
		<meta NAME="Author" CONTENT="Thierry Blavin">
		<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1">
		<!-- appel feuille de style -->
		<link href="style_op.css" type="text/css" rel="stylesheet" media="all">
	</head>
	<body background= "albumphoto.jpg">
		<h1>Mon espace membre</h1>
				<form form method='POST' action='traitement_connexion.php' name='annuaire1' enctype='application/x-www-form-urlencoded'>
			<table>	
				<tr>
					<td>Login : </td>
					<td><input type='text' name='login' size='20' placeholder='Votre login'></td>
				</tr>
				<tr>
					<td>Mot de passe : </td>
					<td><input type='password' name='motdepasse' size='20' placeholder='Votre mot de passe'></td>
				</tr>
				<tr>
					<td colspan="2"><input type='submit' value='Connexion'></td>
				</tr>
				<tr>
					<td colspan="2"><a href='formulaire_membres.php'>*Créer un compte</a><br>
					<a href='changer_mdp.php'>*Mot de passe oublié</td>
				</tr>
			</table>
		</form>
	</head>
	</body>
</html>