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

    public function productsInCategory($id)
    {
        $fproduct = new FProduct();
        $fcategory = new FCategory();
        $category = $fcategory->getById($id);
        $products = $fproduct->getProductsByCategoryId($id);
        $vadmin = new VCategory();
        $vadmin->productsInCategory($products, $category);
    }

    public function showAddCategory(){
        $vadmin= new VCategory();
        $vadmin->showAddCategory();
    }
    public function showEditProduct($cid,$pid) {
        $vadmin= new VCategory();
        $fproduct=new Fproduct();
        $product=$fproduct->getById($pid);
        $vadmin->showEditProduct($cid,$pid,$product);
    }

    public function showCreateProduct($categoryId) {
        $vadmin= new VCategory();
        $vadmin->showCreateProduct($categoryId);
    }
    function create(){
        $name = $_POST["name"];
        $fcategory = new FCategory();
        $category= new Category();
        $category->setCategoryName($name);
        $fcategory->create($category);
        redirect(url('/admin/categories'));
    }


}