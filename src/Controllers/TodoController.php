<?php

namespace App\Controllers;


use App\Views\Todos;

class TodoController {

   public function index() {
       $todosView = new Todos();
       $smarty = $GLOBALS['smarty'];
       $smarty->assign('name', 'Flavy');
       return $smarty->display('src/templates/product.tpl');
   }
}