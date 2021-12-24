<?php require_once '../inc/functions.php'; // APPEL DES FONCTIONS ?>
<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>CoursPHP - Chapitre 04 - 01 GET</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,400;0,700;1,400&family=Montserrat:ital,wght@0,400;0,500;1,400&display=swap" rel="stylesheet">
    
    <!-- mes styles -->
    <link rel="stylesheet" href="../css/style.css">

  </head>
  <body>
    <header class="container-fluid f-header p-2">
      <h1 class="display-4 text-center">CoursPHP - Chapitre 04 - 01 GET</h1>
      <p class="lead">$_GET[] représente les données qui transitent par l'url</p>
    </header> 
    <!-- fin container-fluid header  -->

    <div class="container bg-white mt-2 mb-2 m-auto p-2">

      <section class="row">

        <div class="col-md-6">
          <h2>La méthode GET</h2>
          <ul>
            <li>$_GET[] est une superglobale, et un tableau (array) comme toutes les superglobales</li>
            <li>Superglobale signifie que cette variable est disponible partout dans le script, y compris au sein des fonctions</li>
            <li>Les informations transitent selon une syntaxe précise dans l'url ex : <code class="bg-primary text-white">mapage.php?indice1=valeur1&indiceN=valeurN</code></li>
            <li>Quand on receptionne les données $_GET se remplit dans un array selon la syntaxe suivante <code><br>
              $_GET = array(<br>
                'indice1' => 'valeur1',<br>
                'indiceN' => 'valeurN'<br>
              );<br>
            </code></li>
            <li>Pour voir le tableau on fera d'abord un var_dump($_GET)</li>
          </ul>
        </div>
        <!-- fin col -->

        <div class="col-md-6">
          <h2>Exemples :</h2>
          <p><a href="02_method_get.php?article=jean&couleur=bleu&prix=50">Un jean bleu</a></p>
          <p><a href="02_method_get.php?article=robe&couleur=rouge&prix=70">Une robe rouge</a></p>
          <p><a href="02_method_get.php?article=pull&couleur=blanc&prix=60">Un pull blanc</a></p>
          <p><a href="02_method_get.php?article=slip&couleur=blanc&prix=20">Un slip blanc</a></p>
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