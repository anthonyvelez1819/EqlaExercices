<?php declare(strict_types=1);
echo "Combien d'élève il y a ?\n";
$nbrleve = fgets(STDIN);
$nbrleve = trim($nbrleve);
echo "combien de devoir il y a ?\n";
$nbrdevoir = fgets(STDIN);
$nbrdevoir = trim($nbrdevoir);
for ($i = 1; $i <= $nbrdevoir; $i++){
    echo "quel sont les points de l'élève ".$i."?\n";
    $point = fgets(STDIN);
    $point = trim($point);
}

?>