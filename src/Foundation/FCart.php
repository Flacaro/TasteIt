<?php

namespace App\Foundation;


use PDO;

class FCart extends Foundation {

    function __construct()
    {
        parent::__construct('carts', 'Cart');
    }

    function getCartId($cartId, $userId) {
        //query che va a prendere i prodotti di quell'utente nel suo  carrello
    }

        function create($object): string {
        $query = 'insert into ' . $this->table . '(';
        $query = $query.') values ();';
        $stmt = $this->connection->prepare($query);
        $stmt->execute();
        return $this->connection->lastInsertId();
        //$stmt->debugDumpParams();
    }

    function getProductsOfCart($id) {
    //si va a prendere i prodotti dalla tabella carts_products
        //SELECT * FROM products_carts AS prodotti WHERE prodotti.productsId in (SELECT ProductId FROM Products_carts WHERE cartId=$id)
        $query= 'select * from products where id in (SELECT productId FROM `products_carts` WHERE cartId='.$id.');';
        $stmt = $this->connection->prepare($query);
        //attenzione al fetch dobbiamo mette tutto
        $stmt->setFetchMode(PDO::FETCH_CLASS, "App\Models\Product");
        //$stmt->debugDumpParams();
        $stmt->execute();
        return $stmt->fetchAll();

    }
}