<?php

namespace App\Foundation;
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

    }

    function delete(){

    }

    function update(){

    }

    //trasformare in load
    function getListOfFavourites($id) {
        $pdo = FConnection::connect();
        $query= 'select * from products where id in (SELECT productId FROM `products_favourites` WHERE favId='.$id.');';
        $stmt = $pdo->prepare($query);
        $stmt->setFetchMode(PDO::FETCH_CLASS, "App\Models\Product");
        $stmt->execute();
        return $stmt->fetchAll();

    }

    //usata per update
    function addToFavourites($favId, $productId) {
        $query = 'insert into products_favourites (`favId`, `productId`) values (' . $favId . ', ' . $productId . ');';
        $stmt = $this->connection->prepare($query);
        $stmt->setFetchMode(PDO::FETCH_CLASS, "App\Models\Product");
        $stmt->execute();
        return $stmt->fetchAll();
    }

}