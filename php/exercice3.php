<?php
echo "mettez une température en c°";
$celcius=fgets(STDIN);
$celcius=trim($celcius);
$firenight=($celcius-32)/1.8;
echo "il fait ".$firenight
    ?>
