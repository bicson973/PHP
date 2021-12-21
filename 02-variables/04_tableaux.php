<?php require_once '../inc/functions.php'; // APPEL DES FONCTIONS ?>
<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>CoursPHP - 02 tableaux</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,400;0,700;1,400&family=Montserrat:ital,wght@0,400;0,500;1,400&display=swap" rel="stylesheet">
    
    <!-- mes styles -->
    <link rel="stylesheet" href="../css/style.css">

  </head>
  <body>
    <header class="container-fluid bg-light">
      <h1 class="display-4">CoursPHP - 04 tableaux</h1>
      <p class="lead">Les tableaux représentent un type composé car ils permettent de stocker sous un même nom de variable plusieurs valeurs indépendantes. C’est comme un tiroir divisé en compartiments. Chaque compartiment, que nous nommerons un élément du tableau, est repéré par un indice numérique (le premier ayant par défaut la valeur 0 et non 1). D’où l’expression de "tableau indicé".</p>
    </header> 
    <!-- fin container-fluid header  -->

    <div class="container bg-white">

      <section class="row">

        <div class="col-md-6">
          <h2>1- Les tableaux</h2>
          <p>Un tableau appelé "array" en anglais est une variable améliorée dans laquelle on stocke une multitude de valeurs. Ces valeurs peuvent être de n'importe quel type. Elles possèdent un indice dont la numérotation commence à 0.</p>
          <p>Méthode 1 pour déclarer un tableau <code>$tableau1 = array( 'Gabin', 'Arletty', 'Fernandel', 'Dalio', 'Pauline Carton' );</code></p>
          
          <p>Méthode 2 pour déclarer un tableau <code> $tableau2 = [ 'France', 'Espagne', 'Italie', 'Portugal' ];</code></p>
          
        </div>
        <!-- fin col -->

        <div class="col-md-6">
          <h3>Exemple</h3>
          <?php 
            $tab[0] = 2021;
            $tab[1] = 3.1415926535;// le nombre PI https://fr.wikipedia.org/wiki/Pi
            $tab[2] = "PHP 7";
            $tab[35] = $tab[2]. " et MySQL";
            $tab[] = " et là j'ajoute coucou !";
            debug($tab);
            echo " <p>Nombre de valeurs dans le tableau : " .count($tab). "</p>";// on compte le nombre de valeurs dans le tableau
            echo "<p>Le langage préféré de l'open source est le $tab[2]</p>";
            echo "<p>Utilisez $tab[35] !!!</p>";

          ?> 
        </div>
        <!-- fin col -->

        <div class="col-md-6">
          <h2>2- Les tableaux associatifs </h2>
          <p>Dans un tableau associatif nous pouvons choisir le nom des indices <br> <code>$couleurs = array(<br>
            'b' => 'bleu',<br>
            'bl' => 'blanc',<br>
            'r' => 'rouge',<br>
          );</code></p>

          <?php 
          // tableau associatif
          // dans un tableau associatif nous pouvons choisir le nom des indices 
          
          $couleurs = array(
            'b' => 'bleu',
            'bl' => 'blanc',
            'r' => 'rouge',
          );

          debug($couleurs);
          // un echo d'une des valeurs de notre tableau associatif
          echo '<p>La première couleur du tableau associatif est le ' .$couleurs['b']. '</p>';
          echo "<p>La première couleur du tableau associatif est le $couleurs[b]</p>"; // si l'écho est entre guillemets doubles il n'est plus util de noter l'indice associatif (ici b) entre simple quote >>>> INDISPENSABLE avec des requêtes SQL

          echo "<p> le nombre de valeurs dans le tableau est de : avec count() "  .count($couleurs). "</p>";
          echo "<p> le nombre de valeurs dans le tableau est de :  avec sizeof() "  .sizeof($couleurs). " </p>";

          echo "<p> le drapeau français est $couleurs[b], $couleurs[bl], $couleurs[r].</p>";
          ?> 

        </div>
        <!-- fin col -->

        <div class="col-md-6">
          <h2>3- Parcourir un tableau associatif avec <code>foreach</code> </h2>
          <p>Quand il y a 2 variables après "as" celle de gauche parcourt les indices et celle de droite parcourt les valeurs  <br> 
          <code>
            echo "&lt;ol>";<br>
            foreach ( $couleurs as $indice => $teinte ) {<br>
              echo "&lt;li>Indice : $indice correspond à $teinte &lt;/li>";<br>
            }<br>
            echo "&lt;/ol>";<br>
        </code></p>

          <?php 
             echo "<ol>";
             foreach ( $couleurs as $indice => $teinte ) {
               echo "<li>Indice : $indice correspond à $teinte </li>";
             }
             echo "</ol>";
             echo "<hr>";

             $contacts = array(
              'prenom' => 'Victor',
              'nom' => 'Hugo',
              'email' => 'victor.hugo@france.fr ',
              'tel' => '06 63 74 11 35',
              );

            echo "<div class=\"border border-warning bg-light w-50\">";
             foreach ($contacts as $indice => $personne) {
              // echo "<p>$indice : $infos </p>";
              if ($indice == 'nom') {
                echo "<h3 class=\"bg-warning\">$personne</h3>";
              } else {
                echo "<p>$personne </p>";
              }
            } 
            echo "</div>";
          ?> 
        </div>
        <!-- fin col -->
      </section>
      <!-- fin row -->

      <section class="row">
        <div class="col-md-6">
          <h2>4- Tableaux multidimensionnels</h2>
        </div>
      <!-- fin col -->
        <div class="col-md-6">
          <h2>TitreNiveau2</h2>
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