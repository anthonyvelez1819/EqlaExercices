<?php

battery{
private float $height;
private float $width;
private int $autonomy;
private int $chargingTime;
private int $battery;
private bool $isOn;
public function __construct(float $_height, float $_width, int $_autonomy, int $_chargingTime, int $_battery)
{
    $this->height = $_height;
    $this->width = $_width;
    $this->autonomy = $_autonomy;
    $this->chargingTime = $_chargingTime;
    if($_battery > 100){
        $this->battery = 100;
}
elseif ($_battery < 0 ){
        $this->battery = 0;
}
else{$this->battery = $_battery;}
    $this->isOn = false;

}
public function SetAutonomy(int $_autonomy)
{
    $this->autonomy = $_autonomy;
}
public function SetChargingTime(int $_chargingTime)
{
    $this->chargingTime = $_chargingTime;
}
public function SetBattery(int $_batteryModifier)
{
    if ($this->battery + $_batteryModifier > 100){
        $this->battery = 100;
    }
    elseif($this->battery + $_batteryModifier <= 0){
        $this->battery = 0;
        $this->ShootDown();
    }
    else{$this->battery += $_batteryModifier;}
}
public function SetIsOn()
{
    if ($this->isOn == true){
        $this->ShootDown();
    }
    else{$this->Start();}
}
public function GetAutonomy():int
{
    return $this->autonomy;
}
public function GetBattery():int
{
    return $this->battery;
}
public function GetChargingTime():int
{
    return $this->chargingTime;
}
public function GetIsOn():bool
{
    return $this->isOn;
}
public function GetHeight():float
{
    return $this->height;
}



    public function GetWidth(): float
    {
        return $this->width;
    }
    public function ShowBatteryPercentage()
    {
        echo "<br> le téléphone a ".$this->GetBattery()." % de batterie <br>";

    }
public function CallNumber(string $phoneNumber)
{
    if ($this->isOn == true && $this->battery = 10) {
        echo "vous avez appeller le " . $phoneNumber;
        $this->battery -= 10;
    } elseif ($this->battery <= 10) {
        echo "vous n'avez plus assez de batterie pour passer un appel";
    } else {
        echo "le téléphone est éteint ";
    }
}
    private function Start()
    {
        if ($this->battery > 0 && $this->isOn == false){
            $this->battery--;
            echo "le téléphone s'allume";
            $this->isOn = true;
        }
        elseif ($this->isOn == true){echo "le téléphone est deja allumer";}
        elseif($this->battery <= 0 ){echo "le téléphone na plus de batterie";}
    }
    private function ShootDown()
    {
        if ($this->isOn == true){
            echo "le téléphone s'éteint";
        $this->isOn = false;
        }
        else{echo "le téléphone est déja éteint";}
    }
}