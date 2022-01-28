<?php 
// require connexion, session etc.
require_once 'inc/init.inc.php';

debug($_SESSION);
debug(estConnecte());
debug(estAdmin());

if (!estConnecte()){ /* accès à la page autorisé si lorsqu'on est connecté */
    header('location:connexion.php');
}

?> 

<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>La boutique - Bienvenue </title>
</head>
<body>
    <header class="container bg-primary text-white p-4 ">
        <h1 class="display-4">Profil </h1>
        <p class="lead">Bonjour <?php echo $_SESSION['membre']['prenom']; ?></p>
    </header>

    <?php 
    
    if(estAdmin()) {
        echo '<p>Vous êtes administrateur</p>';
        echo '<a class="btn btn-primary" href="admin/index.p">Espace admin</a>'; 
    } else {
        echo '<p>Vous êtes connecté rendez-vous à la Boutique</p>';
        echo '<a class="btn btn-succes" href="accueil.php">Retour à la boutique</a>';
    }

    ?>
   
</body>
</html>