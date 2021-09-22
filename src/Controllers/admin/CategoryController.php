<?php

namespace App\Controllers\admin;

use App\Foundation\FCategory;
use App\Foundation\FProduct;
use App\Models\Category;
use App\Views\admin\VCategory;

class CategoryController {


    public function categoriesAdmin(){
        $fcategories=new FCategory();
        $categories= $fcategories->getAll();
        $vadmin= new VCategory();
        $vadmin->categoriesAdmin($categories);
    }


    function create(){
        $name = $_POST["name"];
        $fcategory = new FCategory();
        $category= new Category();
        $category->setName($name);
        $fcategory->store($category);
        redirect(url('/admin/categories'));
    }

    public function showAddCategory(){
        $vadmin= new VCategory();
        $vadmin->showAddCategory();
    }

}