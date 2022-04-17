!<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"  "http://www.w3.org/TR/html4/loose.dtd">
<!-- ce DOCTYPE est nécessaire avec IE pour les marges automatiques -->
<html>
	<head>
		<title>Erreur</title>
		<meta NAME="Author" CONTENT="Thierry Blavin">
		<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1">
		<!-- appel feuille de style -->
		<link href="style_erreur.css" type="text/css" rel="stylesheet" media="all">
	</head>
	<body>
		<?php
			$erreur=$_GET["erreur"];
			echo "<p class='erreur'>$erreur</p>";
		?>
		 
		<!-- Lien pour retourner à la page initiale -->
		<a href="monespace.php">Retour accueil</a>
	</body>
</html>