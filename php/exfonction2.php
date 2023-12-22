-<?php
function DisplayCalculateFactorial()
{
    $factoriel=1;
for ($i = 1; $i <= 5; $i++)
{
    $factoriel*=$i;
}
    echo "la factoriel de 5 est".$factoriel;
}

DisplayCalculateFactorial();

DisplayCalculateFactorial();