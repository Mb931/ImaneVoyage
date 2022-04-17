<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"  "http://www.w3.org/TR/html4/loose.dtd">
<!-- ce DOCTYPE est nécessaire avec IE pour les marges automatiques -->
<html>
	<head>
		<title>Confirmation inscription</title>
		<meta NAME="Author" CONTENT="Thierry Blavin">
		<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1">
		<!-- appel feuille de style -->
		<link href="style_op.css" type="text/css" rel="stylesheet" media="all">
	</head>
	<body>
		<!-- ci-dessous traitement du retour d'information après insertion -->
		<?php
		// récupération du nombre de lignes traitées - dans le cas où on est après une insertion
		// récupère la valeur transmise dans $url
			echo "<p class='resultat'>Supression de compte éffectuer avec succès</p>";
		?>
		 <!-- Lien pour retourner à la page initiale -->
		 <br><a href="menu.php">Retour accueil</a>
	</body>
</html>
