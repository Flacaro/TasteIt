<?php

namespace App\Controllers;


use App\Foundation\FFavourites;
use App\Foundation\FProduct;
use App\Models\Favourites;
use App\Views\VFavourites;

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
        if ($session->isUserLogged()) {
            $cus = unserialize($_SESSION["customer"]);
            $favId = $cus->getFav()->getId();
            $fav = $FFavourites->load($favId);
            $products = $FFavourites->getFavouritesProducts($fav);
            $vFavourites = new VFavourites();
            $vFavourites->viewFavouritesProducts($products);
        }
    }

    public function edit($id) {
        $FFavourites = new FFavourites();
        $favourites = $FFavourites->getById($id)->getProductId();
        $vfavourites= new VFavourites();
        $vfavourites->viewEdit($id, $favourites);
    }
}