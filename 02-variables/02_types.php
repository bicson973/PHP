<?php
require_once '../inc/functions.php'; // APPEL DES FONCTIONS
?>
<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>CoursPHP - 02 Types de données</title>
    <!-- mes styles -->
    <link rel="stylesheet" href="../css/style.css">

  </head>
  <body>
    <header class="container-fluid bg-light">
      <h1 class="display-4">CoursPHP - 02 Types de données</h1>
      <p class="lead">Les types de données</p>
      <?php 
      minutePap();
      ?> 
    </header> 
    <!-- fin container-fluid header  -->

    <div class="container bg-white">

      <section class="row">

        <div class="col-sm-12 col-md-6">
          <h2>Les types de données</h2>
          <ul>
                    <li>Les types de base :</li>
                        <ul>
                            <li>Entiers, avec le type integer, qui permet de représenter les nombres entiers dans les bases 10, 8 et 16.</li>
                            <li>Flottants, avec le type double ou float, au choix, qui représentent les nombres réels, ou plutôt décimaux au sens mathématique. </li>
                            <li>Chaînes de caractères, avec le type string.</li>
                            <li>Booléens, avec le type boolean, qui contient les valeurs de vérité TRUE ou FALSE (soit les valeurs 1 ou 0 si on veut les afficher).</li>
                        </ul>
                    <li>Les types composés :</li> 
                        <ul>
                            <li>Tableaux, avec le type array, qui peut contenir plusieurs valeurs.</li>
                            <li>Objets, avec le type object.</li>
                        </ul>
                        <li>Les types spéciaux</li>
                        <ul>
                            <li>Objets, avec le type object.</li>
                            <li>Type null.</li>
                        </ul>
					</ul>
        </div>
        <!-- fin col -->

        <div class="col-sm-12 col-md-6">
          <h2>Les opérateurs numériques</h2>
          <p>PHP offre un large éventail d’opérateurs utilisables avec des nombres. Les variables ou les nombres sur lesquels agissent ces opérateurs sont appelés les opérandes.</p>

          <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">Opérateur</th>
                <th scope="col">Description</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">+</th>
                    <td>Addition</td>
                </tr>
                <tr>
                    <th scope="row">-</th>
                    <td>Soustraction</td>
                </tr>
                <tr>
                    <th scope="row">*</th>
                    <td>Multiplication</td>
                </tr>
                <tr>
                    <th scope="row">**</th>
                    <td>Puissance (associatif à droite)<br>
                    $a=3;<br>
                    echo $a**2; //Affiche 9<br>
                    echo $a**2**4; //Affiche 43046721 soit 3**(2**4) ou 316</td>
                </tr>
                <tr>
                    <th scope="row">/</th>
                    <td>Division</td>
                </tr>

                <tr>
                    <th scope="row">%</th>
                    <td>Modulo : nous donne le reste de la division euclidienne<br>
                        <?php 
                            $var = 159;
                            echo "<pre>" .gettype($var). "</pre>";
                            // pour afficher le symbole $ il faut l'échapper
                            echo "<div class=\"alert alert-success\">Le contenu de <code>\$var</code> est $var<br>";
                            //pour faire une opération avec une variable 
                            echo "Le modulo de $var / 7 ou  <code>\$var%7</code> est égal à " .$var%7;
                            echo "</div>";
                        ?>
                    </td>
                </tr>

                <tr>
                    <th scope="row">--</th>
                    <td>Décrémentation : soustrait une unité à la variable. Il existe deux possibilités, la prédécrémentation, qui soustrait avant d’utiliser la variable, et la postdécrémentation, qui soustrait après avoir utilisé la variable.<br>
                    <code>
                    $var=56;<br>
                    echo $var--; //affiche 56 puis décrémente $var.<br>
                    echo $var; //affiche 55.<br>
                    echo --$var; //décrémente $var puis affiche 54.
                    </code>
                    </td>
                </tr>

                <tr>
                <th scope="row">++</th>
                    <td>
                        Incrémentation : ajoute une unité à la variable. Il existe deux possibilités, la préincrémentation, qui ajoute 1 avant d’utiliser la variable, et la postincrémentation, qui ajoute 1 après avoir utilisé la variable.
                        <code>$var=56;<br>
                        echo $var++; //affiche 56 puis incrémente $var : postincrémenté<br>
                        echo $var; //affiche 57.<br>
                        echo ++$var; //incrémente $var puis affiche 58 : préincrémenté
                        </code>
                        <br>
                        <?php 
                            $var = 56;
                            echo "<div class=\"alert alert-danger\">";
                            echo "exemple : " .$var++. " devient après incrémentation $var";
                            echo "</div>";

                            echo "<div class=\"alert alert-warning\">";
                            echo "exemple : " .++$var. " \$var est incrémenté avant avec ++\$var";
                            echo "</div>";
                        ?>
                    </td>
                 </tr>

            </tbody>
          </table>
        </div>
        <!-- fin col -->

      </section>
      <!-- fin row -->

      <section class="row">

        <div class="col-md-12">
            <h2>Le type "boolean" ou booléen</h2>
            <p>Le type booléen peut contenir deux valeurs TRUE ou 1 ou FALSE ou 0 </p>
            <?php
               $a = 100;
               $b = ($a < 150);
               // dans le cas où c'est FALSE il affichera une chaîne vide
            //    echo $b;
               echo "<div class=\"alert alert-primary\">si je ne vois pas le contenu de \$b =  >>>>  $b <<<<< c'est que c'est faux, si je le vois c'est vrai</div>";
            ?>

                <h3>Les opérateurs booléens</h3>
                    <p>Quand ils sont associés, les opérateurs booléens servent à écrire des expressions simples ou complexes, qui sont évaluées par une valeur booléenne TRUE ou FALSE. Ils seront utilisés dans les instructions conditionnelles.</p>

                    <table class="table table-striped">
					<thead>
						<tr>
							<th scope="col">Opérateur</th>
							<th scope="col">Description</th>
						</tr>
					</thead>

					<tbody>
					<tr>
						<th scope="row">==</th>
						<td>
						Teste l’égalité de deux valeurs. L’expression $a == $b vaut TRUE si la valeur de $a est égale à celle de $b et
						FALSE dans le cas contraire :<br>
						$a = 345;<br>
						$b = "345";<br>
						$c = ($a==$b);<br>
						$c est un booléen qui vaut TRUE car dans un contexte de comparaison numérique, la chaîne "345" est évaluée comme le nombre 345. Si $b="345
						éléphants" nous obtenons le même résultat.
						</td>
					</tr>
					<tr>
						<th scope="row">!= ou <></th>
						<td>
						Teste l’inégalité de deux valeurs.<br>
						L’expression $a != $b vaut TRUE si la valeur de $a est différente de celle de $b et FALSE dans le cas contraire.
						</td>
					</tr>
					<tr>
						<th scope="row">===</th>
						<td>
						Teste l’identité des valeurs et des types de deux expressions.<br>
						L’expression $a === $b vaut TRUE si la valeur de $a est égale à celle de $b et que $a et $b sont du même type. Elle vaut FALSE dans le cas contraire :<br>
						$a = 345;<br>
						$b = "345";<br>
						$c = ($a===$b);<br>
						$c est un booléen qui vaut FALSE car si les valeurs sont égales, les types sont différents (integer et string).
						</td>
					</tr>
					<tr>
						<th scope="row">!==</th>
						<td>
						Teste la non-identité de deux expressions.<br>
						L’expression $a !== $b vaut TRUE si la valeur de $a est différente de celle de $b ou si $a et $b sont d’un type différent. Dans le cas contraire, elle vaut FALSE :<br>
						$a = 345;<br>
						$b = "345";<br>
						$c = ($a!==$b);<br>
						$c est un booléen qui vaut TRUE car si les valeurs sont égales, les types sont différents (integer et string).
						</td>
					</tr>
					<tr>
						<th scope="row"><</th>
						<td>
						Teste si le premier opérande est strictement inférieur au second.
						</td>
					</tr>
					<tr>
						<th scope="row"><=</th>
						<td>
						Teste si le premier opérande est inférieur ou égal au second.
						</td>
					</tr>
					<tr>
						<th scope="row">></th>
						<td>
						Teste si le premier opérande est strictement supérieur au second.
						</td>
					</tr>
					<tr>
						<th scope="row">>=</th>
						<td>
						Teste si le premier opérande est supérieur ou égal au second.
						</td>
					</tr>
					<tr>
						<th scope="row"><=></th>
						<td>
						Avec $a<=>$b, retourne -1, 0 ou 1 respectivement si $a<$b, $a=$b ou $a>$b ($a et $b peuvent être des chaînes).
						</td>
					</tr>
					</tbody>
					</table>

                    <h3>Les opérateurs logiques</h3>

				<table class="table table-striped">
				<thead>
					<tr>
					<th scope="col">Opérateurs</th>
					<th scope="col">Description</th>
					</tr>
				</thead>
				<tbody>
					<tr>
                        <th scope="row">OR</th>
                        <td>Teste si l’un au moins des opérandes a la valeur TRUE :<br>
                            $a = true;<br>
                            $b = false;<br>
                            $c = false;<br>
                            $d = ($a OR $b);//$d vaut TRUE.<br>
                            $e = ($b OR $c); //$e vaut FALSE.</td>
					</tr>
					<tr>
                        <th scope="row">||</th>
                        <td>Équivaut à l’opérateur OR mais n’a pas la même priorité.</td>
					</tr>
					<tr>
                        <th scope="row">XOR</th>
                        <td>Teste si un et un seul des opérandes a la valeur TRUE :<br>
                        $a = true;<br>
                        $b = true;<br>
                        $c = false;<br>
                        $d = ($a XOR $b); //$d vaut FALSE.<br>
                        $e = ($b XOR $c); //$e vaut TRUE.</td>
					</tr>
					<tr>
					<th scope="row">AND</th>
					    <td>Teste si les deux opérandes valent TRUE en même temps :<br>
                        $a = true;<br>
                        $b = true;<br>
                        $c = false;<br>
                        $d = ($a AND $b); //$d vaut TRUE.<br>
                        $e = ($b AND $c); //$e vaut FALSE.</td>
					</tr>
					<tr>
                        <th scope="row">&&</th>
                        <td>Équivaut à l’opérateur AND mais n’a pas la même priorité.</td>
					</tr>
					<tr>
                        <th scope="row">!</th>
                        <td>Opérateur unaire de négation, qui inverse la valeur de l’opérande :
                        $a = TRUE;<br>
                        $b = FALSE;<br>
                        $d = !$a; //$d vaut FALSE.<br>
                        $e = !$b; //$e vaut TRUE.</td>
					</tr>
				</tbody>
				</table>
                <p>Attention !! Une erreur classique dans l’écriture des expressions conditionnelles consiste à confondre l’opérateur de comparaison == avec l’opérateur d'affectation =. L’usage des parenthèses dans la rédaction des expressions booléennes est souvent indispensable et toujours recommandé pour éviter les problèmes liés à l’ordre d’évaluation des opérateurs.</p>

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