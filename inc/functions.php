<?php

// Ma première fonction en PHP

function mnPap(){
    echo "<p>Minute ! papillon !</p>";
}

function dateFR() {
    setlocale(LC_TIME, 'fra_fra');
    echo utf8_encode( strftime('%A, %d, %B, %Y'));
}

?>