<?php


namespace App\Models;


class Payment {
 private $id;
 public $method;
 public $cardNumber;
 public $expirationDate;
 public $holder;
 public $cvv;


    public function getId()
    {
        return $this->id;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }

    public function getMethod()
    {
        return $this->method;
    }

    public function setMethod($method): void
    {
        $this->method = $method;
    }


    public function getCardNumber()
    {
        return $this->cardNumber;
    }


    public function setCardNumber($cardNumber): void
    {
        $this->cardNumber = $cardNumber;
    }


    public function getExpirationDate()
    {
        return $this->expirationDate;
    }


    public function setExpirationDate($expirationDate): void
    {
        $this->expirationDate = $expirationDate;
    }


    public function getHolder()
    {
        return $this->holder;
    }


    public function setHolder($holder): void
    {
        $this->holder = $holder;
    }


    public function getCvv()
    {
        return $this->cvv;
    }


    public function setCvv($cvv): void
    {
        $this->cvv = $cvv;
    }


}