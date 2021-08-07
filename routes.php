<?php

use Pecee\Http\Request;
use Pecee\SimpleRouter\Exceptions\NotFoundHttpException;
use Pecee\SimpleRouter\SimpleRouter;

SimpleRouter::redirect("/", "/products");

SimpleRouter::get("/products", [ProductController::class, "index"])->name('products');
SimpleRouter::get("/products/create", [ProductController::class, "create"]);
SimpleRouter::get("/users", [UserController::class, "index"])->name('users');



SimpleRouter::error(function(Request $request, \Exception $exception) {

    if($exception instanceof NotFoundHttpException && $exception->getCode() === 404) {
        echo "404 not found";
    }

});