<?php

namespace App\Controllers;

use App\Foundation\FCart;
use App\Foundation\FCategory;
use App\Foundation\FFavourites;
use App\Foundation\FProduct;
use App\Views\VCart;
use App\Views\VFavourites;
use App\Views\VHomePage;
use App\Views\VProduct;

class HomePageController {
/*    //servirà a caricare tutti i dati nella home: categorie, best sellers ecc
 public function homeData($categories, $bestSellers){

 }*/

 public function visualizeHome(){
     $session = Session::getInstance();
     $FCart = new FCart();
     $FProduct = new FProduct();
     $FCategory = new FCategory();
     $categories = $FCategory->getAll();
     $bestSellers = $FProduct->getBestSellers();
     // sono prodotti, non reviews
     $bestReviews = $FProduct->getBestReviews();
     $products = $FProduct->getAll();
     $b = $FProduct->getBestRated();
     $topThreeReviews = [];

     foreach($bestReviews as $product) {
         if(sizeof($product->getReviews())) {
             array_push($topThreeReviews, $product->getReviews()[0]);
         }
     }

     $bestRateds = [];
     foreach ($b as $best) {
         array_push($bestRateds, $FProduct->load($best[1]));
     }
     if ($session->isUserLogged()) {
         $cus = unserialize($_SESSION["customer"]);
         $favId = $cus->getFav()->getId();
         $cartId = $cus->getCart()->getId();
         $cart = $FCart->load($cartId);
         $productsC = $cart->getProducts();
         $products = $FProduct->getAll();
         $vHome = new VHomePage();
         $vHome->viewHomePageIfLogged($favId, $cartId, $categories, $bestSellers, $bestRateds, $topThreeReviews, $products, $productsC);
     }
     $vHome = new VHomePage();
     $vHome->viewHomePageIfLogged($favId = NULL, $cartId = NULL, $categories, $bestSellers, $bestRateds, $topThreeReviews, $products, $productsC = NULL);

 }

    public function addToCartFromHome($productId) {
        $session=Session::getInstance();
        $fProduct = new FProduct();
        $fCart = new FCart();
        if ($session->isUserLogged()) {
            $cus = unserialize($_SESSION["customer"]);
            $cartId = $cus->getCart()->getId();
            $cart = $fCart->load($cartId);
            $quantity = $_POST['quantity'];
            if($quantity == 1) {
                $fProduct->addToCart($productId, $cartId, 1);
            }
            else {
                $fProduct->addToCart($productId, $cartId, $quantity);

            }
           /* $vcart = new VCart();
            $vcart->getProducts($products, $id);*/

        }
    }

    public function addToFavouritesFromHome($productId) {
        $session = Session::getInstance();
        $FProduct = new FProduct();
        $FFavourites = new FFavourites();
        $FProduct->load($productId);
        if ($session->isUserLogged()) {
            $cus = unserialize($_SESSION["customer"]);
            $favId = $cus->getFav()->getId();
            $FFavourites->addToFavourites($favId, $productId);
            $products = $FFavourites->getFavouritesProducts($favId);
            $vFavourites = new VFavourites();
            $vFavourites->viewFavouritesProducts($favId, $products, $productId);
        }
       /* self::visualizeHome();*/

    }

    public function About(){
        $VHome = new VHomePage();
        $VHome->About();
    }
}

