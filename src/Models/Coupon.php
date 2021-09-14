<?php


namespace App\Models;


class Coupon {
    private $id;
    private $priceCut;
    private $expirationDate;

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

    public function getRestaurantId()
    {
        return $this->restaurantId;
    }


}