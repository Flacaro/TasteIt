<?php

namespace App\Views;

class VFavourites
{
    public function viewFavouritesProducts($products){
        return view('favourite/favourite', [
            'products' => $products
        ]);
    }
 /*   public function viewEdit($id, $favourites){
        return view('order-accept', [
            'id' => $id,
            'products' =>$favourites

        ]);
    }*/

    public function viewAddition($favId, $productId){
        return view('product/all_products', [
            'favId' => $favId,
            'product' => $productId
        ]);
    }

}