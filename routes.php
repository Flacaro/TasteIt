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
SimpleRouter::get("/cart/checkout", [OrderController::class, "checkout"]);
SimpleRouter::post("/cart/checkout/coupon", [OrderController::class, "applyCoupon"]);
SimpleRouter::post("/cart/checkout/confirmation", [OrderController::class, "createOrder"]);


SimpleRouter::delete("/carts/{cartId}/products/{productId}/delete", [CartController::class, "destroy"]);
SimpleRouter::get("/carts/create", [CartController::class, "create"]);
SimpleRouter::get("/carts/{id}/products", [CartController::class, "getProductsOfCart"])->name('productsOfCarts');
SimpleRouter::put("/carts/{cartId}/products/{productId}/update",[CartController::class, "updateQuantity"]);
SimpleRouter::get("/carts/{cartId}/products/{productId}/addToCart",[CartController::class, "addToCart"])->name('addToCart');


SimpleRouter::get("/categories/{categoryId}/products", [CategoryController::class, "getCategoryProducts"]);
SimpleRouter::get("/categories", [CategoryController::class, "index"]);


/*SimpleRouter::get("/orders", [OrderController::class, "visualizeOrdersPending"]);
SimpleRouter::get("/orders/add", [RestaurantController::class, "addOrder"]);
SimpleRouter::post("/orders/{id}", [RestaurantController::class, "acceptOrder"]);
SimpleRouter::get("/orders/{id}/accept", [RestaurantController::class, "edit"]);*/


SimpleRouter::get("/favourites/{id}",[FavouritesController::class, "getListOfFavourites"]);
SimpleRouter::get("/favourites/create",[FavouritesController::class, "create"]);
SimpleRouter::get("/favourites",[FavouritesController::class, "index"])->name('favourites');


SimpleRouter::get("/admin", [StatisticController::class, "visualizeStatistics"]);
SimpleRouter::get("/admin/categories", [AdminCategoryController::class, "categoriesAdmin"]);
SimpleRouter::get("/admin/categories/add", [AdminCategoryController::class, "showAddCategory"]);
SimpleRouter::post("/admin/categories/add", [AdminCategoryController::class, "create"]);
SimpleRouter::get("/admin/categories/{id}/products", [AdminCategoryController::class, "productsInCategory"]);
SimpleRouter::get("/admin/categories/{categoryId}/products/create", [AdminCategoryController::class, "showCreateProduct"]);
SimpleRouter::post("/admin/categories/{categoryId}/products/create", [AdminCategoryController::class, "create"]);
SimpleRouter::get("/admin/categories/{categoryId}/products/{productId}/edit", [AdminCategoryController::class, "showEditProduct"]);
SimpleRouter::post("/admin/categories/{categoryId}/products/{productId}/edit", [AdminCategoryController::class, "update"]);
SimpleRouter::post("/admin/categories/{categoryId}/products/{productId}/delete", [AdminCategoryController::class, "destroy"]);
SimpleRouter::get("/admin/products", [AdminProductController::class, "productsBestSellers"]);

SimpleRouter::get("/admin/orders", [AdminOrderController::class, "visualizeOrdersPending"]);
SimpleRouter::get("/admin/orders/{id}", [AdminOrderController::class, "visualizeOrderDetails"]);
SimpleRouter::post("/admin/orders/{id}", [AdminOrderController::class, "acceptOrder"]);

SimpleRouter::get("/admin/coupons", [CouponController::class, "index"])->name('showAllCoupons');
SimpleRouter::get("/admin/coupons/create", [CouponController::class, "create"])->name('createCoupon');
SimpleRouter::post("/admin/coupons", [CouponController::class, "store"])->name('storeCoupon');


SimpleRouter::get("/admin/customers", [AdminCustomerController::class, "index"])->name('showAllCustomers');
SimpleRouter::get("/admin/customers/showBest", [AdminCustomerController::class, "showBest"]);
SimpleRouter::post("/admin/customers", [AdminCustomerController::class, "sendCoupon"]);

SimpleRouter::get("/prova", [OrderController::class, "prova"]);
SimpleRouter::get("/prov", [OrderController::class, "prov"]);

SimpleRouter::error(function(Request $request, \Exception $exception) {

    if($exception instanceof NotFoundHttpException && $exception->getCode() === 404) {
        echo "404 not found";
    }

});