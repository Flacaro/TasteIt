<?php

namespace App\Controllers;


use App\Foundation\FProduct;
use App\Models\Product;
use Pecee\SimpleRouter\SimpleRouter;

class ProductController {

   public function index() {
       $FProduct = new FProduct();
       $products = $FProduct->getAll();
       $smarty = $GLOBALS['smarty'];
       $smarty->assign('products', $products);
       $smarty->assign('yourName', 'Bob');
       return $smarty->display('src/templates/product.tpl');
    
   }

   public function create() {
       $FProduct = new FProduct();
       $product = new Product();
       $product->setId(NULL);
       $product->setName('Vino');
       $product->setDescription('Buono');
       $product->setPrice(20);
       $FProduct->create($product);
       //response()->redirect('/products');
   }

   public function update($id) {
        $FProduct = new FProduct();
        //superglobal, come parametro ci va passato il nome dell'input a cui fare riferimento
        $name = $_POST['name'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $product = new Product();
        $product->setName($name);
        $product->setPrice($price);
        $product->setDescription($description);
        $FProduct->update($id, $product);
       //$product = new Product();
       //$product->setName("Coca cola");
       //$product->setDescription("Buonissimo");
       //$product->setPrice(10);
       //$FProducts->update($id, $product);
   }

   public function edit($id) {
        $FProduct = new FProduct();
        $product = $FProduct->getById($id);
        $smarty = $GLOBALS['smarty'];
        $smarty->assign('id', $id);
        $smarty->assign('name', $product->getName());
        $smarty->assign('description', $product->getDescription());
        $smarty->assign('price', $product->getPrice());
        return $smarty->display('src/templates/product-update.tpl');
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