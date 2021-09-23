<?php

namespace App\Controllers;


use App\Foundation\FCart;
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
        $FCart = new FCart();
        $FFav = new FFavourites();
        $products = $FProduct->getAll();
        if ($session->isUserLogged()) {
            $cus = unserialize($_SESSION["customer"]);
            $cartId = $cus->getCart()->getId();
            $favId = $cus->getFav()->getId();
            $FCart->load($cartId);
            $FFav->load($favId);
            $vProduct = new VProduct();
            $vProduct->getProducts($products, $cartId, $favId);
        }
    }


    public function getProduct($id) {
        $FProduct = new FProduct();
        $ratings = $FProduct->getRatings($id);
        $product = $FProduct->load($id);
        $stars = $FProduct->getAvgRating($id);
        //????
        $star =$stars[0][0];
        //print_r($stars);
        $vProduct = new VProduct();
        $vProduct->getDetailsOfProduct($product, $star, $ratings);
    }


    public function addProductToCart($productId) {
        // il carrello si prende dalla sessione dall'utente loggato
        $session=Session::getInstance();
        $fCart = new FCart();
        $fProduct = new FProduct();
        $fFav = new FFavourites();
        $products = $fProduct->getAll();
        if ($session->isUserLogged()) {
            $cus = unserialize($_SESSION["customer"]);
            $cartId = $cus->getCart()->getId();
            $favId = $cus->getFav()->getId();
            $fCart->load($cartId);
            $fFav->load($favId);
            /*$quantity = $_POST['productQuantity'];*/
            $quantity = $_POST['quantity'];
            if($quantity == 1) {
                $fProduct->addToCart($productId, $cartId, 1);
            }
            else {
                $fProduct->addToCart($productId, $cartId, $quantity);

            }
            $vProduct = new VProduct();
            $vProduct->getProducts($products, $cartId, $favId);
        }
    }

    public function addToFavourites($productId) {
        $session=Session::getInstance();
        $FProduct = new FProduct();
        $FFavourites = new FFavourites();
        $FCart = new FCart();
        $FProduct->load($productId);

        if ($session->isUserLogged()) {
            $cus = unserialize($_SESSION["customer"]);
            $products = $FProduct->getAll();
            $favId = $cus->getFav()->getId();
            $FFavourites->load($favId);
            $cartId = $cus->getCart()->getId();
            $FCart->load($cartId);
            $FFavourites->addToFavourites($favId, $productId);
            $vProduct = new VProduct();
            $vProduct->getProducts($products, $cartId, $favId);
        }

    }


    public function createReview($productId)
    {
        $session = Session::getInstance();
        $FFavourites = new FFavourites();
        $FCart = new FCart();
        $rev = [];
        if ($session->isUserLogged()) {
            $cus = unserialize($_SESSION["customer"]);
            $favId = $cus->getFav()->getId();
            $FFavourites->load($favId);
            $cartId = $cus->getCart()->getId();
            $FCart->load($cartId);
            $FReview = new FReview();
            $stars = $_POST['stars'];
            $comment = $_POST['comment'];
            $review = new Review;
            $review->setStars($stars);
            $review->setComment($comment);
            //$review->setProductId($productId);
            $review->setCustomer($cus);
            array_push($rev, $review);
            $FReview->createReview($review, $productId);
            self::getProduct($productId);
           /* redirect(url("getProduct", ['productId' => $productId]));*/
        }
    }

}