<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"  "http://www.w3.org/TR/html4/loose.dtd">
<!-- ce DOCTYPE est nécessaire avec IE pour les marges automatiques -->
<html>
<head>
<title>Mediatheque</title>
 <meta NAME="Author" CONTENT="Thierry Blavin">
 <meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8">
  <!-- appel feuille de style -->
 <link href="style_op.css" type="text/css" rel="stylesheet" media="all">
 </head>
 <body>
 <h1>Recherche de membre</h1>
 <!-- en-tête du tableau -->
 <table>
 <tr>
 <th>Nom</th>
 <th>Prénom</th>
 <th>Login</th>
 <th>motdepasse</th>
 <th>email</th>
 </tr>
 <?php
 $toto=$_POST["nom"];

 
 include 'fonctions_insertion.php';
 $les_adherents = array(); // création du tableau des adhérents (vide à ce stade)
 $les_adherents = obtenir_recherche_par_nom($toto); // appel de la fonction
 
$nb = count($les_adherents); // nombre de lignes à afficher
if($nb==0)
{
	echo "</table>";
	echo "<p>Aucun membre trouvé</p>";
	die(); // arret
}
else  // $nb > 0 donc on a trouvé au moins 1
{
	$i=0;						// attention dans un tableau la numérotation commence à zéro
	while ($i<$nb)
	{
		$un_adherent=$les_adherents[$i];  // extraction d'une ligne du tableau "les_adherents"
		$nom=$un_adherent['nom'];			// extraction des champs de la ligne
		$prenom=$un_adherent['prenom'];
		$login=$un_adherent['login'];
		$motdepasse=$un_adherent['motdepasse'];
		$email=$un_adherent['email'];
		echo "<tr><td>$nom</a></td><td>$prenom</td><td>$login</td><td>$motdepasse</td><td>$email</td>< </tr>";
		$i=$i+1;
	} // fin boucle while


} // fin if... else...
 ?>
 </table>
 <ul>
	<li><a href='index.php'>retour accueil</a></li>
</ul>
 </body>
</html>