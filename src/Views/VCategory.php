<?php

namespace App\Views;

class VCategory
{
    public function viewProducts($products, $category){
        $data=[
            'products' =>  $products,
            'category' => $category
        ];
        return setData('product/products',$data);
    }

  /*  public function viewCategories(){
        $data=[];
        return setData('category/category',$data);
    }*/

}