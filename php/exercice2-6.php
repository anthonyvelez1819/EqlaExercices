<?php
echo "entrez un nombre correspondant a un mois";
$month=fgets(STDIN);
$month=trim($month);
switch ($month){
    case "01":
        echo "janvier 31 jours";
        break;
    case "02":
        echo "février 28 jours /29 chaque 4 ans";
        break;
    case "03":
        echo "mars 31 jours";
        break;
    case "04":
        echo "avril 30 jours";
        break;
    case "05":
        echo "mai 31 jours";
        break;
    case "06":
        echo "juin 30 jours";
        break;
    case "07":
        echo "juillet 31 jours";
        break;
        case "08";
        echo "aout 31 jours";
        break;
    case "09":
        echo "septembre 30 jours";
        break;
    case "10":
        echo "octobre 31 jours";
        break;
    case "11":
        echo "novembre";
        break;
    case "12":
        echo "décembre";
        break;
    default:
        echo "sa ne correspont à aucun mois";
}
?>