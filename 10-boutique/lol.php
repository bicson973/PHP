<?php
require_once '../inc/functions.php'; // APPEL DES FONCTIONS

// CONNECTION A LA BDD
require_once 'inc/init.inc.php';
?>

<!doctype html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>CoursPHP - NUMERO TITRE</title>
    <!-- mes styles -->
    <link rel="stylesheet" href="../css/style.css">

</head>

<body>
    <header class="container-fluid bg-white mt-2 mb-2 m-auto p-2">
        <h1 class="display-4">CoursPHP - Chapitre 06 - 01 PDO </h1>
        <p class="lead">Connexion à notre BDD</p>
    </header>
    <!-- fin container-fluid header  -->

    <div class="container bg-white">

        <section class="row">
            <div class="col-md-12">
                <!-- EXO 1 dans un h2 afficher la phrase suivante "il y a X employés dans l'entreprise -->
                <!-- puis afficher TOUTES les informations des employés dans un tableau HTML-->
                <!-- la requête SQL est triée par sexe puis par nom -->

                <?php
                $sql = "SELECT * FROM produits LIMIT 4";
                $requete = $pdoMAB->query($sql);
                $nbr_produits = $requete->rowCount();
                echo "<h2>Il y a $nbr_produits produits dans la boutique: </h2>";

                // $sql="SELECT * FROM employes";
                // $requete = $pdoENT->query($sql);
                setlocale(LC_ALL, "fr_FR");

                echo "<table class=\"table table-warning table-bordered table-hover border-success border border-5 table-striped\">";
                echo "<thead class=\"table-dark border-warning\">";
                echo "<tr>";
                echo "<th style=\"background-color: darkorange; color:black; text-align:center;\" scope=\"col\">ID</th>";
                echo "<th scope=\"col\">Référence</th>";
                echo "<th scope=\"col\">Titre</th>";
                echo "</tr>";
                echo "</thead>";
                echo "<tbody>";
                while ($ligne = $requete->fetch(PDO::FETCH_ASSOC)) {
                    // echo $ligne['service']."<BR>";
                    echo "<tr>";
                    echo "<td>" . $ligne['id_produit'] . "</td>";
                      // echo "<td>".$ligne['sexe']." ".$ligne['nom']." ".$ligne['prenom']."</td>";
                      echo "<td>" . $ligne['reference'] . "</td>";
                      echo "<td>" . $ligne['titre'] . "</td>";

                    // ucfirst() pour mettre la première lettre d'un mot en majuscule
                }
                echo "</tbody>";
                echo "</table>";
                ?>
               
    </div>
    <!-- fin container  -->


    <!-- footer en require  -->
    <?php require_once '../inc/footer.inc.php'; ?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>