<?php

namespace App\Controllers;


use App\Foundation\FFavourites;
use App\Foundation\FProduct;
use App\Models\Favourites;
use App\Views\VFavourites;

class FavouritesController {

    public function create(){
        $FFavourites = new FFavourites();
        $fav = new Favourites();
        $fav->setId(null);
        $FFavourites->create($fav);
        redirect(url('favourites'));
    }

    public function index() {
        $FFavourites = new FFavourites();
        $favourites = $FFavourites->getAll();
        $vfavourites= new VFavourites();
        $vfavourites->viewFavourites();
    }

    public function getListOfFavourites($id) {
        $FFavourites= new FFavourites();
        $favourites=$FFavourites->load($id);
        $vfavourites= new VFavourites();
        $vfavourites->viewFavourites();

    }
    public function edit($id) {
        $FFavourites = new FFavourites();
        $favourites = $FFavourites->getById($id)->getProductId();
        $vfavourites= new VFavourites();
        $vfavourites->viewEdit($id, $favourites);
    }

    public function addToFavourites($favId, $productId) {
        $FProduct = new FProduct();
        $productId = $FProduct->getById($productId);
        $product = $FProduct->addToFavourites($favId, $productId);
        $vfavourites= new VFavourites();
        $vfavourites->viewAddition($favId, $productId, $product);
    }
}