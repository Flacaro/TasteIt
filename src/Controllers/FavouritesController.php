<?php

namespace App\Controllers;


use App\Foundation\FFavourites;
use App\Foundation\FProduct;
use App\Models\Favourites;

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
        return view('favourite/favourites', [
            'favourites' => $favourites
        ]);
    }

    public function getListOfFavourites($id) {
        $FFavourites= new FFavourites();
        $favourites=$FFavourites->getListOfFavourites($id);
        return view ("favourite/favourites", [
            "favourites"=>$favourites
        ]);

    }
    public function edit($id) {
        $FFavourites = new FFavourites();
        $favourites = $FFavourites->getById($id);
        return view('order-accept', [
            'id' => $id,
            'products' =>$favourites->getProductId(),

        ]);
    }

    public function addToFavourites($favId, $productId) {
        $FProduct = new FProduct();
        $productId = $FProduct->getById($productId);
        $product = $FProduct->addToFavourites($favId, $productId);
        return view('product/all_products', [
            'cartId' => $favId,
            'productId' => $productId,
            'product' => $product
        ]);
    }
}