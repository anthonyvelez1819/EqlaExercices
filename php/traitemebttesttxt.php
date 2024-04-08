<?php
$chemin_fichier = "C:\Users\EqlaLocalAdmin\Documents\\test.txt";
$mode_ouverture = "r";

$handle = fopen($chemin_fichier, $mode_ouverture);

if ($handle) {

    echo "Fichier ouvert avec succès <br>";
    while (($ligne = fgets($handle)) !== false) {
        echo $ligne;
    }
} else {
    echo "Impossible d'ouvrir le fichier";
}
