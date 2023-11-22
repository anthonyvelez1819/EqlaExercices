<?php
echo "entrez un nombre:";
$number1=fgets(STDIN);
$number1=trim($number1);
echo "est-il divisible par:";
$number2=fgets(STDIN);
$number2=trim($number2);
$resultat= $number1%$number2;
if ($resultat==0) {
    echo "il est divisible par".$number2;
} else {
    echo "il n'est pas divisible";
}
?>
