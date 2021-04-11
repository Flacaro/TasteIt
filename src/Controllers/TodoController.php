<?php

namespace App\Controllers;


use App\Views\Todos;

class TodoController {

   public function index() {
       $todosView = new Todos();
       return $todosView->render(["First", "Second"]);
   }

   public function store() {
       echo "todo salvato...";
       redirect("/todos/4");
   }

   public function get() {
       echo "Ciao";
   }
}