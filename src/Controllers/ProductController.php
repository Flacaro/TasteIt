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
        $session=Session::getInstance();
        $FProduct = new FProduct();
        $products = $FProduct->getAll();
        $FCategory = new FCategory();
        $categories = $FCategory->getAll();
        if ($session->isUserLogged()) {
            $cus = unserialize($_SESSION["customer"]);
            $cartId = $cus->getCart()->getId();
            $favId = $cus->getFav()->getId();
            $vProduct = new VProduct();
            $vProduct->getProducts($products, $cartId, $favId, $categories);
        }
    }


    public function getProduct($id) {
        $session=Session::getInstance();
        $FProduct = new FProduct();
        $ratings = $FProduct->getRatings($id);
        $product = $FProduct->load($id);
        $stars = $FProduct->getAvgRating($id);
        $cartId = NULL;
        //????
        $star =$stars[0][0];
        //print_r($stars);
        if ($session->isUserLogged()) {
            $cus = unserialize($_SESSION["customer"]);
            $cartId = $cus->getCart()->getId();
            $vProduct = new VProduct();
            $vProduct->getDetailsOfProduct($product, $star, $ratings, $cartId);
        }
        else {
            $vProduct = new VProduct();
            $vProduct->getDetailsOfProduct($product, $star, $ratings, $cartId);
        }

    }


    public function addProductToCart($productId) {
        // il carrello si prende dalla sessione dall'utente loggato
        $session=Session::getInstance();
        $fProduct = new FProduct();
        $fCart = new FCart();
        $products = $fProduct->getAll();
        $FCategory = new FCategory();
        $categories = $FCategory->getAll();

        if ($session->isUserLogged()) {
            $cus = unserialize($_SESSION["customer"]);
            $cartId = $cus->getCart()->getId();
            $favId = $cus->getFav()->getId();
            $quantity = $_POST['quantity'];
            $cart = $fCart->load($cartId);
            $cartProducts = $cart->getProducts();
            /* echo '<pre>'; print_r($product[0]->getId()); echo '</pre>';*/
            foreach ($cartProducts as $cartProduct) {
//                printObject($cartProduct[0]);
               /* if($productId == $cartProduct[0]->getId()) {
                    $fCart->incrementQuantity($cart, $productId, $quantity);
                    /*print_r("ci sta");
                    print_r($quantity);
                }
                else {
                    $fProduct->addToCart($productId, $cartId, $quantity);
                    //print_r("nun ci sta");

                }*/
            }
          /*  $vProduct = new VProduct();
            $vProduct->getProducts($products, $cartId, $favId, $categories);*/
        }
        /*    if($quantity == 1) {
                $fProduct->addToCart($productId, $cartId, 1);
            }
            $fProduct->addToCart($productId, $cartId, $quantity);*/

        }


    public function addToFavourites($productId) {
        $session=Session::getInstance();
        $FProduct = new FProduct();
        $FFavourites = new FFavourites();
        $FProduct->load($productId);
        $FCategory = new FCategory();
        $categories = $FCategory->getAll();
        if ($session->isUserLogged()) {
            $cus = unserialize($_SESSION["customer"]);
            $products = $FProduct->getAll();
            $favId = $cus->getFav()->getId();
            $cartId = $cus->getCart()->getId();
            $FFavourites->addToFavourites($favId, $productId);
            $vProduct = new VProduct();
            $vProduct->getProducts($products, $cartId, $favId, $categories);
        }

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