<?php
session_start();
include('../Controleur/inscription.php');//On démarre la session AVANT toute chose
// $_SESSION['id'] = $resultat['id'];
//
// $_SESSION['pseudo'] = $pseudo;
// 
// echo 'Vous êtes connecté !';

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> ESPACE MENBRES</title>
  </head>
  <body>

    <form action="" method="post">
      <input type="text" name="pseudo" placeholder="pseudo" > <br>
      <input type="password" name="pass" placeholder="mot de passe" ><br>
      <input type="password" name="pass_verify" placeholder="retapez mot de passe"><br>
      <input type="text" name="email" placeholder="adresse mail"><br>


      <input type="submit" name="inscription" value="inscription">
      <input type="submit" name="submitdeconnect" value="deconnexion">

    </form>
  </body>
</html>
