<?php

namespace App\Controllers;


use App\Foundation\FCart;
use App\Foundation\FCategory;
use App\Foundation\FFavourites;
use App\Foundation\FProduct;
use App\Foundation\FReview;
use App\Models\Review;
use App\Views\VFavourites;
use App\Views\VProduct;

class ProductController
{

    public function getAll() {
        $session = Session::getInstance();
        $FProduct = new FProduct();
        $products = $FProduct->getAll();
        $FCategory = new FCategory();
        $categories = $FCategory->getAll();
        $favId = NULL;
        $cartId = NULL;
        if ($session->isUserLogged()) {
            $cus = unserialize($_SESSION["customer"]);
            $cartId = $cus->getCart()->getId();
            $favId = $cus->getFav()->getId();
            $vProduct = new VProduct();
            $vProduct->getProducts($products, $cartId, $favId, $categories);
        }
        else{
            $vProduct = new VProduct();
            $vProduct->getProducts($products, $cartId, $favId, $categories);
        }

    }


    public function getProduct($id)
    {
        $session = Session::getInstance();
        $FProduct = new FProduct();
        $ratings = $FProduct->getRatings($id);
        $product = $FProduct->load($id);
        $stars = $FProduct->getAvgRating($id);
        $cartId = NULL;
        //????
        $star = $stars[0][0];
        //print_r($stars);
        if ($session->isUserLogged()) {
            $cus = unserialize($_SESSION["customer"]);
            $cartId = $cus->getCart()->getId();
            $vProduct = new VProduct();
            $vProduct->getDetailsOfProduct($product, $star, $ratings, $cartId);
        } else {
            $vProduct = new VProduct();
            $vProduct->getDetailsOfProduct($product, $star, $ratings, $cartId);
        }

    }


    public function addProductToCart($productId)
    {
        // il carrello si prende dalla sessione dall'utente loggato
        $session = Session::getInstance();
        $fProduct = new FProduct();
        $fCart = new FCart();
        $products = $fProduct->getAll();
        $FCategory = new FCategory();
        $categories = $FCategory->getAll();

        if ($session->isUserLogged()) {
            $cus = unserialize($_SESSION["customer"]);
            $cartId = $cus->getCart()->getId();
            $favId = $cus->getFav()->getId();
            $cart = $fCart->load($cartId);
            $cartProducts = $cart->getProducts();
            $q = (int)$_POST['quantity'];


            if (!sizeof($cartProducts)) {
                $fProduct->addToCart($productId, $cartId, $q);
                //print_r("add se l'array è vuoto");
            }

            if (!sizeof($cartProducts)) {
                $fProduct->addToCart($productId, $cartId, $q);
                //print_r("add se l'array è vuoto");
            }

            $cartProd = array_filter($cartProducts, function ($cartProduct) use ($productId) {
                return $cartProduct[0]->getId() === $productId;
            });
            //print_r($cartProd);

            if (!sizeof($cartProd) and sizeof($cartProducts)) {
                $fProduct->addToCart($productId, $cartId, $q);
                // print_r("add se l'array cartProd è vuoto");

            } elseif (sizeof($cartProd) and sizeof($cartProducts)) {
                $oldQuantity = $fCart->getQuantity($cartId, $productId);
                //print_r($oldQuantity);
                $newQuantity = $q + $oldQuantity[0];
                $fCart->updateQuantity($cart->getId(), $productId, $newQuantity);
                // print_r("update");
            }

            $VProduct = new VProduct();
            $VProduct->getProducts($products, $cartId, $favId, $categories);
        }
    }


    public function addProductFromAll($productId)
    {
        $session = Session::getInstance();
        $fProduct = new FProduct();
        $fCart = new FCart();
        if ($session->isUserLogged()) {
            $cus = unserialize($_SESSION["customer"]);
            $cartId = $cus->getCart()->getId();
            $cart = $fCart->load($cartId);
            $cartProducts = $cart->getProducts();

            if (!sizeof($cartProducts)) {
                $fProduct->addToCart($productId, $cartId, 1);
                //print_r("add se cartProducts è vuoto");
            }

            $cartProd = array_filter($cartProducts, function ($cartProduct) use ($productId) {
                return $cartProduct[0]->getId() === $productId;
            });

            if (!sizeof($cartProd) and sizeof($cartProducts)) {
                $fProduct->addToCart($productId, $cartId, 1);
                //print_r("add se cartProd è vuoto");
            } else {
                $fCart->incrementQuantity($cart->getId(), $productId, array_pop($cartProd)[1]);
                //print_r("increment");
            }

        }

        redirect('/products');
    }


    public function addToFavourites($productId)
    {
        $session = Session::getInstance();
        $FFavourites = new FFavourites();

        if ($session->isUserLogged()) {
            $cus = unserialize($_SESSION["customer"]);
            $favId = $cus->getFav()->getId();
            $favProducts = $FFavourites->getFavouritesProducts($favId);

            if (!sizeof($favProducts)) {
                $FFavourites->addToFavourites($favId, $productId);
            }

            $favProd = array_filter($favProducts, function ($favProduct) use ($productId) {
                return $favProduct->getId() === $productId;
            });

            if (!sizeof($favProd) and sizeof($favProducts)) {
                $FFavourites->addToFavourites($favId, $productId);
            }
        }

        redirect('/products');

    }


    public function createReview($productId)
    {
        $session = Session::getInstance();
        $rev = [];
        if ($session->isUserLogged()) {
            $cus = unserialize($_SESSION["customer"]);
            $FReview = new FReview();
            $stars = $_POST['stars'];
            $comment = $_POST['comment'];
            $review = new Review;
            $review->setStars($stars);
            $review->setComment($comment);
            $review->setCustomer($cus);
            array_push($rev, $review);
            $FReview->createReview($review, $productId);
            self::getProduct($productId);
           /* redirect(url("getProduct", ['productId' => $productId]));*/
        }
    }

}