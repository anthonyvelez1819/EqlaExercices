<?php

class Printer
{
    private int $cartridgeBlack, $cartridgeCyan, $cartridgeMagenta, $cartridgeYellow, $numberPaper, $abilityPaper;
    private string $brand;
    private bool $isOn;

    /**
     * @param int $cartridgeBlack
     * @param int $cartridgeCyan
     * @param int $cartridgeMagenta
     * @param int $cartridgeYellow
     * @param int $numberPaper
     * @param int $abilityPaper
     * @param string $brand
     * @param bool $isOn
     */
    public function __construct(int $_cartridgeBlack, int $_cartridgeCyan, int $_cartridgeMagenta, int $_cartridgeYellow, int $_numberPaper, int $_abilityPaper, string $_brand, bool $_isOn)
    {
        $this->cartridgeBlack = $_cartridgeBlack;
        $this->cartridgeCyan = $_cartridgeCyan;
        $this->cartridgeMagenta = $_cartridgeMagenta;
        $this->cartridgeYellow = $_cartridgeYellow;
        $this->numberPaper = $_numberPaper;
        $this->abilityPaper = $_abilityPaper;
        $this->brand = $_brand;
        $this->isOn = $_isOn;
    if ($_abilityPaper > 100 ){
        $this->abilityPaper = 100;
    }
    elseif ($_abilityPaper < 0 ){
        $this->abilityPaper = 0;
    }
    elseif ($_cartridgeBlack > 100 ){
        $this->cartridgeBlack = 100;
    }
    elseif ($_cartridgeBlack < 0){
        $this->cartridgeBlack = 0;
    }
    elseif ($_cartridgeYellow > 100 ){
        $this->cartridgeYellow = 100;
    }
    elseif ($_cartridgeYellow < 0){
        $this->cartridgeYellow = 0;
    }
    elseif($_cartridgeMagenta > 100){
        $this->cartridgeMagenta = 100;
    }
    elseif ($_cartridgeMagenta < 0){
        $this->cartridgeMagenta = 0;
    }
    elseif ($_cartridgeCyan > 100){
        $this->cartridgeCyan = 100;
    }
    elseif ($_cartridgeCyan < 0){
        $this->cartridgeCyan = 0;
    }
    }

    public function getCartridgeBlack(): int
    {
        return $this->cartridgeBlack;
    }

    public function setCartridgeBlack(int $cartridgeBlack): void
    {
        $this->cartridgeBlack = $cartridgeBlack;
        if ($this->cartridgeBlack == 0){
            echo "il n'y a plus d'encre noir. ";
        }
    }

    public function getCartridgeCyan(): int
    {
        return $this->cartridgeCyan;
    }

    public function setCartridgeCyan(int $cartridgeCyan): void
    {
        $this->cartridgeCyan = $cartridgeCyan;
    if ($this->cartridgeCyan == 0){
        echo "il n'y a plus d'encre cyan";
    }
    }

    public function getCartridgeMagenta(): int
    {
        return $this->cartridgeMagenta;
    }

    public function setCartridgeMagenta(int $cartridgeMagenta): void
    {
        $this->cartridgeMagenta = $cartridgeMagenta;
    if ($this->cartridgeMagenta == 0){
        echo "il n'y a plus d'encre magenta. ";
    }
    }

    public function getCartridgeYellow(): int
    {
        return $this->cartridgeYellow;
    }

    public function setCartridgeYellow(int $cartridgeYellow): void
    {
        $this->cartridgeYellow = $cartridgeYellow;
    if ($this->cartridgeYellow == 0){
        echo "il n'y a plus d'encre jaune. ";
    }
    }

    public function getNumberPaper(): int
    {
        return $this->numberPaper;
    }

    public function setNumberPaper(int $numberPaper): void
    {
        $this->numberPaper = $numberPaper;
    }

    public function getAbilityPaper(): int
    {
        return $this->abilityPaper;
    }

    public function setAbilityPaper(int $abilityPaper): void
    {
        $this->abilityPaper = $abilityPaper;
    }

    public function getBrand(): string
    {
        return $this->brand;
    }

    public function setBrand(string $brand): void
    {
        $this->brand = $brand;
    }

    public function isOn(): bool
    {
        return $this->isOn;
    }

    public function setIsOn(bool $isOn): void
    {
     if ($this->isOn == true){
         $this->ShootDown();
     }else{$this->Start();}
        $this->isOn = $isOn;

    }

    private function Start()
    {
        if ($this->isOn == false){
            echo "l'imprimante s'allume";
            $this->isOn = true;
        }
        elseif ($this->isOn == true){echo "l'imprimante est deja allumer";}
    }
    private function ShootDown()
    {
        if ($this->isOn == true){
            echo "l'imprimante s'éteint";
            $this->isOn = false;
        }
        else{echo "l'imprimante est déja éteinte";}
    }
    private function ShootDown()
    {
        if ($this->isOn == true){
            echo "l'imprimante s'éteint";
            $this->isOn = false;
        }
        else{echo "l'inprimante est déja éteinte";}
    }
}