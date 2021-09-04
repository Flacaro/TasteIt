<?php


namespace App\Models;


use App\Foundation\FProduct;
use App\Foundation\FCustomer;

class Review {
 private $id;
 public $stars;
 public $comment;
 public $customerId;
 public $productId;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }

    public function getStars()
    {
        return $this->stars;
    }

    public function setStars($stars): void
    {
        $this->stars = $stars;
    }

    public function getComment()
    {
        return $this->comment;
    }

    public function setComment($review): void
    {
        $this->comment = $review;
    }

    public function getCustomerId()
    {
        return $this->customerId;
    }

    public function setCustomerId($customerId): void
    {
        $this->customerId = $customerId;
    }

    public function getProductId()
    {
        return $this->productId;
    }

    public function setProductId($productId): void
    {
        $this->productId = $productId;
    }

    public function getProduct(){
        $FProduct= new FProduct;
        return $FProduct->getbyId($this->getProductId());
    }
    public function getUser(){
        $FUser = new FCustomer;
        return $FUser->getbyId($this->getCustomerId());
    }
}