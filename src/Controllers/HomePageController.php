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
     $FFavourites = new FFavourites();
     $FCart = new FCart();
     $FCategory = new FCategory();
     $FProduct = new FProduct();
     $categories = $FCategory->getAll();
     $bestSellers = $FProduct->getBestSellers();
     $bestReviews = $FProduct->getBestReviews();
     $products = $FProduct->getAll();
     $b = $FProduct->getBestRated();
     //print_r($bestReviews);
     $bestRated = array();
     foreach ($b as $best) {
         array_push($bestRated, $FProduct->load($best[1]));
     }
     if ($session->isUserLogged()) {
         $cus = unserialize($_SESSION["customer"]);
         $favId = $cus->getFav()->getId();
         $cartId = $cus->getCart()->getId();
         $cart = $FCart->load($cartId);
         $productsC = $cart->getProducts();
         print_r($productsC);
         $products = $FProduct->getAll();
         $vHome = new VHomePage();
         $vHome->viewHomePageIfLogged($favId, $cartId, $categories, $bestSellers, $bestRated, $bestReviews, $products, $productsC);
     }
     $vHome = new VHomePage();
     $vHome->viewHomePageIfLogged($favId = NULL, $cartId = NULL, $categories, $bestSellers, $bestRated, $bestReviews, $products, $productsC = NULL);

 }


    public function About(){
        $VHome = new VHomePage();
        $VHome->About();
    }
}

