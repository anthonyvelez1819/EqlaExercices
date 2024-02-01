<?php declare(strict_types=1);
echo "combien d'élève ill y a ?  ";
$nbrEleve=fgets(STDIN);
$nbrEleve=trim($nbrEleve);


    while (true){
    echo "entrez les points des différents élèves:  ";
    $points=fgets(STDIN);
    $points=trim($points);

    if ($points < 0){
        break;
    }
    }
    ?>