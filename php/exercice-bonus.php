<?php
//Exercice 6 :
//Demandez à l'utilisateurs 3 nombres. Triez ces nombre dans l'ordre croissant.
//
//Si vous avez réussi, avant de les trier, demandez à l'utilisateur si il veut les trier dans l'ordre croissant (en tapant 1) ou dans l'ordre décroissant (en tapant 2). Appliquez le tri correspondant au choix de l'utilisateur.
//
//Si vous avez réussi, traitez les erreurs, les entrée incorrectes, les entrées égales,...
//
//Si vous avez réussi, rajouter une option au menu de départ pour quitter en tapant sur 3

echo "entrez un 1er nombre: ";
$number1=fgets(STDIN);
$number1=trim($number1);
echo "entrez un 2e nombre: ";
$number2=fgets(STDIN);
$number2=trim($number2);
echo "et entrez un 3e nombre: ";
$number3=fgets(STDIN);
$number3=trim($number3);
echo "tapez 1 pour trier croisant, 2 pour décroisant ou 3 pour quitter. ";
$question=fgets(STDIN);
$question=trim($question);
/*
méthode bourrine
if ($number1>$number2&&$number1>$number3)
{
if($number2>$number3)
{
    echo "le plus grand est $number1 ensuite $number2 ensuite $number3
}
else
{
echo "le plus grand est $number1 ensuite $number3 ensuite $number2
}
*/
/* Méthode plus délicate
          if ($number1>$number2&&$number1>$number3)
          {
          $lePlusGrand= $number1;
          }
          else if ($number2>$number3&&$number2>$number1)
          {
          $lePlusGrand= $number2;
          }
          else
          {
          $lePlusGrand= $number3;
          }
          if ($number1<$number2&&$number1<$number3)
          {
          $lePlusPetit = $number1;
          }
          else if ($number2<$number3&&$number2<$number1)
          {
          $lePlusPetit= $number2;
          }
          else
          {
          $lePlusPetit= $number3;
          }
          $leMoyenNombre = ($number1 + $number2 + $number3)-$lePlusGrand - $LePlusPetit
          */
switch ($question) {
    case "1":
        if ($number1>$number2){
            $temp=$number1;
            $number1=$number2;
            $number2=$temp;
        }
        if ($number2>$number3) {
            $temp=$number2;
            $number2=$number3;
            $number3=$temp;
        }
        if ($number1>$number2) {
            $temp=$number1;
            $number1=$number2;
            $number2=$temp;
        }
        echo "voici l'ordre croissant: ".$number1 ." - ".$number2 ." - ".$number3;
        //echo "Le plus grand nombres est $lePlusGrand, le moyen nombre est $leMoyenNombre et le plus petit est $lePlusPetit
         break;
    case "2":
        if ($number1<$number2){
            $temp=$number1;
            $number1=$number2;
            $number2=$temp;
        }
        if ($number2<$number3) {
            $temp=$number2;
            $number2=$number3;
            $number3=$temp;
        }
        if ($number1<$number2) {
            $temp=$number1;
            $number1=$number2;
            $number2=$temp;
        }
        echo "voici l'ordre décroisant".$number1 ." - ".$number2 . " - ".$number3;
        //echo "Le plus petit nombre est $lePlusPetit, le moyen nombre est $leMoyenNombre et le plus grand est $lePlusGrand

        break;
    case "3":
        echo "merci d'être passer";
        break;
    default:
        echo "erreur merci de vérifier votre commande";
}
?>