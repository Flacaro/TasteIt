<?php


namespace App\Models;


class Customer extends User {
    public $surname;
    public $cartId;
    public $favId;

    public function __construct() {
    }


    public function getSurname()
    {
        return $this->surname;
    }

    public function setSurname($surname): void
    {
        $this->surname = $surname;
    }

    public function setCartId($cartId): void
    {
        $this->cartId = $cartId;
    }

    public function getCartId()
    {
        return $this->cartId;
    }

    public function getFavId()
    {
        return $this->favId;
    }

    public function setFavId($favId): void
    {
        $this->favId = $favId;
    }



}

