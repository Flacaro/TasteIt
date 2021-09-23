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
     $b = $FProduct->getBestRated();//print_r($bestReviews);
     ;
     $bestRated = array();
     foreach ($b as $best) {
         array_push($bestRated, $FProduct->load($best[1]));
     }
     if ($session->isUserLogged()) {
         $cus = unserialize($_SESSION["customer"]);
         $favId = $cus->getFav()->getId();
         $FFavourites->load($favId);
         $cartId = $cus->getCart()->getId();
         $cart = $FCart->load($cartId);
         $products = $cart->getProducts();
         $VCart = new VCart();
         $VCart->getProducts($products,$cartId);
         $VFavourites = new VFavourites();
         $VFavourites->viewFavouritesProducts($favId, $products, $cartId);
     }
     $vHome = new VHomePage();
     $vHome->viewHomePage($categories, $bestSellers, $bestRated, $bestReviews, $products);
 }


    public function About(){
        return view('aboutUs', [

        ]);
    }
}

