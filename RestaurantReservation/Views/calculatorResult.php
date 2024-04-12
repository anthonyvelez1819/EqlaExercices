<?php
declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Réservez votre table chez Aux saveurs de chez Thom">
    <link rel="stylesheet" href="../Style/index.css">
    <title>calculator result - Aux 1000 saveurs</title>
</head>
<body>
<?php
include "../Includes/header.php";
?>
<main id="main">
    <h1>calculator result</h1>


<?php
if ($_SERVER["REQUEST_METHOD"]=="GET")
{
    $number1=intval($_GET["number1"]);
    $number2=intval($_GET["number2"]);
    $operation=$_GET["operation"];
}

switch($operation) {
            case "addition":
                $resultat=Additionner($number1, $number2);
                break;
            case "soustraction":
                $resultat=Soustraire($number1, $number2);
                break;
            case "multiplication":
                $resultat=Multiplier($number1, $number2);
                break;
            case "division":
                $resultat=Diviser($number1, $number2);
                break;
        }
        echo "Le resultat est" . $resultat . "<br>";


    function Additionner(int $number1, int $number2) : int {
        return $number1 + $number2;
    }

    function Soustraire(int $number1, int $number2) :int {
        return $number1-$number2;
    }

    function Multiplier(int $number1, int $number2) :int {
        return $number1*$number2;
    }

    function Diviser(int $number1, int $number2) :int {
        return $number1/$number2;
    }
    ?>
</main>
<?php
include "../Includes/footer.php";
?>

