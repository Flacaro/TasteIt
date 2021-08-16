<?php

namespace App\Controllers;

use App\Foundation\FCart;
use App\Foundation\FProduct;

class FavouritesController {

    public function getListOfFavourites($id) {
        $FFavourites= new FFavourites();
        $favourites = new favourites();
        $FProduct = new FProduct();



    }
    public function edit($id) {
        $FFavourites = new FFavourites();
        $favourites = $FFavourites->getById($id);
        $smarty = $GLOBALS['smarty'];
        return view('order-accept', [
            'id' => $id,
            'products' =>$favourites->getProductId(),

        ]);
    }
}