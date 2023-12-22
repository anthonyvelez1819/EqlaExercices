-<?php
echo "entrez un nombre pour calculer la factoriel: ";
$number=fgets(STDIN);
$number=trim($number);
$factoriel=1;

for ($i = 1;$i <= $number; $i++) {
    $factoriel*=$i;
}
echo "la factoriel de".$number."est".$factoriel;
?>