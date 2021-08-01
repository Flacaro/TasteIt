<?php

namespace App\Controllers;


class TodoController {

   public function index() {
       $smarty = $GLOBALS['smarty'];
       $smarty->assign('name', 'Flavy');
       return $smarty->display('src/templates/product.tpl');
    
   }
}