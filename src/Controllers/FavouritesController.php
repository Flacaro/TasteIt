<?php

namespace App\Controllers;


use App\Foundation\FCart;
use App\Foundation\FCategory;
use App\Foundation\FFavourites;
use App\Foundation\FProduct;
use App\Models\Favourites;
use App\Views\VFavourites;
use App\Views\VProduct;

class FavouritesController {

    public function store(){
        $FFavourites = new FFavourites();
        $fav = new Favourites();
        $fav->setId(null);
        $FFavourites->store($fav);
        redirect(url('favourites'));
    }

    public function getFavouritesProducts() {
        $session = Session::getInstance();
        $FFavourites = new FFavourites();
        $FCart = new FCart();
        if ($session->isUserLogged()) {
            $cus = unserialize($_SESSION["customer"]);
            $favId = $cus->getFav()->getId();
            $FFavourites->load($favId);
            $cartId = $cus->getCart()->getId();
            $FCart->load($cartId);
            $products = $FFavourites->getFavouritesProducts($favId);
            //print_r($products);
            $vFavourites = new VFavourites();
            $vFavourites->viewFavouritesProducts($favId, $products, $cartId);
        }
    }

    public function deleteProductFromFav($productId) {
        $session = Session::getInstance();
        $FFavourites = new FFavourites();
        if ($session->isUserLogged()) {
            $cus = unserialize($_SESSION["customer"]);
            $favId = $cus->getFav()->getId();
            $FFavourites->load($favId);
            $FFavourites->deleteFromFavourites($favId, $productId);
            $products = $FFavourites->getFavouritesProducts($favId);
            $vFavourites = new VFavourites();
            $vFavourites->viewFavouritesProducts($favId, $products, $productId);
        }
    }

    public function addToCartFromFav($productId) {
        $session=Session::getInstance();
        $fProduct = new FProduct();
        $FFavourites = new FFavourites();
        //se ce le metto si rompe
        /*$FCategory = new FCategory();
        $categories = $FCategory->getAll();*/
        if ($session->isUserLogged()) {
            $cus = unserialize($_SESSION["customer"]);
            $cartId = $cus->getCart()->getId();
            $favId = $cus->getFav()->getId();
            $products = $FFavourites->getFavouritesProducts($favId);
            $quantity = $_POST['quantity'];
            if($quantity == 1) {
                $fProduct->addToCart($productId, $cartId, 1);
            }
            else {
                $fProduct->addToCart($productId, $cartId, $quantity);

            }
            $vFavourites = new VFavourites();
            $vFavourites->viewFavouritesProducts($favId, $products, $cartId);
        }
    }

}