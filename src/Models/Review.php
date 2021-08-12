<?php


namespace App\Models;


class Review {
 private $id;
 public $stars;
 public $comment;

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


}