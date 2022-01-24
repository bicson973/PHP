<?php require_once 'init.inc.php'; // 1 FONCTIONS

// 1- CONNEXION À LA BDD

// VARIABLES POUR LA CONNEXION
$host = 'localhost';// le chemin vers le serveur de données
$database = 'maboutique';// le nom de la BDD
$user = 'root';// le nom d'utilisateur pour se connecter
// $psw = '';// mdp PC XAMPP
$psw = 'root';// mdp MAC MAMP

$pdoMAB = new PDO('mysql:host='.$host.';dbname='.$database,$user,$psw,
array(
  PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,// pour afficher les erreurs SQL dans le navigateur
  PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',// pour définir le charset des échanges avec la BDD
));

var_dump(get_class_methods($pdoMAB));

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<section class="row text-center">
  <div class="col-md-6">
      <h2 class="text-white text-center bg-info text-decoration-underline">Créez votre compte !</h2> 

      <form action="" method="POST" class="border border-primary p-1">

      <div class="mb-3">
      <!-- https://getbootstrap.com/docs/5.1/forms/checks-radios/ -->
          <label for="sexe" class="form-label">Civilité </label><br>
          <input type="radio" name="sexe" value="m" id="sexe" checked> Homme <br>
          <input type="radio" name="sexe" value="f" id="sexe"> Femme
      </div>
     
      <div class="row g-3 mb-2">
          <div class="col-md-6 mb-3">
              <label for="prenom" class="form-label">Prénom</label>
              <input type="text" name="prenom" id="prenom" class="form-control" required>
          </div>
              
          <div class="col-md-6 mb-3">
              <label for="nom" class="form-label">Nom de famille</label>
              <input type="text" name="nom" id="nom" class="form-control" required>
          </div>
      </div>

      <div class="mb-3">
          <label for="mail" class="form-label">Email</label>
          <input type="text" name="mail" id="mail" class="form-control" required>
      </div>

      <div class="mb-3">
          <label for="pseudo">Votre pseudo</label>
          <input type="text" name="pseudo" id="pseudo" class="form-group"  required>
      </div>

      <div class="mb-3">
          <label for="adresse" class="form-label">Adresse</label>
          <input type="text" name="" id="adresse" class="form-control" required>
      </div>

      <div class="mb-3">
          <label for="ville" class="form-label">Ville</label>
          <input type="text" name="" id="ville" class="form-control" required>
      </div>
      <div class="mb-3">
          <label for="zip_code" class="form-label">Code Postal</label>
          <input type="text" name="" id="zip_code" class="form-control" required>
      </div>

      <div class="row sb-2">
          <div class="col">
              <button type="submit" class="btn btn-success mb-3">Validez la création</button>
          </div>
      </div>

      </form> 

     
  </div>
    <!-- fin col -->

    </section>
  <!-- fin row -->  
</body>
</html>