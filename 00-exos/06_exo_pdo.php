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
      <h1 class="display-4 text-center">CoursPHP - Exo - Get</h1>
      <p class="lead">...</p>
    </header> 
    <!-- fin container-fluid header  -->

    <div class="container bg-white mt-2 mb-2 m-auto p-2">
      <section class="row">
        <div class="col-md-8 bg-light">
        <h2>Exo PDO du 06 janvier : requêtes préparées</h2>
        <ul>
            <li>Require des fonctions</li>
            <li>Se connecter à la BDD entreprise</li>
            <li>Afficher dans une ul les noms/prenoms des employes du service commercial, trier par salaire du plus petit au plus grand</li>
            <li>Utiliser une requête préparée avec bindParam</li>
            <li>Afficher le nombre de commerciaux</li>
            <li>Chercher ensuite sur le Web comment mettre le salaire au format français. Ex. 3 000,00 euros</li>
        </ul>

        <?php 
            // connexion à la BDD
            $pdoENT = new PDO( 'mysql:host=localhost;dbname=entreprise',// hôte et nom de la BDD
            'root',// le pseudo 
            //'',// le mot de passe pour pc
            'root',// le mdp pour MAC avec MAMP
            array(
              PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,// pour afficher les erreurs SQL dans le navigateur
              PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',// pour définir le charset des échanges avec la BDD
            ));
            // debug($pdoENT);
            // debug(get_class_methods($pdoENT));// ici nous aurons la liste des méthodes présentes dans l'objet $pdoENT

            $requete = $pdoENT->query("SELECT nom, prenom, salaire, service FROM employes WHERE service = 'commercial' ORDER BY salaire ASC");
            debug($requete);

            // On cherche plusieur resultat
            $service= 'commercial';

                //1
                $requete = $pdoENT->prepare("SELECT * FROM employes WHERE service = :commercial");
                //2 on lie le marqueur, on fait la liaison
                $requete->bindParam(':commercial', $commercial);
                $requete->execute();
                $commercial=$requete->rowCount();
                debug ($requete);

                echo '<h4>Il y a '.$commercial.' résultats </h4>';
                
                while($informations = $resultat->fetch(PDO::FETCH_ASSOC)){
                echo "<p class=\"alert alert-dark w-50\"> Nom : " . $informations['prenom'] . " " . $informations['nom'] . " - ID : " . $informations['id_employes'] . "<BR>";
                echo "Salaire : " . $informations['salaire'] . " Euros - Service : " . $informations['service'] . "<BR>";
                echo "Date d'embauche : " . $informations['date_embauche'] . " " . $informations['sexe'] . "</p>";
                }
                echo '<hr>';

                // <?php

                // $requete = $pdoENT->query("SELECT  DISTINCT  service FROM employes ;"); /* SELECT * FROM employes ORDER BY nom */

                // $service = $requete->rowCount(); /* Compter le nombre d'employer dans l'entreprise */

                // debug($service);
                // echo "<p>Il y a $service dans l'entreprise</p>";


                // echo "<ul>";
                // while ($ligne = $requete->fetch(PDO::FETCH_ASSOC)) {

                //     echo '<li>' . $ligne['service'] . '</li>';
                // }
                // echo "</ul>";


                // // $nbr_employes = $requete->rowCount(); /* Compter le nombre d'employer dans l'entreprise */

                // debug($nbr_employes);

                // ?>





            {
              // $infos fabrique un tableau à chaque tour de boucle pour chaque enregistrement, nous pouvons ensuite les parcourir 
              // debug($infos);
              // echo "<ul>";

              // echo "</ul>";

            //   echo "<tr>";
            //   // if ... else
            //   if( $infos['sexe'] == 'f') {
            //     echo "<td>Mme ";
            //   } else {
            //     echo "<td>M. ";
            //   }
            //  echo $infos['nom']. " " .$infos['prenom']. "</td><td>" .$infos['service']. "</td></tr>";
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