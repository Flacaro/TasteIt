<?php

namespace App\Views;

class VFavourites
{
    public function viewFavourites($favourites){
        return view('favourite/favourites', [
            'favourites' => $favourites
        ]);
    }
    public function viewEdit($id, $favourites){
        return view('order-accept', [
            'id' => $id,
            'products' =>$favourites

        ]);
    }

    public function viewAddition($favId, $productId, $product){
        return view('product/all_products', [
            'cartId' => $favId,
            'productId' => $productId,
            'product' => $product
        ]);
    }

}