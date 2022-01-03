<?php require_once '../inc/functions.php'; // APPEL DES FONCTIONS ?>
<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>CoursPHP - Chapitre 06 - 01 PDO</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,400;0,700;1,400&family=Montserrat:ital,wght@0,400;0,500;1,400&display=swap" rel="stylesheet">
    
    <!-- mes styles -->
    <link rel="stylesheet" href="../css/style.css">

  </head>
  <body>
    <header class="container-fluid f-header p-2">
      <h1 class="display-4 text-center">CoursPHP - Chapitre 06 - 01 PDO</h1>
      <p class="lead">Connexion à notre BDD</p>
    </header> 
    <!-- fin container-fluid header  -->

    <div class="container bg-white mt-2 mb-2 m-auto p-2">

      <section class="row">

        <div class="col-md-6">
          <h2>1- Se connecter à la BDD</h2>

          <?php
        //   /* Passage de 4 variables des informations de connexion. */
        //   $host = 'localhost'; /* Le chemin vers le serveur de données, 'lhôte, ici un chemin local 'localhost' */
        //   $database = 'entreprise'; /* Le nom de la BDD */
        //   $user = 'root';
        //   $psw = 'root'; /* Pour MACBOOK : mot de passe utilisateur pour se connecter */
          

          $pdoENT = new PDO (
              'mysql:host=localhost;dbname=entreprise', /* Nom du driver (mysql), puis nom du serveur (host), puis nom de la BDD (dbname) */
              'root', /* L'utilisateur de la BDD */
            //   '', /* Le MDP en local sur pc (Vide) */
              'root', /* Le MDP pour MACBOOK avec MAMP */
              array(
              PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
              PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
              )
            );
        ?>
        </div>
        <!-- fin col -->
        <div class="col-md-6">
          <h2>2- Faire des requêtes avec <code>exec()</code></h2>

          <?php
        //   On insert un nouvel employé dans la BDD entreprise
        //   INSERT INTO employes (prenom, nom, sexe, service, date_embauche, salaire) VALUES ('Jean', 'Saisrien', 'm', 'informatique','2022-01-03','2000')

        $requete = $pdoENT->exec("INSERT INTO employes(prenom, nom, sexe, service, date_embauche, salaire) VALUES ('Jean', 'Saisrien', 'm', 'informatique','2022-01-03','2000')");
          ?>

        </div>
        <!-- fin col -->

      </section>
      <!-- fin row -->

    </div>
    <!-- fin container  -->

	
    <!-- footer en require  -->
    <?php require_once '../inc/footer.inc.php'; ?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>