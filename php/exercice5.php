<?php
echo "entrez un nombre à additioner";
$number1=fgets(STDIN);
$number1=trim($number1);
echo "entrez l'additioneur";
$number2=fgets(STDIN);
$number2=trim($number2);
$resultat=$number1+$number2;
echo "le résultat est:" .$resultat;
    ?>