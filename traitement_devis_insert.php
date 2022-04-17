<?php
// page de controle de saisie, et appel de fonction d'insertion dans la base

// recuperation des variables du formulaire de annuaire1.php par le tableau associatif $_POST
$nom_bateau=$_POST["nom_bateau"];
$prenom_bateau=$_POST["prenom_bateau"];
$numtel_bateau=$_POST["numtel_bateau"];
$email_bateau=$_POST["email_bateau"];
$lieu_depart_bateau=$_POST["lieu_depart_bateau"];
$lieu_retour_bateau=$_POST["lieu_retour_bateau"];
$date_depart_bateau=$_POST["date_depart_bateau"];
$date_retour_bateau=$_POST["date_retour_bateau"];
$nom_un=$_POST["nom_un"];
$prenom_un=$_POST["prenom_un"];
$datenaiss_un=$_POST["datenaiss_un"];
$nom_deux=$_POST["nom_deux"];
$prenom_deux=$_POST["prenom_deux"];
$datenaiss_deux=$_POST["datenaiss_deux"];
$nom_trois=$_POST["nom_trois"];
$prenom_trois=$_POST["prenom_trois"];
$datenaiss_trois=$_POST["datenaiss_trois"];
$marque=$_POST["marque"];
$modele=$_POST["modele"];
$caravane=$_POST["caravane"];
$remorque=$_POST["remorque"];


// Vérification des champs nom et prenom (si il ne sont pas vides ?)
if( empty($nom_bateau) || empty($prenom_bateau) || empty($numtel_bateau)|| empty($email_bateau)|| empty($lieu_depart_bateau) || empty($lieu_retour_bateau)|| empty($date_depart_bateau)  || empty($date_retour_bateau) || empty($marque) || empty($modele)|| empty($caravane)|| empty($remorque))  // le signe || signifie OU
{
	$message_erreur="ATTENTION : Tout les champs n'ont pas été rempli correctement, veuillez vérifier";
	// redirection vers la page vue erreur
	header("Location: vue_erreur.php?erreur=$message_erreur");
	exit(); // interruption après redirection
}
else // $nom et $prenom sont corrects  
{
	include 'fonctions_insertion.php'; // fichier externe contenant les fonctions d'accès à la base de données
	
	$nb_lignes=insert_devis($nom_bateau, $prenom_bateau,$numtel_bateau,$email_bateau,$lieu_depart_bateau,$lieu_retour_bateau,$date_depart_bateau,$date_retour_bateau,$nom_un,$prenom_un,$datenaiss_un,$nom_deux,$prenom_deux,$datenaiss_deux,$nom_trois,$prenom_trois,$datenaiss_trois,$marque,$modele,$caravane,$remorque); // appel de fonction d'insertion (couche Modele)

	if($nb_lignes > 0) // on a inséré 1 ligne
	{
		header("Location:vue_comfirmation_devis.php?nb=$nb_lignes"); // page de confirmation
		exit(); // interruption de la fonction après redirection
	}
	else // il y a eu une erreur
	{
		$message_erreur="Erreur lors de l'insertion des données";
		// redirection vers la page vue erreur
		header("Location: vue_erreur.php?erreur=$message_erreur");
	}		
} // fin si empty nom
?>