<?php require_once '../inc/functions.php'; // APPEL DES FONCTIONS ?>
<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>CoursPHP - 03 Conditions</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,400;0,700;1,400&family=Montserrat:ital,wght@0,400;0,500;1,400&display=swap" rel="stylesheet">
    
    <!-- mes styles -->
    <link rel="stylesheet" href="../css/style.css">

  </head>
  <body>
    <header class="container-fluid f-header p-2">
      <h1 class="display-4 text-center">CoursPHP - 03 Conditions</h1>
      <p class="lead">Les instructions conditionnelles ou les conditions : Indispensables à la gestion du déroulement d’un algorithme quelconque, ces instructions sont présentes dans tous les langages. Cela sera familier pour ceux qui ont déjà pratiqué un langage tel que le JavaScript.</p>
      <?php minutePap(); ?> 
    </header> 
    <!-- fin container-fluid header  -->

    <div class="container bg-white mt-2 mb-2 m-auto p-2">

      <section class="row">

        <div class="col-md-6">
          <h2>if</h2>
          <p>L'instruction <code>if</code> est la plus simple et la plus utilisée des instructions conditionnelles, elle est essentielle en ce qu'elle permet d'orienter l'exécution du script en fonction de la valeur booléenne d'une expression.
                <code>
                    <br>
                    $a = 10;<br>
                    $b = 550;<br>
                    $c = 25;<br>
                </code>
        </p>
          <?php 
            $a = 100;
            $b = 55;
            $c = 25;
            // && ET
            if ( $a > $b && $b > $c)   {
                echo "<p class=\"alert alert-success w-75 mx-auto text-center\">Les deux conditions sont vraies</p>" ;
                }
          ?> 
        </div>
        <!-- fin col -->

        <div class="col-md-6">
          <h2>if ... else</h2>
            <p>L'instruction <code>if ... else</code> permet de traiter le cas où l'expression est vraie/TRUE et en même temps de prévoir un traitement de rechange quand elle est fausse/FALSE <br>
            <code><br>
                $e = 10;<br>
                $f = 5;<br>
                $g = 2;<br>

                echo "&lt;p class=\"alert alert-danger w-75 mx-auto text-center\">";<br>
                // OR OU ||<br>
                if ( $e == 9 || $f > $g ) {<br>
                    echo "Au moins une des 2 conditions est remplie ou vraie&lt;/p>";<br>
                } else {<br>
                    echo "Les 2 conditions sont fausses&lt;/p>";<br>
                }<br>
            </code>
            </p>
            <?php 
                echo "<p class=\"alert alert-warning w-75 mx-auto text-center\">";
                if ( $a > $b ) {
                    echo "$a est supérieur à $b</p>";
                } else {
                    echo "$a est inférieur à $b</p>";
                }
                // echo "</p>";

                // autre exemple
                $e = 10;
                $f = 5;
                $g = 2;

                echo "<p class=\"alert alert-danger w-75 mx-auto text-center\">";
                // OR OU ||
                if ( $e == 9 || $f > $g ) {
                    echo "Au moins une des 2 conditions est remplie ou vraie</p>";
                } else {
                    echo "Les 2 conditions sont fausses</p>";
                }
            ?> 
            <h4>if ... else en ternaire </h4>
            <p>Il existe une autre manière d'écrire un if... else : la condition ternaire</p>
            <p>Dans la ternaire le "?" remplace le "if" et le ":" remplace le "else"</p>
            <?php 
             $h = 10;

             if ($h == 10 ) {
                 echo "<p class=\"small\">$h est égal à 10</p>";
             } else {
                 echo "<p class=\"small\">$h est différent de 10</p>";
             }

             // la même condition en ternaire ? = if /// : = else
             // on vérifie une condition et si c'est vrai on affiche la 1ère expression sinon la seconde 
             echo ( $h == 10 ) ? "<p class=\"text-danger\">$h est égal à 10</p>" : "<p class=\"text-danger\">$h est différent de 10</p>";

            ?> 

        </div>
        <!-- fin col -->

      </section>
      <!-- fin row -->
      
      <section class="row">
          <div class="col-md-6">
            <h2>if...elseif...else</h2>
            <p>Une syntaxe plus complexe :
             <code><br>
             echo "&lt;p class=\"alert alert-primary w-75 mx-auto text-center\">";<br>
             $d = 8;<br>
             if ( $d == 8) {<br>
                 echo "\$d qui contient $d est égal à 8&lt;/p>"; <br>
             } elseif ( $d != 10) {<br>
                 echo "\$d qui contient $d est différent de 10&lt;/p>"; <br>
             } else {
                 echo "les deux conditions sont fausses&lt;/p>";<br>
             }<br>
             </code>
            </p>
             <?php
                
             echo "<p class=\"alert alert-primary w-75 mx-auto text-center\">";
             $d = 8;
             if ( $d == 8) {
                 echo "\$d qui contient $d est égal à 8</p>"; // $d = 8
             } elseif ( $d != 10) {
                 echo "\$d qui contient $d est différent de 10</p>"; // $d = autre chose que 10
             } else {
                 echo "les deux conditions sont fausses</p>"; // ce n'est ni 8 et c'est égal à 10
             }
             ?> 
          </div>
        <!-- fin col -->
          <div class="col-md-6">
              <h2>l'instruction switch.. case</h2>
              <p>Exemple simple </p>

              <?php 
              $dept = 94;
              
            //   if($dept==75) echo "Paris";
            //   if($dept==92) echo "Hauts-de-Seine";
            //   if($dept==78) echo "Yvelines";
            //   if($dept==93) echo "Seine Saint-Denis";

              echo "<hr>";

              switch ($dept) {
                case 75:
                    echo "Paris";  
                    break;
                
                case 92:
                    echo "Hauts-de-Seine";  
                    break; 

                case 78:
                    echo "Yvelines";  
                    break;

                case 93:
                    echo "Seine Saint-Denis";  
                    break;

                case 94:
                    echo "Val-de-Marne";
                    break;
                
                case 91:
                    echo "Essonne";
                    break;

                    default:
                    echo "Département inconnu en Ile-de-France";
                    break;

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
    
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>