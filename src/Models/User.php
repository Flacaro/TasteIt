<?php


namespace App\Models;


class User
{
    private $id;
    public $name;
    public $surname;
    public $email;
    public $password;
    public $cartId;
    public $favId;

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

    public function getId()
    {
        return $this->id;
    }


    public function setId($id): void
    {
        $this->id = $id;
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

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password): void
    {
        $this->password = $password;
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

