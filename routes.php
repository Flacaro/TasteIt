<?php

use App\Controllers\CartController;
use App\Controllers\categoryController;
use App\Controllers\FavouritesController;
use App\Controllers\HomePageController;
use App\Controllers\OrderController;
use App\Controllers\ProductController;
use App\Controllers\RestaurantController;
use App\Controllers\UserController;
use Pecee\Http\Request;
use Pecee\SimpleRouter\Exceptions\NotFoundHttpException;
use Pecee\SimpleRouter\SimpleRouter;

SimpleRouter::redirect("/", "/home");

SimpleRouter::get("/home", [HomePageController::class, "visualizeHome"]);

SimpleRouter::get("/products", [ProductController::class, "index"])->name('products');
SimpleRouter::get("productsingle", [ProductController::class, "visualizzasingolo"]);
SimpleRouter::get("/aboutUs", [HomePageController::class, "About"]);


SimpleRouter::get("/products", [ProductController::class, "index"]);

SimpleRouter::get("/products/create", [ProductController::class, "create"]);
SimpleRouter::get("/users", [UserController::class, "index"]);
//Il primo router serve per visualizzare il form, il secondo per andare a prendere i dati dal db per fare l'update
SimpleRouter::get("/products/{id}/edit", [ProductController::class, "edit"]);
SimpleRouter::post("/products/{id}", [ProductController::class, "update"]);
SimpleRouter::get("/products/{id}", [ProductController::class, "destroy"]);
SimpleRouter::get("/users/create", [UserController::class, "create"]);
SimpleRouter::get("/users/{id}/edit", [UserController::class, "edit"]);
SimpleRouter::post("/users/{id}", [UserController::class, "update"]);
SimpleRouter::get("/users/{id}/cart", [UserController::class, "getId"]);

SimpleRouter::get("/categories/{categoryId}/products", [CategoryController::class, "getCategoryProducts"]);

SimpleRouter::get("/categories", [CategoryController::class, "index"]);
SimpleRouter::get("/orders", [OrderController::class, "visualizeOrders"]);
SimpleRouter::get("/orders/add", [RestaurantController::class, "addOrder"]);
SimpleRouter::get("/cart/create", [CartController::class, "create"]);
SimpleRouter::get("/cart/{id}/products", [CartController::class, "getProductsOfCart"]);
SimpleRouter::post("/orders/{id}", [RestaurantController::class, "acceptOrder"]);
SimpleRouter::get("/orders/{id}/accept", [RestaurantController::class, "edit"]);
SimpleRouter::get("/base", [ProductController::class, "visualizzaHome"]);
SimpleRouter::get("/base/categories", [CategoryController::class, "index"]);
SimpleRouter::get("/favourites/{id}",[FavouritesController::class, "getListOfFavourites"]);
SimpleRouter::get("/contact",[RestaurantController::class, "visualizeContactPage"]);

SimpleRouter::error(function(Request $request, \Exception $exception) {

    if($exception instanceof NotFoundHttpException && $exception->getCode() === 404) {
        echo "404 not found";
    }

});