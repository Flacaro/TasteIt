<?php

namespace App\Views;

class VFavourites
{
    public function viewFavouritesProducts($favId, $products){
        $data=[
            'favId' => $favId,
            'products' => $products
        ];
        return setData('favourite/favourites',$data);
    }

/*   public function viewProductsOfFav($favId, $productId){
        return view('product/all_products', [
            'favId' => $favId,
            'product' => $productId
        ]);
    }*/

}