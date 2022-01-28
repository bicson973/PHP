<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil Boutique</title>
</head>
<body>
    <h1>Accueil - Boutique</h1>
    <div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</body>
</html>



<?php

// require connexion, session etc.
require_once 'inc/init.inc.php';

  $bddlink = $pdoBTQ->query ( "SELECT * FROM produits" );
  $pdlink = $bddlink->fetch(PDO::FETCH_ASSOC);
  //jeVar_dump($pdlink);

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Accueil de Boutique</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/album/">

    

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
  </head>
  <body>
    
<header>
  <div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <h4 class="text-white">About</h4>
          <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
          <h4 class="text-white">Contact</h4>
          <ul class="list-unstyled">
            <li><a href="accueil.php" class="text-white">Home</a></li>
            <li><a href="connexion.php" class="text-white">Sign In</a></li>
            <li><a href="profile.php" class="text-white">Profile</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container">
      <a href="#" class="navbar-brand d-flex align-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>
        <strong>Album</strong>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>
</header>

<main>

  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Accueil de Boutique</h1>
        <p class="lead text-muted"><?php ?></p>
        <p>
          <a href="#" class="btn btn-primary my-2">Main call to action</a>
          <a href="#" class="btn btn-secondary my-2">Secondary action</a>
        </p>
      </div>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">

    <h3 class="alert alert-primary">Il y les Products le plus récent</h3>
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <?php
          require_once 'inc/init.php'; // APPEL DES Connection, Session, FONCTIONS
          //jeVar_dump($_SESSION);

          $bddlink = $pdoBTQ->query ( "SELECT * FROM produits ORDER BY id_produit DESC" );
          //$product = $bddlink->rowCount();
          while($pdlink=$bddlink->fetch(PDO::FETCH_ASSOC)){
            echo "<div class=\"col\">";
            echo "<div class=\"card shadow-sm\">";
            echo "<img src=\"$pdlink[photo]\" class=\"img-fluid\" alt=\"Logo\">";

            echo "<div class=\"card-body\">";
                echo "<p class=\"card-text alert alert-info\">Prix : ".$pdlink['prix']. "€, *Ref : " .$pdlink['reference']. ", Color : " .$pdlink['couleur']."</p>";
                echo "<p class=\"card-text alert-primary\">Categorie : ".$pdlink['categorie']. "</p>";
                echo "<p class=\"card-text\">Discription : ".$pdlink['description']. "</p>";
                echo "<div class=\"d-flex justify-content-between align-items-center\">";
                echo "<div class=\"btn-group\">";
                echo "<button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">View</button>";
                echo "<button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Edit</button>";
                echo "</div>";
                echo "<small class=\"text-muted\">9 mins</small>";
                    echo "</div>";
                echo "</div>";
              echo "</div>";
            echo "</div>";
          }
        ?>
      </div>
        
    </div>
  </div>

</main>

<footer class="text-muted py-5">
  <div class="container">
    <p class="float-end mb-1">
      <a href="#">Back to top</a>
    </p>
    <p class="mb-1">Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
    <p class="mb-0">New to Bootstrap? <a href="/">Visit the homepage</a> or read our <a href="../getting-started/introduction/">getting started guide</a>.</p>
  </div>
</footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


      
  </body>
</html>