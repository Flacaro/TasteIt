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

    public function getAll() {
        $fcustomers = new FCustomer();
        $customers = $fcustomers->getAll();
        $vusers = new VUser();
        $vusers->getUsers($customers);
    }

    //questa dovrebbe stare con login?
   /* public function store($customer) {
        $fcustomers = new FCustomer();
        $FCart = new FCart();
        $FFavourites= new FFavourites();
        $cart = new Cart();
        $cart->setId(NULL);
        $cartId = $FCart->store($cart);

        $fav = new Favourites();
        $fav->setId(NULL);
        $favId = $FFavourites->store($fav);

        $customer->setCartId($cartId);
        $customer->setFavId($favId);
        $fcustomers->load($customer);
        $vuser = new VUser();
        $vuser->createUser($customer->get);
    }*/

    public function update($id) {
        $FCustomer = new FCustomer();
        $customer = new Customer();
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $customer->setName($name);
        $customer->setSurname($surname);
        $customer->setEmail($email);
        $customer->setPassword($password);
        $FCustomer->update($customer);
        /*$vuser = new VUser();
        $vuser->getProfile($customer);*/
    }

    public function edit($id) {
        $FUsers = new FCustomer();
        $user = $FUsers->load($id);
        $vuser = new VUser();
        $vuser->editUser($user);
    }

    public function getProfile() {
        $session=Session::getInstance();
        if ($session->isUserLogged()) {
            $customer = unserialize($_SESSION["customer"]);
            $vUser = new VUser();
            $vUser->getProfile($customer);
        }
    }

        public function getId($id){
        $FUsers = new FCustomer();
        $user = $FUsers->load($id);
        $vUser = new VUser();
        $vUser->getCartId($user);
     }



    public function insertPersonalData($method,$cardNumber,$expDate,$holder,$cvv){
    }



}