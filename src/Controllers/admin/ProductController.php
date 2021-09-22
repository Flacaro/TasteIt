<?php

namespace App\Controllers\admin;

use App\Foundation\FCategory;
use App\Foundation\FProduct;
use App\Models\Product;
use App\Views\admin\VCategory;
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
            $data[$category->getName()]=[$best,$worst];
        }
        //print_r($data);
        $vadmin= new VProduct();
        $vadmin->productsBestSellers($data);
    }

    //questo va nel product controller dell'admin
    public function store($id) {
        $name = $_POST['name'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $FProduct = new FProduct();
        $product = new Product();
        $product->setName($name);
        $product->setDescription($description);
        $product->setPrice($price);
        //come prendiamo il categoryId?
        $FProduct->store($product, $id);
        redirect(url('/admin/categories/'.$id.'/products'));
    }

    public function update($catId, $id) {
        $FProduct = new FProduct();
        $oldproduct=$FProduct->load($id);
        //superglobal, come parametro ci va passato il NOME dell'input a cui fare riferimento
        $name = $_POST['name'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $timesOrdered=$oldproduct->getTimesOrdered();
        $imagePath=$oldproduct->getImagePath();
        $product = new Product();
        $product->setName($name);
        $product->setPrice($price);
        $product->setDescription($description);
        $product->setTimesOrdered($timesOrdered);
        $product->setImagePath($imagePath);
        $FProduct->update($id, $product);
        redirect(url("/admin/categories/".$catId.'/products'));
    }

    public function edit($id) {
        $FProduct = new FProduct();
        $product = $FProduct->getById($id);
        $vproduct = new \App\Views\VProduct();
        $vproduct->editProduct($product);
    }

    public function destroy($catId,$id) {
        $FProduct = new FProduct();
        $FProduct->delete($id);
        redirect(url("/admin/categories/".$catId.'/products'));
    }

    public function showEditProduct($cid,$pid) {
        $vadmin= new VCategory();
        $fproduct=new Fproduct();
        $product=$fproduct->load($pid);
        $vadmin->showEditProduct($cid,$pid,$product);
    }

    public function showCreateProduct($categoryId) {
        $vadmin= new VCategory();
        $vadmin->showCreateProduct($categoryId);
    }

    public function productsInCategory($id){
        $fcategory = new FCategory();
        $category = $fcategory->load($id);
        $products = $fcategory->loadCategoryProducts($id);
        $vadmin = new VCategory();
        $vadmin->productsInCategory($products, $category);
    }

}