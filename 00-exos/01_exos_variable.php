<?php
require_once '../inc/functions.php';  // appel du fichier de fonctions

// 6 variables pour tester plus bas dans la page
$chaine = "Longtemps je me suis couché ... dans le temps.";
$decimal = 18.74;
$entier = 1515;

$lib = "Liberté";
$egal = "Égalité";
$frat = "Fraternité";

?>
<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>CoursPHP - Chapitre - Exo 01 Variables</title>
    <!-- mes styles -->
    <!-- <link rel="stylesheet" href="../css/style.css"> -->

  </head>
  <body>
  <header class="container-fluid f-header p-2">
        <h1>CoursPHP - Chapitre - Exo 01 Variables</h1>
    </header> 
    <!-- fin container-fluid  -->

    <div class="container bg-light">
      <section class="row border border-success">
        <div class="col-sm-12">
          <?php
          echo $entier;
          // echo gettype() nous donne le type de données contenues dans une variable
          echo gettype($decimal);
          echo "<p>coucou Imran !</p>";
          print_r("<p>Afficher du contenu avec la fonction <code>print_r()</code></p>");
          print_r($chaine);

          //j'appelle la fonction minute papillon
          minutePap();
          // une autre fonction pour afficher le jour en langue anglaise en toute lettre 
          whatDay();
          echo "<hr>";

          // exo écrire la phrase suivante "la devise de la République française est liberté, égalité, fraternité en tuilisant les variables déclarées au debut du fichier

          echo "<p>La devise de la République française est $lib, $egal, $frat</p>";

          echo "<hr>";
          dateFR();

          echo "<hr>";

          if (defined("validator")) echo "la constante validator est bien définie";
          
          ?>
        </div>
      </section>
    </div>



    <div class="container bg-light">
      <section class="row">
        <div class="col-sm-12">
          
        </div>
      </section>
    </div>
    

    <!-- fin container  -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>