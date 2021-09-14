<?php

namespace App\Models;

class CreditCard implements PaymentMethod
{
    private $number;
    private $cvv;
    private $name;
    private $surname;
    private $expirationDate;

    public function pay(){

    }
    public function getId(){

    }

    public function getNumber()
    {
        return $this->number;
    }

    public function setNumber($number): void
    {
        $this->number = $number;
    }

    public function getCvv()
    {
        return $this->cvv;
    }

    public function setCvv($cvv): void
    {
        $this->cvv = $cvv;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function getSurname()
    {
        return $this->surname;
    }

    public function setSurname($surname): void
    {
        $this->surname = $surname;
    }

    public function getExpirationDate()
    {
        return $this->expirationDate;
    }

    public function setExpirationDate($expirationDate): void
    {
        $this->expirationDate = $expirationDate;
    }


}