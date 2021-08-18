<?php

namespace App\Controllers;

use App\Foundation\FCategory;

class HomePageController
{
    //servirà a caricare tutti i dati nella home: categorie, best sellers ecc
 public function homeData($categories, $bestSellers){

 }
 public function visualizeHome(){
     $FCategory = new FCategory();
     $categories = $FCategory->getAll();
     return view('home', [
         'categories'=> $categories
     ]);
 }
}