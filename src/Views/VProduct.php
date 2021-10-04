<?php

namespace App\Views;

class VProduct {

    //ci andrebbe passato come parametro anche il cartId dell'utente loggato
    public function getProducts($products, $cartId, $favId, $categories) {
        $data= [
            'products' => $products,
            'cartId' => $cartId,
            'favId' => $favId,
            'categories' =>$categories
        ];
        return setData('product/all_products', $data);
    }

/*    public function editProduct($product) {
        return view('product/product-update', [
            'id' => $product->getId(),
            'name' => $product->getName(),
            'description' => $product->getDescription(),
            'price' => $product->getPrice(),
            'categoryId' => $product->getCategoryId()
        ]);
    }*/

    public function getDetailsOfProduct($product, $stars, $ratings, $cartId) {
        $data=[
            'productId' => $product->getId(),
            //starts
            'avg'=> $stars,
            'reviews' => $ratings,
            'product' => $product,
            'cartId' => $cartId,
            'quantity' => 1
        ];
        return setData('product/product', $data);
    }
}
