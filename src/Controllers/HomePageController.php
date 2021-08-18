<?php

namespace App\Controllers;

use App\Foundation\FCategory;
use App\Foundation\FProduct;

class HomePageController
{
    //servirà a caricare tutti i dati nella home: categorie, best sellers ecc
 public function homeData($categories, $bestSellers){

 }
 public function visualizeHome(){
     $FCategory = new FCategory();
     $FProduct = new FProduct();
     $categories = $FCategory->getAll();
     $bestsellers = $FProduct->getBestSellers();
     //foreach
     //$image= $FCategory->getImageFromId($category->getImageId());
     return view('home', [
         'categories'=> $categories,
         'bestsellers'=> $bestsellers
     ]);
 }
}