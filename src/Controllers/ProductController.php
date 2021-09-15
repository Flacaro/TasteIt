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

    public function create($categoryId) {
        $name = $_POST['name'];
        $description = $_POST['description'];
        $price = $_POST['price'];

        $FProduct = new FProduct();
        $product = new Product();
        $product->setName($name);
        $product->setDescription($description);
        $product->setPrice($price);
        $product->setCategoryId($categoryId);
        $FProduct->create($product);
        redirect(url('/admin/categories/'.$categoryId.'/products'));
    }

    public function update($catId, $id) {
        $FProduct = new FProduct();
        $oldproduct=$FProduct->getById($id);
        //superglobal, come parametro ci va passato il NOME dell'input a cui fare riferimento
        $name = $_POST['name'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $timesOrdered=$oldproduct->getTimesOrdered();
        $imagePath=$oldproduct->getImagePath();
        $product = new Product();
        $product->setName($name);
        $product->setPrice($price);
        $product->setDescription($description);
        $product->setCategoryId($catId);
        $product->setTimesOrdered($timesOrdered);
        $product->setImagePath($imagePath);
        $FProduct->update($id, $product);
        redirect(url("/admin/categories/".$catId.'/products'));
    }

    public function edit($id) {
        $FProduct = new FProduct();
        $product = $FProduct->getById($id);
       $vproduct = new VProduct();
       $vproduct->editProduct($product);
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


    public function destroy($catId,$id) {
        $FProduct = new FProduct();
        $FProduct->delete($id);
        redirect(url("/admin/categories/".$catId.'/products'));
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