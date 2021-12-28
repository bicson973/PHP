<?php require_once '../inc/functions.php'; // APPEL DES FONCTIONS ?>
<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>CoursPHP - Exo - Form</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,400;0,700;1,400&family=Montserrat:ital,wght@0,400;0,500;1,400&display=swap" rel="stylesheet">
    
    <!-- mes styles -->
    <link rel="stylesheet" href="../css/style.css">

  </head>
  <body>
    <header class="container-fluid f-header p-2">
      <h1 class="display-4 text-center">CoursPHP - Exo - Form</h1>
      <p class="lead">Exercice traitement d'un formulaire</p>
    </header> 
    <!-- fin container-fluid header  -->

    <div class="container bg-white mt-2 mb-2 m-auto p-2">

      <section class="row">

        <div class="col-md-8 bg-light">
          <h2>formulaire</h2>
          <ul>
                <li>EXO : faire un formulaire avec les champs prénoms, nom, email, adresse, code postal ville et téléphone<br>
                le champs prénom n'est pas obligatoire</li>
                <li>Le traitement du formulaire se fait dans un second fichier nommé 04_traitement_form.php</li>
                <li>l'attribut action de la balise form contient donc le nom de ce fichier placé dans le même dossier que notre page avec le form</li>
            </ul>
            <hr>
            <form action="04_traitement_form.php" method="POST">
            <div class="form-group mb-2">
                    <label for="prenom">Prénom</label>
                    <input type="text" name="prenom" id="prenom" class="form-control">
                </div>
                <div class="form-group mb-2">
                    <label for="nom">Nom</label>
                    <input type="text" name="nom" id="nom" class="form-control" required>
                </div>
                <div class="form-group mb-2">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" required>
                </div>
                <div class="form-group mb-2">
                    <label for="adresse">Adresse postale</label>
                    <textarea name="adresse" id="adresse" class="form-control" required></textarea>
                </div>
                <div class="form-group mb-2">
                    <label for="code_postal">Code postal</label>
                    <input type="text" name="code_postal" id="code_postal" class="form-control" required>
                </div>
                <div class="form-group mb-2">
                    <label for="ville">Ville</label>
                    <input type="text" name="ville" id="ville" class="form-control" required>
                </div>
                
                <div>
                    <div class="bouton">
                        <input type="submit" value="Envoyer" class="btn btn-primary">
                    </div>
                </div>
            </form>
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