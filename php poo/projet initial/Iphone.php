<?php

class Iphone extends MobilePhone
{
private int $memory, $appNumber;

    /**
     * @param int $memory
     * @param int $appNumber
     */
    public function __construct(float $_height, float $_width, int $_autonomy, int $_chargingTime, int $_battery,int $memory, int $appNumber)
    {
        parent::__construct( $_height,  $_width,  $_autonomy,  $_chargingTime,  $_battery);
        $this->memory = $memory;
        $this->appNumber = $appNumber;
    }
public function __destruct()
{
    unset($monIphone);
    echo "l'iphone a disparue";
}
    public function getMemory(): int
    {
        return $this->memory;
    }

    public function setMemory(int $memory): void
    {
        $this->memory = $memory;
    }

    public function getAppNumber(): int
    {
        return $this->appNumber;
    }

    public function setAppNumber(int $appNumber): void
    {
        $this->appNumber = $appNumber;
    }
    protected function Start()
    {
        if ($this->battery > 0 && $this->isOn == false){
            $this->battery--;
            echo "<br> la pomme s'allume";
            $this->isOn = true;
        }
        elseif ($this->isOn == true){echo "le téléphone est deja allumer";}
        elseif($this->battery <= 0 ){echo "le téléphone na plus de batterie";}
    }
public function ShowBatteryPercentage()
{
    parent::ShowBatteryPercentage(); // TODO: Change the autogenerated stub
    {
        echo "je suis the batterie .";
    }
}
}