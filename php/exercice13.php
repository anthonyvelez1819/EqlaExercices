<?php
echo "entrez un 1er nombre";
$number1=fgets(STDIN);
$number1=trim($number1);
echo "entrez un 2e nombre";
$number2=fgets(STDIN);
$number2=trim($number2);
echo "entrez un 3e nombre";
$number3=fgets(STDIN);
$number3=trim($number3);
if ($number1>$number2 && $number1>$number3) {
    echo "le nombre le plus grand est:".$number1;
}
elseif ($number2>$number1 && $number2>$number3) {
    echo "le nombre le plus grand est:".$number2;
}
elseif ($number3>$number1 && $number3>$number2) {
    echo "le nombre le plus grand est :".$number3;
}
else{
    echo "il y a un probléme";
}
?>
