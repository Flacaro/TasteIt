<?php

namespace App\Controllers\admin;

use App\Foundation\FCategory;
use App\Foundation\FProduct;
use App\Views\admin\VProduct;

class ProductController {
    public function productsBestSellers(){
        $fcategory=new FCategory();
        $fproduct= new FProduct();
        $categories= $fcategory->getAll();
        $data=[];
        foreach ($categories as $category){
            $id=$category->getId();
            $best=$fproduct->getBestSellerOfCategory($id);
            $worst=$fproduct->getWorstSellerOfCategory($id);
            //print_r($best);
            if($best==false){
                $worst=$best="non ci sono prodotti in questa categoria";}
            else{
                $best=$best->getName();
                $worst=$worst->getName();}
            $data[$category->getCategoryName()]=[$best,$worst];
        }
        //print_r($data);
        $vadmin= new VProduct();
        $vadmin->productsBestSellers($data);
    }

}