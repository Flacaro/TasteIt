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
        $user->setName('Sab');
        $user->setSurname('Ca');
        $user->setEmail("sab@gmail.com");
        $user->setName('Giulia');
        $user->setSurname('Boh');
        $user->setEmail("giulia@gmail.com");
        $user->setPassword('ciao');
        $user->setAddress('via bologna');
        $user->setCartId(3);
        $fusers->create($user);
    }

    public function update($id) {
        $FUser = new FUser();
        $user = new User();
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $address = $_POST['address'];
        $user->setName($name);
        $user->setSurname($surname);
        $user->setEmail($email);
        $user->setPassword($password);
        $user->setAddress($address);
        $FUser->update($id,$user);
    }
    public function edit($id) {
        $FUsers = new FUser();
        $user = $FUsers->getById($id);
        $smarty = $GLOBALS['smarty'];
        $smarty->assign('id', $id);
        $smarty->assign('name', $user->getName());
        $smarty->assign('surname', $user->getSurname());
        $smarty->assign('email', $user->getEmail());
        $smarty->assign('password', $user->getPassword());
        $smarty->assign('address', $user->getAddress());
        return $smarty->display('src/templates/user-update.tpl');
    }

    public function getCartId($id){
        $FUsers = new FUser();
        $user = $FUsers->getById($id);
        $smarty = $GLOBALS['smarty'];
        $smarty->assign('id', $id);
        $smarty->assign('cartId', $user->getCartId());
        return $smarty->display('src/templates/cart.tpl');
     }



   /* function getCategoryProducts($categoryId) {
        ....
        $category = $FCategory->getCategoryById($categoryId);
        $smarty->assign("products", $category->products);
        ...
    }*/

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