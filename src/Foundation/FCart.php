<?php

namespace App\Foundation;


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
    //si va aprendere i prodotti dalla tabella carts_products
        //SELECT * FROM products_carts AS prodotti WHERE prodotti.productsId in (SELECT ProductId FROM Products_carts WHERE cartId=$id)
        $query= 'select * from products_carts' . 
    }
}