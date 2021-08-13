<?php


namespace App\Models;


class PaymentMethod {
 private $paymentId;
 public $method;
 public $cardNumber;
 public $expirationDate;
 public $cardHolder;
 public $cvv;


    public function getPaymentId()
    {
        return $this->paymentId;
    }

    public function setPaymentId($paymentId): void
    {
        $this->paymentId = $paymentId;
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


    public function getCardHolder()
    {
        return $this->cardHolder;
    }


    public function setCardHolder($cardHolder): void
    {
        $this->cardHolder = $cardHolder;
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