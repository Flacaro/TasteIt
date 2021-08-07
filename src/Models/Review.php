<?php


namespace App\Models;


class Review {
 private $id;
 public $stars;
 public $review;

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

    public function getReview()
    {
        return $this->review;
    }

    public function setReview($review): void
    {
        $this->review = $review;
    }


}