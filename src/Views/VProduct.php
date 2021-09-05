<?php

namespace App\Views;

class VProduct {

    //ci andrebbe passato come parametro anche il cartId dell'utente loggato
    public function getProducts($products) {
        return view('product/all_products', [
            'products' => $products,
            'cartId' => 1 // prendere il cartId dell'utente loggato
        ]);
    }

    public function editProduct($product) {
        return view('product/product-update', [
            'id' => $product->getId(),
            'name' => $product->getName(),
            'description' => $product->getDescription(),
            'price' => $product->getPrice(),
            'categoryId' => $product->getCategoryId()
        ]);
    }

    public function getDetailsOfProduct($product, $stars, $ratings) {
        return view('product/product', [
            'productId' => $product->getId(),
            //starts
            'avg'=> $stars,
            'reviews' => $ratings,
            'product' => $product,
            'cartId' => 1,
            'quantity' => 1
        ]);
    }
}