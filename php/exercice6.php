<?php
echo "entrez un nombre";
$number=fgets(STDIN);
$number=trim($number);
if ($number>=0) {
    echo "c'est un nombre positive";
}
?>