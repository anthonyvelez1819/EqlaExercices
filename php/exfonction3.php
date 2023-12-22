<?php
function DisplayGuessGame()
{
    $compteur = 0;
    $chance = rand(1, 2);

    do {
        echo "devinez le chiffre entre 1 et 10 : ";
        $number = fgets(STDIN);
        $compteur++;
    } while ($number != $chance);
    echo "bravo vous avez réussie en " . $compteur . "tentative";
}

DisplayGuessGame();

DisplayGuessGame();


?>