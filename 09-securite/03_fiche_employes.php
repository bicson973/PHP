<?php 
// 1 FONCTIONS
require_once '../inc/functions.php';  

// 2 CONNEXION BDD
$pdoENT = new PDO( 'mysql:host=localhost;dbname=entreprise',// hôte nom BDD
              'root',// pseudo 
              // '',// mot de passe
              'root',// mdp pour MAC avec MAMP
              array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,// afficher les erreurs SQL dans le navigateur
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',// charset des échanges avec la BDD
              ));
              // debug($pdoENT);
              // debug(get_class_methods($pdoENT));

              debug($_GET);
              // if (isset($_GET['id_employes'])) {
              // }
// 3) Reception des informations $Get 
if (isset ($_GET['id_employes'])){
  debug($_GET);

  $resultat = $pdoENT->prepare("SELECT * FROM employes WHERE id_employes = :id_employes");
  $resultat->execute(array (
    ':id_employes' => $_GET['id_employes']
  ));
  debug($resultat->rowCount());
  if ($resultat->rowCount() == 0){ /* Si le rowCount est égal à 0 c'est qu'il y n'y a pas d'employé */
    header('location:02_employes.php'); /* Redirection vers la page de départ */
    exit(); /* Arrêt du script */
  }

  $fiche = $resultat->fetch(PDO::FETCH_ASSOC);
  debug($fiche);
} else {
  header('location:02_employes.php'); /* Si j'arrive sur la page sans rien dans 'lurl */
  exist(); /* Arrêt du script */
}
?>

<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>CoursPHP - Chapitre XX - NUMERO TITRE</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,400;0,700;1,400&family=Montserrat:ital,wght@0,400;0,500;1,400&display=swap" rel="stylesheet">

    <!-- mes styles -->
    <link rel="stylesheet" href="../css/style.css">
  </head>
  <body>  
  <main>
    <header class="container-fluid f-header p-2">
      <h1 class="display-4 text-center">CoursPHP - Chapitre XX - NUMERO TITRE</h1>
      <p class="lead"><?php echo $fiche['prenom']; ?></p>
    </header> 
    <!-- fin container-fluid header  -->
      <div class="container bg-white mt-2 mb-2 m-auto p-2">
  
        <section class="row">
  
          <div class="col-md-6">

          </div>
          <!-- fin col -->
  
          <div class="col-md-6">
            <h2>Mise à jour de l'employé</h2>
            <div class="mb-3">
              <form action="" methode="POST">
                <label for="prenom">Prénom</label>
                <input type="text" name="prenom" id="prenom" class="form-control" value="<?php echo $fiche['prenom']; ?>">
              </form>
            </div>
            <div class="mb-3">
                <label for="nom">Nom</label>
                <input type="text" name="nom" id="nom" class="form-control" value="<?php echo $fiche['nom']; ?>">
            </div>
            <div class="mb-3">
                <label for="sexe" class="form-label">Sexe</label>
                <br>
                <input type="radio" name="sexe" id="sexe" value="<?php echo $fiche['sexe']; ?>">
                <input type="radio" name="sexe" value="f" <?php if (isset($fiche['sexe']) && $fiche['sexe'] =='f') echo ' checked';//le 1er bouton sera checked et le second le sera SI on f depuis $fiche ?> id="sexe"> Homme

            </div>
            <div class="mb-3">
                <label for="date_embauche" class="form-label">Date embauche</label>
                <input type="date" name="date_embauche" id="date_embauche" class="form-control" value="<?php echo $fiche['date_embauche']; ?>">
            </div>
            <div class="mb-3">
                <label for="salaire" class="form-label">Salaire</label>
                <input type="text" name="salaire" id="salaire" class="form-control" value="<?php echo $fiche['salaire']; ?>">
            </div>
            
          </div>
          <!-- fin col -->
          </section>
        <!-- fin row -->  
      </div>
      <!-- fin container  -->
    </main>
      <?php require_once '../inc/footer.inc.php';// FOOTER ?>
      <!-- Option 1: Bootstrap Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>