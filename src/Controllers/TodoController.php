<?php

namespace App\Controllers;


use App\Views\Todos;

class TodoController {

   public function index() {
//       echo "
//        <form method='post' action='/todos'>
//            <button>Salva</button>
//        </form>
//       ";
       $todosView = new Todos();
       $param = "Basta dormire";
       return $todosView->render($param);
   }

   public function store() {
       echo "todo salvato...";
       redirect("/todos/4");
   }

   public function get() {
       echo "Ciao";
   }
}