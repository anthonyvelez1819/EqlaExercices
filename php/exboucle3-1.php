<?php
$compteur=0;
$somme=0;
while (true){
    echo "entrez une note entre 0 et 100: ";
    $note=fgets(STDIN);
    if ($note < 0) {
    echo "la moyenne est de".$somme/$compteur;
break;
    }
    $somme=$note+$somme;
    $compteur ++;
}
?>