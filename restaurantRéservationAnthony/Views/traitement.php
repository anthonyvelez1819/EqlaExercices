<h1>je suis une nouvelle page de traitement.php</h1>
<?php
if ($_SERVER["REQUEST_METHOD"]=="GET")
{
    $name=$_GET["nom"];
    echo "votre prénom est ".$name;
    $mail=$_GET["email"];
    echo "<br> votre adreese mail est ".$mail;
}
elseif ($_SERVER["REQUEST_METHOD"]=="POST")
{
    $name=$_POST["nom"];
    echo "votre prénom est ".$name;
    $mail=$_POST["email"];
    echo "<br> votre adreese mail est ".$mail;
    echo "<br> et maintenant avec post";
}