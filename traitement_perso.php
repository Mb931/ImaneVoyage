<?php
// page de controle de saisie, et appel de fonction d'insertion dans la base

// recuperation des variables du formulaire de annuaire1.php par le tableau associatif $_POST
$nompro=$_POST["nom"];
$prenompro=$_POST["prenom"];
$motdepassepro=$_POST["motdepasse"];
// Vérification des champs nom et prenom (si il ne sont pas vides ?)
if( empty($nompro) || empty($prenompro) || empty($motdepassepro)  )  // le signe || signifie OU
{
	$message_erreur="ATTENTION : Les champs nom, prenom ou mot de passe  n'ont pas été remplis correctement, veuillez vérifier";
	// redirection vers la page vue erreur
	header("Location: vue_erreur_perso.php?erreur=$message_erreur");
	exit(); // interruption après redirection
	
}
else // $nom et $prenom sont corrects  
{
	include 'fonctions_insertion.php'; // fichier externe contenant les fonctions d'accès à la base de données

	$nb_lignes=verify_projet($nompro,$prenompro, $motdepassepro); // appel de fonction d'insertion (couche Modele)

	if($nb_lignes > 0) // on a inséré 1 ligne
	{
	
		header("Location: monespaceperso.php"); // page de confirmation
		exit(); // interruption de la fonction après redirection
	}
	else // il y a eu une erreur
	{
		$message_erreur="Vous n'avez pas été authentifier vérifier que votre nom, prenom ou motdepasse sont correct";
		// redirection vers la page vue erreur
		header("Location: vue_erreur_perso.php?erreur=$message_erreur");
	}		
	
	
} // fin si empty nom


?>
