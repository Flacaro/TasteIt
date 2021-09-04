<?php


namespace App\Controllers;
use App\Foundation\FCart;
use App\Foundation\FCategory;
use App\Foundation\FFavourites;
use App\Foundation\FProduct;
use App\Foundation\FCustomer;
use App\Models\Cart;
use App\Models\Favourites;
use App\Models\PaymentMethod;
use App\Models\Product;
use App\Models\Customer;
use App\Views\VUser;
use Pecee\SimpleRouter\SimpleRouter;

class CustomerController {

    public function index() {
        $fusers = new FCustomer();
        $users = $fusers->getAll();
        $vusers = new VUser();
        $vusers->getUsers($users);
    }

    public function create($customer) {
        $fusers = new FCustomer();
        $FCart = new FCart();
        $FFavourites= new FFavourites();

        /*$name = $_POST['name'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];
        $password = $_POST['password'];*/

        $cart = new Cart();
        $cart->setId(NULL);
        $cartId = $FCart->create($cart);

        $fav = new Favourites();
        $fav->setId(NULL);
        $favId = $FFavourites->create($fav);

        $customer->setCartId($cartId);
        $customer->setFavId($favId);
        $fusers->create($customer);
        //$vuser = new VUser();
        //$vuser->createUser();
    }

    public function update($id) {
        $FUser = new FCustomer();
        $user = new Customer();
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $cartId = $_POST['cartId'];
        $user->setName($name);
        $user->setSurname($surname);
        $user->setEmail($email);
        $user->setPassword($password);
        $user->setCartId($cartId);
        $FUser->update($id,$user);
    }

    public function edit($id) {
        $FUsers = new FCustomer();
        $user = $FUsers->getById($id);
        $vuser = new VUser();
        $vuser->editUser($user);
    }

        public function getId($id){
        $FUsers = new FCustomer();
        $user = $FUsers->getById($id);
        $vuser = new VUser();
        $vuser->getCartId($user);
     }


    public function addToCart($cartId, $productId) {
        $FCart = new FCart();
        $FProduct = new FProduct();
        $cart = new Cart();
        $cart = $FCart->getById($cartId);

        $FProduct->create($cart);
    }

    public function deleteFromCart($cartId, $productId) {
        $FProduct = new FProduct();
        $FProduct->getById($cartId);
        $FProduct->delete($productId);
    }

    public function addToFavourites($favouritesId, $productId) {

    }
    public function makeOrder($orderId) {

    }
    public function payWithCard(){

    }
    public function payWithCash(){

    }
    public function getAllReviews($productId){

    }
    public function writeReview($productId){

    }
    public function insertPersonalData($method,$cardNumber,$expDate,$holder,$cvv){
    }



}