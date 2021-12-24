<?php require_once '../inc/functions.php'; // APPEL DES FONCTIONS ?>
<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>CoursPHP - Chapitre 04 - 02 $_GET</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,400;0,700;1,400&family=Montserrat:ital,wght@0,400;0,500;1,400&display=swap" rel="stylesheet">
    
    <!-- mes styles -->
    <link rel="stylesheet" href="../css/style.css">

  </head>
  <body>
    <header class="container-fluid f-header p-2">
      <h1 class="display-4 text-center">CoursPHP - Chapitre 04 - 02 $_GET</h1>
      <p class="lead">SOUS TITRE</p>
    </header> 
    <!-- fin container-fluid header  -->
    <div class="container bg-white mt-2 mb-2 m-auto p-2">
      <section class="row">
        <div class="col-md-12">
			<?php 
				// debug($_GET); // à enlever en production
				// if isset : est-il établi que nous avons toutes les informations dans $_GET ? 
				if(isset($_GET['article']) && isset($_GET['couleur']) && isset($_GET['prix'])) { // si oui si c'est vrai 
					echo "<h2>Votre produit : " .$_GET['article']. "</h2>";

					echo "<div class=\"border border-primary w-50 p-4\">";
					echo "<p>Produit : " .$_GET['article']. " *** Couleur : " .$_GET['couleur']. "</p>";// on affiche les valeurs
					echo "<p class=\"bg-success\">Prix : " .$_GET['prix']. " € </p>";
					echo "</div>";
				} else {
					echo "<h2>Fiche produit</h2>";
					echo "<p class=\"alert alert-danger w-50\">Ce produit n'existe pas</p>";// sinon on affiche un message "ce produit n'existe pas"
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