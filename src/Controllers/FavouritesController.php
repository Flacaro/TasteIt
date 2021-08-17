<?php

namespace App\Controllers;


use App\Foundation\FFavourites;

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
}