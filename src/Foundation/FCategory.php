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

    function load($id){
        $pdo = FConnection::connect();
        $query= 'select * from categories where id = ' . $id;
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $cat= $stmt->fetch();
        $category=new Category;
        $category->setId($cat[0]);
        $category->setName($cat[2]);
        $category->setImagePath($cat[3]);
        return $category;
    }

    function store($category){
        $pdo = FConnection::connect();
        $query='insert into categories (`restaurantId`, `categoryName`, imagePath) VALUES (1,\''.$category->getName().'\', \'/'.$category->getImage().'\')';
        $stmt = $pdo->prepare($query);
        $stmt->execute();
    }

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
            $c->setName($cat[2]);
            $c->setImagePath($cat[3]);
            array_push($categories, $c);
        }
        //print_r($categories);
        return $categories;
    }

    public function delete($id){
        $pdo = FConnection::connect();
        $query= "DELETE FROM categories WHERE id=".$id;
        $stmt = $pdo->prepare($query);
        $stmt->execute();
    }
}