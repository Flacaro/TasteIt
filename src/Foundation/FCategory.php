<?php

namespace App\Foundation;


use App\Models\Product;
use PDO;

class FCategory extends FConnection {

    function __construct()
    {
        parent::__construct('categories', 'Category');
    }
    /*function load($id){
        $pdo = FConnection::connect();
        $query = 'select * from category where id='.$id;
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        //$stmt->debugDumpParams();
    }*/

    function loadCategoryProducts($categoryId) {
        $pdo = FConnection::connect();
        $query= 'select * from products where categoryId = ' . $categoryId;
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $prods= $stmt->fetchAll();
        $products=[];
        foreach($prods as $p){
            $freviews= new FReview();
            $prod=new Product;
            $prod->setId($p[0]);
            $prod->setName($p[1]);
            $prod->setDescription($p[2]);
            $prod->setPrice($p[3]);
            $prod->setImagePath($p[5]);
            $prod->setTimesOrdered($p[6]);
            $prod->setReviews($freviews->loadReviewsOfProduct($p[0]));
            array_push($products,$prod);
        }
        return $products;
    }
}