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
}