<?php

namespace App\Foundation;
use App\Models\Favourites;
use App\Models\Product;
use PDO;


class FFavourites extends FConnection {
    function __construct()
    {
        parent::__construct('favourites', 'Favourites');


    }

    //non andremo mai a inserire nel db una lista preferiti che non sia vuota, quindi la store di un oggetto pieno non ci serve
    function store($fav): string {
        $pdo = FConnection::connect();
        $query = 'insert into favourites () values ()';
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        return $pdo->lastInsertId();
        //$stmt->debugDumpParams();
    }

    function exist($id){
        $pdo = FConnection::connect();
        $query="select * from favourites where id=".$id;
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $fav=$stmt->fetch();
        if ($fav!=NULL){
            return true;
        }
        else{
            return false;
        }
    }

    function delete($id){
        $pdo = FConnection::connect();
        $query="delete from favourites where id=".$id;
        $stmt = $pdo->prepare($query);
        $stmt->execute();
    }

    function load($id) {
        $fav=new Favourites();
        $fav->setId($id);
        $pdo = FConnection::connect();
        $query= 'select * from products as p, products_favourites as pf where id in (SELECT productId FROM `products_favourites` WHERE favId='.$id.');';
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $products= $stmt->fetchAll();
        $f=[];
        foreach($products as $p){
        $prod=new Product;
        $prod->setId($p[0]);
        $prod->setName($p[1]);
        $prod->setDescription($p[2]);
        $prod->setPrice($p[3]);
        $prod->setImagePath($p[5]);
        $prod->setTimesOrdered($p[6]);
        array_push($f, $prod);
        }
        $fav->setProducts($f);
        return $f;
    }

    function addToFavourites($favId, $productId) {
        $pdo = FConnection::connect();
        $query = 'insert into products_favourites(`favId`, `productId`) values (' . $favId . ', ' . $productId . ');';
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        return $stmt->fetch();
    }

    function deleteFromFavourites($favId, $productId){
        $pdo = FConnection::connect();
        $query = 'delete from products_favourites where favId='.$favId.' and productId='.$productId;
        $stmt = $pdo->prepare($query);
        $stmt->execute();
    }

    public function getFavouritesProducts($favId){
        $pdo = FConnection::connect();
        $query= "SELECT pf.productId, p.name, p.image FROM products_favourites as pf join products as p on pf.productId = p.id where pf.favId = " . $favId . ";";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $prods = $stmt->fetchAll();
        //$stmt->debugDumpParams();
        $products = [];
        //print_r($favs);
        foreach ($prods as $prod) {
            $p = new Product();
            $p->setId($prod[0]);
            $p->setName($prod[1]);
            $p->setImagePath($prod[2]);
            array_push($products, $p);
        }
        //print_r($products);
        return $products;
    }

}