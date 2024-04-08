<?php

$dbName = "Php_login_exo";
$dbUser = "root";
$dbPassword = "2004.Anthony";
$dbHost = "localhost";// dans votre cas : localhost;
try {
$bdd = new PDO("mysql:host=" . $dbHost . ";dbname=" . $dbName, $dbUser , $dbPassword);
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "Connexion à la base de donnée réussie";


} catch (PDOException $e) {
exit("Erreur de connexion : " . $e->getMessage());
}
$name = $_POST["username"];
$password = $_POST["password"];
$query = "select * from login_password where username =:username";
$statement = $bdd->prepare($query);
$statement->bindParam(":username",$name);
$statement->execute();
$user=$statement->fetch(PDO::FETCH_ASSOC);
if ($user){
    if ($password == $user["password"]){
        echo "connexion au site web réussie ";
    }
    else{
        echo "nom d'utilisateur ou mot de passe non valide ";
    }
}
else{
    echo "compte crée sans erreur ";
    $requete = $bdd->prepare("insert into login_password(username,password) values(:username,:password) ");
    $requete->bindParam(":username",$name);
    $requete->bindParam(":password",$password);
    $requete->execute();
}
