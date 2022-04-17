<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"  "http://www.w3.org/TR/html4/loose.dtd">
<!-- ce DOCTYPE est nécessaire avec IE pour les marges automatiques -->
<html>
<head>
<title>Devis avion</title>
 <meta NAME="Author" CONTENT="Thierry Blavin">
 <meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8">
  <!-- appel feuille de style -->
 <link href="style_op.css" type="text/css" rel="stylesheet" media="all">
 </head>
<body background="imanevoyage.png">
 <h1>Devis avion</h1>
 <!-- en-tête du tableau -->
 <table>

 <?php
 include 'fonctions_insertion.php';
 $les_devis= array(); // création du tableau des adhérents (vide à ce stade)
 $les_devis = obtenir_devis_avion(); // appel de la fonction
 
$nb = count($les_devis); // nombre de lignes à afficher
$i=0;						// attention dans un tableau la numérotation commence à zéro
while ($i<$nb)
{
	$un_devis=$les_devis[$i];  // extraction d'une ligne du tableau "les_adherents"			
	$nom_avion=$un_devis["nom_avion"];
	$prenom_avion=$un_devis["prenom_avion"];
	$numtel_avion=$un_devis["numtel_avion"];
	$email_avion=$un_devis["email_avion"];
	$lieu_depart_avion=$un_devis["lieu_depart_avion"];
	$lieu_retour_avion=$un_devis["lieu_retour_avion"];
	$date_depart_avion=$un_devis["date_depart_avion"];
	$date_retour_avion=$un_devis["date_retour_avion"];
	$nom_una=$un_devis["nom_una"];
	$prenom_una=$un_devis["prenom_una"];
	$datenaiss_una=$un_devis["datenaiss_una"];
	$nom_deuxa=$un_devis["nom_deuxa"];
	$prenom_deuxa=$un_devis["prenom_deuxa"];
	$datenaiss_deuxa=$un_devis["datenaiss_deuxa"];
	$nom_troisa=$un_devis["nom_troisa"];
	$prenom_troisa=$un_devis["prenom_troisa"];
	$datenaiss_troisa=$un_devis["datenaiss_troisa"];

	
	echo " 	<tr>
					<td>Nom: </td>
					<td>$nom_avion</td>
					<td>Prénom : </td>
					<td>$prenom_avion</td>
				</tr>
				<tr>
					<td>Tél: </td>
					<td>$numtel_avion</td>
					<td>E-mail : </td>
					<td>$email_avion</td>
				</tr>
				<tr>
					<td>Lieu de départ: </td>
					<td>$lieu_depart_avion</td>
					<td>Lieu d'arrivé : </td>
					<td>$lieu_retour_avion</td>
				</tr>
					<tr>
					<td>Date de départ: </td>
					<td>$date_depart_avion</td>
					<td>Date de retour : </td>
					<td>$date_retour_avion</td>
				</tr>
				<th colspan='4'>Nombre de Personnes</th>
		        <tr>
					<td>Noms</td>
					<td>Prénoms</td>
					<td colspan='2'>Date de Naissance</td>
				</tr>
				<tr>
					<td>$nom_una</td>
					<td>$prenom_una</td>
					<td colspan='2'>$datenaiss_una</td>
				</tr>
				<tr>
					<td>$nom_deuxa</td>
					<td>$prenom_deuxa</td>
					<td colspan='2'>$datenaiss_deuxa</td>
				</tr>
				<tr>
					<td>$nom_troisa</td>
					<td>$prenom_troisa</td>
					<td colspan='2'>$datenaiss_troisa</td>
				</tr>
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