<?php


namespace App\Controllers;
use App\Foundation\FCart;
use App\Foundation\FCategory;
use App\Foundation\FProduct;
use App\Foundation\FUser;
use App\Models\Cart;
use App\Models\Payment;
use App\Models\Product;
use App\Models\User;
use Pecee\SimpleRouter\SimpleRouter;

class UserController {

    public function index() {
        $fusers = new FUser();
        $users = $fusers->getAll();
        $smarty = $GLOBALS['smarty'];
        $smarty->assign('users', $users);
        return $smarty->display('src/templates/user.tpl');
    }
    public function create() {
        $fusers = new FUser();
        $user = new User();
        $user->setId(NULL);
        $user->setName('Bob');
        $user->setSurname('Bobby');
        $user->setEmail("ciccio@gmail.com");
        $user->setPassword('ciao');
        $fusers->create($user);
    }

    public function update($id) {
        $FUser = new FUser();
        $user = new User();
        $password = $_POST['password'];
        $user->setPassword($password);
        $FUser->update($id,$user);
    }
    public function edit($id) {
        $FUsers = new FUser();
        $user = $FUsers->getById($id);
        $smarty = $GLOBALS['smarty'];
        $smarty->assign('id', $id);
        $smarty->assign('password', $user->getPassword());
        return $smarty->display('src/templates/user-update.tpl');
    }

    public function getCartId($cartId){
        $FCart = new FCart();
        return $FCart->getById($cartId);

     }

    public function insertPersonalData($method,$cardNumber,$expDate,$holder,$cvv){
    }

    public function selectCategory($categoryId) {
        $FCategory = new FCategory();
        return $FCategory->getById($categoryId);

    }

    //da vedere
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

}