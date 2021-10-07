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
        redirect(url('/favourites'));
    }

    public function getFavouritesProducts() {
        $session = Session::getInstance();
        $FFavourites = new FFavourites();
        if ($session->isUserLogged()) {
            $cus = $session->loadUser();
            $favId = $cus->getFav()->getId();
            $FFavourites->load($favId);
            $products = $FFavourites->getFavouritesProducts($favId);
            //print_r($products);
            $vFavourites = new VFavourites();
            $vFavourites->viewFavouritesProducts($favId, $products);
        }
    }

    public function deleteProductFromFav() {
        $session = Session::getInstance();
        $FFavourites = new FFavourites();
        $productId = $_POST['productId'];

        if ($session->isUserLogged()) {
            $cus = $session->loadUser();
            $favId = $cus->getFav()->getId();
            if ($_POST['option'] == 'delete') {
                $FFavourites->deleteFromFavourites($favId, $productId);
            }
            redirect(url('/favourites', ['favId' => $favId]));
        }
    }


    public function addToCartFromFav($cartId) {
        $session = Session::getInstance();
        $fProduct = new FProduct();
        $fCart = new FCart();
        $productId = $_POST['productId'];

        if ($session->isUserLogged()) {
            $cus = $session->loadUser();
            $favId = $cus->getFav()->getId();
            $cart = $fCart->load($cartId);
            $product = $fProduct->load($productId);
            $cart->addToCart($product, 1);
            $cus->setCart($cart);
            $fCart->update($cart);
            $session->saveUserInSession($cus);


       /* $session = Session::getInstance();
        $fProduct = new FProduct();
        $fCart = new FCart();
        if ($session->isUserLogged()) {
            $cus = $session->loadUser();
            $cartId = $cus->getCart()->getId();
            $favId = $cus->getFav()->getId();
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
            }*/

            redirect(url('/favourites', ['favId' => $favId]));
        }
    }

}