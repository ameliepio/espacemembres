<?php
// creation fonction  "insert membres"


function InsertMembres($pseudo,$pass_hache,$email){
global $bdd;
  // Insertion

  $req = $bdd->prepare('INSERT INTO menbres(pseudo, pass, email, date_inscription)
  VALUES(:pseudo,:pass,:email,CURDATE())');

  $req->execute(array(

      'pseudo' => $pseudo,

      'pass' => $pass_hache,

      'email' => $email));

  }


// creation fonction seclectmenbres"

// function SelectMembres($pseudo,$pass_hache){
// $req = $bdd->prepare('SELECT * FROM menbres WHERE pseudo = :pseudo AND pass = :pass');
// $req->execute(array(
//
//         'pseudo' => $pseudo,
//
//         'pass' => $pass_hache));
//
//     $resultat = $req->fetch();
//
//   }
