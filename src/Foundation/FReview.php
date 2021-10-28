<?php

namespace App\Foundation;

use App\Models\Review;

class FReview {

    //la delete la facciamo?

    public function loadReviewsOfProduct($id){
        $pdo = FConnection::connect();
        $query = 'select * from reviews as r where r.productId='.$id;
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $r=$stmt->fetchAll();
        $reviews=[];
        $fcustomer=new FCustomer();
        foreach ($r as $review){
            //print_r($review);
            $rew=new Review;
            $rew->setId($review['id']);
            $rew->setStars($review['stars']);
            $rew->setComment($review['comment']);
            $rew->setCustomer($fcustomer->loadNameSurname($review['customerId']));
            array_push($reviews, $rew);
        }
        return $reviews;
    }

    function createReview($review, $productId){
        $pdo = FConnection::connect();
        //insert into reviews (stars, comment, userId, productId) values ($review->getStars(), $review->getComment(), $review->getUserId(), $review->getProductId)
        $query = 'insert into reviews(stars, comment, customerId, productId) values ('.$review->getStars().', "'. $review->getComment().'", '. $review->getCustomer()->getId(). ','. $productId.')';
        $stmt = $pdo->prepare($query);
        $stmt->execute();
    }
}