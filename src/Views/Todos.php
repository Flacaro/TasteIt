<?php


namespace App\Views;


class Todos
{

    public function render($params = null) {
        return "
            <h1>$params</h1>
            ";
    }
}