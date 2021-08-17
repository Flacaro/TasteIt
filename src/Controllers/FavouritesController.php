<?php

namespace App\Controllers;


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
        $smarty = $GLOBALS['smarty'];
        return view('order-accept', [
            'id' => $id,
            'products' =>$favourites->getProductId(),

        ]);
    }
}