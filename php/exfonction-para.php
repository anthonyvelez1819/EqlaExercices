<?php
function DisplayPyramid(int $roof, int $floor)
{
    for ($i = $roof; $i <= $floor; $i++) {
        for ($j = 1; $j <= $i; $j++){
            echo "*";
        } echo "\n";  }

}
DisplayPyramid(10, 40);
DisplayPyramid(5, 10);
DisplayPyramid(41, 200);
?>