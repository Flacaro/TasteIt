<?php


namespace App\Controllers;
use App\Foundation\FCart;
use App\Foundation\FCategory;
use App\Foundation\FFavourites;
use App\Foundation\FProduct;
use App\Foundation\FUser;
use App\Models\Cart;
use App\Models\Favourites;
use App\Models\PaymentMethod;
use App\Models\Product;
use App\Models\User;
use Pecee\SimpleRouter\SimpleRouter;

class UserController {

    public function index() {
        $fusers = new FUser();
        $users = $fusers->getAll();
        return view('user/user', [
            'users' => $users
        ]);
    }
    public function create() {
        $fusers = new FUser();
        $FCart = new FCart();
        $FFavourites= new FFavourites();

        $user = new User();
        $user->setId(NULL);
        $user->setName('Sandro');
        $user->setSurname('Bianchi');
        $user->setEmail("sa@gmail.com");
        $user->setPassword('buffo');

        $cart = new Cart();
        $cart->setId(NULL);
        $cartId = $FCart->create($cart);

        $fav = new Favourites();
        $fav->setId(NULL);
        $favId = $FFavourites->create($fav);

        $user->setCartId($cartId);
        $user->setFavId($favId);
        $fusers->create($user);
    }

    public function update($id) {
        $FUser = new FUser();
        $user = new User();
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
        $FUsers = new FUser();
        $user = $FUsers->getById($id);
//        $smarty = $GLOBALS['smarty'];
//        $smarty->assign('id', $id);
//        $smarty->assign('name', $user->getName());
//        $smarty->assign('surname', $user->getSurname());
//        $smarty->assign('email', $user->getEmail());
//        $smarty->assign('password', $user->getPassword());
//        $smarty->assign('address', $user->getAddress());
//        return $smarty->display('src/templates/user-update.tpl');

        return view('user-update', [
            'id' => $id,
            'name' => $user->getName(),
            'surname' => $user->getSurname(),
            'email' => $user->getEmail(),
            'password' => $user->getPassword(),
            'cartId' => $user->getCartId()
        ]);
    }

        public function getId($id){
        $FUsers = new FUser();
        $user = $FUsers->getById($id);
        $smarty = $GLOBALS['smarty'];
        $smarty->assign('id', $id);
        $smarty->assign('id', $user->getId());
        return $smarty->display('src/templates/cart.tpl');
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