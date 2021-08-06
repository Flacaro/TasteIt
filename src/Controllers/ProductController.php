<?php

namespace App\Controllers;


use App\Foundation\FProducts;
use App\Models\Product;
use Pecee\SimpleRouter\SimpleRouter;

class ProductController {

   public function index() {
       $fproducts = new FProducts();
       $products = $fproducts->getAll();
       $smarty = $GLOBALS['smarty'];
       $smarty->assign('products', $products);
       return $smarty->display('src/templates/product.tpl');
    
   }

   public function create() {
       $fproducts = new FProducts();
       $product = new Product();
       $product->setId(NULL);
       $product->setName('Vino');
       $product->setDescription('Buono');
       $product->setPrice(20);
       $fproducts->create($product);
       response()->redirect('/products');
   }
}