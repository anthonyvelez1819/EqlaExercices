<?php
$paysCdm = [
    ["Argentine", 3, "coupe"],
    ["Allemagne", 2, "coupe"],
    ["Brezil", 4, "Coupe"],
    ["Belgique", 0, "coupe"]
];

ShowArray($paysCdm);
$paystrier = AscendingOrder($paysCdm);
echo "\n";
ShowArray($paystrier);
function ShowArray($_arrayToShow)
{
    for ($i = 0; $i < count($_arrayToShow); $i++) {
        for ($j = 0; $j < count($_arrayToShow[$i]); $j++) {
            echo $_arrayToShow[$i][$j] . " ";
        }
        echo "\n";
    }
}
function AscendingOrder(array $_arrayToSort):array
{
    for ($i = 0; $i < count($_arrayToSort) - 1; $i++) {
        for ($j = $i + 1; $j < count($_arrayToSort); $j++) {
            if ($_arrayToSort[$j][1] < $_arrayToSort[$i][1]) {
                $temp = $_arrayToSort[$j];
                $_arrayToSort[$j] = $_arrayToSort[$i];
                $_arrayToSort[$i] =$temp;
            }
        }
    }
    return $_arrayToSort;
}
?>
