<?php

namespace App\Views;

class VFavourites
{
    public function viewFavouritesProducts($favId, $products, $cartId){
        return view('favourite/favourites', [
            'favId' => $favId,
            'products' => $products,
            'cartId' => $cartId
        ]);
    }

/*   public function viewProductsOfFav($favId, $productId){
        return view('product/all_products', [
            'favId' => $favId,
            'product' => $productId
        ]);
    }*/

}