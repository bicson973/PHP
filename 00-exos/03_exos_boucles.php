<?php require_once '../inc/functions.php'; // APPEL DES FONCTIONS ?>
<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>CoursPHP - Exos Boucles</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,400;0,700;1,400&family=Montserrat:ital,wght@0,400;0,500;1,400&display=swap" rel="stylesheet">
    
    <!-- mes styles -->
    <link rel="stylesheet" href="../css/style.css">

  </head>
  <body>
    <header class="container-fluid f-header p-2">
      <h1 class="display-4 text-center">CoursPHP - Exos Boucles</h1>
    </header> 
    <!-- fin container-fluid header  -->

    <div class="container bg-white mt-2 mb-2 m-auto p-2">

      <section class="row">

        <div class="col-md-6 bg-warning">
          <h2>While...</h2>
        <?php 
            $i = 0; // valeur de départ de la boucle
            while ($i < 25 ) { // tant que $i est inférieur à 25 
                echo $i. " -- "; // affiche
                $i++; // incrémentation
            }
            echo "<hr>";        
            $annee = 1920;
            // / = slash \ anti-slash
            echo "<label for=\"annee\">Année de naissance</label><select name=\"annee\" id=\"annee\">";
            while ( $annee <= 2021 ) {
                echo "<option value=\"$annee\">" .$annee. "</option>";
                $annee++;
            }
            echo "</select>";

            // EXO la même mais à l'envers 

            $annee2 = 2021;
            echo "<label for=\"annee2\">Année de naissance</label><select name=\"annee2\" id=\"annee2\">";
            while ( $annee2 >= 1920 ) {
                echo "<option value=\"$annee2\">" .$annee2. "</option>";
                $annee2--;// décrémentation avec --
            }
            echo "</select>";
            ?>
        </div>
        <!-- fin col -->

        <div class="col-md-6">
          <h2>Do... while</h2>
          <?php
            $j = 0;
            do {
                echo "<p class=\"lead\">Je fais un tour de boucle.</p>";
                // debug($j);
                $j++;
                debug($j);
            } while ($j > 10 ); // la boucle va faire l'echo une fois et après la condition étant FALSE la boucle s'arrête
          ?>
        </div>
        <!-- fin col -->

        <div class="col-md-6">
          <h2>For</h2>
          <?php
            // faire une select avec les 12 mois (en chiffre) de l'année dans option avec une boucle for
            echo "<label for=\"mois\">Mois</label><select name=\"mois\">";
                for ( $mois = 1; $mois <= 12; $mois++ ) {
                    echo "<option value=\"$mois\">$mois</option>";
                }
            echo "</select>";
          ?>
        </div>
        <!-- fin col -->

        <div class="col-md-6">
          <h2>For each</h2>
          <?php
        //   [crochets brackets]
        //   (parenthèses)
        //   {accolades}
            $month = [
                '01' => 'January',
                '02' => 'February',
                '03' => 'March',
                '04' => 'April',
                '05' => 'May',
                '06' => 'June',
                '07' => 'July',
                '08' => 'August',
                '09' => 'September',
                '10' => 'October',
                '11' => 'November',
                '12' => 'December'
              ];
            //   debug($month);
            echo "<label for=\"month\"> Mois</label><select class=\"form-select\" name=\"month\">";
                echo "<option>Choisissez votre mois de naissance</option>";
                foreach ( $month as $indice => $themonth ) {
                    echo "<option value=\"$indice\">$themonth</option>";
                }
            echo "</select>";

            
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