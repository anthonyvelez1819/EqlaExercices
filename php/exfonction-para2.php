<?php
function DisplayCalculateFactorial(int $number)
{
    $factoriel=1;
    for ($i = 1; $i <= $number; $i++)
    {
        $factoriel*=$i;
    }
    echo "la factoriel de".$number. " est".$factoriel;
}

DisplayCalculateFactorial(6);

DisplayCalculateFactorial(10);

DisplayCalculateFactorial(45);
?>