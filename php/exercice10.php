<?php
echo "entrez un jour de la semaine";
$days=fgets(STDIN);
$days=trim($days);
switch ($days){
    case "1":
    echo "lundi";
        break;
    case "2":
echo "mardi";
break;
    case "3":
        echo "mercredi";
        break;
    case "4":
        echo "jeudi";
        break;
    case "5":
        echo "vendredi";
        break;
    case "6":
        echo "samedi";
        break;
    default:
        echo "dimanche";
}
?>