<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"  "http://www.w3.org/TR/html4/loose.dtd">
<!-- ce DOCTYPE est nécessaire avec IE pour les marges automatiques -->
<html>
<head>
<title>Devis bateau</title>
 <meta NAME="Author" CONTENT="Thierry Blavin">
 <meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8">
  <!-- appel feuille de style -->
 <link href="style_op.css" type="text/css" rel="stylesheet" media="all">
 </head>
<body background="imanevoyage.png">
 <h1>Devis bateau</h1>
 <!-- en-tête du tableau -->
 <table>

 <?php
 include 'fonctions_insertion.php';
 $les_devis= array(); // création du tableau des adhérents (vide à ce stade)
 $les_devis =obtenir_devis(); // appel de la fonction
 
$nb = count($les_devis); // nombre de lignes à afficher
$i=0;						// attention dans un tableau la numérotation commence à zéro
while ($i<$nb)
{
	$un_devis=$les_devis[$i];  // extraction d'une ligne du tableau "les_adherents"			
	$nom_bateau=$un_devis["nom_bateau"];
	$prenom_bateau=$un_devis["prenom_bateau"];
	$numtel_bateau=$un_devis["numtel_bateau"];
	$email_bateau=$un_devis["email_bateau"];
	$lieu_depart_bateau=$un_devis["lieu_depart_bateau"];
	$lieu_retour_bateau=$un_devis["lieu_retour_bateau"];
	$date_depart_bateau=$un_devis["date_depart_bateau"];
	$date_retour_bateau=$un_devis["date_retour_bateau"];
	$nom_un=$un_devis["nom_un"];
	$prenom_un=$un_devis["prenom_un"];
	$datenaiss_un=$un_devis["datenaiss_un"];
	$nom_deux=$un_devis["nom_deux"];
	$prenom_deux=$un_devis["prenom_deux"];
	$datenaiss_deux=$un_devis["datenaiss_deux"];
	$nom_trois=$un_devis["nom_trois"];
	$prenom_trois=$un_devis["prenom_trois"];
	$datenaiss_trois=$un_devis["datenaiss_trois"];
	$marque=$un_devis["marque"];
	$modele=$un_devis["modele"];
	$caravane=$un_devis["caravane"];
	$remorque=$un_devis["remorque"];

	
	echo " 	<tr>
					<td>Nom: </td>
					<td>$nom_bateau</td>
					<td>Prénom : </td>
					<td>$prenom_bateau</td>
				</tr>
				<tr>
					<td>Tél: </td>
					<td>$numtel_bateau</td>
					<td>E-mail : </td>
					<td>$email_bateau</td>
				</tr>
				<tr>
					<td>Lieu de départ: </td>
					<td>$lieu_depart_bateau</td>
					<td>Lieu d'arrivé : </td>
					<td>$lieu_retour_bateau</td>
				</tr>
					<tr>
					<td>Date de départ: </td>
					<td>$date_depart_bateau</td>
					<td>Date de retour : </td>
					<td>$date_retour_bateau</td>
				</tr>
				<th colspan='4'>Nombre de Personnes</th>
		        <tr>
					<td>Noms</td>
					<td>Prénoms</td>
					<td colspan='2'>Date de Naissance</td>
				</tr>
				<tr>
					<td>$nom_un</td>
					<td>$prenom_un</td>
					<td colspan='2'>$datenaiss_un</td>
				</tr>
				<tr>
					<td>$nom_deux</td>
					<td>$prenom_deux</td>
					<td colspan='2'>$datenaiss_deux</td>
				</tr>
				<tr>
					<td>$nom_trois</td>
					<td>$prenom_trois</td>
					<td colspan='2'>$datenaiss_trois</td>
				</tr>
				</tr>
				<th colspan='4'>Voiture</th>
				<tr>
					<td>Marque: </td>
					<td>$marque</td>
					<td>Modèle : </td>
					<td>$modele</td>
				</tr>
				<tr>
					<td>Caravane: </td>
					<td>$caravane</td>
					<td>Remorque : </td>
					<td>$remorque</td>
				</tr>
				<tr>
				<td rowspan='2' colspan='4'><font size='+2' color='red'>Devis suivant</font></td>
				</tr>
				</tr>
				<tr>				
				</tr>
				
				";
	$i=$i+1;
} // fin boucle
 ?>
 </table>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <ul>
 <?php
echo "<li><a href='monespaceperso.php'>Retour accueil</a></li>";
 ?>
</ul>
 </body>
</html>