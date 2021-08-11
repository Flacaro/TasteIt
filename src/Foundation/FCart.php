<?php

namespace App\Foundation;


class FCart extends Foundation {

    function __construct()
    {
        parent::__construct('cart', 'Cart');
    }

    function getCartId($cartId, $userId) {
        //query che va a prendere i prodotti di quell'utente nel suo  carrello
    }
}