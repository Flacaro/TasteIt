<?php

namespace App\Foundation;
use PDO;


class FFavourites extends Foundation {
    function __construct()
    {
        parent::__construct('favourites', 'Favourites');


    }
    function getListOfFavourites($id) {
        $query= 'select * from products where id in (SELECT productId FROM `products_favourites` WHERE favId='.$id.');';
        $stmt = $this->connection->prepare($query);
        $stmt->setFetchMode(PDO::FETCH_CLASS, "App\Models\Product");
        $stmt->execute();
        return $stmt->fetchAll();


    }
}