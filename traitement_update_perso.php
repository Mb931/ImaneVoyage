<?php
// page de controle de saisie, et appel de fonction d'insertion dans la base

// recuperation des variables du formulaire 
$email=$_POST["email"];
$nmotdepasse=$_POST["nmotdepasse"];
// Vérification des champs nom et prenom (si il ne sont pas vides ?)
if( empty($email) || empty($nmotdepasse)  )  // le signe || signifie OU
{
	$message_erreur="ATTENTION : Les n'ont pas été rempli correctement, veuillez vérifier";
	// redirection vers la page vue erreur
	header("Location: vue_erreur_perso.php?erreur=$message_erreur");
	exit(); // interruption après redirection
	
}
else // $nom et $prenom sont corrects  
{
	include 'fonctions_insertion.php'; // fichier externe contenant les fonctions d'accès à la base de données
	$nb_lignes=update_personnel($email,$nmotdepasse); // appel de fonction de modification (couche Modele)

	if($nb_lignes > 0) // on a inséré 1 ligne
	{
		header("Location:vue_confirmation_mdp_perso.php?nb=$nb_lignes"); // page de confirmation
		exit(); // interruption de la fonction après redirection
	}
	else // il y a eu une erreur
	{
		$message_erreur="Erreur lors de l'insertion des données";
		// redirection vers la page vue erreur
		header("Location: vue_erreur_perso.php?erreur=$message_erreur");
	}		
	
	
} // fin si empty nom


?>
