<?php

namespace App\Foundation;
use PDO;


class FFavourites extends FConnection {
    function __construct()
    {
        parent::__construct('favourites', 'Favourites');


    }

    function create($object): string {
        $query = 'insert into ' . $this->table . '(';
        $query = $query.') values ();';
        $stmt = $this->connection->prepare($query);
        $stmt->execute();
        return $this->connection->lastInsertId();
        //$stmt->debugDumpParams();
    }

    function getListOfFavourites($id) {
        $query= 'select * from products where id in (SELECT productId FROM `products_favourites` WHERE favId='.$id.');';
        $stmt = $this->connection->prepare($query);
        $stmt->setFetchMode(PDO::FETCH_CLASS, "App\Models\Product");
        $stmt->execute();
        return $stmt->fetchAll();

    }

    function addToFavourites($favId, $productId) {
        $query = 'insert into products_favourites (`favId`, `productId`) values (' . $favId . ', ' . $productId . ');';
        $stmt = $this->connection->prepare($query);
        $stmt->setFetchMode(PDO::FETCH_CLASS, "App\Models\Product");
        $stmt->execute();
        return $stmt->fetchAll();
    }

}