<?php 
    echo "page avec constantes";
    define("PI", 3.14, TRUE); 
    echo "le nombre PI vaut" . pi . "<br>";
    define("validator", "https://validator.w3.org/");
    echo "l'url du validator du w3c est : " . validator . "<br>";
    if (define("validator")) echo "la constante validator est bien définie";
    echo "<hr>";
    echo "l'url du validator est : " . validator . "<br>";
    echo "Validez votre htlm css sur le site du <a href=\"" . validator . "\" target=\"blank\">validator</a>";
?>

