<?php
// ma 1ère fonction en PHP, minute papillon
function minutePap() {
    echo "<p class=\"bg-success text-white w-25\"> Minute ! Papillon !</p>";
}

// 2nde fonction PHP : le jour de la semaine
function whatDay() {
    echo "<p>We are " . date('l, z') . " my friend !</p>";
}

// faire une fonction qui affiche la date au complet 

// exo en utilisant strftime()

function dateFR() {
    setlocale(LC_ALL, 'fr_FR');
    // echo "<p>Nous sommes le ";
    echo "<p>Nous sommes le "  . utf8_encode(strftime('%A %d %B %Y')) . "</p>";
    // echo "</p>";
}


?>