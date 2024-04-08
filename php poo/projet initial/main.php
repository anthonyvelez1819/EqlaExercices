<?php
include "MobilePhone.php";
$phone = new MobilePhone(11, 8, 600, 10, 100);
$phone->SetIsOn();
$phone->ShowBatteryPercentage();
$phone->SetBattery(-120);
$phone->ShowBatteryPercentage();
$phone->SetIsOn();











/* $johnyPhone = new MobilePhone();
$sandrinePhone = new MobilePhone();
$sandrinePhone->battery = 0;
$johnyPhone->battery = 50;
$johnyPhone->Start();
$sandrinePhone->Start(); */