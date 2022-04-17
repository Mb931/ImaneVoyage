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
 <body background= "imanevoyage.png">
 <h1>Nos adhérents</h1>
 <!-- en-tête du tableau -->
 <table>
 <tr>
 <th>ID</th>
 <th>Nom</th>
 <th>Prénom</th>
 <th>Login</th>
 <th>Date de Naissance</th>
 <th>Email</th>
 <th>Num de telephone</th>
 <th>Adresse</th>
 <th>Code postal</th>
 <th>Ville</th>
 </tr>
 <?php
 include 'fonctions_insertion.php';
 $les_adherents = array(); // création du tableau des adhérents (vide à ce stade)
 $les_adherents =  obtenir_liste_des_adherents(); // appel de la fonction
 
$nb = count($les_adherents); // nombre de lignes à afficher
$i=0;						// attention dans un tableau la numérotation commence à zéro
//while ($i<$nb)
//{
	//$un_adherent=$les_adherents[$i];  // extraction d'une ligne du tableau "les_adherents"
	// $id=$un_adherent['id'];
	// $nom=$un_adherent['nom'];
	// $prenom=$un_adherent['prenom'];
	// $datenaiss=$un_adherent['datenaiss'];
	// $login=$un_adherent['login'];
	// $motdepasse=$un_adherent['motdepasse'];
	// $rmotdepasse=$un_adherent['rmotdepasse'];
	// $email=$un_adherent['email'];
	// $numtel=$un_adherent['numtel'];
	// $adresse=$un_adherent['adresse'];
	// $codepostal=$un_adherent['codepostal'];
	// $ville=$un_adherent['ville'];
	//echo "<tr><td>$id</a></td><td>$nom</td><td>$prenom</td><td>$login</td><td>$datenaiss</td><td>$email</td><td>$numtel</td><td>$adresse</td><td>$codepostal</td><td>$ville</td>	</tr>";
	//$i=$i+1;
//} // fin boucle
 ?>
 </table>
 <ul>
	<li><a href='monespaceperso.php'>retour accueil</a></li>
</ul>
 </body>
</html>