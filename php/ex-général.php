<?php
$counter= 0;
echo "entrez une phrase je vais vous donez en majuscule et en minuscule.  ";
$userEntry=trim(fgets(STDIN));
echo $userEntry."\n";
StringToUpperCase($userEntry);
StringToUpperCase("chien");
function StringToUpperCase(string $_strEntry)
{
    $_upperString="";
    global $counter;
    $counter++;
    for ($i = 0; $i < strlen($_strEntry); $i++)
    {
        $_firstChar = ord($_strEntry[$i]);
        if ($_firstChar >= 97 && $_firstChar <= 122) {
            $_firstChar -= 32;
        }
        $_firstChar = chr($_firstChar);
     $_upperString=$_upperString.$_firstChar;
    }
    echo $counter." : ".$_upperString."\n";
}






?>
//echo ord($_strEntry)."\n";//

