<?php

// page contenant les différentes fonctions d'accès à la base
//_______________________________________________________________
function insert_authentification($nom, $prenom,$authentification_motdepasse,$email) // insere un nouveau membre  dans la table membres
{
	include 'param_connexion.php'; // fichier externe car la connexion est utilisée dans différentes pages
	$nb_lignes=0; // initialisation de la variable à zéro
	
	// Requete d'insertion MYSQL. 
	$requete= "INSERT INTO authentification (nom,prenom,authentification_motdepasse,email) VALUES ('$nom','$prenom','$authentification_motdepasse','$email');";
	
	// tentative d'execution de la requete INSERT dans la base
	$reponse_serveur=mysqli_query($lien_base, "$requete");
	if($reponse_serveur==false) // si false : impossible d'exécuter la requête INSERT
	{	
		$message_erreur="Impossible d'executer la requete: $requete " . mysqli_error($lien_base);
		echo $message_erreur;
		die();
		header("Location:vue_erreur.php?erreur=$message_erreur"); // page d'affichage d'erreur
		exit(); // interruption de la fonction après redirection
	}
	else // insert réussi
	{
		$nb_lignes=mysqli_affected_rows($lien_base); // compte le nombre de lignes affectées (normalement 1 ligne insérée)

	}

	return $nb_lignes ; // renvoie le nb de lignes insérées : normalement 1


 } // fin fonction insert_membre
//_______________________________________________________________
function insert_membres($nom, $prenom,$login,$motdepasse,$rmotdepasse,$email) // insere un nouveau membre  dans la table membres
{
	include 'param_connexion.php'; // fichier externe car la connexion est utilisée dans différentes pages
	$nb_lignes=0; // initialisation de la variable à zéro
	
	// Requete d'insertion MYSQL. 
	$requete= "INSERT INTO membres (nom,prenom,login,motdepasse,rmotdepasse,email) VALUES ('$nom','$prenom','$login','$motdepasse','$rmotdepasse','$email');";
	
	// tentative d'execution de la requete INSERT dans la base
	$reponse_serveur=mysqli_query($lien_base, "$requete");
	if($reponse_serveur==false) // si false : impossible d'exécuter la requête INSERT
	{	
		$message_erreur="Impossible d'executer la requete: $requete " . mysqli_error($lien_base);
		echo $message_erreur;
		die();
		header("Location:vue_erreur.php?erreur=$message_erreur"); // page d'affichage d'erreur
		exit(); // interruption de la fonction après redirection
	}
	else // insert réussi
	{
		$nb_lignes=mysqli_affected_rows($lien_base); // compte le nombre de lignes affectées (normalement 1 ligne insérée)

	}

	return $nb_lignes ; // renvoie le nb de lignes insérées : normalement 1


 } // fin fonction insert_membre
 //_______________________________________________________________
 
 
  //_______________________________________________________________
 function obtenir_liste_des_adherents() // fonction qui renvoie un tableau de tous les adherents
 {
	require 'param_connexion.php'; // pour connexion au SGBD
	
	$les_adherents = array(); // création du tableau
	$requete="select * from membres";
	$resultat_sql = mysqli_query($lien_base, "$requete");
	if($resultat_sql == false) // si impossible d'exécuter la requête SELECT
	{	
		die("Impossible d'executer la requete: $requete " . mysqli_error());
	}
	else // SELECT réussi
	{
		$nb_lignes=mysqli_affected_rows($lien_base); // compte le nombre de lignes du SELECT
		$i=1; // compteur
		while($i<=$nb_lignes)
		{
			// ajout des résultats du select
			$les_adherents[] = mysqli_fetch_array($resultat_sql); 
			$i=$i+1; // incrémentation
		}
		
	}

	return $les_adherents;// le tableau sera vide en cas d'erreur
}// fin fonction()

//_________________________________________________________________
 function obtenir_recherche_par_nom($toto) // fonction qui renvoie un tableau de tous les adherents
 {
	require 'param_connexion.php'; // pour connexion au SGBD
	
	$les_adherents = array(); // création du tableau
	$requete="select * from membres where nom='$toto'";
	$resultat_sql = mysqli_query($lien_base, "$requete");
	if($resultat_sql == false) // si impossible d'exécuter la requête SELECT
	{	
		die("Impossible d'executer la requete: $requete " . mysqli_error());
	}
	else // SELECT réussi
	{
		$nb_lignes=mysqli_affected_rows($lien_base); // compte le nombre de lignes du SELECT
		$i=1; // compteur
		while($i<=$nb_lignes)
		{
			// ajout des résultats du select
			$les_adherents[] = mysqli_fetch_array($resultat_sql); 
			$i=$i+1; // incrémentation
		}
		
	}

	return $les_adherents;// le tableau sera vide en cas d'erreur
}// fin fonction()
  //_______________________________________________________________
 function verify_membres($loginco, $motdepasseco) // fonction qui renvoie un tableau de tous les adherents
 {
	require 'param_connexion.php'; // pour connexion au SGBD
	
	$requete="select * from membres where login='$loginco' AND motdepasse='$motdepasseco'";
	echo "$requete";
	$resultat_sql = mysqli_query($lien_base, "$requete");
	if($resultat_sql == false) // si impossible d'exécuter la requête SELECT
	{	
		die("Impossible de vous connecter" . mysqli_error());
	}
	else // SELECT réussi
	{
		$nb_lignes=mysqli_affected_rows($lien_base); // compte le nombre de lignes du SELECT
	}

	return $nb_lignes;
}// fin fonction()
 //_______________________________________________________________
 function update_membre($email,$nmotdepasse) // insere un nouveau membre  dans la table membres
{
	include 'param_connexion.php'; // fichier externe car la connexion est utilisée dans différentes pages
	$nb_lignes=0; // initialisation de la variable à zéro
	
	// Requete d'update MYSQL. 
	$requete= "UPDATE membres SET motdepasse='$nmotdepasse', rmotdepasse='$nmotdepasse' WHERE email='$email'";
	
	// tentative d'execution de la requete INSERT dans la base
	$reponse_serveur=mysqli_query($lien_base, "$requete");
	if($reponse_serveur==false) // si false : impossible d'exécuter la requête INSERT
	{	
		$message_erreur="Impossible d'executer la requete: $requete " . mysqli_error($lien_base);
		echo $message_erreur;
		die();
		header("Location:vue_erreur.php?erreur=$message_erreur"); // page d'affichage d'erreur
		exit(); // interruption de la fonction après redirection
	}
	else // insert réussi
	{
		$nb_lignes=mysqli_affected_rows($lien_base); // compte le nombre de lignes affectées (normalement 1 ligne insérée)

	}

	return $nb_lignes ; // renvoie le nb de lignes insérées : normalement 1


 } // fin fonction update_membre
//_______________________________________________________________
 function update_authentification($email,$nmotdepasse) // insere un nouveau membre  dans la table membres
{
	include 'param_connexion.php'; // fichier externe car la connexion est utilisée dans différentes pages
	$nb_lignes=0; // initialisation de la variable à zéro
	
	// Requete d'update MYSQL. 
	$requete= "UPDATE authentification SET authentification_motdepasse='$nmotdepasse' WHERE email='$email'";
	
	// tentative d'execution de la requete INSERT dans la base
	$reponse_serveur=mysqli_query($lien_base, "$requete");
	if($reponse_serveur==false) // si false : impossible d'exécuter la requête INSERT
	{	
		$message_erreur="Impossible d'executer la requete: $requete " . mysqli_error($lien_base);
		echo $message_erreur;
		die();
		header("Location:vue_erreur.php?erreur=$message_erreur"); // page d'affichage d'erreur
		exit(); // interruption de la fonction après redirection
	}
	else // insert réussi
	{
		$nb_lignes=mysqli_affected_rows($lien_base); // compte le nombre de lignes affectées (normalement 1 ligne insérée)

	}

	return $nb_lignes ; // renvoie le nb de lignes insérées : normalement 1


 } // fin fonction update_membre
  //_______________________________________________________________
 function verify_projet($nompro,$prenompro, $motdepassepro) // fonction qui renvoie un tableau de tous les adherents
 {
	require 'param_connexion.php'; // pour connexion au SGBD
	
	$requete="select * from authentification where nom='$nompro' AND prenom='$prenompro' AND authentification_motdepasse='$motdepassepro'";
	echo "$requete";
	$resultat_sql = mysqli_query($lien_base, "$requete");
	if($resultat_sql == false) // si impossible d'exécuter la requête SELECT
	{	
		die("Impossible de vous connecter" . mysqli_error());
	}
	else // SELECT réussi
	{
		$nb_lignes=mysqli_affected_rows($lien_base); // compte le nombre de lignes du SELECT
	}

	return $nb_lignes;
}// fin fonction()
   ?>