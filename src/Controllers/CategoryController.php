<?php

namespace App\Controllers;

use App\Foundation\FCategory;

class categoryController
{
    function getCategoryProducts($categoryId) {
     $FCategory = new FCategory();
     $category = $FCategory->getCategoryByIdWithProducts($categoryId);
     $smarty = $GLOBALS['smarty'];
     $smarty->assign("products", $category->products);
 }

}