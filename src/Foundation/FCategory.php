<?php

namespace App\Foundation;


use App\Models\Category;
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

    public function getAll(){
        $pdo = FConnection::connect();
        $query= "SELECT * FROM categories";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $cats = $stmt->fetchAll();
        //$stmt->debugDumpParams();
        $categories = [];
        //print_r($cats);
        foreach ($cats as $cat) {
            $c = new Category();
            $c->setId($cat[0]);
            $c->setCategoryName($cat[2]);
            $c->setImage($cat[3]);
            array_push($categories, $c);
        }
        //print_r($categories);
        return $categories;
    }
}