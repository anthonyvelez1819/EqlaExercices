<?php
spl_autoload_register(function ($_class){
    include $_class.".php";
});

/* include "trait.php";
include "MobilePhone.php";
include "Iphone.php";
include "Android.php";
include "footballField.php"; */


$monIphone = new Iphone(15, 55,15000, 100, 100, 1000,500);
$vieuxTel = new MobilePhone(10, 5, 50000, 1000, 100);
function StartPhone(MobilePhone $_tel){
    $_tel->SetIsOn();

}
$monIphone->ShowBatteryPercentage();

StartPhone($monIphone);
echo "<br>";
echo $monIphone->GetArea();
echo "<br>";
$stadeRb = new footballField(50,200);
echo $stadeRb->GetArea();
echo "<br>";
