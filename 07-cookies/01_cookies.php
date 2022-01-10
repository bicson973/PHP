<?php
// APPEL DES FONCTIONS

require_once '../inc/functions.php';

 // 2 on fait un if isset
 if (isset($_GET['langue'])) { // si une langue est dans l'url, on mettra cette langue dans le cookie
  
  $langue = $_GET['langue'];
  // debug($langue);
    } else if (isset($_COOKIE['langue'])) { // sinon si on a reçu un cookie appelé "langue" la valeur du site sera celle du cookie
      $langue = $_COOKIE['langue'];
      
    } else { // sinon si l'internaute n'a pas choisi de langue il arrive pour la 1ère fois on lui met 'fr' par défaut
      $langue = 'fr';
    }

  // 3 envoi du cookie avec la langue dedans
  $expiration = time() + 365*24*60*60; // on passe en variable la date d'expiration du cookie OBLIGATOIRE ! 
  // on ajoute une année à la date du jour ou l'on crée le cookie
  // création du cookie
  setcookie('langue', $langue, $expiration);

  // debug($_COOKIE);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>$_COOKIE</title>
</head>
<body>
  <h1>La superglobale $_COOKIE</h1>
  <p>Un cookie est un petit fichier de 4ko maxi déposé par le serveur web sur le poste de l'internaute et qui contient des informations</p>
  <p>Les cookies sont automatiquement envoyés par le navigateur. Le PHP permet de récuperer les informations stockées dans le ou les cookies</p>
  <p>IMPORTANT : un cookie étant sauvegardé sur le poste de l'internaute, il peut être modifié, volé ou détourné : ON NE MET PAS D'INFORMATIONS SENSIBLES DANS UN COOKIE (mdp, panier, ref. bancaires de sécu etc...)</p>
  <hr>
  <ul>
    <!-- 1 on passe dans l'url une information ; la langue choisie par l'utilisateur ; la valeur de l'indice choisi est receptionné dans la superglobale $_GET -->
    <li><a href="?langue=fr">Français</a></li>
    <li><a href="?langue=es">Espagnol</a></li>
    <li><a href="?langue=it">Italien</a></li>
    <li><a href="?langue=en">Anglais</a></li>
  </ul>
  <hr>
  <?php
    echo '<p>la langue du site : ' .$langue. '</p>';
    echo time();// date du jour exprimée en secondes : les secondes écoulées entre le 1er janvier 1970 et maintenant
    echo '<br>';
    echo $expiration;

    // ds safari et firefox > inspecteur > stockage dans chrome > inspecteur et application
;  ?>
</body>
</html>