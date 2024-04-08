<?php

class Person
{
private string $firstName, $lastName, $sexe, $country, $town, $addres;
private int $age, $numberChildren, $numberBrother, $numberSister, $postalCode;
private DateTime $birthDay;
private bool $doeSmoke, $doeDrink, $doeSexe;

    /**
     * @param string $firstName
     * @param string $lastName
     * @param string $sexe
     * @param string $country
     * @param string $town
     * @param string $addres
     * @param int $age
     * @param int $numberChildren
     * @param int $numberBrother
     * @param int $numberSister
     * @param int $postalCode
     * @param DateTime $birthDay
     * @param bool $doeSmoke
     * @param bool $doeDrink
     * @param bool $doeSexe
     */
    public function __construct(string $firstName, string $lastName, string $sexe, string $country, string $town, string $addres, int $age, int $numberChildren, int $numberBrother, int $numberSister, int $postalCode, DateTime $birthDay, bool $doeSmoke, bool $doeDrink, bool $doeSexe)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->sexe = $sexe;
        $this->country = $country;
        $this->town = $town;
        $this->addres = $addres;
        $this->age = $age;
        $this->numberChildren = $numberChildren;
        $this->numberBrother = $numberBrother;
        $this->numberSister = $numberSister;
        $this->postalCode = $postalCode;
        $this->birthDay = $birthDay;
        $this->doeSmoke = $doeSmoke;
        $this->doeDrink = $doeDrink;
        $this->doeSexe = $doeSexe;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): void
    {
        $this->firstName = $firstName;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): void
    {
        $this->lastName = $lastName;
    }

    public function getSexe(): string
    {
        return $this->sexe;
    }

    public function setSexe(string $sexe): void
    {
        $this->sexe = $sexe;
    }

    public function getCountry(): string
    {
        return $this->country;
    }

    public function setCountry(string $country): void
    {
        $this->country = $country;
    }

    public function getTown(): string
    {
        return $this->town;
    }

    public function setTown(string $town): void
    {
        $this->town = $town;
    }

    public function getAddres(): string
    {
        return $this->addres;
    }

    public function setAddres(string $addres): void
    {
        $this->addres = $addres;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    public function getNumberChildren(): int
    {
        return $this->numberChildren;
    }

    public function setNumberChildren(int $numberChildren): void
    {
        $this->numberChildren = $numberChildren;
    }

    public function getNumberBrother(): int
    {
        return $this->numberBrother;
    }

    public function setNumberBrother(int $numberBrother): void
    {
        $this->numberBrother = $numberBrother;
    }

    public function getNumberSister(): int
    {
        return $this->numberSister;
    }

    public function setNumberSister(int $numberSister): void
    {
        $this->numberSister = $numberSister;
    }

    public function getPostalCode(): int
    {
        return $this->postalCode;
    }

    public function setPostalCode(int $postalCode): void
    {
        $this->postalCode = $postalCode;
    }

    public function getBirthDay(): DateTime
    {
        return $this->birthDay;
    }

    public function setBirthDay(DateTime $birthDay): void
    {
        $this->birthDay = $birthDay;
    }

    public function isDoeSmoke(): bool
    {
        return $this->doeSmoke;
    }

    public function setDoeSmoke(bool $doeSmoke): void
    {
        $this->doeSmoke = $doeSmoke;
    }

    public function isDoeDrink(): bool
    {
        return $this->doeDrink;
    }

    public function setDoeDrink(bool $doeDrink): void
    {
        $this->doeDrink = $doeDrink;
    }

    public function isDoeSexe(): bool
    {
        return $this->doeSexe;
    }

    public function setDoeSexe(bool $doeSexe): void
    {
        $this->doeSexe = $doeSexe;
    }

}