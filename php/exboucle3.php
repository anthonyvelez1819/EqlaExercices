<?php
$compteur=0;
while (true) {
    echo "entrez le mot de passe: ";
$password=fgets(STDIN);
    $compteur++;
    if ($compteur == 3) {
        echo "erreur 0 tentative restant.";
        break;
    }
}
?>