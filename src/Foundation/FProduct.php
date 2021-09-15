<?php


namespace App\Foundation;


use App\Models\Product;
use PDO;

class FProduct extends FConnection {

    function __construct()
    {
        parent::__construct('products', 'Product');
    }

    function load($id){
        $pdo = FConnection::connect();
        $query = 'select * from products where id='.$id;
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $p=$stmt->fetch();
        $freviews= new FReview();
        $prod=new Product;
        $prod->setId($p[0]);
        $prod->setName($p[1]);
        $prod->setDescription($p[2]);
        $prod->setPrice($p[3]);
        $prod->setImagePath($p[5]);
        $prod->setTimesOrdered($p[6]);
        $prod->setReviews($freviews->loadReviewsOfProduct($p[0]));
        //print_r($prod);
        return $prod;
    }


    function getBestSellers(){
        //SELECT * FROM products ORDER BY timesOrdered LIMIT 10;
        $query="SELECT * FROM products ORDER BY timesOrdered DESC LIMIT 8;";
        $stmt = $this->connection->prepare($query);
        $stmt->setFetchMode(PDO::FETCH_CLASS, "App\Models\Product");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function getAvgRating($productId){
        $query="SELECT avg(stars) as avgstars FROM reviews where ProductId=". $productId .";";
        $stmt = $this->connection->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    function getBestRated(){
        $query="select avg(stars) as average, productId from reviews group by productId order by average desc limit 8";
        $stmt = $this->connection->prepare($query);
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


    function getProductsIds($cartId, $productId){
        //select * from reviews where productId=$productId;
        $query="SELECT productId FROM products_carts where cartId = " . $cartId . ' and productId = ' . $productId . ';';
        $stmt = $this->connection->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function getStars($productId) {
        $query = 'select stars from reviews where productId = ' . $productId . ';';
        $stmt = $this->connection->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function createReview($review){
        //insert into reviews (stars, comment, userId, productId) values ($review->getStars(), $review->getComment(), $review->getUserId(), $review->getProductId)
        $query = 'insert into reviews (stars, comment, customerId, productId) values ('.$review->getStars().', \''. $review->getComment().'\', '. $review->getCustomerId(). ','. $review->getproductId().')';
        $stmt = $this->connection->prepare($query);
        $stmt->execute();
        $stmt->debugDumpParams();
    }

    function getBestSellerOfCategory($id){
        //SELECT name FROM products WHERE categoryId={$id} ORDER BY timesOrdered LIMIT 1;
        $query="SELECT * FROM products WHERE categoryId=".$id." ORDER BY timesOrdered DESC LIMIT 1;";
        $stmt = $this->connection->prepare($query);
        $stmt->setFetchMode(PDO::FETCH_CLASS, "App\Models\Product");
        $stmt->execute();
        return $stmt->fetch();
    }
    function getWorstSellerOfCategory($id){
        //SELECT name FROM products WHERE categoryId={$id} ORDER BY timesOrdered LIMIT 1;
        $query="SELECT * FROM products WHERE categoryId=".$id." ORDER BY timesOrdered LIMIT 1;";
        $stmt = $this->connection->prepare($query);
        $stmt->setFetchMode(PDO::FETCH_CLASS, "App\Models\Product");
        $stmt->execute();
        return $stmt->fetch();
    }
}