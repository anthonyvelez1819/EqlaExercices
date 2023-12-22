<?php

echo "Bienvenue !";
do {


    do {
        echo "tapez 1 pour start, 2 pour option, 3 pour quitter: ";
        $enter = fgets(STDIN);
        $enter = trim($enter);
        if ($enter > 3 || $enter < 1) {
            echo "la commande est erroné: ";
        if ($enter == 1){

        }
        elseif ($enter == 2){

        }
        }
    } while (!($enter >= 1 && $enter <= 3));
} while ($enter != 3);

    ?>