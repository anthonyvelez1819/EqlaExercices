<?php
/*Ecrivez un script PHP à l'aide de vos connaissance, qui demandera à l'utilisateur d'entrer sa date de naissance et selon cette date le code PHP  devra indiquer de quel signe astrologique est l'utilisateur.*/
echo "Ecrivez votre jour de naissance!";
$jour=fgets(STDIN);
    echo "Ecrivez le mois quand vous etes ne!";
$mois=fgets(STDIN);
switch ($mois) {
    case 1:
        if ($jour <= 20) {
        echo "VOus etes un capricorne";
        }
        else {
            echo "Vous etes un verseau";
        }
        break;
    case 2:
    if ($jour <= 19) {
        echo "Vous etes un verseau";
    }
        else {
        echo "Vous etes poissons";
        }
        break;
    case 3:
        if ($jour <= 20) {
        echo "Vous etes poissons";
        }
        else {
            echo "Vous etes un belier";
        }
        break;
    case 4:
        if ($jour <= 19) {
        echo "Vous etes un belier";
        }
        else {
            echo "Vous etes un taureau";
        }
        break;
    case 5:
        if ($jour <= 20) {
        echo "Vous etes un taureau";
        }
        else {
            echo "Vous etes gemeaux";
        }
        break;
    case 6:
        if ($jour <= 21) {
        echo "Vous etes gemeaux";
        }
        else {
            echo "Vous etes un cancer";
        }
        break;
    case 7:
        if ($jour <= 22) {
        echo "Vous etes un cancer";
        }
        else {
            echo "Vous etes un lion!";
        }
        break;
    case 8:
        if ($jour <= 22) {
        echo "Vous etes un lion!";
        }
        else {
            echo "Vous etes vierge! :)";
        }
        break;
    case 9:
        if ($jour <= 22) {
        echo "Vous etes vierge! :)";
        }
        else {
            echo "Vous etes balance";
        }
        break;
    case 10:
        if ($jour <= 23) {
        echo "Vous etes balance";
        }
        else {
            echo "Vous etes scorpion";
        }
        break;
    case 11:
        if ($jour <= 24) {
        echo "Vous etes scorpion";
        }
        else {
            echo "Vous etes sagitaire";
        }
        break;
    case 12:
        if ($jour <= 23) {
        echo "Vous etes sagitaire";
        }
        else {
            echo "Vous etes capricorne";
        }
        break;
}
?>