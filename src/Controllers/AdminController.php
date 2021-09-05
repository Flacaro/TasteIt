<?php

namespace App\Controllers;

use App\Views\VAdmin;

class AdminController{
    public function visualizeAdminPanel(){
        $vadmin= new VAdmin();
        $vadmin->visualizeAdminPanel();
    }

    public function categoriesAdmin(){
        $vadmin= new VAdmin();
        $vadmin->categoriesAdmin();
    }
    public function productsBestSellers(){
        $vadmin= new VAdmin();
        $vadmin->productsBestSellers();
    }
}