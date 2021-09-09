<?php

namespace App\Foundation;


use PDO;

class FCart extends Foundation {

    function __construct()
    {
        parent::__construct('carts', 'Cart');
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
        $query= 'select products.id, products.name, products.description, products.price, products.categoryId, products_carts.quantity from products  join products_carts ON products.id = products_carts.productId WHERE products_carts.cartId='.$id.';';
        $stmt = $this->connection->prepare($query);
        //attenzione al fetch dobbiamo mette tutto
        $stmt->setFetchMode(PDO::FETCH_CLASS, "App\Models\Product");
        //$stmt->debugDumpParams();
        $stmt->execute();
        return $stmt->fetchAll();

    }

    function getQuantityOfProduct($cartId,$productId) {
        $query = 'select quantity from products_carts where productId = ' . $productId . ' and ' . ' cartId = '. $cartId . ';';
        $stmt = $this->connection->prepare($query);
        $stmt->execute();
        return $stmt->fetch();
    }

    function incrementQuantity($cartId, $productId, $quantity) {
        $quantityPlus = $quantity['quantity'] + 1;
        $query = 'UPDATE products_carts SET quantity = '. $quantityPlus . ' WHERE productId = ' . $productId . ' and cartId = ' . $cartId . ';';
        $stmt = $this->connection->prepare($query);
        $stmt->setFetchMode(PDO::FETCH_CLASS, "App\Models\Product");
        $stmt->execute();
        return $stmt->fetchAll();
    }


    function decrementQuantity($cartId, $productId, $quantity) {
        $quantityMinus = $quantity['quantity'] - 1;
        $query = "update products_carts set quantity = " . $quantityMinus . ' where productId = ' . $productId . ' and cartId = ' . $cartId . ';';
        $stmt = $this->connection->prepare($query);
        $stmt->setFetchMode(PDO::FETCH_CLASS, "App\Models\Product");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function addToCart($cartId, $productId) {
        $query = 'insert into products_carts (`productId`, `cartId`, `quantity`) values (' . $productId . ', ' . $cartId . ', ' . '  1);';
        $stmt = $this->connection->prepare($query);
        $stmt->execute();
    }

    function deleteFromCart($cartId, $productId) {
        $query = 'delete from products_carts where productId = ' . $productId . ' and cartId = ' . $cartId . ';';
        $stmt = $this->connection->prepare($query);
        $stmt->execute();
    }

    function getCoupon($couponId) {
        $query = 'select coupons.priceCut from coupons where id = ' . $couponId . ';';
        $stmt = $this->connection->prepare($query);
        $stmt->execute();
        return $stmt->fetch();
    }

    function getCustomerCart($cartId){
        $query="select products.id, name, description, price, quantity from products join products_carts as pc on products.id=pc.productId where pc.cartId=".$cartId;
        $stmt = $this->connection->prepare($query);
        $stmt->setFetchMode(PDO::FETCH_CLASS, "App\Models\ProductWithQuantity");
        $stmt->execute();
        return $stmt->fetchAll();
    }
}


