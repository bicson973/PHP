<!DOCTYPE html>
<?php 
    //déclaration d'une variable en PHP avec le symbole $ suivi du nom de la variable
    $variable1 = "cours PHP 7";
?> 
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php echo "<title>Une page PHP</title>"; ?>
    </head>
    <body>
        <?php 
            // affichage du contenu de la variable1
            echo "<h1> Suresnes 2021 - $variable1 </h1>";
        ?> 
        <hr>
        <p>Utilisation de variables en PHP et de passages PHP dans mon fichier HTML ; on travaille aussi avec : 
            <?php 
                $variable2 = "MySQL";
                echo $variable2;
                echo "</p><hr>";
                // le caractère de concaténation en PHP est le "."
                echo "<p>La variable2 est de type : ". gettype($variable2) .".</p>";
            
            ?> 
    </body>
</html>