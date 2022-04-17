<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"  "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<title>Mon annuaire en PHP</title>
		<meta NAME="Author" CONTENT="Thierry Blavin">
		<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1">
		<!-- appel feuille de style -->
		<link href="style_op.css" type="text/css" rel="stylesheet" media="all">
	</head>
	<body background= "programmation.jpg">
		<h1>Modifier le mot de passe</h1>
				<form form method='POST' action='traitement_modifier_mdp.php' name='annuaire1' enctype='application/x-www-form-urlencoded'>
			<table>	
				<tr>
					<td>Votre email : </td>
					<td><input type='text' name='email' size='20'></td>
				</tr>
				<tr>
					<td>Nouveau mot de passe : </td>
					<td><input type='password' name='nmotdepasse' size='20'></td>
				</tr>
				<tr>
					<td colspan="2"><input type='submit' value='Modifier'></td>
				</tr>
			</table>
			
		</form>
	</head>
	</body>
</html>