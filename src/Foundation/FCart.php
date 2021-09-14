<?php

namespace App\Foundation;


use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use PDO;

class FCart extends FConnection {

    function __construct()
    {
        parent::__construct('carts', 'Cart');
    }

//passiamo un oggetto carrello inizialmente vuoto
    function store($object): string {
        $pdo = FConnection::connect();
        $query = 'insert into carts () values ()';
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        return $pdo->lastInsertId();
        //$stmt->debugDumpParams();
    }

    function addToCart($cart, $product): string {
        $pdo = FConnection::connect();
        $products=$cart->getProducts();
        $query = 'insert into products_carts (`productId`, `cartId`, `quantity`) values('.$product->getId().', '.$cart->getId().', 1)';
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        return $pdo->lastInsertId();
        //$stmt->debugDumpParams();
    }

    function incrementQuantity($cart, $product, $quantity) {
        $pdo = FConnection::connect();
        $quantityPlus = $quantity['quantity'] + 1;
        $query = 'UPDATE products_carts SET quantity = '. $quantityPlus . ' WHERE productId = ' . $product->getId() . ' and cartId = ' . $cart->getId() . ';';
        $stmt = $pdo->prepare($query);
        //$stmt->setFetchMode(PDO::FETCH_CLASS, "App\Models\Product");
        $stmt->execute();
        //return $stmt->fetchAll();
    }


    function decrementQuantity($cart, $product, $quantity) {
        $pdo = FConnection::connect();
        $quantityMinus = $quantity['quantity'] - 1;
        $query = "update products_carts set quantity = " . $quantityMinus . ' WHERE productId = ' . $product->getId() . ' and cartId = ' . $cart->getId() . ';';
        $stmt = $pdo->prepare($query);
        //$stmt->setFetchMode(PDO::FETCH_CLASS, "App\Models\Product");
        $stmt->execute();
        //return $stmt->fetchAll();
    }

    function deleteFromCart($cart, $product) {
        $pdo = FConnection::connect();
        $query = 'delete from products_carts where productId = ' . $product->getId() . ' and cartId = ' . $cart->getId() . ';';
        $stmt = $pdo->prepare($query);
        $stmt->execute();
    }



    function load($id) {
    //si va a prendere i prodotti dalla tabella carts_products
        //SELECT * FROM products_carts AS prodotti WHERE prodotti.productsId in (SELECT ProductId FROM Products_carts WHERE cartId=$id)
        $pdo = FConnection::connect();
        $query= 'select products.id, products.name, products.description, products.price, products.categoryId, products_carts.quantity from products  join products_carts ON products.id = products_carts.productId WHERE products_carts.cartId='.$id.';';
        $stmt = $pdo->prepare($query);
        //attenzione al fetch dobbiamo mette tutto
        //$stmt->debugDumpParams();
        $stmt->execute();
        $products=$stmt->fetchAll();
        $newCart = new Cart;
        $newCart->setId($id);
        foreach($products as $product){
            $p= new Product;
            $p->setId($product[0]);
            $p->setName($product[1]);
            $p->setDescription($product[2]);
            $p->setPrice($product[3]);
        }

        return $newCart;

    }

    function getQuantityOfProduct($cartId,$productId) {
        $query = 'select quantity from products_carts where productId = ' . $productId . ' and ' . ' cartId = '. $cartId . ';';
        $stmt = $this->connection->prepare($query);
        $stmt->execute();
        return $stmt->fetch();
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


