<?php

//1- FONCTION VAR DUMP AVEC STYLES BOOTSTRAP
function debug($mavar) {// la fonction avec son paramètre, une variable
    echo "<br><small class=\"bg-warning text-white\">... var_dump</small><pre class=\"alert alert-danger w-75\">";
    var_dump($mavar);// à cette variable on applique le fonction var_dump()
    echo "</pre>";
}

//2- FONCTION POUR EXÉCUTER LES REQUETES PRÉPARÉES AVEC FOREACH
function executeRequete($requete, $parametres = array()) {  // utile pour toutes les requêtes 1/ la requête 2/ fabrication du tableau avec les marqueurs
    foreach ($parametres as $indice => $valeur) { // boucle foreach
        $parametres[$indice] = htmlspecialchars($valeur); // opur éviter les injections SQL
        global $pdoMAB;// "global" nous permet d'accéder à la variable $pdoMAB dans l'espace global du fichier init.inc.php
 
        $resultat = $pdoMAB->prepare($requete); // prépare la requête
        $succes = $resultat->execute($parametres); // et exécute

        if ($succes === false ) {
            return false; // si la reqête n'a pas marché je renvoie "false"
        } else {
            return $resultat;// sinon je renvoie les résultats de la requête
        }
        // fin if else
    }
    // fin foreach
}
// fin fonction

// FONCTION POUR VÉRIFIER QUE LE MEMBRE EST CONNECTÉ

// FONCTION POUR VÉRIFIER QUE LE MEMBRE EST ADMIN
?>