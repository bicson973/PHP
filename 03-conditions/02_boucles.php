<?php require_once '../inc/functions.php'; // APPEL DES FONCTIONS ?>
<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>CoursPHP - Chapitre 03 - 02 Boucles</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,400;0,700;1,400&family=Montserrat:ital,wght@0,400;0,500;1,400&display=swap" rel="stylesheet">
    
    <!-- mes styles -->
    <link rel="stylesheet" href="../css/style.css">

  </head>
  <body>
    <header class="container-fluid f-header p-2">
      <h1 class="display-4 text-center">CoursPHP - Chapitre 03 - 02 Boucles</h1>
      <p class="lead">Les boucles permettent de répéter des opérations élémentaires sans avoir à réécrire le même code</p>
    </header> 
    <!-- fin container-fluid header  -->

    <div class="container bg-white mt-2 mb-2 m-auto p-2">

      <section class="row">

        <div class="col-md-6">          
            <h2>1/ La boucle while</h2>
            <p>La boucle while permet d'affiner le comportement d'une boucle en réalisant de manière répétitive tant qu'une condition est évaluée à vrai/TRUE et de l'arrêter quand elle est évaluée à faux/FALSE</p>
            <?php
                $n = 1;
                // debug($n);
                while($n%7 != 0) { // à condition que le nombre dans $n ne soit un multiple de 7
                    $n = rand(1,50);// 1 tirage de nbr aléatoire et ce sont ces nombres que l'on teste
                    // echo $n, " + ";// VOIR concaténation avec virgule ? 
                    echo $n. " * ";
                }
                echo "<hr>";
                // $num = 10;
                while($num<=40){
                    echo $num." * ";
                   $num = $num+5;
                }
            ?>
        </div>
        <!-- fin col -->

        <div class="col-md-6">
          <h2>2/ La boucle do... while</h2>
          <p>La condition n'est évaluée qu'après une première exécution des instructions du bloc compris entre do et while.</p>
          <?php
            $n2 = 1;// initialisation de la variable à 1
            // debug($n2);
            do { 
                $n2 = rand( 1,100 );
                // debug($n2);
                echo $n2. " ** ";
            } 
            while ( $n2%7 !=0 );// la condition, trouver un multiple de 7, n'est testée qu'après le premier tirage
          ?>
        </div>
        <!-- fin col -->

        <div class="col-md-6">
          <h2>3/ La boucle for</h2>
          <p>La boucle for est plus concise que la boucle while</p>
          <?php
            for ( $i = 0; $i<= 10; $i++) {
                echo $i. " ** ";
                // debug($i);
            }
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