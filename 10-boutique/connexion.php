<?php
// require connexion, session etc.
require_once 'inc/init.inc.php';

// debug($_SESSION);
// debug(strlen(' ma grand mère fait du vélo plus vite que moi '));

debug($_POST);
if (!empty ($_POST)) {

    if (empty($_POST['pseudo'])) { 
        $contenu .='<div class="alert alert-danger"> Le pseudo est requis !</div>';
    }

    if (empty($_POST['mdp'])) { 
        $contenu .='<div class="alert alert-danger"> Le mdp est requis !</div>';
    }

    if (empty($_contenu)) {
        $resultat = executeRequete("SELECT * FROM membres WHERE pseudo = :pseudo ", 
            array(
                ':pseudo' => $_POST['pseudo'],
            ));
            if ($resultat->rowCount() == 1) {
            $membre = $resultat->fetch(PDO ::FETCH_ASSOC);
            debug($membre);

            if (password_verify($_POST['mdp'], $membre['mdp'])){
                echo 'Bienvenue';
                $_SESSION['membre'] = $membre;

                debug($_SESSION);

                header('location:profil.php');
                exit();
            }
        }
    }
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">
    <!-- Bootstrap core CSS -->
    <link href="/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Favicons
    <link rel="apple-touch-icon" href="/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.1/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#7952b3"> -->

    <title>Connexion</title>
</head>

<body class="text-center">
    <div class="row">
        <main class="form-signin col-6 mx-auto mt-5 pt-5 pb-5 bg-light border border-secondary">
            <form action="" method="POST">
            <?php echo $contenu; ?>
                <h1 class="h3 fw-normal">Connectez-vous</h1>
                <div class="form-floating m-1">
                    <input type="text" name="pseudo" class="form-control" id="pseudo">
                    <label for="pseudo"> pseudo</label>
                </div>
                <div class="form-floating m-1">
                    <input type="password" name="mdp "class="form-control" id="mdp">
                    <label for="mdp">Mot de passe</label>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Connexion</button>
            </form>
        </main>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>

