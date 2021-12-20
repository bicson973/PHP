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

    <title>CoursPHP - 2 les chaînes </title>
    <!-- mes styles -->
    <link rel="stylesheet" href="../css/style.css">

  </head>
  <body>
    <header class="container-fluid bg-light">
      <h1 class="display-4">CoursPHP - 2 les chaînes  de caractères</h1>
      <p class="lead">Les chaînes de caractères sont avec les nombres et les types de données les plus manipulés sur un site web. De surcroît, dans les échanges entre le client et le serveur au moyen de formulaires, toutes les données sont transmises sous forme de chaînes, d’où leur importance.</p>
      <?php 
        $varcoucou = "coucou !";
        echo "<p>$varcoucou on entend le coucou</p>";
      ?> 
    </header> 
    <!-- fin container-fluid header  -->

    <div class="container bg-white">

      <section class="row">

        <div class="col-md-6">
          <h2>1- Les chaînes de caractères</h2>
          <p>Une chaîne de caractères est une suite de caractères alphanumériques contenus entre des guillemets simples (apostrophes) ou doubles. </p>
          <p>Si une chaîne contient une variable, celle-ci est évaluée, et sa valeur incorporée à la chaîne uniquement si vous utilisez des guillemets et non des apostrophes</p>
          <?php 
          $var1 = 569874;
          echo '<p>le contenu de $var1<br>';
          echo "le contenu de \$var1 : $var1</p>";
          ?> 
        </div>
        <!-- fin col -->

        <div class="col-md-6">
          <ul>
            <li>$a = 'PHP';</li>
            <li>$b = 'MySQL';</li>
            <li>$c = "PHP et $b";//affiche : PHP et MySQL</li>
            <li>$d = 'PHP et $b'; //affiche PHP et $b car $ et b sont considérés comme des caractères sans signification particulière</li>
            <li>
              <?php
                $devise = "La devise de la République est \"Liberté, Egalité, Fraternité\"";
                echo $devise;
              ?>
            </li>
          </ul>
        </div>
        <!-- fin col -->
      </section>
      <!-- fin row -->

	  <section class="row">
		<div class="col-md-12">
		<table class="table table-striped">
						<thead>
							<tr>
								<th scope="col">Séquence</th>
								<th scope="col">Signification</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row">\’</th>
								<td>Affiche une apostrophe.</td>
							</tr>
							<tr>
								<th scope="row">\"</th>
								<td>Affiche des guillemets.</td>
							</tr>
							<tr>
								<th scope="row">\$</th>
								<td>Affiche le signe $.</td>
							</tr>
							<tr>
								<th scope="row">\\</th>
								<td>Affiche un antislash.</td>
							</tr>
							<tr>
								<th scope="row">\n</th>
								<td>Nouvelle ligne (code ASCII 0x0A).</td>
							</tr>
							<tr>
								<th scope="row">\r</th>
								<td>Retour chariot (code ASCII 0x0D).</td>
							</tr>
							<tr>
								<th scope="row">\t</th>
								<td>Tabulation horizontale (code ASCII 0x09).</td>
							</tr>
							<tr>
								<th scope="row">\[0-7] {1,3}</th>
								<td>Séquence de caractères désignant un nombre octal (de 1 à 3 caractères 0 à 7) et affichant le caractère correspondant :
								echo "\115\171\123\121\114"; //Affiche MySQL<br>
									<?php echo "<div class=\"alert alert-danger\">\115\171\123\121\114</div>"; ?> 
							</td>
							</tr>
							<tr>
								<th scope="row">\x[0-9 A-F a-f] {1,2}</th>
								<td>Séquence de caractères désignant un nombre hexadécimal (de 1 à 2 caractères 0 à 9 et A à F ou a à f) et affichant le caractère correspondant :<br>
								echo "\x4D\x79\x53\x51\x4C"; // Affiche MySQL
								<br>
									<?php echo "\x4D\x79\x53\x51\x4C"; ?> </td>
							</tr>
						</tbody>
					</table>
		</div>
		<!-- fin col -->
	  </section>
	  <!-- fin row -->

	  <section class="row">
		  <div class="col-md-12">
			  <h2>Concaténer des chaînes de caractères</h2>
			  <p>L’opérateur PHP de concaténation est le point (.), qui fusionne deux chaînes littérales ou contenues dans des variables en une seule chaîne.</p>
			  <?php 
			  	$langage1 = "PHP";
				$langage2 = "MySQL";
				$phrase = "<p>a/ Utilisez " .$langage1. " et " .$langage2. " pour faire un site dynamique.</p>";
				echo $phrase;
				$phrase2 = "<p>a2/ Utilisez $langage1 et $langage2 pour faire un site dynamique.</p>";
				echo $phrase2;
				echo "<p>b/ Utilisez $langage1 et $langage2 pour faire un site dynamique.</p>";
				// echo "<p>c/ Utilisez ",$langage1," et ",$langage2, " pour construire un site dynamique</p>";
				// Lors de l’affichage avec l’instruction echo, cette concaténation peut être simulée en séparant chaque chaîne ou variable par une virgule.
				echo "<strong>ON CONCATENE AVEC UN (.) un point c'est tout !</strong>";

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