<?php

use App\Controllers\AdminController;
use App\Controllers\AuthController;
use App\Controllers\CartController;
use App\Controllers\categoryController;
use App\Controllers\FavouritesController;
use App\Controllers\HomePageController;
use App\Controllers\OrderController;
use App\Controllers\ProductController;
use App\Controllers\RestaurantController;
use App\Controllers\CustomerController;
use Pecee\Http\Request;
use Pecee\SimpleRouter\Exceptions\NotFoundHttpException;
use Pecee\SimpleRouter\SimpleRouter;

SimpleRouter::redirect("/", "/home");

SimpleRouter::get("/login", [AuthController::class, "visualizeLogin"]);
SimpleRouter::post("/login", [AuthController::class, "login"]);
SimpleRouter::get("/signup", [AuthController::class, "visualizeSignUp"]);
SimpleRouter::post("/signup", [AuthController::class, "signUp"]);


SimpleRouter::get("/home", [HomePageController::class, "visualizeHome"])->name('home');
SimpleRouter::get("/aboutUs", [HomePageController::class, "About"]);
SimpleRouter::get("/contact",[RestaurantController::class, "visualizeContactPage"]);


SimpleRouter::get("/products/{productId}", [ProductController::class, "getProduct"])->name('getProduct');
SimpleRouter::get("/products", [ProductController::class, "index"])->name('products');
//SimpleRouter::get("/products/create", [ProductController::class, "create"]);
//SimpleRouter::get("/products/{id}/edit", [ProductController::class, "edit"]);
SimpleRouter::post("/products/{id}", [ProductController::class, "createReview"]);
SimpleRouter::post("/products/{id}/update", [ProductController::class, "update"]);
SimpleRouter::put("/products/{productId}/addToFavourites/{favId}",[ProductController::class, "addToFavourites"]);
SimpleRouter::post('/products/{productId}/', [ProductController::class, 'addProductToCart']);


SimpleRouter::get("/users", [CustomerController::class, "index"]);
SimpleRouter::get("/users/create", [CustomerController::class, "create"]);
SimpleRouter::get("/users/{id}/edit", [CustomerController::class, "edit"]);
SimpleRouter::post("/users/{id}", [CustomerController::class, "update"]);
SimpleRouter::get("/users/{id}/cart", [CustomerController::class, "getId"]);


SimpleRouter::delete("/carts/{cartId}/products/{productId}/delete", [CartController::class, "destroy"]);
SimpleRouter::get("/carts/create", [CartController::class, "create"]);
SimpleRouter::get("/carts/{id}/products", [CartController::class, "getProductsOfCart"])->name('productsOfCarts');
SimpleRouter::put("/carts/{cartId}/products/{productId}/update",[CartController::class, "updateQuantity"]);
SimpleRouter::get("/carts/{cartId}/products/{productId}/addToCart",[CartController::class, "addToCart"])->name('addToCart');


SimpleRouter::get("/categories/{categoryId}/products", [CategoryController::class, "getCategoryProducts"]);
SimpleRouter::get("/categories", [CategoryController::class, "index"]);


SimpleRouter::get("/orders", [OrderController::class, "visualizeOrders"]);
SimpleRouter::get("/orders/add", [RestaurantController::class, "addOrder"]);
SimpleRouter::post("/orders/{id}", [RestaurantController::class, "acceptOrder"]);
SimpleRouter::get("/orders/{id}/accept", [RestaurantController::class, "edit"]);


SimpleRouter::get("/favourites/{id}",[FavouritesController::class, "getListOfFavourites"]);
SimpleRouter::get("/favourites/create",[FavouritesController::class, "create"]);
SimpleRouter::get("/favourites",[FavouritesController::class, "index"])->name('favourites');

SimpleRouter::get("/admin", [AdminController::class, "visualizeStatistics"]);
SimpleRouter::get("/admin/categories", [AdminController::class, "categoriesAdmin"]);
///admin/categories/add rimanda ai prodotti nella categoria?!
SimpleRouter::get("/admin/categories/add", [AdminController::class, "showAddCategory"]);
SimpleRouter::post("/admin/categories/add", [CategoryController::class, "create"]);
SimpleRouter::get("/admin/categories/{id}/product", [AdminController::class, "productsInCategory"]);
//per qualche motivo /admin/categories/{id}/product/create rimanda alla pagina per modificare il prodotto
SimpleRouter::get("/admin/categories/{categoryId}/products/create", [AdminController::class, "showCreateProduct"]);
SimpleRouter::post("/admin/categories/{categoryId}/products/create", [ProductController::class, "create"]);
SimpleRouter::get("/admin/categories/{categoryId}/products/{productId}/edit", [AdminController::class, "showEditProduct"]);
SimpleRouter::post("/admin/categories/{categoryId}/products/{productId}/edit", [ProductController::class, "update"]);
SimpleRouter::post("/admin/categories/{categoryId}/products/{productId}/delete", [ProductController::class, "destroy"]);
SimpleRouter::get("/admin/products", [AdminController::class, "productsBestSellers"]);
SimpleRouter::get("/admin/customers", [AdminController::class, "getCustomersWhoSpentMore"]);
SimpleRouter::get("/admin/orders", [AdminController::class, "acceptOrders"]);
SimpleRouter::get("/admin/sendCoupon", [AdminController::class, "sendCoupon"]);
SimpleRouter::get("/admin/coupons/create", [AdminController::class, "createCoupon"]);


SimpleRouter::error(function(Request $request, \Exception $exception) {

    if($exception instanceof NotFoundHttpException && $exception->getCode() === 404) {
        echo "404 not found";
    }

});