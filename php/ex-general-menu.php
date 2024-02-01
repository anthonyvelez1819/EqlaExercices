<?php declare(strict_types=1);
$counter= 0;
echo "quel est la capital de la Belgique?  ";
$userInput=trim(fgets(STDIN));
$userInput=StringToLowerCase($userInput);
if ($userInput == "bruxelle"){
    echo "bravo bonne réponse !! ";
}
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
function StringToLowerCase(string $_strEntry):string
{
    $_upperString="";
    global $counter;
    $counter++;
    for ($i = 0; $i < strlen($_strEntry); $i++)
    {
        $_firstChar = ord($_strEntry[$i]);
        if ($_firstChar >= 65 && $_firstChar <= 90) {
            $_firstChar += 32;
        }
        $_firstChar = chr($_firstChar);
        $_upperString=$_upperString.$_firstChar;
    }
return $_upperString;
}
?>