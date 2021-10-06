<?php

use App\Controllers\StatisticController;
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
use App\Controllers\admin\CouponController;
use App\Controllers\admin\CustomerController as AdminCustomerController;
use App\Controllers\admin\CategoryController as AdminCategoryController;
use App\Controllers\admin\ProductController as AdminProductController;
use App\Controllers\admin\OrderController as AdminOrderController;
require_once "Utility.php";

SimpleRouter::redirect("/", "/home");


SimpleRouter::get("/login", [AuthController::class, "visualizeLogin"]);
SimpleRouter::post("/login", [AuthController::class, "login"]);
SimpleRouter::get("/signup", [AuthController::class, "visualizeSignUp"]);
SimpleRouter::post("/signup", [AuthController::class, "signUp"]);
SimpleRouter::get("/logout", [AuthController::class, "logout"]);

SimpleRouter::get("/home", [HomePageController::class, "visualizeHome"])->name('home');
SimpleRouter::post("/home/products/{productId}/addToCart/{cartId}", [HomePageController::class, "addToCartFromHome"]);
SimpleRouter::post("/home/products/{productId}/addToFav/{favId}", [HomePageController::class, "addToFavouritesFromHome"]);
SimpleRouter::get("/aboutUs", [HomePageController::class, "About"]);
SimpleRouter::get("/contact",[RestaurantController::class, "visualizeContactPage"]);



SimpleRouter::get("/products/{productId}", [ProductController::class, "getProduct"])->name('getProduct');
SimpleRouter::get("/products", [ProductController::class, "getAll"])->name('products');
SimpleRouter::post("/products/{productId}/add/{cartId}", [ProductController::class, "addProductFromAll"]);
//SimpleRouter::get("/products/{id}/edit", [ProductController::class, "edit"]);
SimpleRouter::post("/products/{id}", [ProductController::class, "createReview"]);
SimpleRouter::post("/products/{id}/update", [ProductController::class, "update"]);
SimpleRouter::post("/products/{productId}/addToFavourites/{favId}",[ProductController::class, "addToFavourites"]);
SimpleRouter::post("/products/{productId}/addToCart/{cartId}", [ProductController::class, "addProductToCart"]);
SimpleRouter::post("/products/{productId}/addReview", [ProductController::class, "createReview"]);


//SimpleRouter::get("/users", [CustomerController::class, "getAll"]);
//SimpleRouter::get("/users/create", [CustomerController::class, "create"]);
SimpleRouter::get("/profile", [CustomerController::class, "getProfile"]);
//?
SimpleRouter::post("/users/{id}", [CustomerController::class, "update"]);

SimpleRouter::get("/users/{id}/cart", [CustomerController::class, "getId"]);
SimpleRouter::get("/cart/checkout", [OrderController::class, "checkout"]);
SimpleRouter::post("/cart/checkout/coupon", [OrderController::class, "applyCoupon"]);
SimpleRouter::post("/cart/checkout/confirmation", [OrderController::class, "createOrder"]);


SimpleRouter::delete("/carts/{cartId}/products/{productId}/delete", [CartController::class, "destroy"]);
SimpleRouter::get("/carts/create", [CartController::class, "create"]);
SimpleRouter::get("/carts/{cartId}/products", [CartController::class, "getProductsOfCart"])->name('productsOfCarts');
SimpleRouter::put("/carts/{cartId}/products/{productId}/update",[CartController::class, "updateQuantity"]);
/*SimpleRouter::get("/carts/{cartId}/products/{productId}/addToCart",[CartController::class, "addToCart"])->name('addToCart');*/


SimpleRouter::get("/categories/{categoryId}/products", [CategoryController::class, "getCategoryProducts"]);
SimpleRouter::get("/categories", [CategoryController::class, "index"]);

SimpleRouter::get("/orders", [OrderController::class, "visualizeOrdersPending"]);
SimpleRouter::get("/orders/add", [RestaurantController::class, "addOrder"]);
SimpleRouter::post("/orders/{id}", [RestaurantController::class, "acceptOrder"]);
SimpleRouter::get("/orders/{id}/accept", [RestaurantController::class, "edit"]);


SimpleRouter::get("/favourites/create",[FavouritesController::class, "create"]);
SimpleRouter::get("/favourites/{favId}",[FavouritesController::class, "getFavouritesProducts"])->name('favourites');
SimpleRouter::post("/favourites/{favId}/products/{productId}/addToCart/{cartId}",[FavouritesController::class, "addToCartFromFav"]);
SimpleRouter::delete("/favourites/{favId}/products/{productId}/delete",[FavouritesController::class, "deleteProductFromFav"]);

SimpleRouter::get("/admin", [StatisticController::class, "visualizeStatistics"]);
SimpleRouter::get("/admin/categories", [AdminCategoryController::class, "categoriesAdmin"]);
SimpleRouter::get("/admin/categories/add", [AdminCategoryController::class, "showAddCategory"]);
SimpleRouter::post("/admin/categories/add", [AdminCategoryController::class, "create"]);
SimpleRouter::get("/admin/categories/{id}/products", [AdminProductController::class, "productsInCategory"]);
SimpleRouter::get("/admin/categories/{categoryId}/products/create", [AdminProductController::class, "showCreateProduct"]);
SimpleRouter::post("/admin/categories/{categoryId}/products/create", [AdminProductController::class, "store"]);
SimpleRouter::get("/admin/categories/{categoryId}/products/{productId}/edit", [AdminProductController::class, "showEditProduct"]);
SimpleRouter::post("/admin/categories/{categoryId}/products/{productId}/edit", [AdminProductController::class, "update"]);
SimpleRouter::post("/admin/categories/{categoryId}/products/{productId}/delete", [AdminProductController::class, "destroy"]);
SimpleRouter::get("/admin/products", [AdminProductController::class, "productsBestSellers"]);

SimpleRouter::get("/admin/orders", [AdminOrderController::class, "visualizeOrdersPending"]);
SimpleRouter::get("/admin/orders/{id}", [AdminOrderController::class, "visualizeOrderDetails"]);
SimpleRouter::post("/admin/orders/{id}/accept", [AdminOrderController::class, "acceptOrder"]);
SimpleRouter::post("/admin/orders/{id}/refuse", [AdminOrderController::class, "refuseOrder"]);

SimpleRouter::get("/admin/coupons", [CouponController::class, "index"])->name('showAllCoupons');
SimpleRouter::get("/admin/coupons/create", [CouponController::class, "create"])->name('createCoupon');
SimpleRouter::post("/admin/coupons", [CouponController::class, "store"])->name('storeCoupon');


SimpleRouter::get("/admin/customers", [AdminCustomerController::class, "index"])->name('showAllCustomers');
SimpleRouter::get("/admin/customers/showBest", [AdminCustomerController::class, "showBest"]);
SimpleRouter::post("/admin/customers", [AdminCustomerController::class, "sendCoupon"]);

SimpleRouter::get("/prova", [OrderController::class, "prova"]);
SimpleRouter::get("/prov", [FavouritesController::class, "getFavouritesProducts"]);

SimpleRouter::error(function(Request $request, \Exception $exception) {

    if($exception instanceof NotFoundHttpException && $exception->getCode() === 404) {
        echo "404 not found";
    }

});