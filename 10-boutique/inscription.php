<?php 
// require connexion, session etc.
require_once 'inc/init.inc.php';

// debug($_SESSION);
// debug(strlen(' ma grand mère fait du vélo plus vite que moi '));

if ( !empty($_POST) ) {
    // debug($_POST);

    if ( !isset($_POST['civilite']) || $_POST['civilite'] != 'm' && $_POST['civilite'] != 'f' ) { // && ET
        $contenu .='<div class="alert alert-danger">La civilité n\'est pas valable !</div>';
    }
    if ( !isset($_POST['prenom']) || strlen($_POST['prenom']) < 2 || strlen($_POST['prenom']) > 20) {
        // !isset n'est pas isset, .= concaténation puis affectation, || ou, strlen string length longueur chainbe de caractère
        $contenu .='<div class="alert alert-danger">Votre prénom doit faire entre 2 et 20 caractères</div>';
    }
    if ( !isset($_POST['nom']) || strlen($_POST['nom']) < 2 || strlen($_POST['nom']) > 20) {
        $contenu .='<div class="alert alert-danger">Votre nom de famille doit faire entre 2 et 20 caractères</div>';
    }

    if ( !isset($_POST['email']) || strlen($_POST['email']) > 50 || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        // filter_var filtre une variable, et dans ce filtre on passe la constante prédéfinie (EN MAJUSCULE) qui vérifie que c'est bien au format email
        $contenu .='<div class="alert alert-danger">Votre email n\'est pas conforme !</div>';
    }

    if ( !isset($_POST['pseudo']) || strlen($_POST['pseudo']) < 4 || strlen($_POST['pseudo']) > 20) {
        $contenu .='<div class="alert alert-danger">Votre pseudo doit faire entre 4 et 20 caractères</div>';
    }

    if ( !isset($_POST['mdp']) || strlen($_POST['mdp']) < 4 || strlen($_POST['mdp']) > 20) {
        $contenu .='<div class="alert alert-danger">Votre mot de passe doit faire entre 4 et 20 caractères</div>';
    }

    if ( !isset($_POST['adresse']) || strlen($_POST['adresse']) < 4 || strlen($_POST['adresse']) > 50) {
        $contenu .='<div class="alert alert-danger">Votre adresse doit faire entre 4 et 50 caractères</div>';
    }

    if ( !isset($_POST['code_postal']) || !preg_match('#^[0-9]{5}$#', $_POST['code_postal']) ) {
        // preg_match vérifie si la chaîne de caractère a le format autorisé
        $contenu .='<div class="alert alert-danger">Le code postal n\'est pas valable !</div>';
    }
    
    if ( !isset($_POST['ville']) || strlen($_POST['ville']) < 1 || strlen($_POST['ville']) > 50) {
        $contenu .='<div class="alert alert-danger">Votre ville doit faire entre 1 et 50 caractères</div>';
    }

    if (empty($contenu)) {// si la variable est vide c'est qu'il n'y a aucune erreur dans $_POST
        $membre = executeRequete( " SELECT * FROM membres WHERE pseudo = :pseudo ", 
                                        array(':pseudo' => $_POST['pseudo']));

        if ($membre->rowCount() > 0) {
            $contenu .='<div class="alert alert-danger">Le pseudo est indisponible veuillez en choisir un autre !</div>';
        } else {
            $mdp = password_hash($_POST['mdp'], PASSWORD_DEFAULT);//bcrypt

            $succes = executeRequete( " INSERT INTO membres (civilite, prenom, nom, email, pseudo, mdp, adresse, code_postal, ville, statut) VALUES (:civilite, :prenom, :nom, :email, :pseudo, :mdp, :adresse, :code_postal, :ville, 0) ",
            array(
                ':civilite' => $_POST['civilite'],
                ':prenom' => $_POST['prenom'],
                ':nom' => $_POST['nom'],
                ':email' => $_POST['email'],
                ':pseudo' => $_POST['pseudo'],
                ':mdp' => $mdp,
                ':adresse' => $_POST['adresse'],
                ':code_postal' => $_POST['code_postal'],
                ':ville' => $_POST['ville'],
            ));
            if ($succes) {
                $contenu .='<div class="alert alert-success">Vous êtes bien inscrit à La Boutique !<br> <a href="connexion.php">Cliquez ici pour vous connecter</a></div>';
            } else {
                $contenu .='<div class="alert alert-danger">Erreur lors de l\'inscription !</div>';
            }
        }
    }
}

?> 

<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>La boutique - Créez votre compte</title>
  </head>
  <body class="m-2">
   <header class="container bg-primary text-white p-4 ">
        <h1>Créez votre compte</h1>
   </header>

   <div class="container">
        <section class="row m-4 justify-content-center">
             
            <div class="col-md-6 p-2 bg-light border border-primary">
                <?php echo $contenu; ?>
                <form action="" method="POST">
                <div class="form-group mt-2">
                    <label for="civilite">Civilité *</label>
                    <input type="radio" name="civilite" value="m" checked> Homme
                    <input type="radio" name="civilite" value="f"> Femme            
                </div>
                <div class="row">
                    <div class="col form-group mt-2">
                        <label for="prenom">Prénom *</label>
                        <input type="text" name="prenom" id="prenom" value="" class="form-control"> 
                    </div>
                    <div class="col form-group mt-2">
                        <label for="nom">Nom *</label>
                        <input type="text" name="nom" id="nom" value="" class="form-control">
                    </div>
                </div>
                <div class="form-group mt-2">
                    <label for="email">Email *</label>
                    <input type="text" name="email" id="email" value="" class="form-control">
                </div>
                <div class="form-group mt-2">
                <label for="pseudo">Choisissez un pseudo *</label>
                <input type="text" name="pseudo" id="pseudo" value="" class="form-control"> 
            </div>
            <div class="form-group mt-2">
                <label for="mdp">Mot de passe *</label>
                <input type="password" name="mdp" id="mdp" value="" class="form-control">
                <small class="bg-warning p-1">Votre mot de passe doit contenir entre 4 et 20 caractères</small>
            </div>
            <div class="form-group mt-2">
                <label for="adresse">Adresse</label>
                <textarea name="adresse" id="adresse" class="form-control"></textarea>
            </div>
            <div class="row">
                <div class="col form-group mt-2">
                    <label for="code_postal">Code postal</label>
                    <input type="text" name="code_postal" id="code_postal" value="" class="form-control"> 
                </div>
                <div class="col form-group mt-2">        
                    <label for="ville">Ville</label>
                    <input type="text" name="ville" id="ville" value="" class="form-control"> 
                </div>
            </div>
            <div class="form-group mt-2">
                <input type="submit" value="Inscription" class="btn btn-sm btn-success"> 
            </div>
                </form>
            </div>
        <!-- fin col -->
        </section>
        <!-- fin row -->
   </div>

	

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>