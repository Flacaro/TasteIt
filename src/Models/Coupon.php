<?php


namespace App\Models;


class Coupon {
    private $id;
    private $priceCut;
    private $expirationDate;

    //crea un coupon a cui andranno settati gli altri valori con un codice unico con prefisso C di coupon
    public function __construct()
    {
        $this->id=uniqid("C");
    }

    public function getId()
    {
        return $this->id;
    }

    public function getExpirationDate()
    {
        return $this->expirationDate;
    }

    public function setExpirationDate($expirationDate): void
    {
        $this->expirationDate = $expirationDate;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }

    public function getPriceCut()
    {
        return $this->priceCut;
    }

    public function setPriceCut($priceCut): void
    {
        $this->priceCut = $priceCut;
    }



}