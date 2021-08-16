<?php

namespace App\Controllers;


use App\Foundation\FCategory;
use App\Foundation\FProduct;
use App\Models\Category;
use App\Models\Product;
use Pecee\SimpleRouter\SimpleRouter;

class ProductController {

   public function index() {
       $FProduct = new FProduct();
       $products = $FProduct->getAll();

       return view('product', [
           'products' => $products,
       ]);
    
   }

   public function create() {
       $FProduct = new FProduct();
       $FCategory = new FCategory();

       $category = new Category();
       $category->setCategoryName("Primi");
       $category->setRestaurantId(1);

       $categoryId = $FCategory->create($category);

       $product = new Product();
       $product->setName('Vino');
       $product->setDescription('Buono');
       $product->setPrice(15);
       $product->setCategoryId($categoryId);
       $productId = $FProduct->create($product);
       //response()->redirect('/products');
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
//        $product = $FProduct->getAll();

        //$smarty = $GLOBALS['smarty'];
        //$smarty->assign('id', $id);
        //$smarty->assign('name', $product->getName());
        //$smarty->assign('description', $product->getDescription());
       // $smarty->assign('price', $product->getPrice());
       // return $smarty->display('src/templates/product-update.tpl');
       return view('product-update', [
           'id' => $product->getId(),
           'name' => $product->getName(),
           'description' => $product->getDescription(),
           'price' => $product->getPrice(),
           'categoryId' => $product->getCategoryId()
       ]);
   }
   public function visualizzaHome(){
       return view('base', [

       ]);
   }


   public function destroy($id) {
       $FProduct = new FProduct();
       $FProduct->delete($id);
   }

   public function visualizeProductDetails($productId) {

   }
   public function visualizeProducts($category) {

   }
   public function getProductImage($productId) {

   }
}