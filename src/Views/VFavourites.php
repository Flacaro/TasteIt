<?php

namespace App\Views;

class VFavourites
{
    public function viewFavouritesProducts($products){
        return view('favourite/products', [
            'products' => $products
        ]);
    }
 /*   public function viewEdit($id, $favourites){
        return view('order-accept', [
            'id' => $id,
            'products' =>$favourites

        ]);
    }*/

    public function viewAddition($favId, $productId, $product){
        return view('product/all_products', [
            'cartId' => $favId,
            'productId' => $productId,
            'product' => $product
        ]);
    }

}