<?php

//1- FONCTION VAR DUMP AVEC STYLES BOOTSTRAP
function debug($mavar) {// la fonction avec son paramètre, une variable
    echo "<br><small class=\"bg-warning text-white\">... var_dump</small><pre class=\"alert alert-danger w-75\">";
    var_dump($mavar);// à cette variable on applique le fonction var_dump()
    echo "</pre>";
}

//2- FONCTION POUR EXÉCUTER LES REQUETES PRÉPARÉES
function executeRequete($requete, $parametres = array()) {  
    foreach ($parametres as $indice => $valeur) {
        $parametres[$indice] = htmlspecialchars($valeur);
        global $pdoMAB;

        $resultat = $pdoMAB->prepare($requete);
        $succes = $resultat->execute($parametres);

        if ($succes === false ) {
            return false;
        } else {
            return $resultat;
        }// fin if else
    }// fin foreach
}// fin fonction

// FONCTION POUR VÉRIFIER QUE LE MEMBRE EST CONNECTÉ

// FONCTION POUR VÉRIFIER QUE LE MEMBRE EST ADMIN
?>