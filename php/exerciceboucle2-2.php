<?php
echo "choisissez l'option voulue";
do {
    echo "tapez 1 pour afficher / 2 ajouter / 3 quitter.";
    $number=fgets(STDIN);
if ($number > 3 || $number < 1) {
    echo "erreur entrez 1 2 ou 3";
}
}
while ($number!= 3);
echo 'vous quittez le programme';
?>