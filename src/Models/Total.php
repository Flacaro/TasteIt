<?php

namespace App\Models;

class Total {

    public $name;
    public $surname;
    public $email;
    public $total;

    public function __construct() {
    }


    public function getName()
    {
        return $this->name;
    }


    public function setName($name): void
    {
        $this->name = $name;
    }


    public function getSurname()
    {
        return $this->surname;
    }


    public function setSurname($surname): void
    {
        $this->surname = $surname;
    }


    public function getEmail()
    {
        return $this->email;
    }


    public function setEmail($email): void
    {
        $this->email = $email;
    }

    public function getTotal()
    {
        return $this->total;
    }


    public function setTotal($total): void
    {
        $this->total = $total;
    }


}