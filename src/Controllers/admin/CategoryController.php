<?php

namespace App\Controllers\admin;

use App\Foundation\FCategory;
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
        $category->setImage(uploadImage());
        $fcategory->store($category);
        redirect(url('/admin/categories'));
    }

    public function showAddCategory(){
        $vadmin= new VCategory();
        $vadmin->showAddCategory();
    }

    public function destroy(){
        $id=$_POST["id"];
        $FCategory = new FCategory();
        $FCategory->delete($id);
        redirect(url("/admin/categories/"));
    }

}