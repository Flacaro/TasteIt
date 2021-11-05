<?php

namespace App\Foundation;


use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductWithQuantity;
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
    }

    function update($newCart){

        $pdo = FConnection::connect();
        $query="select * from products_carts where cartId=".$newCart->getId();
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        //oldcart array di array con gli attributi dei prodotti nel vecchio carrello
        $oldCart=$stmt->fetchAll();
        //print_r($oldCart);
        foreach ($newCart->getProducts() as $newp){
            $wasAlreadyPresent=false;
            //newcart oggetto carrello
            //newp array con in [0] l'oggetto prodotto e in [1] la quantità di quel prodotto nel carrello
            foreach($oldCart as $p){
                if ($p[1]==$newp[0]->getId()){
                    $wasAlreadyPresent=true;
                }
            }
            if ($wasAlreadyPresent==true){
                $this->updateQuantity($newCart->getId(), $newp[0]->getId(), $newp[1]);
            }
            else {
                $this->addToCart($newCart, $newp[0]);
            }
        }
    }


    function addToCart($cart, $product): string {
        $pdo = FConnection::connect();
        $query = 'insert into products_carts (`productId`, `cartId`, `quantity`) values('.$product->getId().', '.$cart->getId().', 1)';
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        //$stmt->debugDumpParams();
        return $pdo->lastInsertId();

    }

    function incrementQuantity(int $cartId, int $productId, int $quantity) {
        $pdo = FConnection::connect();
        $quantity = $quantity + 1;
        $query = 'UPDATE products_carts SET quantity = '. $quantity . ' WHERE productId = ' . $productId . ' and cartId = ' . $cartId . ';';
        $stmt = $pdo->prepare($query);
        $stmt->execute();
    }


    function getQuantity(int $cartId, int $productId) {
        $pdo = FConnection::connect();
        $query = 'SELECT `quantity` FROM `products_carts` where productId = ' . $productId . ' and cartId =' . $cartId . ';';
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        //$stmt->debugDumpParams();
        return $stmt->fetch();
    }

    function updateQuantity(int $cartId, int $productId, int $quantity) {
        $pdo = FConnection::connect();
        $query = 'UPDATE products_carts SET quantity = '. $quantity . ' WHERE productId = ' . $productId . ' and cartId = ' . $cartId . ';';
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        //$stmt->debugDumpParams();
    }

    function deleteFromCart($cart, $product) {
        $pdo = FConnection::connect();
        $query = 'delete from products_carts where productId = ' . $product->getId() . ' and cartId = ' . $cart->getId() . ' ;';
        $stmt = $pdo->prepare($query);
        $stmt->execute();
    }



    public static function load($id) {
        $pdo = FConnection::connect();
        $query= 'select products.id, products.name, products.description, products.price, products_carts.quantity, products.image from products  join products_carts ON products.id = products_carts.productId WHERE products_carts.cartId='.$id.';';
        $stmt = $pdo->prepare($query);
        //$stmt->debugDumpParams();
        $stmt->execute();
        $products = $stmt->fetchAll();
        $newCart = new Cart;
        $newCart->setId($id);
        $c=[];
        foreach($products as $product){
            $p= new Product;
            $p->setId($product[0]);
            $p->setName($product[1]);
            $p->setDescription($product[2]);
            $p->setPrice($product[3]);
            $p->setImagePath($product[5]);
            array_push($c, [$p, $product[4]]);
        }
        $newCart->setProducts($c);
        return $newCart;

    }


    function getCoupon($couponId) {
        $pdo = FConnection::connect();
        $query = 'select coupons.priceCut from coupons where id = ' . $couponId . ';';
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        return $stmt->fetch();
    }


    function emptyCart($id){
        $pdo = FConnection::connect();
        $query="delete from products_carts where cartId=".$id;
        $stmt = $pdo->prepare($query);
        $stmt->execute();
    }
}


