<?php


namespace App\Views;


class Todos
{

    public function render($params = ["Ciao", "Fla"]) {
       
        foreach($params as $param) {
            echo "<p>$param</p>";
        }
    }
}