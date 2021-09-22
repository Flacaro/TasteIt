<?php

namespace App\Controllers;


use App\Foundation\FCart;
use App\Foundation\FCategory;
use App\Foundation\FProduct;
use App\Models\Category;
use App\Models\Product;
use App\Models\Review;
use App\Views\VProduct;

class ProductController
{

    public function index() {
        $FProduct = new FProduct();
        $products = $FProduct->getAll();
        $vproduct = new VProduct();
        $vproduct->getProducts($products);

    }

    public function getProduct($id) {

        $FProduct = new FProduct();
        $ratings = $FProduct->getRatings($id);
        $product = $FProduct->getById($id);
        $stars = $FProduct->getAvgRating($id);
        //????
        $star =$stars[0][0];
        //print_r($stars);
        $vproduct = new VProduct();
        $vproduct->getDetailsOfProduct($product, $star, $ratings);
    }


    public function addProductToCart($productId) {
        // il carrello si prende dalla sessione dall'utente loggato
//        print_r('productId: ' . $productId . ' quantity: ' . $_POST['quantity']);
        redirect(url('/products', ['productId' => $productId]));
    }


    public function createReview($productId){
        $FProduct= new FProduct;
        $stars = $_POST['stars'];
        $comment = $_POST['comment'];
        $review= new Review;
        $review->setStars($stars);
        $review->setComment($comment);
        $review->setProductId($productId);
        $review->setCustomer(1); //id dell'utente loggato ma con calma
        $FProduct->createReview($review);
        //redirect(url("getProduct", ['productId' => $productId]));
    }

}