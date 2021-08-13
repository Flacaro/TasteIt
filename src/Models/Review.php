<?php


namespace App\Models;


class Review {
 private $reviewId;
 public $stars;
 public $comment;
 public $userId;
 public $productId;

    public function getReviewId()
    {
        return $this->reviewId;
    }

    public function setReviewId($reviewId): void
    {
        $this->reviewId = $reviewId;
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

    public function getUserId()
    {
        return $this->userId;
    }

    public function setUserId($userId): void
    {
        $this->userId = $userId;
    }

    public function getProductId()
    {
        return $this->productId;
    }

    public function setProductId($productId): void
    {
        $this->productId = $productId;
    }


}