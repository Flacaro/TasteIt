<?php

namespace App\Models;

class ProductWithQuantity extends Product{
    private $quantity;


    public function getQuantity()
    {
        return $this->quantity;
    }

    public function setQuantity($quantity): void
    {
        $this->quantity = $quantity;
    }

}