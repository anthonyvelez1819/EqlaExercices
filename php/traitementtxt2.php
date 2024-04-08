<?php

$chemin_fichier = "C:\Users\EqlaLocalAdmin\Documents\\test.txt";
$mode_ouverture = "a"; // Mode ajout

$handle = fopen($chemin_fichier, $mode_ouverture);

if ($handle) {
    $texte = "<br> coucou moi aussi je suis un intrus <br> JE SUIS TROP FORT !! :)";
    fwrite($handle, $texte);
    echo "Écriture dans le fichier réussie <br>";
    fclose($handle);

    // Ouvrir le fichier en mode lecture
    $handle = fopen($chemin_fichier, "r");
    if ($handle) {
        // Lire et afficher le contenu du fichier
        while (($ligne = fgets($handle)) !== false) {
            echo $ligne;
        }
        fclose($handle);
    } else {
        echo "Impossible d'ouvrir le fichier en mode lecture";
    }
} else {
    echo "Impossible d'écrire dans le fichier";
}
