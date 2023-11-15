<?php
echo "veuillez entrez votre age";
$age=fgets(STDIN);
$age=trim($age);
if ($age >=18) {
    echo "vous etes majeur";
} else{
    echo "dommage vous etes mineur";
}
?>