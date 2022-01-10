<?php // APPEL DES FONCTIONS

require_once '../inc/functions.php';

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>EXo PDO</h1>
    <ul>
        <li>require des fonctions</li>
        <li>se connecter à entreprise</li>
        <!-- faire des variables de connexion ensuite VOIR -->
        <li>affichez dans une ul le prénom, le nom, et le salaire des employes du service commercial, triez par salaire du plus petit au plus grand</li>
        <li>utilisez une requête préparée avec bindParam</li>
        <li>affichez le nombre de commerciaux</li>
        <li>cherchez ensuite sur le web comment mettre le salaire au format français ex. 3 000,00 €</li>
    </ul>

    <hr>
    <?php
        // connexion à la BDD
        $pdoENT = new PDO( 'mysql:host=localhost;dbname=entreprise',// hôte et nom de la BDD
        'root',// le pseudo 
        // '',// le mot de passe
        'root',// le mdp pour MAC avec MAMP
        array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,// pour afficher les erreurs SQL dans le navigateur
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',// pour définir le charset des échanges avec la BDD
        ));
        debug($pdoENT);
        debug(get_class_methods($pdoENT));// ici nous aurons la liste des méthodes présentes dans l'objet $pdoENT

        echo '<hr>';

        // SELECT nom, prenom, salaire FROM employes WHERE service = :service ORDER BY salaire ASC

        $service = 'informatique';// on cherche plus d'un résultat
        $resultat = $pdoENT->prepare( " SELECT nom, prenom, salaire FROM employes WHERE service = :service ORDER BY salaire ASC " );// 1 on prépare la requête
        $resultat->bindParam( ':service', $service );// 2 on lie le marqueur
        $resultat->execute();// 3 on execute la requête
        $nombre_employes = $resultat->rowCount();
        // debug($nombre_employes);
        echo '<h4> Il y a ' .$nombre_employes. ' employés au service ' .$service. ' </h4>';
        while ( $informations = $resultat->fetch ( PDO::FETCH_ASSOC ) ) {
            // debug($informations);
            // echo $informations['nom'];
            // echo $informations['salaire'];
            echo '<p>' .$informations['nom']. ' ' .$informations['prenom']. ', ' .$informations['salaire']. ' euros.</p>';
        }
    ?>
</body>
</html>