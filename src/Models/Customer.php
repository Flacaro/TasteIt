<?php


namespace App\Models;


class Customer extends User {
    public $surname;
    public $cart=[];
    public $fav=[];

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

    public function getCart(): array
    {
        return $this->cart;
    }

    public function setCart(array $cart): void
    {
        $this->cart = $cart;
    }

    public function getFav(): array
    {
        return $this->fav;
    }

    public function setFav(array $fav): void
    {
        $this->fav = $fav;
    }


}

