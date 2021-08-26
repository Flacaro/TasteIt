<?php


namespace App\Foundation;


use PDO;

class FProduct extends Foundation {

    function __construct()
    {
        parent::__construct('products', 'Product');
    }

    function getProductsByCategoryId($categoryId) {
        $query= 'select * from products where categoryId = ' . $categoryId;
        $stmt = $this->connection->prepare($query);
        //attenzione al fetch dobbiamo mette tutto
        $stmt->setFetchMode(PDO::FETCH_CLASS, "App\Models\Product");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function getBestSellers(){
        //SELECT * FROM products ORDER BY timesOrdered LIMIT 10;
        $query="SELECT * FROM products ORDER BY timesOrdered DESC LIMIT 10;";
        $stmt = $this->connection->prepare($query);
        $stmt->setFetchMode(PDO::FETCH_CLASS, "App\Models\Product");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function getRatings($productId){
        //select * from reviews where productId=$productId;
        $query='select * from reviews where productId='.$productId;
        $stmt = $this->connection->prepare($query);
        $stmt->setFetchMode(PDO::FETCH_CLASS, "App\Models\Review");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function getBestReviews(){
        //select * from reviews where productId=$productId;
        $query="SELECT * FROM reviews ORDER BY stars DESC LIMIT 6;";
        $stmt = $this->connection->prepare($query);
        $stmt->setFetchMode(PDO::FETCH_CLASS, "App\Models\Review");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function addToCart($cartId, $productId) {
        $query = 'insert into products_carts (`productId`, `cartId`, `quantity`) values (' . $productId . ', ' . $cartId . ', ' . '  1);';
        $stmt = $this->connection->prepare($query);
        $stmt->execute();
    }


    function getProductsIds($cartId, $productId){
        //select * from reviews where productId=$productId;
        $query="SELECT productId FROM products_carts where cartId = " . $cartId . ' and productId = ' . $productId . ';';
        $stmt = $this->connection->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }

}