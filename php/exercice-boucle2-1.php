<?php
$chance=rand(1,100);
$compteur= 0;
echo $chance;
do {
    echo "devinez le chiffre entre 1 et 100 : ";
$number=fgets(STDIN);
$compteur++;
}
while($number != $chance);
echo "bravo vous avez réussie en " .$compteur ."tentative";
?>