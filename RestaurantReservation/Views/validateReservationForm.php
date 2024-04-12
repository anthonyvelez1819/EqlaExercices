<?php
declare(strict_types=1);
?>

<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $nom = $_POST["nom"];
    $pnom = $_POST["pnom"];
    $mail = $_POST["mail"];
    $phone = intval($_POST["phone"]);
    $dnaissance = $_POST["dnaissance"];
    $livraison = $_POST["livraison"];
    $adlivraison = $_POST["adlivraison"];
    $entree = $_POST["entree"];
    $plat = $_POST["plat"];
    $dessert = $_POST["dessert"];
    $occasion = $_POST["occasion"];
    $profil = isset($_POST["profil"]) ? $_POST["profil"] : array(); // Assurez-vous que $profil est un tableau même s'il est vide
    $hourreservation = $_POST["hourreservation"];
    $payement = $_POST["payement"];

    // Afficher les valeurs récupérées
    echo "Nom : $nom<br>";
    echo "Prénom : $pnom<br>";
    echo "E-mail : $mail<br>";
    echo "Téléphone : $phone<br>";
    echo "Date de naissance : $dnaissance<br>";
    echo "Mode de livraison : $livraison<br>";
    echo "Adresse de livraison : $adlivraison<br>";
    echo "Choix entrées : $entree<br>";
    echo "Choix plat principal : $plat<br>";
    echo "Choix dessert : $dessert<br>";
    echo "Occasion : $occasion<br>";
    echo "Profil client : ";
    foreach ($profil as $value) {
        echo "$value "; // Affiche chaque élément du tableau $profil suivi d'un espace
    }
    echo "<br>";
    echo "Heure de réservation : $hourreservation<br>";
    echo "Méthode de paiement : $payement<br>";
}

$sujet = "validation formulaire";
$body = "Monsieur ".$nom.", 
nous vous confirmons votre réservation à ".$hourreservation."comme occasion".$occasion."<br>
votre commande: <br>
comme entrée: ".$entree."<br>
comme plat: ".$plat."<br>
et comme désert: ".$dessert."<br>
<br> info personelle. <br>
nom: ".$nom."<br>
prénom:".$pnom."<br>
date de naissance: ".$dnaissance."<br>
adresse mail:".$mail."<br>
téléphone: ".$phone."<br>
méthode de paiment: ".$payement;

mail($mail,$sujet, $body,"From: name@adress.domain");
?>

