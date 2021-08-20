<?php

namespace App\Controllers;


use App\Foundation\FFavourites;
use App\Foundation\FProduct;

class FavouritesController {

    public function getListOfFavourites($id) {
        $FFavourites= new FFavourites();
        $favourites=$FFavourites->getListOfFavourites($id);
        return view ("favourites", [
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