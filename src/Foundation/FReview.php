<?php

namespace App\Foundation;

use App\Models\Review;

class FReview
{
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
}