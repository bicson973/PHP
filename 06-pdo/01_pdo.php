<?php require_once '../inc/functions.php'; ?> <!-- APPEL DE FONCTION -->

<!doctype html>
<html lang="fr">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>CoursPHP - Chapitre 06 - 01 PDO</title>

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
        <h1 class="display-4 text-center">CoursPHP - Chapitre 06 - 01 PDO</h1>
        <p class="lead">Connexion à notre BDD avec PDO</p>
      </header> 
      <!-- fin container-fluid header  -->

      <!-- ======================================== CONTENU PRINCIPALE ======================================= -->
      <div class="container bg-white mt-2 mb-2 m-auto p-2">
        <section class="row p-2">
          <div class="col-md-5 bg-teal">
            <h2>1- Se connecter à la BDD</h2>
            <p><abbr title="PHP Data Object">PDO</abbr> est l'acronyme de PHP Data Object</p>
            <p>
              Pour se connecter à la BDD en PDO on définit une variable de connexion
              <br>
              <code>
                $pdoENT = new PDO( 'mysql:host=localhost;dbname=entreprise',<br>
                'root',
                <br>
                '', // mdp pour PC XAMP
                <br>
                'root', // mdp pour MAC MAMP
                <br>
                array(
                <br>
                PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
                <br>
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
                <br>
                ));
                <br>
              </code>
            </p>
            <!-- ======================================== FONCTION PHP ======================================= -->
            <?php 
              // connexion à la BDD
              $pdoENT = new PDO( 'mysql:host=localhost;dbname=entreprise', /* hôte et nom de la BDD */
              'root', /* le pseudo  */
              // '',// le mot de passe PC avec XAMP
              'root', /* le mdp pour MAC avec MAMP */
              array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, /* pour afficher les erreurs SQL dans le navigateur */
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', /* pour définir le charset des échanges avec la BDD */
              ));
              // debug($pdoENT);
              // debug(get_class_methods($pdoENT));// ici nous aurons la liste des méthodes présentes dans l'objet $pdoENT
            ?>
            <!-- ======================================== FIN FONCTION PHP ======================================= -->
          </div>
          <!-- fin col -->
  
          <div class="col-md-7 bg-cyan">
            <h2>2- Faire des requêtes avec <code>exec()</code></h2>
            <p>La méthode exec() est utilisée pour faire des requêtes qui ne retournent pas de résultats : INSERT, DELETE, UPDATE</p>
            <ul>
              <li>Succès ; le var_dump() de la variable $requete donnera le nombre de lignes affectées par la requête = X </li>
              <li>Echec : false = 0</li>
            </ul>
            <!-- ======================================== FONCTION PHP ======================================= -->
            <?php 
              // On va insérer un nouvel employé dans BDD entreprise
              // Toutes les lignes sont commentées afin de ne pas faire de requêtes inutiles en BDD
              // Ma requête SLQ que j'aurai testé avant dans phpMyAdmin
              // INSERT INTO employes (prenom, nom, sexe, service, date_embauche, salaire) VALUES ('Jean', 'Saisrien', 'm', 'informatique', '2022-01-03', '2000')
  
              // $requete = $pdoENT->exec( " INSERT INTO employes (prenom, nom, sexe, service, date_embauche, salaire) VALUES ('Jean', 'Saisrien', 'm', 'informatique', '2022-01-03', '2000') " );
              // debug($requete);
  
              // $requete = $pdoENT->exec( " DELETE FROM employes WHERE prenom='Jean' AND nom='Saisrien' " );
              // debug($requete);
              // echo "Dernier id généré en BDD : " .$pdoENT->lastInsertId();
              // $requete = $pdoENT->exec( " UPDATE employes SET nom='COCO' WHERE nom='Saisrien' " );
            ?>
            <!-- ======================================== FIN FONCTION PHP ======================================= -->
          </div>
          <!-- fin col -->
        </section>
        <!-- fin row -->
  
        <section class="row p-2">
          <div class="col-md-12 bg-light">
            <h2>3- Faire des requêtes avec <code>query()</code></h2>
            <p>La méthode <code>query()</code> est utilisée pour faire des requêtes qui retournent un ou plusieurs résultats : SELECT, mais aussi DELETE, UPDATE et INSERT </p>
            <p>Pour information on peut mettre dans les paramètres de fetch() :</p>
            <ul>
              <li>PDO::FETCH_ASSOC : pour obtenir un tableau associatif</li>
              <li>PDO::FETCH_NUM :  pour obtenir un tableau avec des indices numériques</li>
              <li>PDO::FETCH_OBJ : pour obtenir un dernier objet</li>
              <li>ou encore des parenthèses vides pour obtenir un mélange de tableau associatif et numérique</li>
            </ul>
            <!-- ======================================== FONCTION PHP ======================================= -->
            <?php 
              // SELECT * FROM employes WHERE prenom='Fabrice'
              // 1 on demande avec query() des informations à la BDD car il y a un ou plusieurs résultats 
              $requete = $pdoENT->query ( " SELECT * FROM employes WHERE prenom='Fabrice' " );
              // debug($requete);
              // 2 nous avons un objet $requete nous ne voyons pas encore les données concernant Fabrice, pour y accéder nous devons utiliser une méthode de $requete qui s'appelle fetch()
              $ligne = $requete->fetch( PDO::FETCH_ASSOC );
              // 3 avec fetch() on transforme l'objet $requete, avec le paramètre PDO::FETCH_ASSOC en un array associatif que l'on passe dans la variable $ligne  : on y trouve les indices, les noms des colonnes de la table, et les valeurs correspondantes
              // debug($ligne);
  
              echo "<p> Nom : " .$ligne['prenom']. " " .$ligne['nom']. " - ID : " .$ligne['id_employes']. "<br>";
              echo "Salaire : " .$ligne['salaire']. " Euros - Service : " .$ligne['service']. "<br>";
              echo "Date d'embauche : " .$ligne['date_embauche']. " - Sexe : " .$ligne['sexe']. "</p>";
  
              // exo affichez les infos de l'employes dont l'id est 592
  
              $requete = $pdoENT->query ( " SELECT * FROM employes WHERE id_employes = 592 " );
              // debug($requete);
              $ligne = $requete->fetch( PDO::FETCH_ASSOC );
              // debug($ligne);
  
              echo "<p class=\"alert alert-success w-50\"> Nom : " .$ligne['prenom']. " " .$ligne['nom']. " - ID : " .$ligne['id_employes']. "<br>";
              echo "Salaire : " .$ligne['salaire']. " Euros - Service : " .$ligne['service']. "<br>";
              echo "Date d'embauche : " .$ligne['date_embauche']. " - Sexe : " .$ligne['sexe']. "</p>";
            ?>
            <!-- ======================================== FIN FONCTION PHP ======================================= -->
          </div>
          <!-- fin col -->
          <div class="col-md-4 bg-cyan">
            <h2>4- Faire des requêtes avec <code>query()</code> et afficher plusieurs résultats</h2>
            <!-- ======================================== FONCTION PHP ======================================= -->
            <?php 
              // SELECT * FROM employes ORDER BY nom
              $requete = $pdoENT->query(" SELECT * FROM employes ORDER BY nom ");
              $nbr_employes = $requete->rowCount();
              // debug($nbr_employes);

              echo "<p>Il y a $nbr_employes employes dans l'entreprise<br>";
              while ( $ligne = $requete->fetch(PDO::FETCH_ASSOC)) {
                echo "Nom : " .$ligne['prenom']. " " .$ligne['nom']." -  service : " .$ligne['service']. "<br>";
              }
              echo '</p>';
  
              // EXO afficher la liste des différents services dans une ul en mettant un service par li 
              // afficher également le nombre de service
              // SELECT DISTINCT(service) FROM employes ORDER BY service
              $requete = $pdoENT->query(" SELECT DISTINCT(service) FROM employes ORDER BY service ");
              $nbr_services = $requete->rowCount();
              // debug($nbr_services);

              echo "<div class=\"bg-white\">";
              echo "<p>Il y a $nbr_services services dans l'entreprise</p>";
              echo "<ul>";
              while ( $ligne = $requete->fetch(PDO::FETCH_ASSOC)) {
                echo "<li> " .$ligne['service']. "</li>";
              }
              echo "</ul></div>";
            ?>
            <!-- ======================================== FIN FONCTION PHP ======================================= -->
  
            <!-- <ul class="alert alert-success">
              <?php            
                // $requete = $pdoENT->query(" SELECT DISTINCT(service) FROM employes ORDER BY service ");
                // // $nbr_services = $requete->rowCount();
                // // debug($nbr_services);
                // while ( $ligne = $requete->fetch(PDO::FETCH_ASSOC)) {
                //   echo "<li> " .$ligne['service']. "</li>";
                // }
              ?>
            </ul> -->
          </div>
          <div class="col-md-8 bg-yellow">
            <!-- Exo 1 dans un h2 afficher la phrase suivante "il y X employés dans l'entreprise -->
            <!-- puis afficher TOUTES les informations des employés dans un tableau HTML -->
            <!-- la requête SQL est triée par sexe puis par nom de famille -->
  
            <?php 
              $requete = $pdoENT->query(" SELECT * FROM employes ORDER BY sexe ASC, nom ASC ");
              $nbr_employes = $requete->rowCount();
              // debug($nbr_employes);
              echo "<h4>ex. Il y a $nbr_employes employés dans l'entreprise</h4>";
              echo "<table class=\"table table-striped\">";
                echo "<tr>";
                  echo "<th>Id</th>";
                  echo "<th>Nom, prénom</th>";
                  echo "<th>Service</th>";
                  echo "<th>Salaire mensuel</th>";
                  echo "<th>Date d'embauche</th>";
                echo "</tr>";
                  while ( $ligne = $requete->fetch(PDO::FETCH_ASSOC)) {
                    echo "<tr><td> n° " .$ligne['id_employes']. "</td>"; 
  
                    // if ... else
                    if( $ligne['sexe'] == 'f') {
                      echo "<td>Mme ";
                    } else {
                      echo "<td>M. ";
                    }
  
                    echo $ligne['prenom']. " " .$ligne['nom']. "</td>";
                    echo "<td>" .$ligne['service']. "</td>";
                    echo "<td>" .$ligne['salaire']. " € </td>";
                    echo "<td>" .$ligne['date_embauche']. "</td></tr>";
                  }
              echo "</table>";
              ?>  
          </div>
        <!-- fin col -->
        </section>
        <!-- fin row -->
        <section class="row p-2">
          <div class="col-md-10 bg-teal">
            <h4>ex.</h4>
              <table class="table table-striped table-success">
                <tr>                
                  <th>Nom, prénom</th>
                  <th>Service</th>
                </tr>
              <?php 
                foreach ( $pdoENT->query( " SELECT nom, prenom, sexe, service FROM employes ORDER BY sexe ASC, nom ASC " ) as $infos ) {
                  // $infos fabrique un tableau à chaque tour de boucle pour chaque enregistrement, nous pouvons ensuite les parcourir 
                  // debug($infos);
                  echo "<tr>";
                  // if ... else
                  if( $infos['sexe'] == 'f') {
                    echo "<td>Mme ";
                  } else {
                    echo "<td>M. ";
                  }
                 echo $infos['nom']. " " .$infos['prenom']. "</td><td>" .$infos['service']. "</td></tr>";
                }
              ?> 
              </table>
                
              <hr>

              <?php 
                    $resultat = $pdoENT->query("SELECT * FROM employes ORDER BY id_employes");
                    // les lignesn d'en-tête du tableau
                    echo '<table class="table table striped table-info">';
                    echo '<thead><tr>';
                    echo '<th>ID</th>';
                    echo '<th>Nom</th>';
                    echo '<th>Prénom</th>';
                    echo '<th>Sexe</th>';
                    echo '<th>Service</th>';
                    echo '<th>Date d\'entrée</th>';
                    echo '<th>Salaire</th>';
                    echo '</tr></thead>';
                    echo '<tbody>';

                    // boucle while avec foreach
                    while ( $employes = $resultat->fetch(PDO::FETCH_ASSOC)) {
                        echo '<tr>';
                        foreach ($employes as $informations) {
                            echo '<td>' .$informations. '</td>';
                        }
                        echo '</tr>';
                    }
                    echo '</tbody></table>';
                ?>
          </div>
        <!-- fin col -->
        </section>
        <!-- fin row -->

        <section class="row p-2">
          <div class="col-md-10 bg-cyan">
          <h2>5- Faire des requêtes préparées avec <code>prepare()</code></h2>
                <p>les requêtes préparées sont préconisées si vous exécutez plusieurs fois la même requête : cela fait gagner du temps</p>
                <p>Elles permettent de "nettoyer" les données et de se prémunir des injections de type SQL qui sont des tentatives de piratages cf. chapitre 09</p>

                <p>Une requête préparée se réalise en 3 étapes</p>

                <?php
                // on cherche un seul résultat
                $nom = 'Lagarde';

                //1
                $resultat = $pdoENT->prepare("SELECT * FROM employes WHERE nom= :nom");
                //2 on lie le marqueur, on fait la liaison
                $resultat->bindParam(':nom', $nom);
                $toto = $resultat->execute();
                $employe = $resultat->fetch(PDO::FETCH_ASSOC);
                // echo '<p>'.$employe.'</p>';
                var_dump($employe);

                echo "<p class=\"alert alert-success w-50\"> Nom : " . $employe['prenom'] . " " . $employe['nom'] . " - ID : " . $employe['id_employes'] . "<BR>";
                echo "Salaire : " . $employe['salaire'] . " Euros - Service : " . $employe['service'] . "<BR>";
                echo "Date d'embauche : " . $employe['date_embauche'] . " " . $employe['sexe'] . "</p>";

                echo '<hr>';

                // on cherche un plusieurs résultats
                $sexe= 'm';

                //1
                $resultat = $pdoENT->prepare("SELECT * FROM employes WHERE sexe= :sexe LIMIT 3");
                //2 on lie le marqueur, on fait la liaison
                $resultat->bindParam(':sexe', $sexe);
                $resultat->execute();
                $nombre_employes=$resultat->rowCount();

                echo '<h4>Il y a '.$nombre_employes.' résultats </h4>';
                
                while($informations = $resultat->fetch(PDO::FETCH_ASSOC)){
                echo "<p class=\"alert alert-dark w-50\"> Nom : " . $informations['prenom'] . " " . $informations['nom'] . " - ID : " . $informations['id_employes'] . "<BR>";
                echo "Salaire : " . $informations['salaire'] . " Euros - Service : " . $informations['service'] . "<BR>";
                echo "Date d'embauche : " . $informations['date_embauche'] . " " . $informations['sexe'] . "</p>";
                }
                echo '<hr>';

                //requête préparée sans bindParam()

                //1 on prépare la reqûete
                $resultat=$pdoENT->prepare("SELECT * FROM employes WHERE nom= :nom AND prenom=:prenom");
                $resultat->execute(array(
                    ':nom'=>'Blanchet',
                    ':prenom'=>'Laura'
                ));

                $informations=$resultat->fetch(PDO::FETCH_ASSOC);
                echo "<p class=\"alert alert-primary w-50\"> Nom : " . $informations['prenom'] . " " . $informations['nom'] . " - ID : " . $informations['id_employes'] . "<BR>";
                echo "Salaire : " . $informations['salaire'] . " Euros - Service : " . $informations['service'] . "<BR>";
                echo "Date d'embauche : " . $informations['date_embauche'] . " " . $informations['sexe'] . "</p>";
                
                echo '<hr>';
              ?>
          </div>

        </section>
  
      </div>
      <!-- fin container  -->
    </mai>
    <!-- footer en require  -->
    <?php require_once '../inc/footer.inc.php'; ?>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
  </body>
</html>