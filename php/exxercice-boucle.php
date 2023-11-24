<?php
$somme = 0;

do {
    $number = intval(readline("\n.insérez un nombre"));
    if ($number >= 0) echo "votre résultat est : ", $somme += $number;
} while ($number >= 0);
?>