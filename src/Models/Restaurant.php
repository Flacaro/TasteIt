<?php

namespace App\Models;

class Restaurant extends User {

    public $phone;

    public function __construct() {
    }


    public function getPhone()
    {
        return $this->phone;
    }

    public function setPhone($phone): void
    {
        $this->phone = $phone;
    }

}