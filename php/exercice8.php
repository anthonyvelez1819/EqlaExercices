<?php
echo "entrez un nombre:";
$number=fgets(STDIN);
$number=trim($number);
if ($number==0)
{
    echo "le nombre est egal à 0";
}
elseif ($number>0)
{
    echo "le nombre est positive";
}
else {
    echo "le nombre est négative";
}
?>