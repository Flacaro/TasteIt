<?php

namespace App\Controllers;

use App\Foundation\FCart;
use App\Foundation\FFavourites;
use App\Foundation\FRestaurant;
use App\Foundation\FCustomer;
use App\Models\Cart;
use App\Models\Customer;
use App\Models\Favourites;
use App\Views\VAuth;
use Validator;

class AuthController
{
    public function visualizeLogin()
    {
        $vauth = new VAuth();
        $vauth->visualizeLogin("");
    }

    public function visualizeSignUp()
    {
        $vauth = new VAuth();
        $vauth->visualizeSignUp("");
    }

    public function login()
    {
        //print_r("ciao");
        $session = Session::getInstance();
        $email = $_POST["email"];
        $password = $_POST["password"];
        $fuser = new FCustomer();
        $frest = new FRestaurant();
        $message = "";
        if ($fuser->authentication($email, $password)) {
            $user = $fuser->getByEmail($email);
            print_r($user);
            $session->saveUserInSession($user);
            //redirect(url("home"));
        } else if ($frest->authentication($email, $password)) {
            $restaurant = $frest->getByEmail($email);
            $session->saveUserInSession($restaurant);
            //redirect(url("home"));
        } else {
            $message = "il login non è andato a buon fine";
        }
        $vauth = new VAuth();
        $vauth->visualizeLogin($message);
    }

    public function signUp()
    {
        //print_r($_POST);
        $vauth = new VAuth();
        $isValid = validate($_POST, [
            "name" => ["maxLength:3", "minLength:3"], "surname" => ["minLength:2"], "email" => ["minLength:1"], "password" => ["minLength:10"]
        ]);
        if (!$isValid) {
            $message = "Il form non è valido";
            return $vauth->visualizeSignUp($message);
        }
        else {
            $message = "Il form è valido";
            return $vauth->visualizeSignUp($message);
        }
        //print_r(Validator::minlength(5, "ciao"));
        /*$name = $_POST["name"];
        $surname = $_POST["surname"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $fuser = new FCustomer();
        $FCart = new FCart();
        $FFavourites = new FFavourites();
        //print_r($fuser->exists($email));
        $message = "";
        if (!$fuser->exists($email)) {
            //print_r("ciao");
            $customer = new Customer();
            $customer->setName($name);
            $customer->setSurname($surname);
            $customer->setEmail($email);
            $customer->setPassword($password);
            $cart = new Cart();
            $cart->setId(NULL);
            $cartId = $FCart->create($cart);

            $fav = new Favourites();
            $fav->setId(NULL);
            $favId = $FFavourites->create($fav);

            $customer->setCartId($cartId);
            $customer->setFavId($favId);
            $fuser->create($customer);
            redirect(url('/login'));
        } else {
            $message = "Esiste già un utente con questa e-mail";
        }
        $vauth->visualizeSignUp($message);*/
    }

    public function logout()
    {

    }
}