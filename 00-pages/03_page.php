<?php 
    echo "Page avec des constantes";
// vérfier cela sur la casse TRUE et FALSE VOIR php 8 ?
    define("PI",3.1415926535);

    echo "le nombre PI vaut " . PI . "<br>";

    // if pour vérifier l'existence de la constante PI
    if (defined("PI")) echo "la constante PI est bien définie";

    echo "<hr>";

    // déclaration d'une constante qui contient une url
    define("validator","https://validator.w3.org/");
    // vérification de l'existence de la constante dans un if SI c'est vrai fait l'echo
    if (defined("validator")) echo "la constante validator est bien définie";
    echo "<hr>";
    echo "l'url du Validator du w3c est : " . validator . "<br>";

    // utilisation de la constante validator dans un extrait de HTML
    echo "Validez votre HTML CSS sur le site du <a href=\"" .validator. "\" target=\"_blank\">Validator</a>";
  
?> 

