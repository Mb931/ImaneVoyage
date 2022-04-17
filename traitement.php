<?php
// page de controle de saisie, et appel de fonction d'insertion dans la base

// recuperation des variables du formulaire de annuaire1.php par le tableau associatif $_POST
$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$login=$_POST["login"];
$motdepasse=$_POST["motdepasse"];
$rmotdepasse=$_POST["rmotdepasse"];
$email=$_POST["email"];
// Vérification des champs nom et prenom (si il ne sont pas vides ?)
if( empty($nom) || empty($prenom) || empty($login)  || empty($motdepasse) || empty($rmotdepasse) || empty($email))  // le signe || signifie OU
{
	$message_erreur="ATTENTION : Tout les champs n'ont pas été rempli correctement, veuillez vérifier";
	// redirection vers la page vue erreur
	header("Location: vue_erreur.php?erreur=$message_erreur");
	exit(); // interruption après redirection
}
else // $nom et $prenom sont corrects  
{
	include 'fonctions_insertion.php'; // fichier externe contenant les fonctions d'accès à la base de données
	
	$nb_lignes=insert_membres($nom, $prenom,$login,$motdepasse,$rmotdepasse,$email); // appel de fonction d'insertion (couche Modele)

	if($nb_lignes > 0) // on a inséré 1 ligne
	{
		header("Location:vue_confirmation.php?nb=$nb_lignes"); // page de confirmation
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