<?php
// page de controle de saisie, et appel de fonction d'insertion dans la base

// recuperation des variables du formulaire de annuaire1.php par le tableau associatif $_POST
$nom_avion=$_POST["nom_avion"];
$prenom_avion=$_POST["prenom_avion"];
$numtel_avion=$_POST["numtel_avion"];
$email_avion=$_POST["email_avion"];
$lieu_depart_avion=$_POST["lieu_depart_avion"];
$lieu_retour_avion=$_POST["lieu_retour_avion"];
$date_depart_avion=$_POST["date_depart_avion"];
$date_retour_avion=$_POST["date_retour_avion"];
$nom_una=$_POST["nom_una"];
$prenom_una=$_POST["prenom_una"];
$datenaiss_una=$_POST["datenaiss_una"];
$nom_deuxa=$_POST["nom_deuxa"];
$prenom_deuxa=$_POST["prenom_deuxa"];
$datenaiss_deuxa=$_POST["datenaiss_deuxa"];
$nom_troisa=$_POST["nom_troisa"];
$prenom_troisa=$_POST["prenom_troisa"];
$datenaiss_troisa=$_POST["datenaiss_troisa"];

// Vérification des champs nom et prenom (si il ne sont pas vides ?)
if( empty($nom_avion) || empty($prenom_avion) || empty($numtel_avion)|| empty($email_avion)|| empty($lieu_depart_avion) || empty($lieu_retour_avion)|| empty($date_depart_avion)  || empty($date_retour_avion))  // le signe || signifie OU
{
	$message_erreur="ATTENTION : Tout les champs n'ont pas été rempli correctement, veuillez vérifier";
	// redirection vers la page vue erreur
	header("Location: vue_erreur.php?erreur=$message_erreur");
	exit(); // interruption après redirection
}
else // $nom et $prenom sont corrects  
{
	include 'fonctions_insertion.php'; // fichier externe contenant les fonctions d'accès à la base de données
	
	$nb_lignes=insert_devis_avion($nom_avion, $prenom_avion,$numtel_avion,$email_avion,$lieu_depart_avion,$lieu_retour_avion,$date_depart_avion,$date_retour_avion,$nom_una,$prenom_una,$datenaiss_una,$nom_deuxa,$prenom_deuxa,$datenaiss_deuxa,$nom_troisa,$prenom_troisa,$datenaiss_troisa); // appel de fonction d'insertion (couche Modele)

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