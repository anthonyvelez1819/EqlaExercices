<?php
echo "entrez le nombre d'une table de multiplication que vous voulez";
$number=fgets(STDIN);
for ($i=1;$i<=10; $i++){
    echo "\t".$number*$i."\n";
}