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

// 3 RÉCEPTION DES INFORMATIONS D'UN EMPLOYÉ AVEC $_GET

// debug($_GET);
if ( isset($_GET['id_employes']) ) {// on demande le détail d'un employé
      // debug($_GET);
      $resultat = $pdoENT->prepare( " SELECT * FROM employes WHERE id_employes = :id_employes " );
      $resultat->execute(array(
        ':id_employes' => $_GET['id_employes']// on associe le marqueur vide à l'id_employes
      ));
      // debug($resultat->rowCount());
		if ($resultat->rowCount() == 0) { // si le rowCount est égal à 0 c'est qu'il n'y a pas d'employé
			header('location:02_employes.php');// redirection vers la page de départ
			exit();// arrêtedu script
		}  
		$fiche = $resultat->fetch(PDO::FETCH_ASSOC);//je passe les infos dans une variable
		// debug($fiche);// ferme if isset accolade suivante
		} else {
		header('location:02_employes.php');// si j'arrive sur la page sans rien dans l'url
		exit();// arrête du script
	}

//4 TRAITEMENT DE MISE À JOUR D'UN EMPLOYÉ

if ( !empty($_POST) ) {//not empty
    // debug($_POST);
  $_POST['prenom'] = htmlspecialchars($_POST['prenom']);// pour se prémunir des failles et des injections SQL
	$_POST['nom'] = htmlspecialchars($_POST['nom']);
	$_POST['sexe'] = htmlspecialchars($_POST['sexe']);
	$_POST['service'] = htmlspecialchars($_POST['service']);
	$_POST['date_embauche'] = htmlspecialchars($_POST['date_embauche']);
	$_POST['salaire'] = htmlspecialchars($_POST['salaire']);

	$resultat = $pdoENT->prepare( " UPDATE employes SET prenom = :prenom, nom = :nom, sexe = :sexe, service = :service, date_embauche = :date_embauche, salaire = :salaire WHERE id_employes = :id_employes " );// requete préparée avec des marqueurs

	$resultat->execute( array(
		':prenom' => $_POST['prenom'],
		':nom' => $_POST['nom'],
		':sexe' => $_POST['sexe'],
		':service' => $_POST['service'],
		':date_embauche' => $_POST['date_embauche'],
		':salaire' => $_POST['salaire'],
		':id_employes' => $_GET['id_employes'],

	));
	header('location:02_employes.php');
	exit();
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
  <?php require_once '../inc/navbar.inc.php';// NAVBAR ?>
  <main>
    <header class="container-fluid f-header p-2">
      <h1 class="display-4 text-center">CoursPHP - Chapitre XX - NUMERO TITRE</h1>
      <p class="lead"><?php echo $fiche['prenom']; ?></p>
    </header> 
    <!-- fin container-fluid header  -->
      <div class="container bg-white mt-2 mb-2 m-auto p-2">
  
        <section class="row">
  
          <div class="col-md-6">
			  <!-- faire une card bootstrap avec toues les infos d'un employé -->
            <?php 
			echo '<p class="bg-cyan">' .$fiche['nom']. ' ' .$fiche['prenom']. ', ' .$fiche['service']. '. Date d\'embauche : ' .$fiche['date_embauche']. '</p>';
			?>

          </div>
          <!-- fin col -->
  
          <div class="col-md-6">
            <h2>Mise à jour de l'employé</h2>
			<form action="" method="POST">

			<div class="mb-3">
				<label for="prenom" class="form-label">Prénom</label>
				<input type="text" name="prenom" id="prenom" class="form-control" value="<?php echo $fiche['prenom']; ?>">
			</div>

			<div class="mb-3">
				<label for="nom" class="form-label">Nom</label>
				<input type="text" name="nom" id="nom" class="form-control" value="<?php echo $fiche['nom']; ?>">
			</div>

			<div class="mb-3">
            <!-- https://getbootstrap.com/docs/5.1/forms/checks-radios/ -->
                <label for="sexe" class="form-label">Sexe </label><br>
                <input type="radio" name="sexe" value="m" id="sexe" checked> Homme <br>
                <input type="radio" name="sexe" value="f" <?php if (isset($fiche['sexe']) && $fiche['sexe'] =='f') echo ' checked';//le 1er bouton sera checked et le second le sera SI on f depuis $fiche ?> id="sexe"> Femme
      </div>

			<div class="mb-3">
                <label for="service" class="form-label">Service</label>
                <select name="service" id="service">
					<!-- strcmp() string comparaison strcmp est égal à 1 //  !strcmp() est différent de 0 -->
					<!-- https://www.php.net/manual/fr/function.strcmp.php -->
                    <option value="commercial"<?php if (!strcmp("commercial", $fiche['service'])) { echo " selected"; }?>>Commercial</option>
                    <option value="communication"<?php if (!strcmp("communication", $fiche['service'])) { echo " selected"; }?>>Communication</option>
                    <option value="comptabilite"<?php if (!strcmp("comptabilite", $fiche['service'])) { echo " selected"; }?>>Comptabilité</option>
                    <option value="direction"<?php if (!strcmp("direction", $fiche['service'])) { echo " selected"; }?>>Direction</option>
                    <option value="informatique"<?php if (!strcmp("informatique", $fiche['service'])) { echo " selected"; }?>>Informatique</option>
                    <option value="juridique"<?php if (!strcmp("juridique", $fiche['service'])) { echo " selected"; }?>>Juridique</option>
                    <option value="production"<?php if (!strcmp("production", $fiche['service'])) { echo " selected"; }?>>Production</option>
                    <option value="secretariat"<?php if (!strcmp("secretariat", $fiche['service'])) { echo " selected"; }?>>Secrétariat</option>
                </select>
      </div>

			<div class="mb-3">
				<label for="date_embauche" class="form-label">Date d'embauche</label>
				<input type="date" name="date_embauche" id="date_embauche" class="form-control" value="<?php echo $fiche['date_embauche']; ?>">
			</div>

			<div class="mb-3">
				<label for="salaire" class="form-label">Salaire</label>
				<input type="text" name="salaire" id="salaire" class="form-control" value="<?php echo $fiche['salaire']; ?>">
			</div>

			<button type="submit" class="btn btn-primary">Mise à jour</button>
			</form>

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