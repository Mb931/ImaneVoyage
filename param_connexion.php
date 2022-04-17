<?php
// paramètres de connexion, à changer en fonction du serveur et de la base utilisée
	$monserveur = "localhost";	// adresse du serveur sql que vous utilisez. ex : "sql.free.fr" ; "localhost" sur WAMP 
	$monlogin = "root";	// login de la base de données. "root" sur WAMP en local	
	$monpass = "";		// mot de passe de la base de données. vide sur WAMP en local
	$mabase="projet";	// nom de la base ;suivant ce que vous avez créé comme base dans WAMP)

// connexion au SGBD
	$lien_base= mysqli_connect($monserveur,$monlogin,$monpass,$mabase);
?>