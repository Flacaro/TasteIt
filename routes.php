<?php

use Pecee\Http\Request;
use Pecee\SimpleRouter\Exceptions\NotFoundHttpException;
use Pecee\SimpleRouter\SimpleRouter;

SimpleRouter::redirect("/", "/products");

SimpleRouter::get("/products", [ProductController::class, "index"])->name('products');
SimpleRouter::get("/products/create", [ProductController::class, "create"]);
SimpleRouter::get("/users", [UserController::class, "index"])->name('users');
//Il primo router serve per visualizzare il form, il secondo per andare a prendere i dati dal db per fare l'update
SimpleRouter::get("/products/{id}/edit", [ProductController::class, "edit"]);
SimpleRouter::post("/products/{id}", [ProductController::class, "update"]);
SimpleRouter::get("/products/{id}", [ProductController::class, "destroy"]);
SimpleRouter::get("/users/create", [UserController::class, "create"]);
SimpleRouter::get("/users/{id}/edit", [UserController::class, "edit"]);
SimpleRouter::post("/users/{id}", [UserController::class, "update"]);

SimpleRouter::error(function(Request $request, \Exception $exception) {

    if($exception instanceof NotFoundHttpException && $exception->getCode() === 404) {
        echo "404 not found";
    }

});