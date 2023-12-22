<?php
function DisplayGuessGame(int $minvalue, int $maxvalue)
{
    $compteur = 0;
    $chance = rand( $minvalue,  $maxvalue);

    do {
        echo "devinez le chiffre entre ".$minvalue. " et " .$maxvalue. ":";
        $number = fgets(STDIN);
        $compteur++;
    } while ($number != $chance);
    echo "bravo vous avez réussie en " . $compteur . " tentative\n";
}

DisplayGuessGame(5, 50);

DisplayGuessGame(10, 300);


DisplayGuessGame(1, 1000);


?>