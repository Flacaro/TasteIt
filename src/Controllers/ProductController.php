<?php

namespace App\Controllers;


use App\Foundation\FProducts;
use App\Models\Product;
use Pecee\SimpleRouter\SimpleRouter;

class ProductController {

   public function index() {
        $FProducts = new FProducts();
       $products = $FProducts->getAll();
       $smarty = $GLOBALS['smarty'];
       $smarty->assign('products', $products);
       $smarty->assign('yourName', 'Bob');
       return $smarty->display('src/templates/product.tpl');
    
   }

   public function create() {
        $FProducts = new FProducts();
       $product = new Product();
       $product->setId(NULL);
       $product->setName('Pesce');
       $product->setDescription('Buono');
       $product->setPrice(20.5);
       $FProducts->create($product);
       //response()->redirect('/products');
   }

   public function update($id) {
        $FProducts = new FProducts();
        //superglobal, come parametro ci va passato il nome dell'input a cui fare riferimento
        $name = $_POST['name'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $product = new Product();
        $product->setName($name);
        $product->setPrice($price);
        $product->setDescription($description);

        $FProducts->update($id, $product);
       //$product = new Product();
       //$product->setName("Coca cola");
       //$product->setDescription("Buonissimo");
       //$product->setPrice(10);
       //$FProducts->update($id, $product);
   }

   public function edit($id) {
        $FProducts = new FProducts();
        $product = $FProducts->getById($id);
        $smarty = $GLOBALS['smarty'];
        $smarty->assign('id', $id);
        $smarty->assign('name', $product->getName());
        $smarty->assign('description', $product->getDescription());
        $smarty->assign('price', $product->getPrice());
        return $smarty->display('src/templates/product-update.tpl');
   }


   public function destroy($id) {
       $FProducts = new FProducts();
       $FProducts->delete($id);
   }
}