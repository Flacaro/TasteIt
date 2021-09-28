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
         //sono prodotti
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

         $cartId = NULL;
         $favId = NULL;
         $productsC = [];

         if ($session->isUserLogged()) {
             $cus = unserialize($_SESSION["customer"]);
             $favId = $cus->getFav()->getId();
             $cartId = $cus->getCart()->getId();
             $cart = $FCart->load($cartId);
             $productsC = $cart->getProducts();
//             echo '<pre>'; print_r($productsC); echo '</pre>';
             $products = $FProduct->getAll();
             $vHome = new VHomePage();
             $vHome->viewHomePageIfLogged($favId, $cartId, $categories, $bestSellers, $bestRateds, $topThreeReviews, $products, $productsC);
         } else {
             $vHome = new VHomePage();
             $vHome->viewHomePageIfLogged($favId, $cartId, $categories, $bestSellers, $bestRateds, $topThreeReviews, $products, $productsC);
         }

     }

    public function addToCartFromHome($productId) {
        $session = Session::getInstance();
        $fProduct = new FProduct();
        $fCart = new FCart();
        if ($session->isUserLogged()) {
            $cus = unserialize($_SESSION["customer"]);
            $cartId = $cus->getCart()->getId();
            $cart = $fCart->load($cartId);
            $cartProducts = $cart->getProducts();

            if(!sizeof($cartProducts)) {
                $fProduct->addToCart($productId, $cartId, 1);
                //print_r("add se cartProducts è vuoto");
            }

            $cartProd = array_filter($cartProducts, function($cartProduct) use ($productId) {
                return $cartProduct[0]->getId() === $productId;
            });

            if(!sizeof($cartProd) and sizeof($cartProducts)) {
                $fProduct->addToCart($productId, $cartId, 1);
                //print_r("add se cartProd è vuoto");
            }
            else {
                $fCart->incrementQuantity($cart->getId(), $productId, array_pop($cartProd)[1]);
                //print_r("increment");
            }
        }

        redirect('/home');
    }


    public function addToFavouritesFromHome($productId) {
        $session = Session::getInstance();
        $FFavourites = new FFavourites();

        if ($session->isUserLogged()) {
            $cus = unserialize($_SESSION["customer"]);
            $favId = $cus->getFav()->getId();
            $favProducts = $FFavourites->getFavouritesProducts($favId);
            //printObject($favProducts);

            if(!sizeof($favProducts)) {
                $FFavourites->addToFavourites($favId, $productId);
            }

            $favProd = array_filter($favProducts, function($favProduct) use ($productId) {
                return $favProduct->getId() === $productId;
            });

            if(!sizeof($favProd) and sizeof($favProducts)) {
                $FFavourites->addToFavourites($favId, $productId);
            }
        }

        redirect('/home');
     }


    public function About(){
        $VHome = new VHomePage();
        $VHome->About();
    }
}

