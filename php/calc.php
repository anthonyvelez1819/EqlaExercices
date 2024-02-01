<?php
declare(strict_types = 1);

do {
    do {
        echo "\033[2J\033[;H";
        $prompt = intval(readline("Calculette - Taper 1, 2, 3 ou 4\n1. Addition\n2. Soustraction\n3. Multiplication\n4. Division\nChoix: "));

        if ($prompt > 0 && $prompt <= 4) {
            do {
                $number1 = readline("Nombre 1 à calculer: ");
                $number2 = readline("Nombre 2: ");

                if (!is_numeric($number1) || !is_numeric($number2)) echo "Erreur: Ceci n'est pas un nombre.\n";
            } while (!is_numeric($number1) || !is_numeric($number2));

            $number1 = intval($number1);
            $number2 = intval($number2);

            if ($prompt == 1) echo "Resultat: ",  addition($number1, $number2), "\n";
            else if ($prompt == 2) echo "Resultat: ",  subtraction($number1, $number2), "\n";
            else if ($prompt == 3) echo "Resultat: ",  multiplication($number1, $number2), "\n";
            else if ($prompt == 4) echo "Resultat: ",  division($number1, $number2), "\n";
        }
    } while (!$prompt > 0 && !$prompt <= 4);

    do {
        $restart = strtolower(readline("Voulez vous recommencez ? (y/n)\nChoix: "));

        if ($restart != "n" && $restart != "y") echo "Erreur: reponse invalide.";
    } while($restart != "n" && $restart != "y");
} while($restart == "y");

echo "Une prochaine fois peut être.";

function addition(int $_number1, int $_number2) {
    return $_number1 + $_number2;
}

function subtraction(int $_number1, int $_number2) {
    return $_number1 - $_number2;
}

function multiplication(int $_number1, int $_number2) {
    return $_number1 * $_number2;
}

function division(int $_number1, int $_number2) {
    if ($_number2 === 0) return "Erreur, pas divisible par 0";
    else return $_number1 / $_number2;
}