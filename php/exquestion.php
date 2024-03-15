<?php

$q1="q1";
$q2="q2";
$q3="q3";
$q4="q4";
$tf="tf";
echo "Répondez aux question que par oui et non. \n";
echo $q1."?\n";
$reponse1=fgets(STDIN);
$reponse1=trim($reponse1);
echo $q2."?\n";
$reponse2=fgets(STDIN);
$reponse2=trim($reponse2);
if ($reponse1 == "oui" && $reponse2 == "oui" ){
    echo $q3."?\n";
    echo $tf;
}
elseif ($reponse1 == "oui" && $reponse2 == "non"){
    echo $q4."?\n";
    echo $tf;
}
elseif ($reponse1 == "non" && $reponse2 == "oui"){
    echo $q3."?\n";
    echo $tf;
}
elseif ($reponse1 == "non" && $reponse2 == "non"){
    echo $tf;
}