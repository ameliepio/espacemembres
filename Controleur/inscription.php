<?php

include('../Model/connexion_sql.php');
include('../Model/model.php');


//insertion des champs du formulaire dans la base de donnée

if(isset($_POST['inscription'])){

InsertMembres($_POST['pseudo'],$_POST['pass'],$_POST['email']);

}


// reception des données du formulaire de connexion
// vérification si le pseudonyme et déja présent dans la bbd.
// verification si les 2 mot de passe sont identiques

    if (!$resultat){
        echo 'Mauvais identifiant ou mot de passe !';
    }
    else
    {
      session_start();

      $_SESSION['id'] = $resultat['id'];

      $_SESSION['pseudo'] = $pseudo;

      echo 'Vous êtes connecté !';
}
//les cookies

// setcookie('pseudo', time() + 365*24*3600, null, null, false, true);
//
// $_COOKIE['pseudo'];
// verification adresse mail avec REGEX

if (isset($_POST['email'])){

    $_POST['email'] = htmlspecialchars($_POST['email']); // On rend inoffensives les balises HTML que le visiteur a pu rentrer

    if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['email']))

    {
        echo 'L\'adresse ' . $_POST['email'] . ' est <strong>valide</strong> !';
    }

    else

    {
        echo 'L\'adresse ' . $_POST['email'] . ' n\'est pas valide, recommencez !';
    }
}

// Hachage du mot de passe

// $pass_hache = sha512($_POST['pass']);
//
//  Ajout d'un prefixe pour plus de securite
// $pass_hache = sha512('gz'.$_POST['pass']);
//
//
if (isset($_SESSION['id']) AND isset($_SESSION['pseudo']))
//
{
//
    echo 'Bonjour ' . $_SESSION['pseudo'];
//
}
