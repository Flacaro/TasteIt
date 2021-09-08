<?php


namespace App\Models;


class Coupon {
    private $id;
    public $priceCut;
    public $restaurantId = 1;

    public function getId()
    {
        return $this->id;
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