<?php

namespace App\Controllers;


use App\Foundation\FCart;
use App\Foundation\FCategory;
use App\Foundation\FProduct;
use App\Models\Category;
use App\Models\Product;

class ProductController {

   public function index() {
       $FProduct = new FProduct();
       $products = $FProduct->getAll();
       return view('product/all_products', [
           'products' => $products,
           'cartId' => 1 // dovresti prendere il cartId dell'utente loggato
       ]);
    
   }

   public function create() {
       $FProduct = new FProduct();
       $FCategory = new FCategory();

       $category = new Category();
       $category->setCategoryName("Pizza");
       $category->setRestaurantId(1);

       $categoryId = $FCategory->create($category);

       $product = new Product();
       $product->setName('Capricciosa');
       $product->setDescription('Succosa');
       $product->setPrice(8);
       $product->setCategoryId($categoryId);
       $FProduct->create($product);
       header("Location: /products");
   }

   public function update($id) {
        $FProduct = new FProduct();
        //superglobal, come parametro ci va passato il nome dell'input a cui fare riferimento
        $name = $_POST['name'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $categoryId = $_POST['categoryId'];
        $product = new Product();
        $product->setName($name);
        $product->setPrice($price);
        $product->setDescription($description);
        $product->setCategoryId($categoryId);
        $FProduct->update($id, $product);
   }

   public function edit($id) {
        $FProduct = new FProduct();
        $product = $FProduct->getById($id);
       return view('product/product-update', [
           'id' => $product->getId(),
           'name' => $product->getName(),
           'description' => $product->getDescription(),
           'price' => $product->getPrice(),
           'categoryId' => $product->getCategoryId()
       ]);
   }
   /*public function visualizzaHome(){
       $FProduct = new FProduct();
       $FCategory = new FCategory();
       $products = $FProduct->getAll();
       $categories = $FCategory->getAll();
       return view('product/products', [
            'products' => $products,
            'categories' => $categories
       ]);
   }*/

    public function getProduct($productId){
//passare un array di utenti e poi fare la ricerca di quello giusto tramite id?
        $FProduct = new FProduct();
        $ratings=$FProduct->getRatings($productId);
        $product = $FProduct->getById($productId);

        return view('product/product', [
            'id' => $productId,
            'reviews' => $ratings,
            'product' => $product,
            'cartId' => 1
        ]);
    }


    public function addToCart($cartId, $productId) {
        $FProduct = new FProduct();
        $FCart = new FCart();
        $i = 0;
        $products = $FCart->getProductsOfCart($cartId);
        $quantity = $FCart->getQuantityOfProduct($cartId, $productId);
        foreach ($products as $product) {
            if($productId == $product->getId()) {
                $FCart->incrementQuantity($cartId,$productId,$quantity);
                $i = 1;
               redirect(url('products'));
            }
        }
        if($i == 0) {
            $FProduct->addToCart($cartId, $productId);
            redirect(url('products'));
        }
    }
    public function addProductToCart($cartId, $productId) {
        $FProduct = new FProduct();
        $quantity = $FProduct->getQuantity($productId);
        $FProduct->addProductToCart($cartId, $productId, $quantity);
        redirect(url('products/{productId}', ['cartId' => $cartId, 'productId' => $productId]));
    }


   public function destroy($id) {
       $FProduct = new FProduct();
       $FProduct->delete($id);
   }


   public function getAverageRating($productId){
       $FProduct = new FProduct();
       $ratings=$FProduct->getRatings($productId);
       $average=0;
       if (count($ratings)!=0){
       foreach ($ratings as $stars) {
           $average = $average + $stars->getStars();
       }

       return $average/count($ratings);}
       else return 0;
   }
    public function updateQuantityOfProduct($productId){
        $FProduct = new FProduct();
        $quantity = $FProduct->getQuantity($productId);
        if( $_POST['option'] == 'plus') {
            $FProduct->incrementQuantityOfProduct($productId, $quantity);
            redirect(url('getById', ['id' => $productId]));
        }
        else {
            $FProduct->decrementQuantityOfProduct($productId, $quantity);
            redirect(url('getById', ['id' => $productId]));
        }
    }
}