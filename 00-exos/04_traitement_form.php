<?php
require_once '../inc/functions.php'; // APPEL DES FONCTIONS

if (!empty($_POST)){
    debug($_POST);

echo  '<p> Prénom : ' . $_POST['prenom'] . ' </p>';
echo  '<p> Nom : ' . $_POST['nom'] . ' </p>';
echo  '<p> Email : ' . $_POST['email'] . ' </p>';
echo  '<p> Adresse : ' . $_POST['adresse'] . ' </p>';
echo  '<p> Code postal : ' .  $_POST['code_postal'] . ' </p>';
echo  '<p> Ville : ' . $_POST['ville'] .' </p>';

// ********

// fabrication d'un fichier texte en l'absence de BDD
$file = fopen('traitement.txt', 'a');// fopen() en mode "a" permet de créer un fichier s'il n'existe pas encore, sinon de l'ouvir
$informations = "Informations reçues : " .$_POST['prenom']. ' ' .$_POST['nom']. ' ' .$_POST['email']. ' ' .$_POST['adresse']. "\n";
// "\n" permet de mettre un saut de ligne 
fwrite($file, $informations); // la variable $informations contient à chaque envoi les données du formulaire au fichier représenté par $file 
//fwrite() écrit les informations dans le fichier
}
?>