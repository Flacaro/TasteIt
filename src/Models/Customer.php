<?php


namespace App\Models;


class Customer extends User {
    private $surname;
    private $cart;
    private $fav;
    private $creditCards=[];
    private $orders=[];

    public function __construct() {

    }


    public function getCreditCards(): array
    {
        return $this->creditCards;
    }

    public function setCreditCards(array $creditCards): void
    {
        $this->creditCards = $creditCards;
    }

    public function getOrders(): array
    {
        return $this->orders;
    }

    public function setOrders(array $orders): void
    {
        $this->orders = $orders;
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

